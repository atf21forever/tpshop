<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function login(){
<<<<<<< HEAD
        $data=M('tp_regis')->select();       
=======
         
        $data=M('regis')->select();
        
>>>>>>> 9681b34c16b55574790a833a002c945ecb7532d7
        $this->ajaxReturn($data);
		$this->display();
    }





}