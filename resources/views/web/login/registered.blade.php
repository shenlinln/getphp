@extends('web.layouts.header')
@section('content')
<div class="reg_main">
    <div class="reg_top">新用户注册</div>
    <div class="reg_box">
       
            <div class="main_left">
               

                <div class="item_box">
                   
                    <div class="value"><input type="text" placeholder="请输入昵称，至少2个字符，至多20个"  title="昵称，至少2个字符，至多20个字符" name="nickname" id="nickname" class="txt" /><label id="Nickname_Message"></label></div>
                </div>
               <div class="item_box">
                   
                    <div class="value"><input type="text" placeholder="请输入手机号码" title="请输入手机号码" name="phone_number" id="phone_number" class="txt" /><label id="Phone_Number_Message"></label></div>
                </div>
                <div class="item_box">
                   
                    <div class="value"><input type="password" placeholder="请输入密码，字母或特殊符号 + 数字" title="请输入密码，字母或特殊符号 + 数字"  name="password" id="password" class="txt" /><label id="Code_Message"></label></div>
                </div>
                <div class="item_box">
                    <div class="value">
                    <input id="verification" type="text" placeholder="请输入短信验证码" title="请输入短信验证码" name="verification" class="vfion" />
                     <input type="button"  value="获取验证码" id="phone_required" class="get_vfion"/></div>
                     <input type="hidden" id="msg_id" name="msg_id">
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