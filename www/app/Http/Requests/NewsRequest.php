<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
        $current_route_name = request()->route()->getName();
        if ($current_route_name == 'news.create') {
            return [
                'title' => 'required',
                'description' => 'required',
                'image' => 'required',
            ];
        }

        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable',
        ];
    }
    // public function messages()
    // {
    //     return[
    //         'image.required'=>'sadfjfdsf'
    //     ];
    // }


}
