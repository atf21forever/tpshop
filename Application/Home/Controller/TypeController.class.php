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
        S('typelist', $data);
        $this->assign('data',$data);
        $this->display();



    }
}