<?php

namespace App\Http\Controllers\Dashboard;

use Exception;
use App\Library\Images;
use App\Models\Projects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ProjectController extends Controller
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
        $projects = Projects::paginate(10);
        return view('projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'company_logo' => 'required',
        ]);
        try{
        $request['created_by'] = Auth::user()->name;
        $input = $this->images->storeimage($request, 'company_logo', 'companyLogo');
        $projects = new Projects;
        $projects::create($input);
        return redirect()->back()->with('success', 'Added Successfully');
        }catch(Exception $e){
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $projects = Projects::find($id);
        return view('projects.view',compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Projects::find($id);
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $this->validate($request, [
        //     'company_logo' => 'required',
        //     'company_name' => 'required',
        // ]);
            try {
                $project = Projects::find($id);
                if ($request->hasFile('company_logo')) {
                    $this->images->deleteImages($project->company_logo);
                }
                $input = $this->images->storeimage($request, 'company_logo', 'companyLogo');
                $project->update($input);
                return redirect()->back()->with('success', 'Updated successfully');
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Something went wrong');
            }
            return redirect()->back()->with('error', 'Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $projects = Projects::find($id);
        try {
            $projects->delete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    // public function trash()
    // {
    //     $testimonials = Testimonial::onlyTrashed()->paginate('5');
    //     return view('testimonials.trash', compact('testimonials'));
    // }
    // public function restore($id)
    // {
    //     $testimonial = Testimonial::onlyTrashed()->find($id);
    //     if ($testimonial) {
    //         $testimonial->restore();
    //         return redirect()->back()->with('success', 'Restored Successfully');
    //     }
    //     return redirect()->back()->with('error', 'No Data Found');
    // }
    public function delete($id)
    {
        $project = Projects::withTrashed()->find($id);
        if ($project) {
            $project->forceDelete();
            $this->images->deleteImages($project->image);
            return redirect()->back()->with('success', 'Deleted Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
    // public function status($id)
    // {
    //     $socialcount = Testimonial::where('is_active', '1')->count();
    //     if ($socialcount < 5) {
    //         try {
    //             if ($socialcount == 4) {
    //                 $social = Testimonial::find($id);
    //                 if ($social->is_active == '1') {
    //                     $social->is_active = '0';
    //                     $social->save();
    //                     return redirect()->back()->with('success', 'Gallery Updated successfully');
    //                 } else {
    //                     return redirect()->back()->with('info', 'You have already added 4 sliders. Please remove first.');
    //                 }
    //             } else {
    //                 $social = Testimonial::find($id);
    //                 $social->is_active = $social->is_active == '1' ? '0' : '1';
    //                 $social->save();
    //                 return redirect()->back()->with('success', 'Image Status Updated successfully');
    //             }
    //         } catch (Exception $e) {
    //             return redirect()->back()->with('error', 'Try after some time');
    //         }
    //     } else {

    //         return redirect()->back()->with('info', 'You have already added 4 sliders. Please remove first.');
    //     }

    // }
}
