<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestForCrash extends FormRequest
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
            'images' => 'nullable|array|max:5',
            'images.*' => 'nullable|mimes:jpg,jpeg,png,gif|max:25000',
            'name' => 'nullable|string|max:255',
            'surname' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15',
            'email' => 'nullable|string|email|max:255',
            'date' => 'nullable|string|max:255',
            'contactType' => 'nullable|string',
            'message' => 'nullable|string',
            'recontactType' => 'nullable|string',
            'confirmTerms' => 'nullable|string',
        ];
    }
}
