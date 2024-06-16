<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserAddressRequest extends FormRequest
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
            "biling_line_1" => ["required"],
            "biling_line_2" => ["required"],
            "country" => ["required"],
            "city" => ["required"],
            "state" => ["required"],
            "zipcode" => ["required"],
        ];
    }
}
