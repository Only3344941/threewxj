@extends('layout/header')
@section('content')
@endsection
<body>
  <div class="x-nav">
        <span class="layui-breadcrumb">
          <a href="">首页</a>
          <a href="">演示</a>
          <a>
            <cite>导航元素</cite></a>
        </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
      <i class="layui-icon" style="line-height:30px">ဂ</i></a>
  </div>
  <div class="x-body">
    <div class="layui-row">
      <form class="layui-form layui-col-md12 x-so">
        <input class="layui-input" placeholder="开始日" name="start" id="start">
        <input class="layui-input" placeholder="截止日" name="end" id="end">
        <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
      </form>
    </div>
    <xblock>
      <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
      <button class="layui-btn" onclick="x_admin_show('添加用户','./admin-add.html')"><i class="layui-icon"></i>添加</button>
      <span class="x-right" style="line-height:40px">共有数据：88 条</span>
    </xblock>
    <table class="layui-table">
      <thead>
      <tr>
        <th>
          <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
        </th>
        <th>ID</th>
        <th>登录名</th>
        <th>手机</th>
        <th>邮箱</th>
        <th>角色</th>
        <th>加入时间</th>
        <th>状态</th>
        <th>操作</th>
      </thead>
      <tbody>
      <tr>
        <td>
          <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='2'><i class="layui-icon">&#xe605;</i></div>
        </td>
        <td>1</td>
        <td>admin</td>
        <td>18925139194</td>
        <td>113664000@qq.com</td>
        <td>超级管理员</td>
        <td>2017-01-01 11:11:42</td>
        <td class="td-status">
          <span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span></td>
        <td class="td-manage">
          <a onclick="member_stop(this,'10001')" href="javascript:;"  title="启用">
            <i class="layui-icon">&#xe601;</i>
          </a>
          <a title="编辑"  onclick="x_admin_show('编辑','admin-edit.html')" href="javascript:;">
            <i class="layui-icon">&#xe642;</i>
          </a>
          <a title="删除" onclick="member_del(this,'要删除的id')" href="javascript:;">
            <i class="layui-icon">&#xe640;</i>
          </a>
        </td>
      </tr>
      </tbody>
    </table>
    <div class="page">
      <div>
        <a class="prev" href="">&lt;&lt;</a>
        <a class="num" href="">1</a>
        <span class="current">2</span>
        <a class="num" href="">3</a>
        <a class="num" href="">489</a>
        <a class="next" href="">&gt;&gt;</a>
      </div>
    </div>

  </div>
  </body>
  <script src="/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

  $('#selAll').click(function(){
    //全选全不选
      if($(this).is(":checked")){
        $("input[name='ids']").prop("checked",true);
      }else{
        $("input[name='ids']").prop("checked",false);
      }
      //获取id
      /*var str='';
      $("input[name='ids']").each(function(){
          if($(this).is(":checked")){
            str += $(this).val()+','
          }
      })*/
  })
</script>
</html>