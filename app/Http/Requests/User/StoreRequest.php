<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|string|unique:users'.$user->id,
         //   'password' => 'required|min:8|confirmed',
            'password' => 'required|min:8|',
            'role' => 'required|integer'

        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'Мыло занято'
        ];
    }
}














