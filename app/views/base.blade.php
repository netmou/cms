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
                <li><a class="btn select"  href="#">站点基本信息</a></li>
            </ul>
        </div>
        <div class="sheet">
            <form class="form">
                <table>
                    <tr>
                        <td>站点名称</td>
                        <td><input name="title" type="text" /></td>
                        <td><span class="desc">*你的站点名称</span></td>
                    </tr>
                    <tr>
                        <td>站点描述</td>
                        <td><input name="description" type="text" /></td>
                        <td><span class="desc">你的站点主要的特色</span></td>
                    </tr>

                    <tr>
                        <td>站点关键字</td>
                        <td><input name="keywords" type="text" /></td>
                        <td><span class="desc">SEO关键字，不要乱动</span></td>
                    </tr>
                    <tr>
                        <td>备案号</td>
                        <td><input name="ipc" type="text" /></td>
                        <td><span class="desc">IPC备案号</span></td>
                    </tr>
                    <tr>
                        <td>统计代码</td>
                        <td><textarea name="census"> </textarea></td>
                        <td><span class="desc">帮助您统计网站流量</span></td>
                    </tr>
                    <tr>
                        <td>版权信息</td>
                        <td><textarea name="rights"> </textarea></td>
                        <td><span class="desc">您的版权声明</span></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" class="btn cyan" value="保存" /></td>
                        <td></td>
                    </tr>
                </table>
            </form>
        </div><!--end .sheet-->

    </body>
</html>
