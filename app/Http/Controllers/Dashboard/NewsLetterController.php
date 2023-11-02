<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\NewsLettersEmail;
use Exception;
use App\Models\NewsLetter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsindexs = NewsLetter::orderBy('created_at','DESC')->paginate('20');
        // $newsindexs = NewsLetter::paginate('5');
        return view('newsLetter.index', compact('newsindexs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $newsletters = NewsLetter::get('email');
        return view('frontEnd.pages.index', compact('newsletters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'email',
        ], [
            'email.email' => 'Please enter a valid email address.',
        ]);
        try {
            $newsletter = new NewsLetter();
            $newsletter::create($request->all());
            return redirect()->back()->with('success', 'Our team will contact you soon');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $newsletters = NewsLetter::find($id);
        return view('newsLetter.view',compact('newsletters'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function exportNewsletterEmail()
    {
        return Excel::download(new NewsLettersEmail(), 'NewsLetter Emails.xlsx');
    }
}
