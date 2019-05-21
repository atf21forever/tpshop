<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Title here -->
    <title>懒虫商城-订单</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="懒虫商城" />
    <meta name="keywords" content="懒虫商城" />
    <meta name="author" content="懒虫商城" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="Images/ico/favicon.ico" type="image/x-icon">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/response.css" />
    <!-- jQuery -->
    <script src="/Public/Home/js/jquery.js" type="text/javascript"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="/Public/Home/js/custom.js"></script>
</head>
<body>

    <div class="ng-scope">
        <header class="ng-scope">
            <h4 class="title-order">
                <a class="title-top" href="member.html">我的订单</a>
            </h4>
            <ul class="navlist">
                <li type="lists" class="rightborder active">超市订单</li>
                <li type="tof">外卖订单</li>
            </ul>
        </header>
        
                <div class="orderlist" id="order_lists">
                <?php if(is_array($all)): foreach($all as $k=>$vo): ?><ul class="lists ng-scope">
                <li>
                    <p><?php echo (date("Y-m-d H:i:s",(isset($vo["time"]) && ($vo["time"] !== ""))?($vo["time"]):time())); ?><span class="status">
                    <?php if($vo[cancel] == 1): ?>已取消
                    <?php else: ?>
                    未取消<?php endif; ?>
                    </span></p>
                    <p><?php echo ($vo["number"]); ?></p>
                    <p>订单备注：<?php echo ($vo["text"]); ?></p>
                    <p>收货地址：<?php echo ($vo["shipping"]); ?></p>
                    <ul class="pdtlist">
                        <li>
                            <div class="l">
                                <img src="/Public/Home/img/lists/<?php echo ($vo["src"]); ?>" class="img-responsive" alt="..." />
                            </div>
                            <div class="r">
                                <p class="t"><?php echo ($vo["name"]); ?></p>
                                <p class="money">￥<?php echo ($vo["pass"]); ?></p>
                                <p class="jf">送积分：0</p>
                            </div>
                        </li>
                    </ul>
                     
                    <div class="bottom">
                        <p>总计：￥21.78 元  积分抵扣：￥0.00 元</p>
                        <p class="money">实付：￥21.78元</p>
                        <a href="<?php echo U('delete',['id'=>$vo['id']]);?>">删除记录</a>
                    </div>
                </li>

            </ul><?php endforeach; endif; ?>
        </div>
     <div class="orderlist" id="order_tof" style="display:none;">
           
           <?php if(is_array($add)): foreach($add as $key=>$v): ?><ul class="lists ng-scope">
               <li>
                  
                   <p><?php echo (date("Y-m-d H:i:s",(isset($v["time"]) && ($v["time"] !== ""))?($v["time"]):time())); ?> <span class="status">
                   
                  <?php if($v[cancel] == 1): ?>已取消
                    <?php else: ?>
                    未取消<?php endif; ?>

                   </span></p>

                   <p>订单编号：<?php echo ($v["number"]); ?></p>
                   <p>订单备注：<?php echo ($v["text"]); ?> </p>
                   <p>收货地址：<?php echo ($v["shipping"]); ?> </p>
                   <ul class="pdtlist">
                       <li>
                           <div class="l">
                               <img src="/Public/Home/img/tof/<?php echo ($v["src"]); ?>" class="img-responsive" alt="..." />
                           </div>
                           <div class="r">
                               <p class="t"><?php echo ($v["name"]); ?></p>
                               <p class="money">￥<?php echo ($v["price"]); ?></p>
                               <p class="jf">送积分：0</p>
                           </div>
                       </li>
                   </ul>
                   
                   <div class="bottom">
                       <p>总计：￥<?php echo ($v["price"]); ?> 元  积分抵扣：￥0.00 元</p>
                       <p class="money">实付：￥16.00元</p>
                       <a href="<?php echo U('delete1',['id'=>$v['id']]);?>">删除记录</a>
                   </div>
               </li>
           </ul><?php endforeach; endif; ?>
       </div>
    </div>
</body>
</html>