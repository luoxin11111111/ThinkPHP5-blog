<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Entry extends Controller
{
    //调用类方法或实例方法时执行 构造方法
    public function __construct(Request $request = null)
    {
        parent::__construct($request);

        //判断是否有登录session 如果没有，则url重定向到login页面
        if(!session('admin.admin_id')){
            $this->redirect('admin/Login/index');
        }
    }
}
