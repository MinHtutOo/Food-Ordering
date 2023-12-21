<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerEditRequest extends FormRequest
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
            'name' => 'sometimes|required|string',
            'phone' => 'sometimes|required',
            'address' => 'sometimes|required',
            'email' => 'sometimes|required|email',
            'roles' => 'sometimes|array', 
            'roles.*' => 'sometimes|exists:roles,name',
        ];
    }
}
