<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(Request $request)
    {
        // $path = $request->file("file")->store("public");
        $path = $request->file("file")->storeAs("public","khalid.pdf"); //khud se image ka name de sakte is

        // Ensure the path is returned for display
        $filenamearray = explode("/", $path);
        $filename = $filenamearray[1];
        return view("uploadimage.displayimage", ["path" => $filename]);
    }
}

?>
