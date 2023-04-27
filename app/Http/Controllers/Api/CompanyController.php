<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use App\Services\CompanyService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {
        return CompanyResource::collection(Company::with('address')->get());
    }

    public function store(CompanyRequest $request, CompanyService $service)
    {
        return $service->store($request);
    }

    public function show(Company $company)
    {
        return new CompanyResource($company);

    }

    public function update(Request $request, Company $company)
    {
        //
    }

    public function destroy(Company $company)
    {
        //
    }
}
