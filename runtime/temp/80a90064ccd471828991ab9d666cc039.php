<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\wamp\www\bick\public/../application/admin\view\auth_group\edit.htm";i:1524725934;s:55:"D:\wamp\www\bick\application\admin\view\common\head.htm";i:1524194572;s:54:"D:\wamp\www\bick\application\admin\view\common\top.htm";i:1524469511;s:58:"D:\wamp\www\bick\application\admin\view\common\leftnav.htm";i:1524713357;}*/ ?>
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
            <li><a href="<?php echo url('auth_group/index'); ?>">用户组管理</a></li>
            <li class="active">编辑用户组</li>
          </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Body -->
        <div class="page-body">
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="widget">
                <div class="widget-header bordered-bottom bordered-blue">
                    <span class="widget-caption">编辑用户组</span>
                </div>
                <div class="widget-body">
                  <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post">
                     <input type="hidden" name="id" value="<?php echo $groups['id']; ?>">
                      <div class="form-group">
                        <label for="catename" class="col-sm-2 control-label no-padding-right">用户组名称</label>
                        <div class="col-sm-6">
                          <input class="form-control" value="<?php echo $groups['title']; ?>" name="title" type="text">
                        </div>
                        <p class="help-block col-sm-4 red">* 必填</p>
                      </div>
                       
                      <div class="form-group">
                        <label for="group_id" class="col-sm-2 control-label no-padding-right">用户组启用状态</label>
                        <div class="col-sm-6">
                          <label>
                            <input class="checkbox-slider colored-darkorange" <?php if($groups['status'] == 1): ?> checked<?php endif; ?> type="checkbox" value="1" name="status">
                            <span class="text"></span>
                          </label>
                        </div>
                        <p class="help-block col-sm-4 red">* 必填</p>
                      </div>
                       <div class="form-group">
                        <label for="group_id" class="col-sm-2 control-label no-padding-right">用户组规则</label>
                        <div class="col-sm-6">
                          <table class="table table-hover">
                              <thead class="bordered-darkorange">
                                <tr>
                                  <th>配置权限</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php if(is_array($authRuleres) || $authRuleres instanceof \think\Collection || $authRuleres instanceof \think\Paginator): $i = 0; $__LIST__ = $authRuleres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                              <tr>
                                <td>
                                  <label>
                                    <?php echo str_repeat("&nbsp;",$vo['level']*6);?>
                                    <input dataid="id-<?php echo $vo['dataid']; ?>" class="inverted checkbox-parent <?php if($vo['level'] != 0): ?>checkbox-child<?php endif; ?>" type="checkbox" name="">
                                    <span style="<?php if($vo['level'] == 0): ?>font-weight: bold;<?php endif; ?>" class="text"><?php echo $vo['title']; ?></span>
                                  </label>
                                </td>
                              </tr>
                              <?php endforeach; endif; else: echo "" ;endif; ?>
                              </tbody>
                            </table>
                        </div>
                        
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">保存</button>
                        </div>
                      </div>
                    </form>
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
  <script>
  /* 权限配置 */
    $(function () {
        //动态选择框，上下级选中状态变化
        $('input.checkbox-parent').on('change', function () {
            var dataid = $(this).attr("dataid");
            $('input[dataid^=' + dataid + ']').prop('checked', $(this).is(':checked'));
        });
        $('input.checkbox-child').on('change', function () {
            var dataid = $(this).attr("dataid");
            dataid = dataid.substring(0, dataid.lastIndexOf("-"));
            var parent = $('input[dataid=' + dataid + ']');
            if ($(this).is(':checked')) {
                parent.prop('checked', true);
                //循环到顶级
                while (dataid.lastIndexOf("-") != 2) {
                    dataid = dataid.substring(0, dataid.lastIndexOf("-"));
                    parent = $('input[dataid=' + dataid + ']');
                    parent.prop('checked', true);
                }
            } else {
                //父级
                if ($('input[dataid^=' + dataid + '-]:checked').length == 0) {
                    parent.prop('checked', false);
                    //循环到顶级
                    while (dataid.lastIndexOf("-") != 2) {
                        dataid = dataid.substring(0, dataid.lastIndexOf("-"));
                        parent = $('input[dataid=' + dataid + ']');
                        if ($('input[dataid^=' + dataid + '-]:checked').length == 0) {
                            parent.prop('checked', false);
                        }
                    }
                }
            }
        });
    });
  </script>
</body>

</html>