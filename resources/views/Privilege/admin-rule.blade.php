@extends('layout/header')
@section('content')
@endsection
<body>
  <div class="x-nav">
        <span class="layui-breadcrumb">
          <a href="">首页</a>
          <a href="">演示</a>
          <a>
            <cite>导航元素88</cite></a>
        </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
      <i class="layui-icon" style="line-height:30px">ဂ</i></a>
  </div>
  <div class="x-body">
    <div class="layui-row">
      <form class="layui-form layui-col-md12 x-so layui-form-pane">
        <div class="layui-input-inline">
          <select name="cateid">
            <option>规则分类</option>
            <option>文章</option>
            <option>会员</option>
            <option>权限</option>
          </select>
        </div>
        <div class="layui-input-inline">
          <select name="contrller">
            <option>请控制器</option>
            <option>Index</option>
            <option>Goods</option>
            <option>Cate</option>
          </select>
        </div>
        <div class="layui-input-inline">
          <select name="action">
            <option>请方法</option>
            <option>add</option>
            <option>login</option>
            <option>checklogin</option>
          </select>
        </div>
        <input class="layui-input" placeholder="权限名" name="cate_name" >
        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon"></i>增加</button>
      </form>
    </div>
    <xblock>
      <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
      <span class="x-right" style="line-height:40px">共有数据：88 条</span>
    </xblock>
    <table class="layui-table">
      <thead>
      <tr>
        <th>
          <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
        </th>
        <th>ID</th>
        <th>权限规则</th>
        <th>权限名称</th>
        <th>所属分类</th>
        <th>操作</th>
      </thead>
      <tbody>
      <tr>
        <td>
          <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='2'><i class="layui-icon">&#xe605;</i></div>
        </td>
        <td>1</td>
        <td>admin/user/userlist</td>
        <td>会员列表</td>
        <td>会员相关</td>
        <td class="td-manage">
          <a title="编辑"  onclick="x_admin_show('编辑','xxx.html')" href="javascript:;">
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

</html>