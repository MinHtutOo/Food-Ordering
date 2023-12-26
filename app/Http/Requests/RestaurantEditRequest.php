<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantEditRequest extends FormRequest
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
            'name' => 'sometimes|required|string|min:5|max:100',
            'email' => 'sometimes|required|email',
            'phone' => 'sometimes|required|string|min:10|max:15',
            'address' => 'sometimes|required|string|min:5|max:100',
            'opening_hour' => 'sometimes|required',
            'closing_hour' => 'sometimes|required',
            'image' => 'sometimes|nullable',
        ];
    }
}
