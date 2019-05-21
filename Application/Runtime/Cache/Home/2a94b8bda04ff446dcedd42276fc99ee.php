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


    <script src="/Public/Home/js/jquery.js" type="text/javascript"></script>
    <script type="text/javascript" src="/Public/Home/js/custom.js"></script>

    
    <link rel="shortcut icon" href="Images/ico/favicon.ico" type="image/x-icon">

    <script src="/public/home/js/swiper.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            //首页banner
            var mySwiper = new Swiper('.slide', {
                autoplay: 5000,
                visibilityFullFit: true,
                loop: true,
                pagination: '.pagination',
            });
        });
    </script>
</head>
<body class="PB50">
    <!--slide-->
    <div class="slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="bannerDetail.html">
                    <img src="/public/home/img/slide001.jpg" />

                </a>
            </div>
            <div class="swiper-slide">
                <a href="bannerDetail.html">
                    <img src="/public/home/img/slide002.jpg" />
                </a>
            </div>
            <div class="swiper-slide">
                <a href="bannerDetail.html">
                    <img src="/public/home/img/slide003.jpg" />
                </a>
            </div>
        </div>
        <div class="pagination"></div>
    </div>
    <!--/slide-->

    <div class="ng-scope">
        <div class="addWrap ng-scope">
            <a href="address.html" class="map_box"><img src="/public/home/img/map_icon.png" class="img-responsive" alt="..."></a>
        </div>
        <div class="location_index ng-scope">
            <div class="addr">
                <a href="address.html">
                    <p class="ng-binding">蓝坤大厦 ></p>
                </a>
            </div>
            <ul class="index_menu">
                <li>
                    <a href="shop.html">
                        <img src="/Public/Home/img/index01.png" class="img-responsive" alt="..." />
                        <p>进入超市</p>
                    </a>
                </li>
                <li>
                    <a href="tof.html">
                        <img src="/public/home/img/index02.png" class="img-responsive" alt="..." />
                        <p>热食</p>
                    </a>
                </li>
                <li>
                    <a href="shop.html">
                        <img src="/public/home/img/index03.png" class="img-responsive" alt="..." />
                        <p>水果</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clear ng-scope"></div>
    </div>
    <!--底部导航-->
    <nav class="ng-scope">
        <ul class="nav">
            <li>
                <a href="shop.html">
                    <img src="/public/home/img/foot01.png" alt="">
                    <p>超市</p>
                </a>
            </li>
            <li>
                <a href="cart.html">
                    <img src="/public/home/img/foot02.png" alt="">
                    <p>购物车</p>
                </a>
                <i id="cartnum" class="ng-binding cartnum">0</i>
            </li>
            <li>
                <a href="member">
                    <img src="/public/home/img/foot03.png" alt="">
                    <p>我的</p>
                </a>
            </li>
            <li>
                <a href="order.html">
                    <img src="/public/home/img/foot04.png" alt="">
                    <p>订单</p>
                </a>
            </li>
        </ul>
    </nav>
    <!--/底部导航-->
<!-- 
     <img src="/Public/Home/img/tou.png" class="img"> -->
</body>
</html>