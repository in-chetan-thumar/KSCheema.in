<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobApplicationRequest extends FormRequest
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
            'type'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'company_location_id'=>'required_if:type,==,0',
            'current_location'=>'required_if:type,==,1',
            'job_id'=>'sometimes|required',
            'job_department_id'=>'required',
            'total_experience'=>'required',
            'company_id'=>'required',
            'contact_number'=>'required|numeric|digits:10',
            'email'=>'required|email',
            'file_name'=>'required|mimes:pdf,docs',
        ];
    }

    public function messages()
    {
        return [
            'current_location.required_if' => 'The current location field is required.'
        ];
    }
}
