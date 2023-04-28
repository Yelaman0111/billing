<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Http\Resources\LocalityResource;
use App\Http\Resources\RegionResource;
use App\Models\City;
use App\Models\Locality;
use App\Models\Region;

class AddressController extends Controller
{
    public function getAllRegions()
    {
        return RegionResource::collection(Region::all());

    }

    public function getLocalitiesByRegionId($id)
    {
        return LocalityResource::collection( Locality::where('region_id', $id)->get());
    }
    
    public function getCitiesByLocalityId($id)
    {
        return CityResource::collection(City::where('locality_id',$id)->get());
    }
}
