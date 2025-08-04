<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormContactRequest extends FormRequest
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
            //
            'first-name' => ['required', 'string', 'min:5'],
            'last-name' => ['required', 'string', 'min:5'],
            'email' => "required|email",
            "messege" => "nullable"
        ];
    }

    public function messages()
    {
        return [
            'first-name.required' => 'My customize error'
        ];
    }
}
