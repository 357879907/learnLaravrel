<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCheck extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //默认false,表示关闭授权，关闭状态会显示403
        //在这里可以预先判断比如用户是否有访问权限
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
            //制定规则
            'username'=>'required|min:3|max:7',
            'password'=>'required|min:6'
        ];
    }
    //自定义错误提示
    public function messages()
    {
        return parent::messages(); // TODO: Change the autogenerated stub
        return [
          'username.required'=>'用户名不能为空',
          'username.min'=>'用户名长度不能少于3位',
          'username.max'=>'用户名长度不能超过6位',
          'password.required'=>'密码不能为空',
          'password.min'=>'密码长度不能少于6位',
        ];
    }
    public function attributes()
    {
//        return parent::attributes(); // TODO: Change the autogenerated stub
        return [
            'username'=>'用户名'
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([
            'username'=>'Mr.zhu123'//把username传入的值改成Mr.zhu
        ]);
    }
}
