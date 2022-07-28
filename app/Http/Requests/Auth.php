<?php
//
//namespace App\Http\Requests;
//
//use Illuminate\Foundation\Http\FormRequest;
//
//class Auth extends FormRequest
//{
//    /**
//     * Determine if the user is authorized to make this request.
//     *
//     * @return bool
//     */
//    public function authorize()
//    {
//        return true;
//    }
//
//    /**
//     * Get the validation rules that apply to the request.
//     *
//     * @return array<string, mixed>
//     */
//    public function rules()
//    {
//        $rule = [];
//        $action = $this->route()->getActionMethod();
//
//        switch ($this->method()):
//            case 'POST':
//                switch ($action) {
//                    case 'register':
//                        $rule = [
//                            "email" => "required|unique:users",
//                            "name" => "required",
//                            "password" => "required",
//                        ];
//                    case 'index':
//                        $rule = [
//                            "email" => "required|email",
//                            "name" => "required",
//                        ];
//                    default:
//                        break;
//                }
//            default:
//                break;
//        endswitch;
//        return $rule;
//    }
//
//    /**
//     * @return string[]
//     */
//    public function messages()
//    {
//        return [
//            'email.required' => 'Please enter your email',
//            'email.email' => 'Email invalidate',
//            'password.required' => 'Please enter password',
//        ];
//    }
//}
