@extends('layout/header')
@section('content')
@endsection
<body>
    <div class="x-body">
        <form action="" method="post" class="layui-form layui-form-pane">
            <div class="layui-form-item">
                <label for="name" class="layui-form-label">
                    <span class="x-red">*</span>角色名
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="name" name="name" required="" lay-verify="required"
                           autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">
                    拥有权限
                </label>
                <table  class="layui-table layui-input-block">
                    <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" name="like1[write]" lay-skin="primary" title="用户管理">
                        </td>
                        <td>
                            <div class="layui-input-block">
                                <input name="id[]" lay-skin="primary" type="checkbox" title="用户停用" value="2">
                                <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="用户删除">
                                <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="用户修改">
                                <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="用户改密">
                                <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="用户列表">
                                <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="用户改密">
                                <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="用户列表">
                                <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="用户改密">
                                <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="用户列表">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="文章管理">
                        </td>
                        <td>
                            <div class="layui-input-block">
                                <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="文章添加">
                                <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="文章删除">
                                <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="文章修改">
                                <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="文章改密">
                                <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="文章列表">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="layui-form-item layui-form-text">
                <label for="desc" class="layui-form-label">
                    描述
                </label>
                <div class="layui-input-block">
                    <textarea placeholder="请输入内容" id="desc" name="desc" class="layui-textarea"></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                <button class="layui-btn" lay-submit="" lay-filter="add">增加</button>
            </div>
        </form>
    </div>
  </body>

</html>