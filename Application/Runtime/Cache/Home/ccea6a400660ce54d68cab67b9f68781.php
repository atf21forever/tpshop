<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录页面</title>
<meta name="viewport" content="width=device-width"/>
<meta name="viewport" content="initial-scale=1.0,user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="stylesheet" href="/Public/Home/css/style1.css" type="text/css" />

</head>

<body>

<div class="cont">
  <div class="demo">
   
    <form action="index" method="post">
    <div class="login">
      <div class="login__check"></div>
      <div class="login__form">
        <div class="login__row">
          <svg class="l ogin__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" name="name" placeholder="用户名"/>
        </div>

        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" name="pass" placeholder="密码"/>
        </div>
  
        <button type="submit" class="login__submit" >登录</button>
        <p class="login__signup">你还没有账号? 马上去&nbsp;
        <a href="register" target="_blank">注册</a>
        </p>
    
      </div>
  
  </div>
  </form> 

    <div class="app">
      <div class="app__top">
        <div class="app__menu-btn">
          <span></span>
        </div>
        <svg class="app__icon search svg-icon" viewBox="0 0 20 20">
          <!-- yeap, its purely hardcoded numbers straight from the head :D (same for svg above) -->
          <path d="M20,20 15.36,15.36 a9,9 0 0,1 -12.72,-12.72 a 9,9 0 0,1 12.72,12.72" />
        </svg>
        <p class="app__hello">深蓝互动 ! </p>
        <div class="app__user">
          <img src="./img/logo.png" alt="" class="app__user-photo" />
          <span class="app__user-notif">3</span>
        </div>
        <div class="app__month">
          <span class="app__month-btn left"></span>
          <p class="app__month-name">March</p>
          <span class="app__month-btn right"></span>
        </div>
      </div>
      <div class="app__bot">
        <div class="app__days">
          <div class="app__day weekday">Sun</div>
          <div class="app__day weekday">Mon</div>
          <div class="app__day weekday">Tue</div>
          <div class="app__day weekday">Wed</div>
          <div class="app__day weekday">Thu</div>
          <div class="app__day weekday">Fri</div>
          <div class="app__day weekday">Sad</div>
          <div class="app__day date">8</div>
          <div class="app__day date">9</div>
          <div class="app__day date">10</div>
          <div class="app__day date">11</div>
          <div class="app__day date">12</div>
          <div class="app__day date">13</div>
          <div class="app__day date">14</div>
        </div>
        <div class="app__meetings">
          <div class="app__meeting">
            <img src="./img/logo1.png" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">企业VI整套设计</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time"><br/></span>
              <span class="app__meeting-place">lgog + VI设计</span>
            </p>
          </div>
          <div class="app__meeting">
            <img src="./img/logo1.png" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">电商设计服务!</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time"><br/></span>
              <span class="app__meeting-place">店铺装修 + 产品图精修</span>
            </p>
          </div>
          <div class="app__meeting">
            <img src="./img/logo1.png" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">店铺代运营!!!</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time"><br/></span>
                <span class="app__meeting-place">电商引流 + 销量暴增</span>
            </p>
          </div>
        </div>
      </div>
      <div class="app__logout">
        <svg class="app__logout-icon svg-icon" viewBox="0 0 20 20">
          <path d="M6,3 a8,8 0 1,0 8,0 M10,0 10,12"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript" src='js/jquery.min.js'></script>
<script type="text/javascript" src='js/index.js'></script>

</body>
</html>