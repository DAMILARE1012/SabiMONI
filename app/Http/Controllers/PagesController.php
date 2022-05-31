<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function faqs(){
        return view('pages.faqs');
    }


    public function sanefGroup(){
        return view('pages.courses.sanef');
    }

    public function cfltGroup(){
        return view('pages.courses.cflt');
    }

    public function basicFinGroup(){
        return view('pages.courses.basicFinLit');
    }
    public function blog(){
        return view('pages.blog');
    }

    public function terms_of_use(){
        return view('pages.terms_of_use');
    }
}
