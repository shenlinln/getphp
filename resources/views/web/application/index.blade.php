@extends('web.layouts.header')
@section('content')
<main>
<!-- 每列显示15条 -->
    <h2 class="place">您现在的位置是：<a href="http://localhost/">主页</a> &gt; <a href="/yingxiaotuiguang/">营销推广</a> &gt; </h2>
    <div class="bloglist">
      <ul>
        <li> <i class="blogpic"><a href="#" title="成都“网红池”捞出数千硬币 捐给抗震英雄"><img src="#" alt="成都“网红池”捞出数千硬币 捐给抗震英雄"></a></i>
          <dl>
            <dt><a href="#" title="成都“网红池”捞出数千硬币 捐给抗震英雄" target="_blank"><b>成都“网红池”捞出数千硬币 捐给抗震英雄</b></a></dt>
            <dd><span class="bloginfo">头条新闻栏目的热点新闻系列,成都“网红池”捞出数千硬币 捐给抗震英雄...</span>
              <p class="timeinfo"><span class="lanmu"><a href="/yingxiaotuiguang/">营销推广</a></span><span class="date">2017-06-24</span></p>
              <a class="read" href="/yingxiaotuiguang/">阅读更多</a> </dd>
          </dl>
        </li> 
      </ul>
    </div>
    <!--bloglist end--> 
    <div class="pagelist"><ul><li>首页</li>
<li class="thisclass">1</li>
<li><a href="list_10_2.html">2</a></li>
<li><a href="list_10_2.html">下一页</a></li>
<li><a href="list_10_2.html">末页</a></li>
</ul></div>
  </main>
  @include('web.layouts.offside')

@endsection