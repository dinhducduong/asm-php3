<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCourse extends FormRequest
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
        $rule = [];
        $action = $this->route()->getActionMethod();

        switch ($this->method()):
            case 'POST':
                switch ($action) {
                    case 'addCourse':
                        $rule = [
                            "title" => "required",
                            "categories_id" => "required",
                            "levels_id" => "required",
                            "image" => "required",
                            "price" => "required",
                            "description_short" => "required",
                            "description_long" => "required",
                        ];
                    case 'editCourse':
                        $rule = [
                            "title" => "required",
                            "categories_id" => "required",
                            "levels_id" => "required",
                            "image" => "required",
                            "price" => "required",
                            "description_short" => "required",
                            "description_long" => "required",
                        ];
                    default:
                        break;
                }
            default:
                break;
        endswitch;
        return $rule;
    }

    public function messages()
    {
        return [
            'title.required' => "Vui lòng nhập tên khóa học",
            'categories_id.required' => "Vui lòng chọn danh mục",
            'image.required' => "Vui lòng nhập ảnh",
            'levels_id.required' => "Vui lòng chọn cấp độ",
            'price.required' => "Vui lòng nhập giá tiền",
            'description_short.required' => "Vui lòng nhập mô tả ngắn",
            'description_long.required' => "Vui lòng nhập mô tả dài",
        ];
    }
}