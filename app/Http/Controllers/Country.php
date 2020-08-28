<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CountryCountryModel;
use Validator;

class Country extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(CountryCountryModel::paginate(10), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'iso' => 'required|min:2|unique:_z_country',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        return response()->json(CountryCountryModel::create($request->all()), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = CountryCountryModel::find($id);
        if (is_null($country)) {
            return response()->json(["Message" => "Record not found!"], 404);
        }
        return response()->json($country, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $country = CountryCountryModel::find($id);
        if (is_null($country)) {
            return response()->json(["Message" => "Record not found!"], 404);
        }
        $country->update($request->all());

        return response()->json($country, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = CountryCountryModel::find($id);
        if (is_null($country)) {
            return response()->json(["Message" => "Record not found!"], 404);
        }
        $country->delete();
        return response()->json(null, 204);
    }
}
