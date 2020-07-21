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

    public function countryById($id)
    {
        return response()->json(CountryCountryModel::find($id), 200);
    }

    public function countrySave(Request $request)
    {
        $country = CountryCountryModel::create($request->all());
        return response()->json($country, 201);
    }
}
