<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
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
            'name' => 'required|string|min:5|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|min:10|max:15',
            'address' => 'required|string|min:5|max:100',
            'opening_hour' => 'required',
            'closing_hour' => 'required',
            'image' => 'nullable',
        ];
    }
}
