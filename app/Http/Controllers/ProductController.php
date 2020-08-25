<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function frp() {
        return view ('content.frp');
    }
    public function ldpe() {
        return view ('content.ldpe');
    }
    public function manhole() {
        return view ('content.manhole');
    }
    public function msgi() {
        return view ('content.msgi');
    }
    public function pvc() {
        return view ('content.pvc');
    }
}
