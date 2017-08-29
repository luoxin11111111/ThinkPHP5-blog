<?php

namespace app\admin\controller;

use app\common\model\Admin;
use think\Controller;
use think\Db;
use think\Request;

class Login extends Controller
{
    public function index(){

        //测试数据库
        if (request()->isPost()){
//          halt($_POST); //验证前端信息是否能接受

//            将需要操作数据库的数据发送至model层
//          $res = (new Admin())->login(input('post.')); 此为助手函数方式
            $res = (new Admin())->login(Request::instance()->param());
//            halt($res['valid']);
            if($res['valid']){
                dump($res['msg']);
            }else{
                dump($res['msg']);
            }
        }
//        dump('lx');
        //  验证数据库是否能够连接成功
//        $data = db('admin')->find();
//        dump($data);
        return $this->fetch();
    }
}
