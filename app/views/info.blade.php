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
                <li>基本信息</li>
            </ul>
        </div>
        <div class="sheet">
            <div class="cpt">服务器信息</div>
            <table class="list">
                <tr>
                    <td>操作系统</td>
                    <td>{{php_uname("s")}}</td>
                    <td>系统用户</td>
                    <td>{{Get_Current_User()}}</td>
                    <td>PHP版本</td>
                    <td>{{PHP_VERSION}}</td>
                </tr>
                <tr>
                    <td>系统域名</td>
                    <td>{{$_SERVER["HTTP_HOST"]}}</td>
                    <td>服务引擎</td>
                    <td>{{ $_SERVER["SERVER_SOFTWARE"]}}</td>
                    <td>系统目录</td>
                    <td>{{$_SERVER["DOCUMENT_ROOT"]}}</td>
                </tr>
                <tr>
                    <td>已用内存</td>
                    <td>{{round(memory_get_peak_usage()/1024/1024,2)}}M</td>
                    <td>内存限制</td>
                    <td>{{ini_get("memory_limit")}}</td>
                    <td>上传限制</td>
                    <td>{{ini_get("upload_max_filesize")}}</td>
                </tr>
                <tr>
                    <td>响应时间限制</td>
                    <td>{{ini_get("max_execution_time")}}s</td>
                    <td>服务器时间</td>
                    <td>{{date("Y-m-d H:i:s")}}</td>
                    <td>数据库</td>
                    <td>{{Config::get('database.default');}}</td>
                </tr>
            </table>
        </div>
        <div class="sheet">
            <div class="cpt">系统信息</div>
            <table class="list">
                <tr>
                    <td>系统创建时间</td>
                    <td>2014/07/24</td>
                    <td>开发者</td>
                    <td>leiyanfo@sina.com</td>
                    <td>电话</td>
                    <td>13409031790</td>
                </tr>
            </table>
        </div>
        <script>
              $(function(){
                //表格奇偶行变色
                $("table tr:odd").addClass("odd");
                $("table tr:even").addClass("even");
            });
        </script>
    </body>
</html>
