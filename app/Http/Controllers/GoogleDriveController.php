<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GoogleDriveController extends Controller
{
    public function index()
    {
        $files = Storage::disk("google")->files();
        $listFiles = [];
        foreach($files as $file)
        {
            $metaData = Storage::disk("google")->getMetadata($file);
            array_push($listFiles,$metaData['name']);
        }

        return view('google.index',[
            'files' => $listFiles
        ]);
    }

    public function upload(Request $request)
    {
        // dd($request->file('upload-file')->store("","google"));
        // dd($request->file('upload-file'));

        Storage::disk("google")->putFileAs("",$request->file('upload-file'),'asd.jpg');
        // dd(->store('1Sp2Ic0eHdXy9z9J7lHGrzj1OMKuzU0_I','google'));
    }

    public function download($index,$name)
    {
        $files = Storage::disk("google")->files();

        $response = Storage::disk("google")->download($files[$index],$name);

        $response->send();
    }
}
