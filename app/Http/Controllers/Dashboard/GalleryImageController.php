<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Exception;
use App\Library\Images;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    protected $images;

    public function __construct(Images $images)
    {
        $this->images = $images;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery_images = GalleryImage::orderBy('created_at','DESC')->paginate('5');
        return view('galleryImage.index', compact('gallery_images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galleryImage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image_url' => 'required',
            'is_slider' => 'required',
        ]);
        $slidercount = GalleryImage::where('is_slider', '1')->count();
        if ($slidercount < 10) {
            if ($slidercount == 9 && $request->is_slider == '1') {
                return redirect()->back()->with('info', 'You have already Added 9 slider please remove first');
            } else {
                try {
                    $input = $this->images->storeimage($request, 'image_url', 'GalleryImages');
                    $galleryImage = new  GalleryImage();
                    $galleryImage->create($input);
                    return redirect()->back()->with('success', 'created successfully');
                } catch (Exception $e) {
                    return redirect()->back()->with('error', 'something went wrong');
                }
            }
        } else {
            return redirect()->back()->with('info', 'You have already Added 9 slider please remove first');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gallery_image = GalleryImage::find($id);
        return view('galleryImage.show', compact('gallery_image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery_image = GalleryImage::find($id);
        return view('galleryImage.update', compact('gallery_image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'is_slider' => 'required',
        ]);
        $slidercount = GalleryImage::where('is_slider', '1')->count();
        if ($slidercount <  10) {
            try {
                $galleryImage = GalleryImage::find($id);
                if ($request->hasFile('image_url')) {
                    $this->images->deleteImages($galleryImage->image_url);
                }
                $input = $this->images->storeimage($request, 'image_url', 'GalleryImages');
                $galleryImage->update($input);
                return redirect()->back()->with('success', 'Updated successfully');
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'You have already Added 9 slider please remove first');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galleryImage = GalleryImage::find($id);
        try {
            $galleryImage->delete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    public function status($id)
    {
        $slidercount = GalleryImage::where('is_slider', '1')->count();
        if ($slidercount < 10) {
            try {
                if ($slidercount == 9) {
                    $galleryImage = GalleryImage::find($id);
                    if ($galleryImage->is_slider == '1') {
                        $galleryImage->is_slider = '0';
                        $galleryImage->save();
                        return redirect()->back()->with('success', 'Gallery Updated successfully');
                    } else {
                        return redirect()->back()->with('info', 'You have already added 9 sliders. Please remove first.');
                    }
                } else {
                    $galleryImage = GalleryImage::find($id);
                    $galleryImage->is_slider = $galleryImage->is_slider == '1' ? '0' : '1';
                    $galleryImage->save();
                    return redirect()->back()->with('success', 'Image Status Updated successfully');
                }
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Try after some time');
            }
        } else {

            return redirect()->back()->with('info', 'You have already added 9 sliders. Please remove first.');
        }
    }

    public function slider()
    {
        $sliders = GalleryImage::where('is_slider', '1')->get(['id', 'image_url', 'alt_tag']);
        return view('slider.index', compact('sliders'));
    }
    public function trash()
    {
        $gallery_images = GalleryImage::onlyTrashed()->paginate('5');
        return view('galleryImage.trash', compact('gallery_images'));
    }
    public function restore($id)
    {
        $galleryImage = GalleryImage::onlyTrashed()->find($id);
        if ($galleryImage) {
            $galleryImage->restore();
            return redirect()->back()->with('success', 'Restored Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
    public function delete($id)
    {
        $galleryImage = GalleryImage::withTrashed()->find($id);
        if ($galleryImage) {
            $galleryImage->forceDelete();
            $this->images->deleteImages($galleryImage->image_url);
            return redirect()->back()->with('success', 'Deleted Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
}
