<?php

namespace App\Http\Controllers\Dashboard;

use Exception;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socials = SocialMedia::orderBy('created_at', 'DESC')->paginate('5');
        return view('socialMedia.index', compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $social_medias = SocialMedia::orderBy('created_at', 'DESC')->get('id');
        return view('socialMedia.create', compact('social_medias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'linkdin_url' => 'required',
        ]);
        try {
            $request['created_by'] = Auth::user()->name;
            $social = new SocialMedia();
            $social::create($request->all());
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
        $social = SocialMedia::find($id);
        return view('socialMedia.view', compact('social'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $social = SocialMedia::find($id);
        return view('socialMedia.edit', compact('social'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request['created_by'] = Auth::user()->name;
            $social = SocialMedia::find($id);
            $social->update($request->all());
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
        $social = SocialMedia::find($id);
        try {
            $social->delete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    public function status($id)
    {
        try {
            $social = SocialMedia::find($id);
            $social->is_active = $social->is_active == '1' ? '0' : '1';
            $social->save();
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with('msg', 'try After sometime');
        }
    }
    public function trash()
    {
        $socials = SocialMedia::onlyTrashed()->paginate('5');
        return view('socialMedia.trash', compact('socials'));
    }
    public function restore($id)
    {
        $social = SocialMedia::onlyTrashed()->find($id);
        if ($social) {
            $social->restore();
            return redirect()->back()->with('success', 'Restored Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
    public function delete($id)
    {
        $social = SocialMedia::onlyTrashed()->find($id);
        if ($social) {
            $social->forceDelete();
            return redirect()->back()->with('success', 'Parmanently Deleted Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
}
