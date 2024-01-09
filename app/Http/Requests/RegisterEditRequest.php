<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        
        return [
            'name_applicant'=> 'required',
            'ruc'=> ['required','unique:registers,ruc'],
            'type'=> ['required'],
            'number_register'=> ['required'],
            'number_folios'=> ['required','numeric'],
            'code_item' => '',
            'date'=> ['required','date_format:Y-m-d'],
            'hour'=> ['required','date_format:H:i'],
        ];
    }
}
