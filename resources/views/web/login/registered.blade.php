@extends('web.layouts.header')
@section('content')
<div class="reg_main">
    <div class="reg_top">新用户注册</div>
    <div class="reg_box">
       
            <div class="main_left">
                <label style="font-size:7px;color:red;">提示:注册成功后需激活邮箱账户可以正常使用</label> 
                <div class="item_box">
                    <div class="type">电子邮箱:</div>
                    <div class="value"><input type="text" name="account_number" id="account_number" class="txt" /><label id="Account_number_Message"></label></div>
                </div>
                <div class="item_box">
                    <div class="type">我的昵称:</div>
                    <div class="value"><input type="text" name="nickname" id="nickname" class="txt" /><label id="Nickname_Message"></label></div>
                </div>
                <div class="item_box">
                    <div class="type">登录密码:</div>
                    <div class="value"><input type="password" name="password" id="password" class="txt" /><label id="Password_Message"></label></div>
                </div>
                <div class="item_box">
                    <div class="type">确认密码:</div>
                    <div class="value"><input type="password" name="confirm_password" id="confirm_password" class="txt" /><label id="Confirm_Password_Message"></label></div>
                </div>
                <div class="item_box">
                    <div class="type">验证码:</div>
                    <div class="value">
                    <input id="verification" type="text" name="verification" class="txt"/>
                    <img src="/captcha" onclick="this.src='/captcha?'+Math.random();" class="l21"/><label id="Verification_Message"></label></div>
                </div>
                <div class="item_box_bux">
                    <div class="type_bux"></div>
                    <div class="value_bux">
                    <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                    <input type="button" id="register" class="bt" value=" &nbsp;&nbsp;提交注册 &nbsp; &nbsp; "/></div>
                </div>
            </div>
        <div class="main_right">
            <div class="tips">我们诚挚的邀请您加入<br/>GETPHP.CN这里是最全的PHP资讯网站！</div>
            <div class="box">  已有账户：<a href="{{route('users_login')}}">直接登录</a><br/><br/></div>
        </div>
    </div>
</div>


@endsection