<?php

namespace App\Http\Controllers;

use App\Models\Image; // Model का नाम Image होना चाहिए
use Illuminate\Http\Request;

class ImageUploadControllerFromDatabase extends Controller
{
    public function upload(Request $req)
    {
        // फाइल को स्टोर करना
        $path = $req->file("file")->store("public");

        // पथ को एक्सप्लोड कर के सही पथ प्राप्त करना
        $pathArray = explode("/", $path);
        $imagePath = $pathArray[1];

        // नई Image ऑब्जेक्ट बनाना और पथ सेट करना
        $img = new Image();
        $img->path = $imagePath;

        // रिकॉर्ड को सेव करना
        if($img->save())
        {
            return redirect("list");
        }
        else{
            return "erro ! try after some time";
        }
     
    }
      function list()
      {
         $imges=Image::all();
         return view("uploadimage",["imageData"=>$imges]);
      }
}
