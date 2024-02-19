<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function nursing() {
        return view('nursing');
    }

    public function community_nursing() {
        return view('community_nursing');
    }

    public function basic_midwifery() {
        return view('basic_midwifery');
    }

    public function community_midwifery() {
        return view('community_midwifery');
    }
}
