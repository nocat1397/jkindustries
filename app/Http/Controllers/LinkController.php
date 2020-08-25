<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function about() {
        return view ('links.about');
    }
    public function contact() {
        return view ('links.contact');
    }
    public function project() {
        return view ('links.project');
    }
}
