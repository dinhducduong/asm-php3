<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCategory extends FormRequest
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
                    case 'addCategory':
                        $rule = [
                            "title" => "required",
                            "image" => "required",
                        ];
                    case 'editCategory':
                        $rule = [
                            "title" => "required",
                            "image" => "required",
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
            'image.required' => "Vui lòng nhập ảnh",
        ];
    }
}