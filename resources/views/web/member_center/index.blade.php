@extends('web.layouts.header')
@section('content')
<link href="{{URL::asset('web/css/center.css')}}" rel="stylesheet">
<div class="centers_m">
	<!--清除浮动-->
    <div class="clear_sm"></div>
	<!--left-->
    <div class="centers_ml">
    	<!--头像-->
        <div class="center_header">
        	<a href="#"><img src="{{URL::asset('/web/images/littletx.png')}}"></a>
            <em>您好，<font>admin</font></em>
        </div>
        <!--列表go-->
        <div class="centers_listm">
        	<div class="centers_listm_one">
            	<img src="{{URL::asset('/web/images/zshy.png')}}">
                <em>会员中心</em>
            </div>
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="{{URL::asset('/web/images/shezhi.png')}}">
                <em>资料管理</em>
                <b></b>
            </div>
            <span class="gjszmdm">
                <a href="#" class="center_in_self"><font>信息资料</font></a>
             
            </span>
          
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="{{URL::asset('/web/images/wdssc.png')}}">
                <em>收藏管理</em>
                <b></b>
            </div>
            <span class="gjszmdm">
            	<a href="#" class="center_in_self"><font>文章收藏</font></a>
            </span>    

        </div>
        <script type="text/javascript">
		$(function(){
			$(".centers_listm_one_in").click(function(){
			$(this).next(".gjszmdm").slideToggle().siblings("gjszmdm").slideUp()
			});
		})
		</script>
    </div>
    <!--right-->
    <div class="centers_mr">
    <h1 class="welcom_tm">欢迎您，超级会员     <font>admin</font>！您上次登录时间为 2016-10-28 14:23</h1>
    <!--一条开始-->
    	<div class="public_m1">
        	<div class="public_m2">资料管理</div>
            <!--照片和内容-->	
            <div class="zp_nrm">
            	<!--left-->
                <div class="zp_nrm_l">
                	<img src="{{URL::asset('/web/images/bigtx.png')}}">
                    <a href="#">更换头像</a>
                </div>
                <!--right-->
                <div class="zp_nrm_r">
                	<p><em>用户名：</em><i>赵大宝</i></p>
                    <p><em>手机号：</em><i>15554465535</i><a href="#">修改号码</a>
                    <p><em>性别：</em><input type="radio" name="sex" class="sex_m"><i>保密</i><input type="radio" name="sex" class="sex_m"><i>男</i><input type="radio" name="sex" class="sex_m"><i>女</i></p>
                    <a href="#" class="public_m3">保存修改</a>
                </div>
            </div>
        </div>
 

    <!--一条开始-->
    	<div class="public_m1">
        	<div class="public_m2">登录密码修改</div>
            <!--提示信息-->	
            <div class="tip_notem">
            	<ul>
                	<li>1.请牢记登录密码</li>
                    <li>2.如果丢失密码，可以通过绑定的手机或邮箱找到</li>
                </ul>
            </div>
            <div class="public_m4">
            	<p>
                	<em>原密码：</em>
                    <input type="text" style=" height:23px; border:1px solid #eaeaea; width:140px">
                </p>
                <p>
                	<em>新的密码：</em>
                    <input type="text" style=" height:23px; border:1px solid #eaeaea; width:140px">
                </p>
                <p>
                	<em>确认密码：</em>
                    <input type="text" style=" height:23px; border:1px solid #eaeaea; width:140px">
                </p>
                <a href="#" class="public_m3">确认修改</a>
            </div>
        </div>  

  
    <!--一条开始-->
    	<div class="public_m1">
        	<div class="public_m2">我的消息</div>
            
            <!--充值提现-->
            <div class="chongzhi_htxm">
            	<a href="#">我的收藏<font>(0)</font></a>
            </div>
            <!--全选和删除-->
            <div class="chice_allm">
            	<input type="checkbox">
                <i>全选</i>
                <span>删除</span>
            </div>
            <!--一个订单信息-->
            <div class="public_m5">
            	<table border="0" cellspacing="0" cellpadding="0">
                	<tbody>
						<tr style=" border-bottom:1px solid #000">       
                        	<th class="olist1">发信人</th>       
                            <th class="olist2">标题</th>       
                            <th class="olist3">时间</th>		
                            <th class="olist4">操作</th>		
                        </tr>	
						<tr>		
						  	<td><a href="#">木木小店</a></td>	 
							<td>吃饭了么...</td>		
							<td>2016/06/06 20:30</td>
                            <td><a href="#" style=" margin-right:6px">查看</a><a href="#">删除</a></td>
                        </tr>
                        <tr>		
						  	<td><a href="#">木木小店</a></td>	 
							<td>吃饭了么...</td>		
							<td>2016/06/06 20:30</td>
                            <td><a href="#" style=" margin-right:6px">查看</a><a href="#">删除</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--当没有东西时的东西-->
            <div class="public_m6">
            	<img src="images/danmgydxm.png">
            </div>
        </div>

    
                                                   
    </div>
</div>
@endsection