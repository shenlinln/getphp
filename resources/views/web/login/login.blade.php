@extends('web.layouts.header')
@section('content')
<div class="reg_main">
    <div class="reg_top">用户登录</div>
    <div class="reg_box">
        <form action="https://www.php1.cn/?s=user/login/checkLogin&from=https%3A%2F%2Fwww.php1.cn%2F" method="post">
            <div class="main_left">
                <div class="item_box">
                    <div class="type">电子邮箱:</div>
                    <div class="value"><input type="text" name="user_name" id="user_name" class="txt" /></div>
                </div>

                <div class="item_box">
                    <div class="type">登录密码:</div>
                    <div class="value"><input type="password" name="pass_word" id="pass_word" class="txt" /></div>
                </div>

                <div class="item_box">
                    <div class="type">验证码:</div>
                    <div class="value"><input type="text" name="code" id="code" class="code" value=""/> &nbsp;<a href="javascript:;"> <img src='http://www.php1.cn/?s=vcode/index' onclick="this.src=this.src+'&'+Math.random()" /></a></div>
                </div>
                <div class="item_box">
                    <div class="type"></div>
                    <div class="value"><input type="submit" class="bt" value="   &nbsp;&nbsp;立即登录 &nbsp; &nbsp; "/></div>
                </div>

            </div>
        </form>
        <div class="main_right">

            <div class="tips">我们诚挚的邀请您加入<br/>PHP1.CN 全球最大中文PHP开发社区！</div>
            <div class="box">
                还没有账户：<a href="https://www.php1.cn/?s=user/reg/index">马上注册</a><br/><br/>
                            </div>

        </div>

    </div>
</div>
@endsection