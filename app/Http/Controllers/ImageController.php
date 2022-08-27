<?php

namespace App\Http\Controllers;
use App\Image;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function create(Request $request, $image_information){
        $saveData = [
            "image_information" => $image_information,
            "image_url" => $request->$image_url,
            "project_id" => 1
        ];

        $image = Image::create($saveData);
            return back();
    }

    public function destroy($image_information){
        $image = Image::where ('image_information', $image_information)->delete();
        return back();
    }
}

// Stopped at 19:30
