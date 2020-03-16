<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStaff extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

     
    public function rules()
    {
        return [
            'lastname' => 'required',
            'firstname' => 'required',
            'contact' => 'required',
            'gender' => 'required',
        ];
    }
}
