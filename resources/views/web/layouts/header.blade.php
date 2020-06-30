<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php中文网</title>
<meta name="keywords" content="PHP中文网，php语言，Linux,MySQL">
<meta name="description" content="网站描述">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon"  href="{{URL::asset('/web/images/favicon.ico')}}" >
<link href="{{URL::asset('web/css/base.css')}}" rel="stylesheet">
<link href="{{URL::asset('web/css/index.css')}}" rel="stylesheet">
<link href="{{URL::asset('web/css/m.css')}}" rel="stylesheet">
<link href="{{URL::asset('web/css/login.css')}}" rel="stylesheet">
<link href="{{URL::asset('web/css/reg.css')}}" rel="stylesheet">
<script src="{{URL::asset('web/js/jquery.min.js')}}" ></script>
<script src="{{URL::asset('web/js/hc-sticky.js')}}"></script>
<script src="{{URL::asset('web/js/comm.js')}}"></script>

<!--[if lt IE 9]>
<script src="/style/js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header id="header">
  <div class="navbar">
    <div class="topbox">
      <p class="welcome">PHP是一种流行的通用脚本语言，特别适合web开发。</p>
       <div class="t_u">
             <a href="{{route('users_reg')}}" target="_blank" title="新用户注册">新用户注册</a> | <a href="{{route('users_login')}}" title="会员登录">会员登录</a>
       </div>
    </div>
  </div>
  <div class="header-navigation">
    <nav>
      <div class="logo"><a href="/">林林博客</a></div>
      <h2 id="mnavh"><span class="navicon"></span></h2>
      <ul id="starlist">
       <li class="selected"><a href="/" target="_blank">PHP发布</a> </li>
       <li ><a href="{{route('p_index')}}" id="" target="_blank">PHP应用</a></li>
       <li class="menu"><a href="{{route('n_index')}}" id="">业界资讯</a>
            <ul class="sub">
              <li><a href="#">编程语言资讯</a></li>
              <li><a href="#">行业资讯</a></li>
              <li><a href="#">综合资讯</a></li>
             </ul>
          </li>
      <li class="menu"><a href="{{route('n_index')}}" target="_blank" id="">相关技术</a>
            <ul class="sub">
              <li><a href="#">MySQL</a></li>
              <li><a href="#">Nginx</a></li>
              <li><a href="#">Linux</a></li>
             </ul>
          </li>
        
          <li ><a href="https://www.php.net/" target="_blank" id="">PHP官网</a>
            <ul style="display:none">
              
            </ul>
          </li> 
          
      </ul>
       <div class="searchbox">
      <form action="/plus/search.php" method="post" name="searchform">
            <input type="hidden" name="kwtype" value="0" />
            <input class="input" placeholder="想搜点什么呢.."  name="q" type="text">
            <input class="search_ico" type="submit" name="Submit" value="" />
          </form>
          </div>
    </nav>
  </div>
</header>
<div class="wrapper">
 @yield('content')
 </div>
 <script src="{{URL::asset('web/js/common.js')}}"></script>
<footer>
  <div class="footer">
    <div class="wxbox">
      <ul>
        <li><span></span></li>
        <li><span></span></li>
      </ul>
    </div>
    <div class="bzjj">
      <h2>本站简介</h2>
      <p>林林个人博客，是一个站在PHP服务端之路的程序员个人网站。</p>
    </div>
    <div class="other">
      <h2>网站版权</h2>
      <p>未经授权禁止转载、摘编、复制或建立镜像，如有违反，追究法律责任。举报邮箱：3296364496@qq.com</p>
      <p>&nbsp;</p>
      <p><a href="http://www.beian.miit.gov.cn/" style="color: white;">苏ICP备 20039179</a></p>
    </div>
  </div>
</footer>
<a href="#" class="cd-top">Top</a>
</body>
</html>