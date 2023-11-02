<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SubMenu;
use App\Models\Page;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;

class SubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $submenus = SubMenu::with('getMenuName')->paginate('5');
        return view('subMenu.index', compact('submenus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Page::where('is_menu', '1')->get(['id', 'title_name']);
        return view('subMenu.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'is_active' => 'required',
        ]);

        try {
            $request['created_by'] = Auth::user()->name;
            $submenu = new SubMenu();
            $submenu::create($request->all());
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
        $submenu = SubMenu::find($id);
        $menus = Page::where('id', $submenu->page_id)->first('title_name');
        return view('subMenu.view', compact('menus', 'submenu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menus = Page::where('is_menu', '1')->get(['id', 'title_name']);
        $submenu = SubMenu::find($id);
        return view('subMenu.update', compact('menus', 'submenu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'is_active' => 'required',
        ]);

        try {
            $submenu = SubMenu::find($id);
            $submenu->update($request->all());
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
        $submenu = SubMenu::find($id);
        try {
            $submenu->delete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    public function status($id)
    {
        try {
            $submenu = SubMenu::find($id);
            $submenu->is_active =  $submenu->is_active == '1' ? '0' : '1';
            $submenu->save();
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with('msg', 'try After sometime');
        }
    }
    public function trash()
    {
        $submenus = SubMenu::onlyTrashed()->paginate('5');
        return view('submenu.trash', compact('submenus'));
    }
    public function restore($id)
    {
        $submenu = SubMenu::onlyTrashed()->find($id);
        if ($submenu) {
            $submenu->restore();
            return redirect()->back()->with('success', 'Restored Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
    public function delete($id)
    {
        $submenu = SubMenu::onlyTrashed()->find($id);
        if ($submenu) {
            $submenu->forceDelete();
            return redirect()->back()->with('success', 'Parmanently Deleted Successfully');
        }
        return redirect()->back()->with('error', 'No Data Found');
    }
}
