<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTicketRequest extends FormRequest
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
            
            'title'=>['required','string','max:255'],
            'text_description'=>['required','string','max:255'],
            'priority'=>['required'],
            'categories'=>['required','string','max:255'],
            'labels'=>['required','string','max:255'],
        ];
    }
}