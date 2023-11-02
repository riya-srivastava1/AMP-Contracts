<?php

namespace App\Http\Controllers\Dashboard;

use Exception;
use App\Models\ContactUs;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Exports\ContactUsExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = ContactUs::orderBy('created_at', 'Desc')->paginate('20');
        return view('contactUs.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact = ContactUs::get();
        return view('contactUs.create', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'contact_number' => 'required|max:20',
            'subject_line' => 'required',
        ]);
        try {
            $pages = new ContactUs();
            $pages::create($request->all());

            Mail::to('info@ampcontracts.in')->send(new ContactUsMail($request->all()));

            return redirect()->back()->with('success', 'Saved Successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = ContactUs::find($id);
        return view('contactUs.view', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = ContactUs::find($id);
        return view('contactUs.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $contact = ContactUs::find($id);
            $contact->update($request->all());
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
        $contact = ContactUs::find($id);
        try {
            $contact->delete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    public function status($id)
    {
        try {
            $contact = ContactUs::find($id);
            $contact->is_active = $contact->is_active == '1' ? '0' : '1';
            $contact->save();
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with('msg', 'try After sometime');
        }
    }
    public function trash()
    {
        $contacts = ContactUs::onlyTrashed()->paginate('5');
        return view('contactUs.trash', compact('contacts'));
    }
    public function restore($id)
    {
        $contact = ContactUs::onlyTrashed()->find($id);
        if ($contact) {
            $contact->restore();
            return redirect()->back()->with('success', 'Restored Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
    public function delete($id)
    {
        $contact = ContactUs::withTrashed()->find($id);
        if ($contact) {
            $contact->forceDelete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
    public function exportContactUs()
    {
        return Excel::download(new ContactUsExport(), 'Contact Us Sheet.xlsx');
    }
}
