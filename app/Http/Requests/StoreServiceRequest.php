<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
          'title' => 'required|min:3',
          'description' => 'required|string',
          'price' => 'required|min:6',
          'image' => [
                        'required',
                        'image',
                        'mimes:jpg,png,jpeg,gif,svg',
                        'dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
                        'max:2048'
                       ],
        ];

        }
        public function messages(){
          return[
            'title.required' => 'Le title est obligatoire.',
            'description.required' => 'description est obligatoire.',
            'price.required' => 'price est obligatoire.',
            'image.required' => 'image est obligatoire.',
          ];
    }
}
