<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContractsRequest;
use App\Http\Resources\ContractsResource;
use App\Models\Contract;
use App\Services\ContractService;
use Illuminate\Http\Request;

class ContractsController extends Controller
{
    public function index()
    {
        return ContractsResource::collection(Contract::all());
    }

    public function store(ContractsRequest $request, ContractService $service)
    {
        return $service->store($request);
    }

    public function show(Contract $contract)
    {
        $contract = Contract::with('manager:id,name')->find($contract);
        return new ContractsResource($contract);
    }

    public function update(Request $request, Contract $contract)
    {
        //
    }

    public function destroy(Contract $contract)
    {
        //
    }
}
