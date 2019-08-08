<div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;">个人中心</a>
          <dl class="layui-nav-child">
            <dd><a href="{{url('/author/user')}}">个人资料</a></dd>
            <dd><a href="javascript:;">客户列表</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">销售管理</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">销售添加</a></dd>
            <dd><a href="javascript:;">销售管理</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">合同管理</a>
          <dl class="layui-nav-child">
            <dd><a href="/agree/add">合同添加</a></dd>
            <dd><a href="javascript:;">合同列表</a></dd>
          </dl>
        </li><li class="layui-nav-item">
          <a href="javascript:;">订单管理</a>
          <dl class="layui-nav-child">
            <dd><a href="{{url('order/create')}}">订单添加</a></dd>
            <dd><a href="javascript:;">订单管理</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">产品管理</a>
          <dl class="layui-nav-child">
            <dd><a href="{{url('/product/add')}}">产品添加</a></dd>
            <dd><a href="{{url('/product/list')}}">产品列表</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">供应商管理</a>
          <dl class="layui-nav-child">
            <dd><a href="{{url('supplier/add')}}">供应商添加</a></dd>
            <dd><a href="{{url('supplier/index')}}">供应商管理</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">管理员</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">管理员添加</a></dd>
            <dd><a href="javascript:;">管理员列表</a></dd>
          </dl>
        </li>
      </ul>
    </div>
  </div>