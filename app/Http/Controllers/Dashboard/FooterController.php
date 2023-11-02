<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footers = Footer::paginate('5');
        return view('footer.index', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('footer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request['created_by'] = Auth::user()->name;
            $footer = new footer();
            $footer::create($request->all());
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
        $footer = Footer::find($id);
        return view('footer.view', compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $footer = Footer::find($id);
        return view('footer.update', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request['created_by'] = Auth::user()->name;
            $footer = footer::find($id);
            $footer->update($request->all());
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
        $footer = Footer::find($id);
        try {
            $footer->delete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    public function trash()
    {
        $footers = Footer::onlyTrashed()->paginate('5');
        return view('footer.trash', compact('footers'));
    }
    public function restore($id)
    {
        $footer = Footer::onlyTrashed()->find($id);
        if ($footer) {
            $footer->restore();
            return redirect()->back()->with('success', 'Restored Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
    public function delete($id)
    {
        $footer = Footer::onlyTrashed()->find($id);
        if ($footer) {
            $footer->forceDelete();
            return redirect()->back()->with('success', 'Parmanently Deleted Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
}
