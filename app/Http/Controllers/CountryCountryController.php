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
        return response()->json(CountryCountryModel::create($request->all()), 201);
    }

    public function countryUpdate(Request $request, $id)
    {
        $country = CountryCountryModel::findOrFail($id);
        $country->update($request->all());

        return response()->json($country, 200);
    }

    public function countryDelete(Request $request, $id){

        $country= CountryCountryModel::findOrFail($id);
        $country->delete();
        return response()->json(null, 204);
    }
}
