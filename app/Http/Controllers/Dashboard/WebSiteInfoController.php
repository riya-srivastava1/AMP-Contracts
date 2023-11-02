<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\WebsitesInfo;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Storage;

class WebSiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webinfos = WebsitesInfo::paginate('5');
        return view('websiteinfo.index', compact('webinfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('websiteinfo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'meta_description' => 'required'
        ]);
        try {
            $input = $this->storeimage($request);
            $webinfos = new WebsitesInfo();
            $webinfos::create($input);
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
        $webinfo = WebsitesInfo::find($id);
        return view('websiteinfo.view', compact('webinfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $webinfo = WebsitesInfo::find($id);
        return view('websiteinfo.update', compact('webinfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'meta_description' => 'required'
        ]);
        try {
            // Get the current record from the database
            $webinfos = WebsitesInfo::find($id);
            // Delete the old images from storage if they exist
            if ($request->hasFile('logo') || $request->hasFile('fav_icon')) {
                Storage::disk('public')->delete($webinfos->logo);
            }
            if ($request->hasFile('fav_icon') && $webinfos->fav_icon) {
                Storage::disk('public')->delete($webinfos->fav_icon);
            }
            // Store the new images and update other input fields
            $input = $this->storeimage($request);
            $webinfos->update($input);

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
        $webinfos = WebsitesInfo::find($id);
        try {
            $webinfos->delete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    private function storeimage($request)
    {
        $input = $request->except(['logo', 'fav_icon']);
        if ($request->hasFile('logo')) {
            $logoName = $request->file('logo')->store('logos', 'public');
            $input['logo'] = $logoName;
        }
        if ($request->hasFile('fav_icon')) {
            $favName = $request->file('fav_icon')->store('favIcons', 'public');
            $input['fav_icon'] = $favName;
        }
        $input['created_by'] = Auth::user()->name;
        return $input;
    }
    private function deleteImages($webinfo)
    {
        if ($webinfo->logo) {
            Storage::disk('public')->delete($webinfo->logo);
        }
        if ($webinfo->fav_icon) {
            Storage::disk('public')->delete($webinfo->fav_icon);
        }
        return true;
    }
    public function trash()
    {
        $webinfos = WebsitesInfo::onlyTrashed()->paginate('5');
        return view('websiteinfo.trash', compact('webinfos'));
    }
    public function restore($id)
    {
        $webinfo = WebsitesInfo::onlyTrashed()->find($id);
        if ($webinfo) {
            $webinfo->restore();
            return redirect()->back()->with('success', 'Restored Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
    public function delete($id)
    {
        $webinfo = WebsitesInfo::onlyTrashed()->find($id);
        if ($webinfo) {
            $webinfo->forceDelete();
            $this->deleteImages($webinfo);
            return redirect()->back()->with('success', 'Parmanently Deleted Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
}
