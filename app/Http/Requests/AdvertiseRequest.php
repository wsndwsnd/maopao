<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdvertiseRequest extends Request
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
            'title' => 'required',
            'img' => 'required',
            'content' => 'required'

        ];
    }

    public function messages()
        {
            return [
                'title.required' => '标题不能为空',
                'img.required' => '图片不能为空',
                'content.required' => '广告链接不能为空'

            ];
        }
}
