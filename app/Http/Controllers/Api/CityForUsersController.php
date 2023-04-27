<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityForUsersResource;
use App\Models\CityForUsers;
use Illuminate\Http\Request;

class CityForUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CityForUsersResource::collection(CityForUsers::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CityForUsers  $cityForUsers
     * @return \Illuminate\Http\Response
     */
    public function show(CityForUsers $cityForUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CityForUsers  $cityForUsers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CityForUsers $cityForUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CityForUsers  $cityForUsers
     * @return \Illuminate\Http\Response
     */
    public function destroy(CityForUsers $cityForUsers)
    {
        //
    }
}
