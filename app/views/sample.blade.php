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
                <li><a class="btn"  href="#">添加订单</a></li>
                <li><a class="btn select"  href="#">添加订单</a></li>
                <li><a class="btn" href="#">添加订单</a></li>

            </ul>
        </div>
        <div class="sheet">
            <div class="cpt">订单表</div>
            <table class="list">
                <tr>
                    <th>订单号</th>
                    <th>单价</th>
                    <th>日期</th>
                    <th>数目</th>
                    <th>金额</th>
                    <th>状态</th>
                </tr>
                <tr>
                    <td>1212110833</td>
                    <td>$25.2</td>
                    <td>1990/01/07</td>
                    <td>500,000</td>
                    <td>$1，010，000</td>
                    <td>入库</td>
                </tr>
                <tr>
                    <td>1212110833</td>
                    <td>$25.2</td>
                    <td>1990/01/07</td>
                    <td>500,000</td>
                    <td>$1，010，000</td>
                    <td>入库</td>
                </tr>
                <tr>
                    <td>1212110833</td>
                    <td>$25.2</td>
                    <td>2014/10/31</td>
                    <td>600,000</td>
                    <td>$1，512，000</td>
                    <td>入库</td>
                </tr>
                <tr>
                    <td colspan="6" class="operate">
                        <div class="inb lft">
                            全选 批量 删除
                        </div>
                        <div class="inb rgt">
                            <a href="#" class='btn'>首页</a>
                            <a href="#" class='btn'>&lt;</a>
                            <a href="#" class='btn'>1</a>
                            <a href="#" class='btn'>2</a>
                            <a href="#" class='btn'>3</a>
                            <a href="#" class='btn'>&gt;</a>
                            <a href="#" class='btn'>尾页</a>
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
