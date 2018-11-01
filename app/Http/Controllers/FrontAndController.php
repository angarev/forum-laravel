<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontAndController extends Controller
{
    public function page(Request $request)
    {

        $page_title = "New Home Page";

        if($request->path() == 'about'){
            $page_title = "About page";
        } elseif ($request->path() == 'blog') {
            $page_title = "Blog page";
        } elseif ($request->path() == 'contact') {
            $page_title = "Contact page";
        }

        return view('pages.static', [
            "page_title" => $page_title
        ]);
    }
}
