<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Exception;
use App\Library\Images;
use App\Models\BannerImage;
use Illuminate\Http\Request;


class BannerImageController extends Controller
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
        $bannerImages = BannerImage::paginate('5');
        return view('bannerImage.index', compact('bannerImages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bannerImage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'banner_image' => 'required',
            'is_active' => 'required',
        ]);
        try {
            $input = $this->images->storeimage($request, 'banner_image', 'BannerImage');

            $bannerImages = new BannerImage();
            $bannerImages::create($input);
            return redirect()->back()->with('success', 'created successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bannerImage = BannerImage::find($id);
        return view('bannerImage.view', compact('bannerImage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bannerImage = BannerImage::find($id);
        return view('bannerImage.update', compact('bannerImage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'banner_image' => 'required',
            'is_active' => 'required',
        ]);
        try {
            $input = $this->images->storeimage($request, 'banner_image', 'BannerImage');
            $bannerImage = BannerImage::find($id);
            $bannerImage->update($input);
            $this->images->deleteImages($bannerImage->banner_image);
            return redirect()->back()->with('success', 'Updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bannerImage = BannerImage::find($id);
        try {
            $bannerImage->delete();
            // $this->images->deleteImages($bannerImage->banner_image);
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    public function status($id)
    {
        try {
            $bannerImages = BannerImage::find($id);
            $bannerImages->is_active = $bannerImages->is_active == '1' ? '0' : '1';
            $bannerImages->save();
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with('msg', 'try After sometimex');
        }
    }
    public function trash()
    {
        $bannerImages = BannerImage::onlyTrashed()->paginate('5');
        return view('bannerImage.trash', compact('bannerImages'));
    }
    public function restore($id)
    {
        $bannerImage = BannerImage::onlyTrashed()->find($id);
        if ($bannerImage) {
            $bannerImage->restore();
            return redirect()->back()->with('success', 'Restored Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
    public function delete($id)
    {
        $bannerImage = BannerImage::onlyTrashed()->find($id);
        if ($bannerImage) {
            $bannerImage->forceDelete();
            $this->images->deleteImages($bannerImage->banner_image);
            return redirect()->back()->with('success', 'Parmanently Deleted Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
}
