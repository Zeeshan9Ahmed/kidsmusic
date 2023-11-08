<?php

namespace App\Http\Controllers\Api\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function content(Request $request){
        $page = Page::where('slug', $request->contents)->first();
        if(empty($page)){
            return commonErrorMessage("Page Not Found");
        }else{
            return apiSuccessMessage("Page Content", $page);
        }
    }
}
