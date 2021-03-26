<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileController extends Controller
{
    //
    public function index(){

        return view('index');
    }

    public function store(Request $request){
/**
       * @var UploadedFile

*/

        $file= $request->file('file');
        $file->store('upload');
        return view('index') ->with(['filemsg'=>'Your file has been uploaded successfully!!']);
//        return redirect('/myform')->with(['updatemsg' => 'Your information was updated successfully!']);

    }
}
