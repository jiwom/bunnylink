<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BreedingStoreRequest extends FormRequest
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
            "parent_doe"  => "required",
            "parent_buck" => "required",
        ];
    }
}
