<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditContactRequest extends FormRequest
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
            'id' => 'required|exists:contacts',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ];
    }

    public function messages() {
        return  [
            'required' => 'The :attribute is required',
            'email' => 'Invalid email',
            'id.exists' => 'The contact does not exist'
        ];
    }
}
