<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
  public function index(){
  
  $data['name']=I('post.name');
  $data['pass']=I('post.pass');
  $name=$data['name'];
  $pass=$data['pass']; 



  $add=M('regis')->where("name='$name'")->find();

  
 
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

     $all=M('order')->where('id','>','0')->select();
     $add=M('takeout')->where('id','>','0')->select();
    // var_dump($all);
     $this->assign('all',$all);
     $this->assign('add',$add);
     $this->display();

  }

public function delete(){
 
   $id=I('get.id');
  
   M('tof')->where("id='$id'")->delete();
   $this->display('order'); 
    }

  public function delete1(){

     $id=I('get.id');
     var_dump($id);
     M('takeout')->where("id='$id'")->delete();
     $this->redirect('Index/order');


  }
//用户咨询
  public function comments(){

     $this->display();
  }



//用户咨询
  public function comments1(){


    // $name=I('get.name');
    $data['name']=I('get.name');
    $data['phone']=I('get.phone');
    $data['location']=I('get.location');
    $data['text']=I('get.text');
    M('comment')->add($data);
    
    $this->display('comments');
  }



//外卖页面
  public function tof(){
    $all=M('tof')->where('id','>','0')->select();
    //var_dump($all);
    $this->assign('all',$all);

    $this->display();

  }
//结算页面
  public function cart(){ 
//获得数量和id到结算页面
  $num=I('get.numnew');
  $id = I('get.newid');
  
  //获取拿到的id值对应的数据
  $foot=M('tof')->where("id='$id'")->find();
 
  //获取所有的地址信息
  $all=M('address')->where(array('id'=>$id))->select(); 
  
   $totai=$foot['price'] * $num;
   $this->assign('all',$all);
   //把传递的数据给到结算页面
   $this->assign('num',$num);
   //把获取的商品信息给到结算页面
   $this->assign('foot',$foot);
   //获得的商品的总价格
    $this->assign('totai',$totai);
    $all=session('all',$all);
   
  $this->display();

  }

  public function edit_address($id){
   $this->assign('id',$id);
   $this->display();
  }

//修改地址
  public function address(){
    $name = I('get.name');
    $phone = I('get.phone');
    $selected1 = I('get.selected1');
    $selected= I('get.selected');
    $fang = I('get.fang');
    M('address')->where('id','=','id')->data(array('name'=>$name,'phone'=>$phone,
    'selected1'=>I('get.selected1'),'fang'=>$fang))->save();
    
    $this->display('edit_address');
  }

//提交商品订单
  function end(){
    $id=I('get.id');
    $did=I('get.did');
    $num=I('get.num');
    var_dump($num);
    //获取到商品数据
    $foot=M('tof')->where("id='$id'")->find();
    //获取地址信息
    $all=M('address')->where("id='$did'")->find();
    $today = strtotime( date("Y-m-d") );
    //把商品加入到订单
    $data['name']=$foot['name'];
    $data['price']=$foot['price'];
    $data['time']=time();
    $data['number']="20190610" . mt_rand(60000000,80000000);
    
    $data['shipping']="共和丰大厦".$all['dong']. $all['selected1']. $all['fang'];
    $data['pname']=$all['name'];
    $data['src']=$foot['src'];
    M('takeout')->add($data);
  
    $this->display('pay');


  }

function pay(){
   
  $this->redirect('Index/order');

}

}



