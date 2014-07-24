<!DOCTYPE html>
<html>
    <head>
        <title>后台首页</title>
        <meta charset="UTF-8">
        {{HTML::style('static/css/common.css')}}
        {{HTML::style('static/css/manage.css')}}
        {{HTML::script('static/js/jquery-1.11.0.min.js')}}
    </head>
    <body>
        <div id="header" class=" clr">
            <div id="logo" class="lft">
                管理系统后台
            </div>
            <div id="login" class='rgt'>
                <span class=mid> 2014/07/04 08:00 星期四</span>
                <img class="mid" src="{{asset('static/images/user2.png')}}"> <span class="mid">Admin</span>
                <img class="mid" src="{{asset('static/images/power.png')}}"> <span class="mid">退出</span>
            </div>
        </div><!--end header-->
        <div id="content" class="clr">
            <div id="sidebar" class="lft">
                <div id="userinfo">
                    <img class="mid" src="{{asset('static/images/user.png')}}">
                    <div class="inb">管理员</div>
                </div>
                <dl>
                    <dt>客户数据分析</dt>
                    <dd>
                        <ul>
                            <li class="select"><a href="#">渠道数据分析</a></li>
                            <li><a href="#">客户统计分析</a></li>
                            <li><a href="#">渠道数据分析</a></li>
                            <li><a href="#">客户统计分析</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl>
                    <dt>客户数据分析</dt>
                    <dd class=hide>
                        <ul>
                            <li><a href="#">渠道数据分析</a></li>
                            <li><a href="#">客户统计分析</a></li>
                            <li><a href="#">渠道数据分析</a></li>
                            <li><a href="#">客户统计分析</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl>
                    <dt>客户数据分析</dt>
                    <dd class='hide'>
                        <ul>
                            <li><a href="#">渠道数据分析</a></li>
                            <li><a href="#">客户统计分析</a></li>
                            <li><a href="#">渠道数据分析</a></li>
                            <li><a href="#">客户统计分析</a></li>
                        </ul>
                    </dd>
                </dl>
            </div><!--end sidebar-->
            <div id="main" class="rgt">
                 @yield('main')
            </div><!--end main-->
        </div><!--end content-->
        <script>
            $(function(){
                //表格奇偶行变色
                $("table tr:odd").addClass("odd");
                $("table tr:even").addClass("even")

        	    //手拉琴菜单
            	var lastIndex=0;
                var lastStatus=true;
            	$('#sidebar dl dt').click(function(){
            		var _self = $(this).parent(0);
            		var index = $('#sidebar dl').index(_self);
            		if( lastIndex == index ) {
                        if(lastStatus){
                            $(_self).find('dd').slideUp();
                        }else{
                            $(_self).find('dd').slideDown();
                        }
                        lastStatus=!lastStatus;
                        return null;
                    }
                    lastIndex = index;
                    lastStatus=true;
                    $(_self).siblings('dl').find('dd').slideUp();
                    $(_self).find('dd').slideDown();
            	});
                $('#sidebar dl dd li').click(function(){
                    $('#sidebar dl dd li').removeClass("select");
                    $(this).addClass("select");
                });

            });

        </script>
    </body>
</html>
