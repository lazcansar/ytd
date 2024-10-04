<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    //
    public function homePage() {
        return view('pages.home');
    }
    public function contactPage() {
        return view('pages.contact');
    }
    public function aboutPage() {
        return view('pages.about');
    }
    public function crashPage() {
        return view('pages.crash');
    }
    public function reportPage() {
        return view('pages.report');
    }
    public function servicesPage() {
        return view('pages.services');
    }
    public function ticketPage() {
        return view('pages.ticket');
    }
}
