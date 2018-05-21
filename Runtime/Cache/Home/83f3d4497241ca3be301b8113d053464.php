<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>注册</title>
    <meta charset=utf-8"utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="coincola, bitcoin, Bitcoin, OTC, CoinCola, 比特币,  场外交易, 比特币买卖, p2p, 区块链, blockchain, localbitcoins">
    <meta name="description" content="一个自由买卖安全可信赖的比特币交易平台">
    <link rel="shortcut icon" href="/static/imgs/favicon.ico" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="coincola, bitcoin, Bitcoin, OTC, CoinCola, 比特币,  场外交易, 比特币买卖, p2p, 区块链, blockchain, localbitcoins">
    <meta name="description" content="一个自由买卖安全可信赖的比特币交易平台">
    <link rel="shortcut icon" href="/static/imgs/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/Public/static/css/common_2aed4bc732.css" >
    <link rel="stylesheet" href="/Public/static/css/signup_300e4ac5b5.css" >
    <link rel="stylesheet" type="text/css" href="/Public/static/iconfont/iconfont.css">
    <script src="/Public/jquery/jquery.min.js"></script>
    <script src="/Public/layui/layer.js"></script>
</head>
<body class="">
<div class="header header-xl">
    <div class="container clear-float">
        <div class="logo-wrap">
            <img src="/Public/static/imgs/logo.png">
        </div>
        <div class="nav clear-float fl">
            <a class="nav-item" href="/" >首页</a>
            <a class="nav-item" href="/Buy">购买</a>
            <a class="nav-item" href="/Sell" >出售</a>
        </div>
        <div class="clear-float fr login-box login-panel">
            <a class="user-action" href="/Login/phone"><span class="sp iconfont">&#xe6c9;</span><span class="va-middle">登录</span></a>
        </div>
        <div class="opt">
            <div class="opt-line"></div>
            <div class="opt-line"></div>
            <div class="opt-line"></div>
        </div>
    </div>
</div>
<div class="pt-20 login-form clear container">
    <div class="form-cont">
        <div class="form-title mb-20">
            <span class="form-name">手机注册 </span>
        </div>

        <div class="input-cont new-username">
            <!-- <span class="icon form-username"></span> -->
            <input class="input" validate check-type="username" type="text" name="name" placeholder="请输入英文用户名" onblur="regusername()">
            <div class="form-tips"></div>
            <div class="error-msg">请输入4-16位英文用户名</div>
        </div>
        <div class="input-cont">
            <!-- <span class="icon form-location"></span> -->
            <select class="select" name="country_code" searchable>
                <option  selected  value="86">中国 86</option>
            </select>
        </div>
        <div class="input-cont new-phone">
            <!-- <span class="icon form-phone"></span> -->
            <input class="input" validate type="phone" check-type="phone" name="mobile" placeholder="请输入手机号码" onblur="regusermobile()">
            <div class="form-tips"></div>
            <div class="error-msg">手机号格式错误</div>
        </div>
        <div class="input-cont new-token">
            <!-- <span class="icon form-token"></span> -->
            <input class="input" validate check-type="one_time_code" type="number" name="one_time_code" placeholder="请输入验证码" onblur="regusecoder()">
            <div class="form-tips"></div>
            <div class="error-msg">验证码长度为6</div>
            <button class=" link get-token" id="sendcode" onclick="SendCode()" >发送验证码</button>
        </div>
        <div class="input-cont">
            <!-- <span class="icon form-password"></span> -->
            <input class="input" validate onfocus="this.type='password'" check-type="password" name="password" autocomplete="off" placeholder="请输入6-16位的登录密码" onblur="regusepassword()">
            <div class="form-tips"></div>
            <div class="error-msg">请输入6-16位字母、数字或组合</div>
        </div>
        <div class="input-cont mb-30">
            <input type="checkbox" class="checkbox" name="confirm">
            <label class="label">我已阅读并接受<a href="<?php echo U('User/protocol');?>" class=link>《产品服务条款》</a></label>
        </div>
        <a href="javascript:;" class="btn submit ">注册</a>
    </div>
</div>
<div class="footer">
    <div class="container">
        <ul class="link-box clear-float">
            <li><a href="<?php echo U('user/protocol');?>">使用协议</a></li>
            <li><a href="<?php echo U('user/question');?>">常见问题</a></li>
            <li><a href="<?php echo U('user/rate');?>">费率说明</a></li>
        </ul>
    </div>
    <p class="copyright">Copyright © 2018 -  All Rights Reserved</p>
</div>
<script src="https://cdn.bootcss.com/fastclick/1.0.6/fastclick.min.js"></script>
<script type="text/javascript" src="/Public/static/js/main.js"></script>
</body>
</html>



</body>
</html>

<script>
    function regusername() {
        var mbtest_name = /^[a-zA-z]{4,16}$/;
        if (mbtest_name.test($("input[name=name]").val())) {
            $("input[name=name]").next().next().css('display','none');
            return true;
        } else {
            $("input[name=name]").next().next().css('display','block');
           return false;
        }
    }
    function regusermobile() {
        var mbtest_mobile = /^1\d{10}$/;
        if (mbtest_mobile.test($("input[name=mobile]").val())) {
            $("input[name=mobile]").next().next().css('display','none');
            return true;
        } else {
            $("input[name=mobile]").next().next().html('手机号格式错误');
            $("input[name=mobile]").next().next().css('display','block');
            return false;
        }
    }
    function regusecoder() {
        var mbtest_coder = /^\d{6}$/;
        if (mbtest_coder.test($("input[name=one_time_code]").val())) {
            $("input[name=one_time_code]").next().next().css('display','none');
            return true;
        } else {
            $("input[name=one_time_code]").next().next().css('display','block');
            return false;
        }
    }
    function regusepassword() {
        var mbtest_password = /^[a-zA-Z0-9]{6,21}$/;
        if (mbtest_password.test($("input[name=password]").val())) {
            $("input[name=password]").next().next().css('display','none');
            return true;
        } else {
            $("input[name=password]").next().next().css('display','block');
            return false;
        }
    }
    function SendCode() {
        if(!regusermobile()){
            return false;
        }
        var mobile=$("input[name=mobile]").val();
        $.post("<?php echo U('Signup/sendphone');?>",{mobile:mobile},function(data) {
            if (data.status == 1) {
                layer.msg(data.content, {
                    icon: 1
                });
                $('#sendcode').attr("disabled", "disabled");
                var obj = $('#sendcode');
                var wait = 120;
                var interval = setInterval(function () {
                    obj.html(wait + '秒再次发送');
                    wait--;
                    if (wait < 0) {
                        clearInterval(interval);
                        $('#sendcode').attr("disabled", false);
                        obj.html('获取验证码');
                    }
                    ;
                }, 1000);
            } else {
                layer.msg(data.content, {
                    icon: 2
                });
            }
        }, "json");
    }


    $(".submit").click(function(){
       var name=$("input[name=name]").val();
       var country_code=$("[name=country_code]").val();
       var mobile=$("input[name=mobile]").val();
       var coder=$("input[name=one_time_code]").val();
       var password=$("input[name=password]").val();
       var ref='<?php echo ($ref); ?>';

        if(!regusername()){
            return false;
        }
        if(!regusermobile()){
            return false;
        }
        if(!regusecoder()){
            return false;
        }
        if(!regusepassword()){
            return false;
        }

        if(!$('[name=confirm]').is(':checked')) {
            layer.alert('请勾选服务条款');
            return false;
        }

        $.post("<?php echo U('Signup/register');?>",{name:name,country_code:country_code,mobile:mobile,coder:coder,password:password,ref:ref},function(data){
              if(data.status){
                  layer.msg(data.info);
                  setTimeout("location.href='/Login/phone'",1000);
              }else{
                  layer.msg(data.info);
              }
        },'json')

    });

      $('.opt').on('click',function(){
        console.log(1)
        $(this).siblings('.nav').slideToggle()
    })

</script>