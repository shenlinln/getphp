@extends('web.layouts.header')
@section('content')

  <main>
    <!--banner begin-->
    <div class="banner">
      <div id="banner" class="fader">
        <li class="slide" ><a href="/seo/184.html" title="画面莫名喜感 交警巡查拿下一车“神" target="_blank"><img src="http://k67.zzidc.info/uploads/allimg/c170622/14b12130912P-1W3Q.jpg" alt="画面莫名喜感 交警巡查拿下一车“神"><span class="imginfo">画面莫名喜感 交警巡查拿下一车“神</span></a></li>
<li class="slide" ><a href="/seo/185.html" title="[新春走基层]冬闲种大棚 蘑菇撑起“" target="_blank"><img src="http://k67.zzidc.info/uploads/allimg/c170622/14b121310UD0-206293.jpg" alt="[新春走基层]冬闲种大棚 蘑菇撑起“"><span class="imginfo">[新春走基层]冬闲种大棚 蘑菇撑起“</span></a></li>
<li class="slide" ><a href="/seo/183.html" title="北京首次抽检京Ⅵ汽油 存质量问题将" target="_blank"><img src="http://k67.zzidc.info/uploads/allimg/c170622/14b1213035Z50-122N1.jpg" alt="北京首次抽检京Ⅵ汽油 存质量问题将"><span class="imginfo">北京首次抽检京Ⅵ汽油 存质量问题将</span></a></li>

        <div class="fader_controls">
          <div class="page prev" data-target="prev">&lsaquo;</div>
          <div class="page next" data-target="next">&rsaquo;</div>
          <ul class="pager_list">
          </ul>
        </div>
      </div>
    </div>
    <!--banner end-->
    <div class="bloglist">
      <ul>
      <!--  每页显示十五条 -->
      @foreach($data as $key => $value)
         <li> <i class="blogpic"><a href="/SEOzixun/196.html" title="{{$value->title}}" target="_blank"><img src="http://k67.zzidc.info/images/defaultpic.gif" alt="seo是什么意思？小白通俗易懂篇"> </a></i>
          <dl>
            <dt><a href="/SEOzixun/196.html" title="{{$value->title}}" target="_blank">{{$value->title}}</a></dt>
            <dd><span class="bloginfo">{{$value->introduction}}</span>
              <p class="timeinfo"><span class="lanmu"><a href="/SEOzixun/">发布时间</a></span><span class="date">{{date('Y-m-d',$value->release_time)}}</span></p>
              <a class="read" href="{{route('i_detail',['id' => $value->id])}}">阅读更多</a> </dd>
          </dl>
        </li>
     @endforeach   
      </ul>
    </div>
    <!--bloglist end--> 
  </main>
  @include('web.layouts.offside')
  <!--sidebar end--> 
@endsection