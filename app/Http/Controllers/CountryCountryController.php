<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CountryCountryModel;
use Validator;
class CountryCountryController extends Controller
{
    public function country()
    {
        return response()->json(CountryCountryModel::get(), 200);
    }

    public function countryById($id)
    {
        $country = CountryCountryModel::find($id);
        if(is_null($country)){
            return response()->json(["Message" =>"Record not found!"], 404);
        }
        return response()->json($country, 200);
    }

    public function countrySave(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'iso' => 'required|min:2|unique:_z_country',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        return response()->json(CountryCountryModel::create($request->all()), 201);
    }

    public function countryUpdate(Request $request, $id)
    {
        $country = CountryCountryModel::find($id);
        if(is_null($country)){
            return response()->json(["Message" =>"Record not found!"], 404);
        }
        $country->update($request->all());

        return response()->json($country, 200);
    }

    public function countryDelete(Request $request, $id){

        $country= CountryCountryModel::find($id);
        if(is_null($country)){
            return response()->json(["Message" =>"Record not found!"], 404);
        }
        $country->delete();
        return response()->json(null, 204);
    }
}
