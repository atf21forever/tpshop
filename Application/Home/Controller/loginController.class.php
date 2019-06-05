<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function login(){

        $data=M('tp_regis')->select();       



         
        $data=M('regis')->select();
        

        $this->ajaxReturn($data);
		$this->display();
    }





}