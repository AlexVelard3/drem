<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name'=> 'required|min:3|max:40',
            'username'=> 'required|unique:users',
            'email'=> 'required|email|unique:users',
            'password'=> 'required'
        ];
    }

    public function messages(){
        
        return [
            'name.requireds'=>'El nombre es requerido'
        ];
    }
}
