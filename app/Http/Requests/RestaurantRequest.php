<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
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
            'restaurantName' => 'required',
            'description' => 'required',
            'cusine' => 'required|array|min:1',
            'location' => 'required|array|min:1',
            'feature' => 'required|array|min:1',
            'meal' => 'required|array|min:1',
            'from_khr' => 'numeric',
            'to_khr' => 'numeric',
            'from_time' => 'required|date_format:H:i',
            'to_time' => 'required|date_format:H:i',
            'phonenumber' => 'required||regex:/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.0-9]*$/|min:9',
            'address' => 'required|min:7',
            'website' => 'url|nullable',
            'imgs.*'=> 'file|mimes:jpeg,png,webp'
        ];
    }
}
