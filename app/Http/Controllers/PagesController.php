<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function faqs()
    {
        return view('pages.faqs');
    }


    public function sanefGroup()
    {
        return view('pages.courses.sanef');
    }

    public function cfltGroup()
    {
        return view('pages.courses.cflt');
    }

    public function basicFinGroup()
    {
        return view('pages.courses.basicFinLit');
    }
    public function blog()
    {
        return view('pages.blog');
    }

    public function terms_of_use()
    {
        return view('pages.terms_of_use');
    }

    public function e_naira()
    {
        return view('pages.e_naira');
    }
    public function fraud_scam()
    {
        return view('pages.fraud_scam');
    }
    public function rights_responsiblities()
    {
        return view('pages.rights');
    }
    public function about_cflt()
    {
        return view('pages.about_cflt');
    }
    public function about_sanef()
    {
        return view('pages.about_sanef');
    }
    public function about_napgep()
    {
        return view('pages.about_napgep');
    }
    public function news_one()
    {
        return view('pages.news_one');
    }
}
