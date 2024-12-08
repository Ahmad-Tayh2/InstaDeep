<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required|string',
            'description'=> 'string',
            'priority'=>'nullable|in:Low, Medium, High',
            'category'=>'required',
            'due_date'=>'date',
            'completion_status'=> 'nullable'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required'=> 'Title is required',
            'title.string'=> 'title should be string',
        ];
    }
}
