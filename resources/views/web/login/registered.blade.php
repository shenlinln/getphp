@extends('web.layouts.header')
@section('content')
<div class="reg_main">
    <div class="reg_top">新用户注册</div>
    <div class="reg_box">
        <form action="https://www.php1.cn/?s=user/reg/post" method="post">
            <div class="main_left">
                <div class="item_box">
                    <div class="type">电子邮箱:</div>
                    <div class="value"><input type="text" name="u_email" id="u_email" class="txt" /></div>
                </div>
                <div class="item_box">
                    <div class="type">我的昵称:</div>
                    <div class="value"><input type="text" name="u_name" id="u_name" class="txt" /></div>
                </div>
                <div class="item_box">
                    <div class="type">登录密码:</div>
                    <div class="value"><input type="password" name="u_pwd" id="u_pwd" class="txt" /></div>
                </div>

                <div class="item_box">
                    <div class="type">验证码:</div>
                    <div class="value"><input type="text" name="code" id="code" class="code" value=""/> &nbsp; <a href="javascript:;"> <img src='https://www.php1.cn/?s=vcode/index' onclick="this.src=this.src+'&'+Math.random()" /></a></div>
                </div>
                <div class="item_box">
                    <div class="type"></div>
                    <div class="value"><input type="submit" class="bt" value="   &nbsp;&nbsp;提交注册 &nbsp; &nbsp; "/></div>
                </div>

            </div>
        </form>
        <div class="main_right">
            <div class="tips">我们诚挚的邀请您加入<br/>PHP1.CN 全球最大中文PHP开发社区！</div>
            <div class="box">
                已有账户：<a href="https://www.php1.cn/?s=user/login/index">直接登录</a><br/><br/>
                            </div>

        </div>

    </div>
</div>
@endsection