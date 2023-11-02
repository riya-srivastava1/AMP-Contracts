<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BannerImage;
use App\Models\Page;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::paginate('5');
        return view('page.index', compact('pages'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $banner_image_ids = BannerImage::get('id');
        return view('page.create', compact('banner_image_ids'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title_name' => 'required',
            'is_menu' => 'required',
            'is_active' => 'required',
        ]);
        try {
            // $request['created_by'] = Auth::user()->name;
            $pages = new Page();
            $pages::create($request->all());
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

        $page = Page::find($id);
        return view('page.view', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = Page::find($id);
        $banner_image_ids = BannerImage::get('id');
        return view('page.update', compact('page', 'banner_image_ids'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title_name' => 'required',
            'is_menu' => 'required',
            'is_active' => 'required',
        ]);
        try {
            $page = Page::find($id);
            $page->update($request->all());
            return redirect()->back()->with('success', 'updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::find($id);
        try {
            $page->delete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    public function status($id)
    {
        try {
            $page = Page::find($id);
            $page->is_active = $page->is_active == '1' ? '0' : '1';
            $page->save();
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with('msg', 'try After sometime');
        }
    }
    public function menu($id)
    {
        try {
            $page = Page::find($id);
            $page->is_menu = $page->is_menu == '1' ? '0' : '1';
            $page->save();
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with('msg', 'try After sometime');
        }
    }
    public function trash()
    {
        $pages = Page::onlyTrashed()->paginate('5');
        return view('page.trash', compact('pages'));
    }
    public function restore($id)
    {
        $page = Page::onlyTrashed()->find($id);
        if ($page) {
            $page->restore();
            return redirect()->back()->with('success', 'Restored Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
    public function delete($id)
    {
        $page = Page::onlyTrashed()->find($id);
        if ($page) {
            $page->forceDelete();
            return redirect()->back()->with('success', 'Parmanently Deleted Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
    public function slug($slug)
    {

        $page = Page::where('slug_url', $slug)->first();

        if (!$page) {
            // abort(404);
            return "Page Not Found";
        }
        return view('page.addedNewPage', compact('page'));
    }
}
