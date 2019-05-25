<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="懒虫商城" />
    <meta name="keywords" content="懒虫商城" />
    <meta name="author" content="懒虫商城" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.min.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css" />


    <script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
    <script type="text/javascript" src="/Public/Home/js/custom.js"></script>

    <title>懒虫商城-反馈</title>
    <link rel="shortcut icon" href="Images/ico/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/response.css" />
</head>
<body>
    <div class="ng-scope PB50">
        <img src="/Public/Home/img/cs_001.jpg" class="img-responsive" alt="">
        <div class="borderleft5o">在线留言<span> (12小时内回复)</span></div>
       <form action="<?php echo U(comments1);?>" method="get">
        <div class="comment-box">
            <div class="box">
                <label>所在大厦：</label>
                <input class="aui-Address-box-input" name="location" type="text" placeholder="大厦名称" />
            </div>
            <div class="box">
                <label>您的姓名：</label>
                <input class="aui-Address-box-input" name="name" type="text" placeholder="您的姓名" />
            </div>
            <div class="box">
                <label>手机号码：</label>
                <input class="aui-Address-box-input" name="plone" type="text" placeholder="手机号码" />
            </div>
            <div class="box">
                <label>留言内容：</label>
                <textarea class="aui-Address-box-textarea" name="text" placeholder="留言内容"></textarea>
            </div>
            <div class="box">
                <div style="text-align:center;"><a href="<?php echo U(comments1);?>" class="btnSubmit">提 交</a></div>
            </div>
        </div>
      </form>
    </div>
    <!--底部导航-->
    <nav class="ng-scope">
        <ul class="nav">
            <li>
                <a href="shop.html">
                    <img src="/Public/Home/img/foot01.png" alt="">
                    <p>超市</p>
                </a>
            </li>
            <li>
                <a href="cart.html">
                    <img src="/Public/Home/img/foot02.png" alt="">
                    <p>购物车</p>
                </a>
                <i id="cartnum" class="ng-binding cartnum">0</i>
            </li>
            <li>
                <a href="member.html">
                    <img src="/Public/Home/img/foot03.png" alt="">
                    <p>我的</p>
                </a>
            </li>
            <li>
                <a href="order.html">
                    <img src="/Public/Home/img/foot04.png" alt="">
                    <p>订单</p>
                </a>
            </li>
        </ul>
    </nav>
    <!--/底部导航-->
</body>
</html>