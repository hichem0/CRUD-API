<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function CountryList()
    {
        return response()->download(public_path('user_image.jpg'), 'User Image');
    }

    Public function CountrySave(Request $request)
    {
        $fileName = "User_image.jpg";
        $path = $request->file('photo')->move(pub)
        return response()->
    }
}
