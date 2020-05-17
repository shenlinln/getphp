@extends('web.layouts.header')
@section('sidebar')
    @parent
@endsection
@section('content')
  <main>
    <h2 class="place">您现在的位置是：<a href='http://localhost/'>主页</a> > <a href='/seo/'>SEO基础</a> > <a href='/SEOzixun/'>SEO资讯</a> > </h2>
    <div class="infosbox">
      <div class="newsview">
        <h3 class="news_title">PHP 7.4.6已发布</h3>
        <div class="bloginfo">
          <ul>
            <li class="author">php发布 </li>
            <li class="lmname"><a href="/SEOzixun/">SEO资讯</a></li>
            <li class="timer">2019-03-19</li>
            <li class="view"><script src="/plus/count.php?view=yes&aid=196&mid=1" type='text/javascript' language="javascript"></script>人已阅读</li>
          </ul>
        </div>
        <!--<div class="tags"></div>-->
        <div class="news_about">
        <!-- 简介 -->
                       简介
        </div>
        <div class="news_content">
         <!-- 内容 -->
         PHP开发团队宣布PHP 7.4.6立即可用。这是一个安全发行版，其中还包含几个bug修复。
                          鼓励所有PHP 7.4用户升级到这个版本。
有关PHP 7.4.6的源代码下载，请访问我们的下载页面，Windows源代码和二进制文件可以在Windows .php.net/download/上找到。变更列表记录在变更日志中。
当前稳定的PHP 7.4.6 (Changelog)
php-7.4.6.tar。bz2 (sig) [12,429Kb] 2020年5月14日
a6ed9475695d2056322a3f2c00fee61a122a7fce138a0e25694320c5dd1d2348
php-7.4.6.tar.gz (sig) [16,115Kb] 2020年5月14日
2 a37bab4e308c4e3867083137b7cce4a3f1d996ae231b383c1a83609cec3fed0
php-7.4.6.tar。xz (sig) [10,044Kb] 2020年5月14日
d740322f84f63019622b9f369d64ea5ab676547d2bdcf12be77a5a4cffd06832
Windows操作系统下载
        </div>
      </div>
      <div class="share">
        <p class="diggit"><a href="/SEOzixun/">返回栏目</a></p>
      </div>
      <div class="nextinfo">
        <p>上一篇：<a href='/SEOzixun/195.html'>seo入门需要多久？学seo入门在哪学靠谱？</a> </p>
        <p>下一篇：没有了 </p>
      </div>
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
          <li><a href="/SEOzixun/195.html" title="seo入门需要多久？学seo入门在哪学靠谱？">seo入门需要多久？学seo入门在哪学靠谱？</a></li>

        </ul>
      </div>
      <div class="news_pl">
        <h2>文章评论</h2>
        <div class="gbko"><!-- //主模板必须要引入/include/dedeajax2.js -->
<a name='postform'></a>
<div class="mt1">
  <dl class="tbox">
    <dd>
      <div class="dede_comment_post">
        <form action="#" method="post" name="feedback">
          <input type="hidden" name="dopost" value="send" />
          <input type="hidden" name="comtype" value="comments">
          <input type="hidden" name="aid" value="196" />
          <input type="hidden" name="fid" id='feedbackfid' value="0" />
          <div class="clr"></div>
          <div class="dcmp-content">
            <textarea cols="60" name="msg" rows="5" class="ipt-txt"></textarea>
          </div>
          <!-- /dcmp-content -->
          <div class="dcmp-post"><!--未登陆-->
            <div class="dcmp-userinfo" id="_ajax_feedback">
              <label class="yzm"/>验证码: </label>
              <input type="text" name="validate" size="4" class="ipt-txt" style="text-transform:uppercase;"/>
              <img id="vdimgck" align="absmiddle" onClick="this.src=this.src+'?'" style="cursor: pointer;" alt="看不清？点击更换" src="/include/vdimgck.php"/>
              <input type="checkbox" name="notuser" id="dcmp-submit-guest" />
              <label for="dcmp-submit-guest" />
              匿名?
              </label>
            </div>
            
            <div class="dcmp-submit">
              <button type="button" onClick='PostComment()' id="imageField">发表评论</button>
              <p class="comment-sm">注：网友评论仅供其表达个人看法，并不代表本站立场。</p>
            </div>
          </div>
        </form>
      </div>
    </dd>
  </dl>
</div>
<!-- //评论表单区结束 --> 

<!-- //评论内容区 --> 
<a name='commettop'></a>
<div class="mt1">
  <dl class="tbox">
    <!-- //这两个ID的区块必须存在，否则JS会出错 -->
    <dd id='commetcontentNew'></dd>
    <dd id='commetcontent'></dd>
  </dl>
</div>
<!--
//由于评论载入时使用异步传输，因此必须在最后一步加载（DIGG和评论框须放在评论内容前面）
//如果一定需要提前的把myajax.SendGet改为myajax.SendGet2，但可能会引起页面阻滞
--> 
<script language='javascript'>
function LoadCommets(page)
{
		var taget_obj = document.getElementById('commetcontent');
		var waithtml = "<div style='line-height:50px'><img src='/images/loadinglit.gif' />评论加载中...</div>";
		var myajax = new DedeAjax(taget_obj, true, true, '', 'x', waithtml);
		myajax.SendGet2("/plus/feedback_ajax.php?dopost=getlist&aid=196&page="+page);
		DedeXHTTP = null;
}

function PostComment()
{
		var f = document.feedback;
		var nface = '6';
		var nfeedbacktype = 'feedback';
		var nvalidate = '';
		var nnotuser = '';
		var nusername = '';
		var npwd = '';
		var taget_obj = $DE('commetcontentNew');
		var waithtml = "<div style='line-height:30px'><img src='/images/loadinglit.gif' />正在发送中...</div>";
		if(f.msg.value=='')
		{
			alert("评论内容不能为空！");
			return;
		}
		if(f.validate)
		{
			if(f.validate.value=='') {
				alert("请填写验证码！");
				return;
			}
			else {
				nvalidate = f.validate.value;
			}
		}
		if(f.msg.value.length > 500)
		{
			alert("你的评论是不是太长了？请填写500字以内的评论。");
			return;
		}
		if(f.feedbacktype) {
			for(var i=0; i < f.feedbacktype.length; i++)
				if(f.feedbacktype[i].checked) nfeedbacktype = f.feedbacktype[i].value;
		}
		if(f.face) {
			for(var j=0; j < f.face.length; j++)
				if(f.face[j].checked) nface = f.face[j].value;
		}
		if(f.notuser.checked) nnotuser = '1';
		if(f.username) nusername = f.username.value;
		if(f.pwd) npwd = f.pwd.value;
		
		var myajax = new DedeAjax(taget_obj, false, true, '', '', waithtml);
		myajax.sendlang = 'utf-8';
		myajax.AddKeyN('dopost', 'send');
		myajax.AddKeyN('aid', '196');
		myajax.AddKeyN('fid', f.fid.value);
		myajax.AddKeyN('face', nface);
		myajax.AddKeyN('feedbacktype', nfeedbacktype);
		myajax.AddKeyN('validate', nvalidate);
		myajax.AddKeyN('notuser', nnotuser);
		myajax.AddKeyN('username', nusername);
		myajax.AddKeyN('pwd', npwd);
		myajax.AddKeyN('msg', f.msg.value);
		myajax.SendPost2('/plus/feedback_ajax.php');
		f.msg.value = '';
		f.fid.value = 0;
		if(f.validate)
		{
			if($DE('validateimg')) $DE('validateimg').src = "/include/vdimgck.php?"+f.validate.value;
			f.validate.value = '';
		}
}
function quoteCommet(fid)
{
	document.feedback.fid.value = fid;
}
LoadCommets(1);
</script><!-- //评论内容区结束 --> 
</div>
      </div>
    </div>
  </main>
  @include('web.layouts.offside')
@endsection