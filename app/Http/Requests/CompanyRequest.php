<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'billing_name' => ['required'],
            'rnn'=> ['numeric'],
            'ident_number' => ['required'],
            'vip' => ['required'],
            'type' => ['required'],
            // 'udl_number'=> ['numeric'],
            // 'udl_issued'=> ['string'],
            // 'udl_date'=> ['date'],
            'ip_number' => ['numeric'],
            'ip_serial'=> ['numeric'],
            'ip_date'=> ['date'],
            'nds_number'=> ['numeric'],
            'nds_serial'=> ['numeric'],
            'nds_date'=> ['date'],
        ];
    }
}
