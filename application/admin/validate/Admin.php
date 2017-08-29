<?php
/**
 * Created by PhpStorm.
 * User: luoxin
 * Date: 2017/8/26
 * Time: 下午6:46
 */
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate{
    protected $rule = [
        'username' => 'require',
        'password' => 'require',
        'code'=>'require|captcha'
    ];

    protected $message = [
        'username.require' => '用户名不能为空',
        'password.require' => '密码不能为空',
        'code.require' => '验证码不能为空',
        'code.captcha' => '验证码的值'
    ];
}