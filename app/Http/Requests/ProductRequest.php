<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'brand_name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category' => 'required|exists:categories,id',
            'img1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The product name is required.',
            'brand_name.required' => 'The brand name is required.',
            'description.required' => 'The product description is required.',
            'price.required' => 'The product price is required.',
            'price.numeric' => 'The product price must be a numeric value.',
            'stock.required' => 'The product stock is required.',
            'stock.integer' => 'The product stock must be an integer.',
            'img1.required' => 'Image 1 is required.',
            'category.required' => 'The product category is required.',
            'category.exists' => 'The selected category is invalid.',    
            'img1.image' => 'Image 1 must be a valid image file.',
            'img1.mimes' => 'Image 1 must be a file of type: jpeg, png, jpg, gif, svg.',
            'img1.max' => 'Image 1 may not be greater than 2048 kilobytes.',
            'img2.image' => 'Image 2 must be a valid image file.',
            'img2.mimes' => 'Image 2 must be a file of type: jpeg, png, jpg, gif, svg.',
            'img2.max' => 'Image 2 may not be greater than 2048 kilobytes.',
            'img3.image' => 'Image 3 must be a valid image file.',
            'img3.mimes' => 'Image 3 must be a file of type: jpeg, png, jpg, gif, svg.',
            'img3.max' => 'Image 3 may not be greater than 2048 kilobytes.',
            'img4.image' => 'Image 4 must be a valid image file.',
            'img4.mimes' => 'Image 4 must be a file of type: jpeg, png, jpg, gif, svg.',
            'img4.max' => 'Image 4 may not be greater than 2048 kilobytes.',
        ];
    }
    
}
