<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required','string'],
        ];
    }

    public function messages()
    {
        return[
        'name.required' => '名前を登録してください',
        'email.required' => 'メールアドレスを登録してください',
        'email.email' => 'メールアドレスはメール形式で登録してください',
        'password.required' => 'パスワードを登録してください',
        ];
    }
}
