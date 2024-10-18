<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequestForReport;
use Illuminate\Support\Facades\Storage;
use App\Models\Report;
use Illuminate\Http\JsonResponse;

class ReportController extends Controller
{
    // Report Page Upload Form

    public function uploadReport(FormRequestForReport $request) {
        $filePaths = [];
        if (request()->hasFile('images')) {
            foreach (request()->file('images') as $file) {
                $path = $file->store('images/report', 'public');
                $filePaths[] = $path;
            }
        }

        $report = Report::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'contactType' => $request->input('contactType'),
            'message' => $request->input('message'),
            'confirmTerm' => $request->input('confirmTerm'),
            'images' => json_encode($filePaths), // Upload Image Json Format
            'ip' => request()->ip(),
        ]);

        // Upload Success
        #return redirect()->back()->with('success', 'Tutanak Sisteme Başarıyla Yüklendi');
        return response()->json(['success' => 'Dosyalar başarıyla yüklendi!'], 200);
    }

    public function reportView($id) {
        $reportDetail = Report::whereId($id)->first();
        $images = json_decode($reportDetail->images);
        return view('admin.report-view', compact('reportDetail', 'images'));
    }

    public function reportDelete($id): JsonResponse {
        $reportDelete = Report::find($id);
        if (!$reportDelete) {
            return response()->json(['success' => false ,'message' => 'Kayıt Bulunamadı.'], 404);
        }

        $images = json_decode($reportDelete->images);

        if (!empty($images)){
            foreach ($images as $image) {
                if (Storage::disk('public')->exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }
        }

        $reportDelete->delete();
        return response()->json(['success' => true ,'message' => 'Kayıt başarıyla silindi.']);
    }






}
