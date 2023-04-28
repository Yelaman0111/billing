<?php

namespace App\Services;

use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use App\Models\CompanyAddress;
use Illuminate\Http\Request;

class CompanyService{

    public function store(CompanyRequest $request)
    {
        
        $company = Company::create($request->validated());

        $companyAddress = new CompanyAddress();
        $companyAddress->region     = $request->region;
        $companyAddress->locality   = $request->locality;
        $companyAddress->city       = $request->city;
        $companyAddress->street     = $request->street;
        $companyAddress->house      = $request->house;
        $companyAddress->housing    = $request->housing;
        $companyAddress->office     = $request->office;
        $companyAddress->postcode   = $request->postcode;
        $companyAddress->comment    = $request->comment;
        $companyAddress->delivery_address   = $request->delivery_address;
        $companyAddress->delivery_city      = $request->delivery_city;
        $companyAddress->save();
        
        $company->address_id = $companyAddress->id;
        $company->save();
        
        return new CompanyResource($company);
    }

}
