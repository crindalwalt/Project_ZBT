<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
            'title'=> ["required","string"],
            'description'=> ["required"],
            'regular_price'=> ["required"],
            'discount_price'=> ["required"],
            'video'=> ["required","string"],
            'price_id' => ['required'],
            'start_date'=> ["required"],
            'language'=> ["required"],
            'duration'=> ["required"],
            'category_id' => ["required"],

        ];
    }
}
