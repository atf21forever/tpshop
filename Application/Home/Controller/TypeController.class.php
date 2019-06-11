<?php
namespace Home\Controller;
use Think\Controller;
class TypeController extends Controller {
    public function _empty(){
        echo "您所请求的控制器不存在";
    }

    /**
     * 超市首页面
     */
    public function index()
    {
        $data = S('typelist');
        if (!$data) {
            //先取出所有的类别
            $allcat = M('type')->order('id')->select();
            foreach ($allcat as $k => $v) {
                if ($v['pid'] == 0) {
                    foreach ($allcat as $k1 => $v1) {
                        if ($v1['pid'] == $v['id']) {
                            foreach ($allcat as $k2 => $v2) {
                                if ($v2['pid'] == $v1['id']) {
                                    $v1['children'][] = $v2;
                                }
                            }
                            $v['children'][] = $v1;
                        }
                    }
                    $data[] = $v;
                }
            }
        }
        $goods=M('goods')->field('id,tid,pic,goods_name,price,send_point')->order('id')->select();#查询goods表中的指定字段,field中的内容为一个字符串,多个字段之间逗号隔开
        S('typelist', $data);
        $this->assign(['data'=>$data,'goods'=>$goods]);
        $this->display();
    }

//商品详情
    public function proDetail(){
        $gid=I('get.id');//获取需要修改的地址的id
        $data = S('typelist');
        $goods=M('goods')->field('id,tid,pic,goods_name,price,send_point')->order('id')->select();#查询goods表中的指定字段,field中的内容为一个字符串,多个字段之间逗号隔开
        $detail_goods=M('goods')->field('id,goods_name,detail,pic')->where("id ={$gid}")->select();
        $this->assign(['data'=>$data,'goods'=>$goods,'detail_goods'=>$detail_goods]);
        $this->display();
    }

    //超市中的立即结算
    public function cart(){
        $all=M('address')->where('default_address = 1')->select();//获取地址列表
       $gids=I('get.d');//获取商品id
       $goods=M('goods')->field('id,tid,pic,goods_name,price,send_point')->where("id in ({$gids})")->select();//获取商品的信息
        $this->assign(['goods'=>$goods,'all'=>$all]);
        $this->display();
    }

    //收货地址列表
    public function address(){
        $uid = 3;//用户id
        $all=M('address')->where("uid = {$uid}")->order('default_address')->select();//获取地址列表
        $this->assign(['all'=>$all]);
        $this->display();
    }

    //添加收货地址
    public function add_address(){
        $mid=3;//用户id
        if(IS_POST){
            $data['name'] = I('post.name');
            $data['phone'] = I('post.phone');
            $data['selected1'] = I('post.selected1');
            $data['dong'] = I('post.dong')."栋";
            $data['fang'] = I('post.fang');
            $data['uid'] = $mid;
            $newid=M('address') ->add($data);
            //保存当前新增id,将该条记录设置为默认收货地址,其他的改为普通地址
            $res1 = M('address')->where("uid={$mid}")->save(['default_address'=>2]);//普通地址
            $res2 = M('address')->where("id = {$newid}")->save(['default_address'=>1]);//默认地址,该处$id为新增id
            if($res1&&$res2){
                $this->redirect('address');
            }
        }else{
            $this->display();
        }
    }

    //修改地址
    public function edit_address($id){
       $aid=I('get.id');//获取需要修改的地址的id
        if(IS_POST){//更新数据库,并展示
            $name = I('post.name');
            $phone = I('post.phone');
            $selected1 = I('post.selected1');
            $dong= I('post.dong')."栋";
            $fang = I('post.fang');
            $data=[
                'name'=>$name,
                'phone'=>$phone,
                'selected1'=>$selected1,
                'dong'=>$dong,
                'fang'=>$fang,
                'id'=>$aid
            ];
            $res=M('address')->save($data);//更新字段,指定id
            if($res){
                $this->redirect('address');
            }
        }else{//只查询到,并展示出来
            $all=M('address')->where("id = {$aid}")->select();//获取地址列表
            $this->assign(['all'=>$all]);
            $this->display();
        }

    }





}