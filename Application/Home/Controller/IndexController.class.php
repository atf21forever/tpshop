<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
public function index(){
  
  $data['name']=I('post.name');
  $data['pass']=I('post.pass');
  $name=$data['name'];
  $pass=$data['pass']; 

 $add=M('tp_regis')->where("name='$name'")->find();
 
 if($add){
      
   
    if($pass==$add['pass']){
  
  	    $this->display();
  
     }else{
     
        $this->display('login');
     }
     
 
 }else{
 
  $this->display('login');
 
 }

    }

//登录页面
public function login(){

  $this->display();

}
//注册页面跳转
public function register(){


	$this->display();
}

//注册页面
public function regis(){

  $data['name']=I('post.name');
  $name=$data['name'];
  $add=M('tp_regis')->where('name','=','$name')->find();

if($add){

  $data['name']=I('post.name');
  $data['pass']=I('post.pass');
  M('tp_regis')->add($data);	
  $this->display('login');
 

}else{
$this->display('register');
	
}

   
} 

//我的页面
public function member(){

	$this->display();
	 
}

public function order(){

 $all=M('tp_order')->where('id','>','0')->select();
 $add=M('tp_takeout')->where('id','>','0')->select();
// var_dump($all);
 
 $this->assign('all',$all);
 $this->assign('add',$add);


  $this->display();

}

public function delete(){
 
  $id=I('get.id');
  
 M('tp_order')->where('id','=',$id)->delete();
 
 $this->display('order'); 


}

public function delete1(){

  $id=I('get.id');
  
 M('tp_order')->where('id','=',$id)->delete();
 
 $this->display('order'); 

}




}



