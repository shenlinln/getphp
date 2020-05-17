<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php中文网</title>
<meta name="keywords" content="PHP中文网，php语言，Linux,MySQL">
<meta name="description" content="网站描述">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{URL::asset('css/web/base.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/web/index.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/web/m.css')}}" rel="stylesheet">
<script src="{{URL::asset('js/web/jquery.min.js')}}" ></script>
<script src="{{URL::asset('js/web/hc-sticky.js')}}"></script>
<script src="{{URL::asset('js/web/comm.js')}}"></script>
<!--[if lt IE 9]>
<script src="/style/js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header id="header">
  <div class="navbar">
    <div class="topbox">
      <p class="welcome">您好，欢迎您访问个人博客网站HTML5源码织梦模板，在这里，更是一个记录世界、时代的平台！</p>
      <div class="searchbox">
          <form action="/plus/search.php" method="post" name="searchform">
            <input type="hidden" name="kwtype" value="0" />
            <input class="input" placeholder="想搜点什么呢.."  name="q" type="text">
            <input class="search_ico" type="submit" name="Submit" value="" />
          </form>
      </div>
    </div>
  </div>
  <div class="header-navigation">
    <nav>
      <div class="logo"><a href="/">PHP中文网</a></div>
      <h2 id="mnavh"><span class="navicon"></span></h2>
      <ul id="starlist">
         
        <li class="selected"><a href="/" >PHP公告</a> </li>
        <li ><a href="/yingxiaotuiguang/" id="">PHP下载</a></li>
          <li class="menu"><a href="/seo/" id="">SEO基础</a>
            <ul class="sub">
            
              <li><a href="/wangzhanyouhua/">网站优化</a></li>
            
              <li><a href="/SEOzixun/">SEO资讯</a></li>
            
              <li><a href="/seojiaocheng/">SEO教程</a></li>
              
            </ul>
          </li><li ><a href="/shizhananli/" id="">实战案例</a>
            <ul style="display:none">
              
            </ul>
          </li><li ><a href="/wangluozixun/" id="">行业资讯</a>
            <ul style="display:none">
              
            </ul>
          </li><li ><a href="/guanyu/" id="">关于我</a>
            <ul style="display:none">
              
            </ul>
          </li> 
          
      </ul>
    </nav>
  </div>
</header>
 @yield('content')
<footer>
  <div class="footer">
    <div class="wxbox">
      <ul>
        <li><img src="/style/images/grwx.png"><span>我的微信</span></li>
        <li><img src="/style/images/wx.jpg"><span>微信公众号</span></li>
      </ul>
    </div>
    <div class="bzjj">
      <h2>本站简介</h2>
      <p>叶婷个人博客，是一个站在web前端设计之路的程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。</p>
    </div>
    <div class="other">
      <h2>网站版权</h2>
      <p>未经授权禁止转载、摘编、复制或建立镜像，如有违反，追究法律责任。举报邮箱：3296364496@qq.com</p>
      <p>&nbsp;</p>
      <p>备案号：皖ICP12345678 </p>
    </div>
  </div>
</footer>
<a href="#" class="cd-top">Top</a>
</body>
</html>