<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout @yield('title') - Layui</title>
    <link rel="stylesheet" href="/author/layui/css/layui.css">
    <script src="/author/layui/layui.js"></script>


    <script src="/js/jquery.js"></script>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    @include('/author/public/header');
<!-- @yield('content'); -->

    @include('/author/public/left');

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">@yield('content')</div>
    </div>

    @include('/author/public/footer');
</div>

<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
</body>
</html>