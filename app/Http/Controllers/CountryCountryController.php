<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CountryCountryModel;

class CountryCountryController extends Controller
{
    public function country()
    {
        return response()->json(CountryCountryModel::get(), 200);
    }
}
