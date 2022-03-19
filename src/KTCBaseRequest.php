<?php

namespace Kleetec\LaravelCore;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class KTCBaseRequest extends FormRequest {
    
    public function authorize() {
        return false;
    }

    public function rules() {
        return [
            //
        ];
    }

    protected function failedValidation(Validator $validator) { 
        $errors = $validator->errors()->all();

        throw new HttpResponseException(response()->json([
            'code' => 0,
            'successful' => false,
            'message' => $errors[0],
            'messages' => implode(' ', $errors)
          ], 200)); 
    }
}