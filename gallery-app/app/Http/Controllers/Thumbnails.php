<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Imagick;

class Thumbnails extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048' // Validation rules for upload
        ]);

        $image = $request->file('image');
        $fileName = uniqid() . '.' . $image->getClientOriginalExtension(); // Generate unique filename
        $path = $image->storeAs('uploads', $fileName); // Store the original image

        // Create thumbnail using Intervention Image
        $thumbnailPath = 'thumbnails/' . $fileName;
        $thumbnail = Image::make($image->getRealPath())->fit(200, 200, function ($constraint) {
            $constraint->aspectRatio();
        });
        $thumbnail->save(storage_path('app/' . $thumbnailPath));

        // Optionally, you can also use pure Imagick as an alternative
        // Make sure you have Imagick installed and enabled on your server

        // $imagick = new Imagick(storage_path('app/uploads/' . $fileName));
        // $imagick->resizeImage(200, 200, Imagick::FILTER_TRIANGLE, 1);
        // $imagick->writeImage(storage_path('app/thumbnails/' . $fileName));

        // Update your Image model to store original and thumbnail paths (if applicable)

        // Return a response or redirect back to the gallery index
        return redirect()->route('gallery.index')->with('success', 'Image uploaded successfully.');
    }
}
