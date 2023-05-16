<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'project_name' => 'required|string|max:255',
            'description' => 'string|max:1000|nullable',
            'creation_date' => 'required|date',
            'done' => 'required|boolean',
            'visibility' => 'string|max:10|nullable',
            'price' => 'numeric|between:1,10000|nullable' 
        ];
    }
}
