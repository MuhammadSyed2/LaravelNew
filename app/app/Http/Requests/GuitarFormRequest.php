<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuitarFormRequest extends FormRequest
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
            'name' => 'required',
            'brand' => 'required',
            'yearMade' => ['required', 'integer']
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'name'=> strip_tags($this->name),
            'brand'=> strip_tags($this->brand),
            'yearMade'=> strip_tags($this->yearMade)
        ]);
    }
}
