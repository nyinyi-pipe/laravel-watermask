<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
// use Intervention\Image\ImageManagerStatic as Image;


use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class WaterMaskController extends Controller
{
    public function applyWaterMask()
    {
        
        $imagePath = storage_path('images/original.png');
        // $imagePath = public_path('images/original.jpg'); // Path to the original image        
        $maskPath = public_path('images/watermark.png'); // Path to the water mask image
     
        // dd($imagePath);

        $image = Image::make($imagePath);
        $watermark = Image::make($maskPath)->opacity(50);

        $image->insert($watermark, 'center');
        $image->save();

        return response()->download($imagePath);
    }
}
