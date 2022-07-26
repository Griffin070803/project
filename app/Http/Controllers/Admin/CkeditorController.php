<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CkeditorController extends Controller
{
    public function upload (Request $request)
    {
        $imageName = time().'-'.$request->upload->getClientOriginalName();
        $request->upload->move(public_path('assets/imgCKEditor'), $imageName);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('assets/imgCKEditor/'.$imageName);
        $msg = 'Image successfully uploaded';
        $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

        @header('Content-Type: text/html; charset=utf-8');
        echo $re;
    }
}
