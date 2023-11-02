<?php

namespace App\Http\Controllers\Dashboard;

use Exception;
use Illuminate\Http\Request;
use App\Models\FooterContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FooterContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footerContacts = FooterContactUs::paginate('5');
        return view('footerContactUs.index', compact('footerContacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $footerContact = FooterContactUs::get();
        return view('footerContactUs.create',compact('footerContact'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request['created_by'] = Auth::user()->name;
            $pages = new FooterContactUs();
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
        $footerContact = FooterContactUs::find($id);
        return view('footerContactUs.view',compact('footerContact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $footerContact = FooterContactUs::find($id);
        return view('footerContactUs.edit', compact('footerContact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $footerContact = FooterContactUs::find($id);
            $footerContact->update($request->all());
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
        $footerContact = FooterContactUs::find($id);
        try {
            $footerContact->delete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    public function status($id)
    {
        try {
            $footerContact = FooterContactUs::find($id);
            $footerContact->is_active = $footerContact->is_active == '1' ? '0' : '1';
            $footerContact->save();
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with('msg', 'try After sometime');
        }
    }
    public function trash()
    {
        $footerContact = FooterContactUs::onlyTrashed()->paginate('5');
        return view('footerContactUs.trash', compact('footerContact'));
    }
    public function restore($id)
    {
        $footerContact = FooterContactUs::onlyTrashed()->find($id);
        if ($footerContact) {
            $footerContact->restore();
            return redirect()->back()->with('success', 'Restored Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
    public function delete($id)
    {
        $footerContact = FooterContactUs::onlyTrashed()->find($id);
        if ($footerContact) {
            $footerContact->forceDelete();
            return redirect()->back()->with('success', 'Parmanently Deleted Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
}
