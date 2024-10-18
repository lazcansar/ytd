<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crash;
use App\Models\Report;
use Illuminate\Http\JsonResponse;

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
    public function termsPage() {
        $jsonPath = resource_path('json/terms.json');
        $terms = json_decode(file_get_contents($jsonPath), true);
        return view('pages.terms', ['terms' => $terms]);
    }
    public function privacyPage() {
        $jsonPath = resource_path('json/privacy_policy.json');
        $privacy = json_decode(file_get_contents($jsonPath), true);
        return view('pages.privacy', ['privacy' => $privacy]);
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
        $reportAll = Report::all();
        return view('admin.home', compact('crashAll', 'reportAll'));
    }



}
