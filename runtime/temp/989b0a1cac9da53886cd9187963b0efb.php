<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"D:\wamp\www\bick\public/../application/admin\view\cate\add.htm";i:1524645525;s:54:"D:\wamp\www\bick\application\admin\view\common\top.htm";i:1524469511;s:58:"D:\wamp\www\bick\application\admin\view\common\leftnav.htm";i:1524713357;}*/ ?>
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

    <!--UEditor-->
    <script type="text/javascript" charset="utf-8" src="/bick/public/static/admin/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/bick/public/static/admin/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/bick/public/static/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
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
            <li><a href="<?php echo url('cate/index'); ?>">栏目管理</a></li>
            <li class="active">新增栏目</li>
          </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Body -->
        <div class="page-body">
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="widget">
                <div class="widget-header bordered-bottom bordered-blue">
                    <span class="widget-caption">新增栏目</span>
                </div>
                <div class="widget-body">
                  <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post">
                      <div class="form-group">
                        <label for="pid" class="col-sm-2 control-label no-padding-right">上级栏目</label>
                        <div class="col-sm-6">
                          <select name="pid" style="width: 100%;">
                                <option value="0" selected="selected">顶级栏目</option>
                                <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>"><?php if($vo['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat('-',$vo['level']*4)?><?php echo $vo['catename']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="catename" class="col-sm-2 control-label no-padding-right">栏目名称</label>
                        <div class="col-sm-6">
                          <input class="form-control" placeholder="" name="catename" required="" type="text">
                        </div>
                        <p class="help-block col-sm-4 red">* 必填</p>
                      </div>
                      <div class="form-group">
                        <label for="catename" class="col-sm-2 control-label no-padding-right">栏目关键词</label>
                        <div class="col-sm-6">
                          <input class="form-control" name="keywords" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="catename" class="col-sm-2 control-label no-padding-right">栏目描述</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="desc"></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="group_id" class="col-sm-2 control-label no-padding-right">栏目类型</label>
                        <div class="col-sm-6">
                          <div class="radio col-sm-3">
                            <label>
                              <input checked type="radio" value="1" name="type" />
                              <span class="text">文章列表</span>
                            </label>
                          </div>
                          <div class="radio col-sm-3">
                            <label>
                              <input type="radio" class="inverted" name="type" value="2" />
                              <span class="text">单页</span>
                            </label>
                          </div>
                          <div class="radio col-sm-3">
                            <label>
                              <input type="radio" class="inverted" name="type" value="3" />
                              <span class="text">图片列表</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="catename" class="col-sm-2 control-label no-padding-right">栏目内容</label>
                        <div class="col-sm-6">
                          <textarea name="content" style="height:200px;" id="editor"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">保存信息</button>
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
  <script type="text/javascript">
     var ue = UE.getEditor('editor',{
      toolbars: [
        ['fullscreen', 'source', 'undo', 'redo'],
        ['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc']
      ]
     });
  </script>
</body>

</html>