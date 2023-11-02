<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->paginate('5');
        return view('dashboard', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function status($id)
    {
        if (Auth::user()->role == '1') {
            try {
                $user = User::find($id);
                $user->is_active = $user->is_active == '1' ? '0' : '1';
                $user->save();
                return redirect()->back();
            } catch (Exception $e) {
                return redirect()->back()->with('msg', 'try After sometimex');
            }
        }
        return redirect()->back()->with('msg', 'You are not Authrized');
    }
}
