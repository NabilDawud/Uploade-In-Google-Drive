<?php

namespace App\Http\Requests;

use App\Rules\WordsCount;
use Illuminate\Foundation\Http\FormRequest;

class FormCourseRequest extends FormRequest
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
            'title' => ['required', 'min:3', 'max:20'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => ['nullable', new WordsCount(6)],
            'duration' => 'required|numeric',
            'price' => 'required|numeric',
            'sail_price' => 'nullable|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'هذا الحقل مطلوب',
            'title.min' => 'الحد الأدنى لطول العنوان هو 3 أحرف',
            'title.max' => 'الحد الأقصى لطول العنوان هو 20 حرف',
        ];
    }
}
