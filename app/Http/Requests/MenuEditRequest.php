<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuEditRequest extends FormRequest
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
            'category' => 'sometimes|required',
            'price' => 'sometimes|required',
            'file' => 'sometimes|nullable',
            'description' => 'sometimes|required|string',
        ];
    }
}
