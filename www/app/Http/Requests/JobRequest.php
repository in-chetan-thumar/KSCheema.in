<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'company_id' => 'required',
            'company_location_id' => 'required',
            'job_department_id' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
