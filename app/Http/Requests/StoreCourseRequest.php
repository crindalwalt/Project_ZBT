<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
            'title' => ["required", "string"],
            'description' => ["required"],
            'regular_price' => ["required"],
            'discount_price' => ["required"],
            'video' => ["required", "string"],
            'image' => ["required"],
            'start_date' => ["required"],
            'language' => ["required"],
            'duration' => ["required"],
            'category_id' => ["required"],
            'price_id' => ['required']
        ];
    }
}
