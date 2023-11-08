<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($name)
    {
        $page = Page::where('slug',$name)->first();
        return view('admin.pages.index', compact('page'));
    }

    public function update(Request $request)
    {
        $page = Page::findOrFail($request->id);
        
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();
        return redirect()->back();
    }
}
