<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function preregister() {
        return view('static.preregister');
    }

    public function faq() {
        return view('static.faq');
    }

    public function terms() {
        return view('static.terms');
    }

    public function contact() {
        return view('static.contact');
    }
}
