<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crash;

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
    public function loginPage() {
        return view('pages.login');
    }
    public function registerPage() {
        return view('pages.register');
    }

    // Admin Pages
    public function adminPage() {
        $crashAll = Crash::all();
        return view('admin.home', compact('crashAll'));
    }



}
