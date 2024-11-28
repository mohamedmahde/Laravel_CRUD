<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertPostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'body'=>'required'
        ];
    }

    //massages for form validation

    public function messages(){
        return[
             'title.required'=>'حقل العنوان فارغ',
            'body.required'=>'حقل المحتوي فارغ'
        ];
    }
}
