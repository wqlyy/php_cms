<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:63:"D:\wamp\www\bick\public/../application/admin\view\cate\list.htm";i:1524556632;s:55:"D:\wamp\www\bick\application\admin\view\common\head.htm";i:1524194572;s:54:"D:\wamp\www\bick\application\admin\view\common\top.htm";i:1524469511;s:58:"D:\wamp\www\bick\application\admin\view\common\leftnav.htm";i:1524713357;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ThinkPHP--企业站</title>
    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/bick/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/bick/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/bick/public/static/admin/style/weather-icons.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="/bick/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/bick/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="/bick/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/bick/public/static/admin/style/animate.css" rel="stylesheet">
</head>

<body>
  <!-- 头部 -->
 <div class="navbar">
  <div class="navbar-inner">
    <div class="navbar-container">
      <!-- Navbar Barnd -->
      <div class="navbar-header pull-left">
        <a href="<?php echo url('index'); ?>" class="navbar-brand">
				<small>
					<img src="/bick/public/static/admin/images/logo.png" alt="">
				</small>
			</a>
      </div>
      <!-- /Navbar Barnd -->
      <!-- Sidebar Collapse -->
      <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="collapse-icon fa fa-bars"></i>
      </div>
      <!-- /Sidebar Collapse -->
      <!-- Account Area and Settings -->
      <div class="navbar-header pull-right">
        <div class="navbar-account">
          <ul class="account-area nav">
            <li>
             <?php if(\think\Request::instance()->session('user') == null): ?>
             <a href="<?php echo url('login/index'); ?>">登录</a>
             <?php else: ?>
              <a class="login-area dropdown-toggle" data-toggle="dropdown">
                <div class="avatar" title="View your public profile">
                  <img src="/bick/public/static/admin/images/adam-jansen.jpg">
                </div>
                <section>
                  <h2><span class="profile"><span><?php echo \think\Request::instance()->session('user'); ?></span></span></h2>
                </section>
              </a>
             <?php endif; ?>
              <!--Login Area Dropdown-->
              <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                <li class="username"><a>David Stevenson</a></li>
                <?php if(\think\Request::instance()->session('user') != null): ?>
                <li class="dropdown-footer">
                  <a href="<?php echo url('admin/logout'); ?>">
                    退出登录
                  </a>
                </li>
                <li class="dropdown-footer">
                  <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('id'))); ?>">
										修改密码
									</a>
                </li>
                <?php endif; ?>
              </ul>
              <!--/Login Area Dropdown-->
            </li>
            <!-- /Account Area -->
            <!--Note: notice that setting div must start right after account area list.
						no space must be between these elements-->
            <!-- Settings -->
          </ul>
        </div>
      </div>
      <!-- /Account Area and Settings -->
    </div>
  </div>
</div>
  <!-- /头部 -->
  <div class="main-container container-fluid">
    <div class="page-container">
      <!-- Page Sidebar -->
    	 <!-- Page Sidebar -->
<div class="page-sidebar" id="sidebar">
  <!-- Page Sidebar Header-->
  <div class="sidebar-header-wrapper">
    <input class="searchinput" type="text">
    <i class="searchicon fa fa-search"></i>
    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
  </div>
  <!-- /Page Sidebar Header -->
  <!-- Sidebar Menu -->
  <ul class="nav sidebar-menu">
    <!--Dashboard-->
    <li>
      <a href="#" class="menu-dropdown">
				<i class="menu-icon fa fa-user"></i>
				<span class="menu-text">管理员</span>
				<i class="menu-expand"></i>
			</a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('admin/index'); ?>">
						<span class="menu-text">管理列表</span>
						<i class="menu-expand"></i>
					</a>
        </li>
        <li>
          <a href="<?php echo url('auth_group/index'); ?>">
            <span class="menu-text">用户组列表</span>
            <i class="menu-expand"></i>
          </a>
        </li>
        <li>
          <a href="<?php echo url('auth_rule/index'); ?>">
            <span class="menu-text">权限列表</span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
     <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-folder"></i>
        <span class="menu-text">栏目管理</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('cate/index'); ?>">
            <span class="menu-text">栏目列表</span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#" class="menu-dropdown">
				<i class="menu-icon fa fa-file-text"></i>
				<span class="menu-text">文档</span>
				<i class="menu-expand"></i>
			</a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('article/index'); ?>">
						<span class="menu-text">文章列表</span>
						<i class="menu-expand"></i>
					</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-link"></i>
        <span class="menu-text">友情链接</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('link/index'); ?>">
            <span class="menu-text">链接列表</span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#" class="menu-dropdown">
				<i class="menu-icon fa fa-gear"></i>
				<span class="menu-text">系统</span>
				<i class="menu-expand"></i>
			</a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('conf/conf'); ?>">
						<span class="menu-text">配置项</span>
						<i class="menu-expand"></i>
					</a>
        </li>
        <li>
          <a href="<?php echo url('conf/index'); ?>">
            <span class="menu-text">配置列表</span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
  </ul>
  <!-- /Sidebar Menu -->
</div>
      <!-- /Page Sidebar -->
      <!-- Page Content -->
      <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
          <ul class="breadcrumb">
            <li><a href="#">系统</a></li>
            <li class="active">栏目管理</li>
          </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Body -->
        <div class="page-body">
          <button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('cate/add'); ?>'"> <i class="fa fa-plus"></i> Add
          </button>
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="widget">
                <div class="widget-body">
                  <div class="flip-scroll">
                    <form method="post" action="">
                      <table class="table table-bordered table-hover">
                        <thead class="">
                          <tr>
                            <th class="text-center" width="8%">ID</th>
                            <th class="text-center" width="8%">排序</th>
                            <th class="text-left">栏目名称</th>
                            <th class="text-left">栏目类型</th>
                            <th class="text-center" width="16%">操作</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($catelist) || $catelist instanceof \think\Collection || $catelist instanceof \think\Paginator): $i = 0; $__LIST__ = $catelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                          <tr>
                            <td align="center"><?php echo $vo['id']; ?></td>
                            <td align="center"><input style="width: 60px;text-align: center;" type="text" value="<?php echo $vo['sort']; ?>" name="<?php echo $vo['id']; ?>"></td>
                            <td align="left"><?php if($vo['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat('-',$vo['level']*8)?><?php echo $vo['catename']; ?></td>
                            <td align="left">
                              <?php if($vo['type'] == 1): ?>
                              文章列表
                              <?php elseif($vo['type'] == 3): ?>
                              图片列表
                              <?php else: ?>
                              单页
                              <?php endif; ?>
                            </td>
                            <td align="center">
  														<a href="<?php echo url('edit',array('id'=>$vo['id'])); ?>" class="btn btn-primary btn-sm shiny">
  															<i class="fa fa-edit"></i> 编辑
  														</a>
                             
  														<a href="javascript:;" onClick="warning('确实要删除吗', '<?php echo url('del',array('id'=>$vo['id'])); ?>')" class="btn btn-danger btn-sm shiny">
  															<i class="fa fa-trash-o"></i>删除
  														</a>
                             
                            </td>
                          </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <tr>
                          <td colspan="5">
                            <input class="btn btn-sm btn-primary" type="submit" value="排序">
                          </td>
                        </tr>
                        </tbody>
                      </table>
                    </form>
                  </div>
                  <div class="text-right" style="margin-top:10px;"><!--*秘制占位*-->
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Page Body -->
      </div>
      <!-- /Page Content -->
    </div>
  </div>
  <!--Basic Scripts-->
  <script src="/bick/public/static/admin/style/jquery_002.js"></script>
  <script src="/bick/public/static/admin/style/bootstrap.js"></script>
  <script src="/bick/public/static/admin/style/jquery.js"></script>
  <!--Beyond Scripts-->
  <script src="/bick/public/static/admin/style/beyond.js"></script>
</body>

</html>