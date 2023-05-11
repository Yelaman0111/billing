<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['string'],
            'title_rbk' => ['string'],
            'name' => ['string'],
            'date1' => ['date'],
            'agr_date' => ['date'],
            'mode' => ['numeric'],
            'billable' => ['numeric'],
            'auction_sum' => ['numeric'],
            'auction_vat' => ['numeric'],
            'rbkip' => ['numeric'],
            'manager' => ['numeric'],
            'company_id' => ['numeric'],
        ];
    }
}
