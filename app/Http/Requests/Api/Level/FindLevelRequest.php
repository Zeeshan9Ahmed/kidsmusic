<?php

namespace App\Http\Requests\Api\Level;

use Illuminate\Foundation\Http\FormRequest;

class FindLevelRequest extends FormRequest
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
            'level_id' => 'required|numeric'
        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $response =  commonErrorMessage($validator->errors()->first());
        throw new \Illuminate\Validation\ValidationException($validator, $response);
    }
}
