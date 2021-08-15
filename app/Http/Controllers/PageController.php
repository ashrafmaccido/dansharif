<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function basic_nursing() {
        return view('basic_nursing');
    }

    public function basic_midwifery() {
        return view('basic_midwifery');
    }
}
