@extends('web.layouts.header')
@section('sidebar')
    @parent
@endsection
@section('content')
<style>
.user-left {
 
    width: 200px;
    left: 0;
    top: -190px;
}
.user-left .user-pic {
    position: relative;
}
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
.user-left ul li {
    height: 48px;
    width: 160px;
    margin: 0 auto 8px;
}
.user-left ul a {
    position: relative;
    display: block;
    height: 48px;
    font-size: 16px;
    line-height: 48px;
    color: #787d82;
    padding-left: 64px;
    text-align: left;
}
.layui-icon {
    font-family: layui-icon!important;
    font-size: 16px;
    font-style: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>
<div class="layui-col-md2 user-left"><div class="user-pic"><div class="user-pic-bg"></div><img class="img" src="/static/images/user_avatar.jpg" alt="林林"><div class="user-js-add-follow " data-id="677228" title="关注他"><i class="layui-icon layui-icon-add-1"></i><div class="user-follow-me "><span class="title">关注他</span><p class="content">关注后可及时了解他的动态信息</p><i class="layui-icon layui-icon-up"></i></div></div></div><ul><li><a href="/member/677228.html" class="active"><i class="layui-icon"></i><span>主页</span><b class="icon-drop_right"></b></a></li><li><a href="/member/677228/courses.html"><i class="layui-icon"></i><span>课程</span><b class="icon-drop_right"></b></a></li><li><a href="/member/677228/asks.html"><i class="layui-icon"></i><span>社区</span><b class="icon-drop_right"></b></a></li><li><a href="/member/677228/follows.html"><i class="layui-icon"></i>关注<b class="icon-drop_right"></b></a></li><li><a href="/member/677228/courses_note.html"><i class="layui-icon"></i><span>笔记</span><b class="icon-drop_right"></b></a></li><li><a href="/member/677228/blog.html"><i class="layui-icon"></i><span>博客</span><b class="icon-drop_right"></b></a></li><li><a href="/user/order.html"><i class="layui-icon layui-icon-rmb"></i><span>订单</span><b class="icon-drop_right"></b></a></li></ul></div>

@endsection