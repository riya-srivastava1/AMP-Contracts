<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Exception;
use App\Library\Images;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
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
        $testimonials = Testimonial::orderBy('created_at', 'DESC')->paginate('5');
        return view('testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'company_name' => 'required',
            'designation' => 'required'
        ]);
        $testimonialcount = Testimonial::where('is_active', '1')->count();
        if ($testimonialcount < 5) {
            if ($testimonialcount == 4 && $request->is_active == '1') {
                return redirect()->back()->with('info', 'You have already Added 4 active testimonials please remove first');
            } else {
                try {
                    $input = $this->images->storeimage($request, 'image', 'images');
                    $testimonial = new Testimonial();
                    $testimonial::create($input);
                    return redirect()->back()->with('success', 'created successfully');
                } catch (Exception $e) {
                    return redirect()->back()->with('error', 'something went wrong');
                }
            }
        } else {
            return redirect()->back()->with('info', 'You have already Added 4 active testimonials please remove first');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        return view('testimonials.view', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::find($id);
        return view('testimonials.update', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'company_name' => 'required',
            'designation' => 'required'
        ]);
        $slidercount = Testimonial::where('is_active', '1')->count();
        if ($slidercount <  5) {
            try {
                $testimonial = Testimonial::find($id);

                if ($request->hasFile('image')) {
                    $this->images->deleteImages($testimonial->image);
                }
                $input = $this->images->storeimage($request, 'image', 'images');

                $testimonial->update($input);
                return redirect()->back()->with('success', 'updated successfully');
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'You have already Added 4 testimonials please remove first');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::find($id);
        try {
            $testimonial->delete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    public function trash()
    {
        $testimonials = Testimonial::onlyTrashed()->paginate('5');
        return view('testimonials.trash', compact('testimonials'));
    }
    public function restore($id)
    {
        $testimonial = Testimonial::onlyTrashed()->find($id);
        if ($testimonial) {
            $testimonial->restore();
            return redirect()->back()->with('success', 'Restored Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
    public function delete($id)
    {
        $testimonial = Testimonial::withTrashed()->find($id); // Use withTrashed() to include soft-deleted records

        if ($testimonial) {
            $this->images->deleteImages($testimonial->image);

            $testimonial->forceDelete(); // Perform a permanent delete

            return redirect()->back()->with('success', 'Deleted Successfully');
        }

        return redirect()->back()->with('error', 'No Data Found');
    }

    public function status($id)
    {
        $socialcount = Testimonial::where('is_active', '1')->count();
        if ($socialcount < 5) {
            try {
                if ($socialcount == 4) {
                    $social = Testimonial::find($id);
                    if ($social->is_active == '1') {
                        $social->is_active = '0';
                        $social->save();
                        return redirect()->back()->with('success', 'Gallery Updated successfully');
                    } else {
                        return redirect()->back()->with('info', 'You have already added 4 sliders. Please remove first.');
                    }
                } else {
                    $social = Testimonial::find($id);
                    $social->is_active = $social->is_active == '1' ? '0' : '1';
                    $social->save();
                    return redirect()->back()->with('success', 'Image Status Updated successfully');
                }
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Try after some time');
            }
        } else {

            return redirect()->back()->with('info', 'You have already added 4 sliders. Please remove first.');
        }
    }
}
