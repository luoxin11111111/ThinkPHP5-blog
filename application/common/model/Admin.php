<?php

namespace app\common\model;

use think\Loader;
use think\Model;

class Admin extends Model
{
    //模型的文件名默认是数据表去掉标前缀

    public function login($data){
        halt($data);
//        1、执行验证，验证表单信息是否符合标准
        $validate = Loader::validate('Admin');  //返回一个 validate 对象
//        halt($validate);
//        halt($validate->check($data));
        if(!$validate->check($data)){
//            halt($validate);
            return ['valid'=>0,'msg'=>$validate->getError()];
        }
//        2、比对用户名密码是否正确
//        3、将用户信息存入session

    }
}
