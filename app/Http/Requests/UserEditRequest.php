<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserEditRequest extends Request
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
            'age' => 'regex:/[0-9]+/',
            'birthday' => 'regex:/^[\d]{4}[-\ ][\d]{1,2}[-\ ][\d]{1,2}$/',
            'user_tel' => 'regex:/^1[3-9]{1}[\d]{9}$/',
            'user_email' =>'email',
        ];
    }
    public function messages()
        {
            return [
                'age.regex' => '年龄请填写数字',
                'birthday.regex' => '请正确填写日期的格式',
                'user_tel.regex' => '请填写中国大陆手机号',
                'user_email.email' => '请填写正确邮箱地址'
            ];
        }
}
