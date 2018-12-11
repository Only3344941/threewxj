@extends('layout/header')
@section('content')
@endsection
<body class="login-bg">
    
    <div class="login layui-anim layui-anim-up">
        
        <div class="message" style="background:red">@if(Session::has('msg')){{Session::get('msg')}}@else虎牙直播管理登录@endif</div>
        <div id="darkbannerwrap"></div>


        <form method="post" action="{{url('login')}}">
            {{csrf_field()}}
            <input name="username" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
            <hr class="hr15">
            <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
            <hr class="hr15">
            <input value="登录" lay-submit lay-filter="login" style="width:100%;background:red;" type="submit">
            <hr class="hr20" >
        </form>
    </div>

    <script>
        $(function  () {
            layui.use('form', function(){
              var form = layui.form;
              form.on('submit(login)', function(data){
                layer.msg(JSON.stringify(data.field),function(){
                    location.href='index.html'
                });
                return false;
              });
            });
        })

        
        
    </script>

    
    <!-- 底部结束 -->

</body>
</html>