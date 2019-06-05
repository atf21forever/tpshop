<?php
namespace Home\Controller;
use Think\Controller;
class FruitController extends Controller {

    #没有时显示---小主,您所请求的控制器不存在哦!
    public function _empty(){
        echo "小主,您所请求的控制器不存在哦!";
    }

    #有数据时就显示此方法
    public function index(){
        $new=M('Fruit')->where('is_new=1')->select();#查询新品
        $hot=M('Fruit')->where('is_hot=1')->select(); #查询热卖
        $res=M('Fruit')->where('id>0')->select();#从数据表中查询所有数据
        $this->assign(['res'=>$res,"new"=>$new,"hot"=>$hot]);#分配数据给视图
        $this->display('fruit'); #调用视图显示数据
    }

}