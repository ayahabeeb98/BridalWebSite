<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadImage($image, $dir = 'image')
    {
        $uploadedImage = $image;
        $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $direction = public_path($dir . '/');
        $uploadedImage->move($direction, $imageName);
        return $dir . '/' . $imageName;
    }
}
