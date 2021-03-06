<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="UTF-8">
        {{HTML::style('static/css/common.css')}}
        {{HTML::style('static/css/main.css')}}
        {{HTML::script('static/js/jquery-1.11.0.min.js')}}
    </head>
    <body>
        <div id="options">
            <ul class="rnk">
                <li>文章管理</li>
            </ul>
        </div>
        <div class="sheet">
            <div class="cpt">添加文章分类</div>
            <table class="list">
                <tr>
                    <th>上级栏目</th>
                    <th>栏目名称</th>
                    <th>栏目标示</th>
                    <th>栏目类型</th>
                    <th>栏目序号</th>
                    <th>栏目链接</th>
                    <th>显示类别</th>
                    <th>操作</th>
                </tr>
                <tr>
                    <form method="post" action="{{URL::to('manage/artcat')}}">
                        <td>
                            <select name="parent">
                                <option value="0">无</option>
                                @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td><input name="title" type="text" size="12"></td>
                        <td><input name="symbol" type="text" size="12"></td>
                        <td>
                            <select name="type">
                                <option value="cover">封面</option>
                                <option value="art">列表</option>
                                <option value="channel">频道</option>
                            </select>
                        </td>
                        <td><input name="index" type="text" value="0" size="2"></td>
                        <td><input name="url" type="text" size="36"></td>
                        <td>
                            <select name="show">
                                <option value="forbid">禁用</option>
                                <option value="normal">普通</option>
                                <option value="nav">导航</option>
                            </select>
                        </td>
                        <td>
                            <input name="addcat" type="hidden" value="1">
                            <input class="btn" type="submit" value="提交">
                        </td>
                </form>
                </tr>
            </table>
        </div><!--end .sheet-->
        <div class="sheet">
            <div class="cpt">文章分类列表</div>
            <table class="list">
                <tr>
                    <th><input type="checkbox">全选</th>
                    <th>栏目ID</th>
                    <th>上级栏目</th>
                    <th>栏目名称</th>
                    <th>栏目标示</th>
                    <th>栏目类型</th>
                    <th>栏目序号</th>
                    <th>栏目链接</th>
                    <th>显示类别</th>
                    <th>操作</th>
                </tr>
                @foreach($cats as $cat)
                <tr>
                    <td><input type="checkbox"></td>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->parent}}</td>
                    <td>{{$cat->title}}</td>
                    <td>{{$cat->symbol}}</td>
                    <td>{{$cat->type}}</td>
                    <td>{{$cat->index}}</td>
                    <td>{{$cat->url}}</td>
                    <td>{{$cat->show}}</td>
                    <td>
                        <a class="btn red" href="#">删除</a>
                        <a class="btn orange" href="#">修改</a>
                        <a class="btn green" href="#">添加子栏目</a>
                        <a class="btn cyan" href="#">添加文档</a>
                        <a class="btn cyan" href="#">管理文档</a>
                    </td>
                </tr>
                @endforeach
                <tr>
                <tr>
                    <td colspan="10" class="operate">
                        <div class="inb lft">
                            全选 批量 删除
                        </div>
                        <div class="inb rgt">
                            <a href="{{$cats->getUrl(1)}}" class='btn'>首页</a>
                            <a href="{{$cats->getUrl(max($cur-1,1))}}" class='btn'>&lt;</a>
                            @for($i=$min;$i<$cur;$i++)
                            <a href="{{$cats->getUrl($i)}}" class='btn'>{{$i}}</a>
                            @endfor
                            <a href="#" class='btn select'>{{$cats->getCurrentPage()}}</a>
                            @for($i=$cur+1;$i<=$max;$i++)
                            <a href="{{$cats->getUrl($i)}}" class='btn'>{{$i}}</a>
                            @endfor
                            <a href="{{$cats->getUrl(min($cur+1,$last))}}" class='btn'>&gt;</a>
                            <a href="{{$cats->getUrl($last)}}" class='btn'>尾页</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div><!--end .sheet-->
        <script>
              $(function(){
                //表格奇偶行变色
                $("table tr:odd").addClass("odd");
                $("table tr:even").addClass("even");
            });
        </script>
    </body>
</html>
