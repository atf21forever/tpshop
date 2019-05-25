<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html class="bg">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Title here -->
    <title>懒虫商城-选择地址</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="懒虫商城" />
    <meta name="keywords" content="懒虫商城" />
    <meta name="author" content="懒虫商城" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="Images/ico/favicon.ico" type="image/x-icon">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/response.css" />
    <!-- jQuery -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="js/custom.js"></script>
</head>
<body class="PT20">
    <div class="ng-scope">
        <div class="location ng-scope">
            <input class="input keywords ng-pristine ng-untouched ng-valid ng-empty" onchange="kwsearch()"  onfocus="searchfocus()"  onblur="searchblur()" placeholder="搜索" type="text">
            <ul class="branch ng-hide" id="branch1">
                <li>
                    <a href="index.html">
                        <div class="title"><img src="img/map_icon.png" alt="...">共和和丰大厦</div>
                        <div class="desc">共和和丰大厦</div>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <div class="title"><img src="img/map_icon.png" alt="...">广茂商务大厦</div>
                        <div class="desc">广茂商务大厦</div>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <div class="title"><img src="img/map_icon.png" alt="...">蓝坤大厦</div>
                        <div class="desc">深圳市龙华区民治街道民康路213号</div>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <div class="title"><img src="img/map_icon.png" alt="...">秋瑞大厦</div>
                        <div class="desc">深圳市龙华区民康路207号</div>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <div class="title"><img src="img/map_icon.png" alt="...">民泰大厦</div>
                        <div class="desc">深圳市龙华区民治大道民康路口</div>
                    </a>
                </li>
            </ul>
            <div class="hand">
                <p onclick="showselect(1)">点击选择地址</p>
            </div>
            <div class="list">
                <h6 class="tit2">我在哪里</h6>
                <ul class="branch" id="branch2"></ul>
                <h6 class="tit2">我的地址</h6>
                <ul class="branch" id="branch3">
                    <li>
                        <a href="index.html">
                            <div class="font14">蓝坤大厦 A栋3层222</div>
                            <div class="font12 coloraaa">夏晴天 13956236524</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="addrselect ng-scope ng-hide" id="addrselect">
            <div class="con">
                <div class="back" onclick="showselect(0)">&lt; 关闭</div>
                <ul class="branch branch_city" id="branch_city_1">
                    <li>
                        <a href="index.html">
                            <div class="title"><img src="img/map_icon.png" alt="...">凯粤大厦</div>
                            <div class="desc">广州市白云区黄石西路383号</div>
                        </a>
                    </li>
                </ul>
                <ul class="branch branch_city" id="branch_city_2" style="display:none;">
                    <li>
                        <a href="index.html">
                            <div class="title"><img src="img/map_icon.png" alt="...">共和和丰大厦</div>
                            <div class="desc">共和和丰大厦</div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <div class="title"><img src="img/map_icon.png" alt="...">广茂商务大厦</div>
                            <div class="desc">广茂商务大厦</div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <div class="title"><img src="img/map_icon.png" alt="...">蓝坤大厦</div>
                            <div class="desc">深圳市龙华区民治街道民康路213号</div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <div class="title"><img src="img/map_icon.png" alt="...">秋瑞大厦</div>
                            <div class="desc">深圳市龙华区民康路207号</div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <div class="title"><img src="img/map_icon.png" alt="...">民泰大厦</div>
                            <div class="desc">深圳市龙华区民治大道民康路口</div>
                        </a>
                    </li>
                </ul>
                <ul class="branch branch_city" id="branch_city_3" style="display:none;">
                    <li>
                        <a href="index.html">
                            <div class="title"><img src="img/map_icon.png" alt="...">彰泰天街</div>
                            <div class="desc">桂林市七星区穿山东路41号</div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <div class="title"><img src="img/map_icon.png" alt="...">万达华府</div>
                            <div class="desc">桂林市七星区高新万达广场万达华府</div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <div class="title"><img src="img/map_icon.png" alt="...">桂林傻鸟哥体验店</div>
                            <div class="desc">桂林市七星区普陀路59号</div>
                        </a>
                    </li>
                </ul>
                <ul class="city" id="city">
                    <li class="active">广州市</li>
                    <li>深圳市</li>
                    <li>桂林市</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>