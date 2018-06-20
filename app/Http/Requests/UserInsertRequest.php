<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserInsertRequest extends Request
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
            'user_name' => 'required|unique:users,user_name|regex:/^[a-zA-Z]{1}[\w]{1,5}$/',
            'user_password' => 'required|regex:/[\w]{6,18}/',
            'user_repassword' => 'required|same:user_password',
            'age' => 'regex:/[0-9]+/',
            'birthday' => 'regex:/^[\d]{4}[-\ ][\d]{1,2}[-\ ][\d]{1,2}$/',
            'user_tel' => 'regex:/^1[3-9]{1}[\d]{9}$/',
            'user_email' =>'email',

        ];
    }

        public function messages()
        {
            return [
                'user_name.unique' => '用户已存在',
                'user_name.required' => '用户是必填的',
                'user_name.regex' => '用户名格式不正确',
                'user_password.required' => '密码是必填的',
                'user_password.regex' => '密码格式不对',
                'user_repassword.required' => '确认密码是必填的',
                'user_repassword.same' => '两次密码不一致',
                'age.regex' => '年龄请填写数字',
                'birthday.regex' => '请正确填写日期的格式',
                'user_tel.regex' => '请填写中国大陆手机号',
                'user_email.email' => '请填写正确邮箱地址'
            ];
        }

}
