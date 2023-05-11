<?php

namespace App\Services;

use App\Http\Requests\ContractsRequest;
use App\Models\Company;
use App\Models\Contract;
use Illuminate\Support\Str;

class ContractService {

    public function store(ContractsRequest $request)
    {
        $contract = new Contract();
        
        $company = Company::find($request->company_id);


        $contract->name = $company->billing_name;
        // $contract->login = Str::random(10);
        // $contract->password = Str::random(10);
        $contract->billable = 1;
        
        $contract->mode = $request->mode;
        $contract->title = $request->title;
        $contract->rbkip = $request->rbkip;
        $contract->title_rbk = $request->title_rbk;
        $contract->agr_date = $request->agr_date;
        $contract->date1 = $request->date1;
        $contract->company_id = $request->company_id;
        $contract->manager = $request->manager;
        $contract->auction_sum = $request->auction_sum ?? NULL;
        $contract->auction_vat = $request->auction_vat ?? NULL;
        
        $contract->save();
        
        $contract->connector = 'D' . $contract->id;
        $contract->save();

        return $contract;

    }
}