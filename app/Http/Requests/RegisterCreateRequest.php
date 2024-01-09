<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCreateRequest extends FormRequest
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
            'name_applicant' => 'required|max:40',
            'ruc' => 'required||numeric|unique:registers',
            'type' => 'required',
            'number_register' => 'required|numeric|unique:registers',
            'number_folios' => 'required|integer|numeric',
            'code_item' => '',
            'date' => 'required|date|date_format:Y-m-d',
            'hour' => 'required|date_format:H:i',

        ];
        
    }
    public function messages(){
        
        return [
            'name_applicant.required' =>'El nombre es requerido',
            'ruc.required' => 'El RUC es requerido',
            'ruc.unique' => 'El RUC ingresado ya existe',
        ];
    }
}
