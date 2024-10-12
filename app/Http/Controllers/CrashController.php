<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FormRequestForCrash;

class CrashController extends Controller
{
    // Crash Page Upload Form
    public function uploadFile(FormRequestForCrash $request) {
        // File upload
        $filePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('images/crash', 'public'); // Target Folder
                $filePaths[] = $path; // Target Folder for Upload File
            }
        }

        $crash = Crash::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'date' => request()->input('date'),
            'contactType' => $request->input('contactType'),
            'message' => $request->input('message'),
            'recontactType' => $request->input('recontactType'),
            'confirmTerm' => $request->input('confirmTerm'),
            'images' => json_encode($filePaths), // Upload Image Json Format
            'ip' => request()->ip(),
        ]);

        // Upload Success
        return redirect()->back()->with('success', 'Tutanak Sisteme Başarıyla Yüklendi');

    }
}
