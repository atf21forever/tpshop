<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Title here -->
    <title>懒虫商城-外卖</title>
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
<body style="position:relative;">
    <div class="ng-scope">
        <div class="loca ng-scope">
            <a class="change ng-binding" href="address.html">蓝坤大厦<span>[切换]</span></a>
        </div>
        <div class="ng-scope">
            <img src="/Public/Home/img/tof/timg-6.jpg" width="100%">
        </div>
        <ul class="lists lists-tof ng-scope">
           <?php if(is_array($all)): foreach($all as $k=>$v): ?><li class="on" price="20" cart="2">
                <div class="img view"><img src="/Public/Home/img/tof/<?php echo ($v["src"]); ?>" alt="..." /></div>
                <p class="t"><?php echo ($v["name"]); ?></p>
                <p class="price">￥<?php echo ($v["price"]); ?></p>
                <div class="showaddcart meshop">
                    <div class="num_con">
                        <img src="/Public/Home/img/num_l.png" class="img-responsive num_l" alt="...">
                        <span class="number">0</span>
                        <img src="/Public/Home/img/num_r.png" class="img-responsive num_r" alt="...">
                    </div>
                </div>
                <div class="detail">
                    <div class="back" onclick="CloseDetail(this);"><img src="img/close.png" class="img-responsive" alt="..." /></div>
                    <div class="title">商品详情</div>
                    <div class="img"><img src="/Public/Home/img/tof/timg-6.jpg" class="img-responsive" alt="..." /></div>
                    <div class="desc">
                        这个猪排饭真的很好吃的，前无古人后无来者，尝一尝不要钱，买一个送一
                        个，不好吃了不要钱。
                    </div>
                </div>
            </li><?php endforeach; endif; ?>    
          
        </ul>
    </div>
    <!--底部结算导航-->
    <div class="cart ng-scope">
        <div class="r"><a href="cart.html">去结算</a></div>
        <div class="l ng-binding">
            ￥<label id="totalmoney">0</label>
        </div>
        <i id="totalcartnumber" class="ng-binding cartnum">0</i>
        <a href="cart.html"><img src="/Public/Home/img/shop_cart01.png" alt="..."></a>
    </div>
    <!--/底部结算导航-->
</body>
</html>