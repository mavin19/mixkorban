<?php

namespace App\Http\Requests;


use LVR\CreditCard\CardCvc;
use LVR\CreditCard\CardNumber;
use LVR\CreditCard\CardExpirationYear;
use LVR\CreditCard\CardExpirationMonth;
use Illuminate\Foundation\Http\FormRequest;

class BillInfoRequest extends FormRequest
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
            'firstname' => 'required',
            'lastname'  => 'required',
            'address'   => 'required',
            'city'      => 'required',
            'state'     => 'required',
            'zip'       => 'required|integer',
            'cardnumber'=> ['required', new CardNumber],
            'cvv'       => ['required', new CardCvc($this->get('cardnumber'))],
            'expmonth'  => ['required', new CardExpirationMonth($this->get('expyear'))],
            'expyear'   => ['required', new CardExpirationYear($this->get('expmonth'))]
        ];
    }
}
