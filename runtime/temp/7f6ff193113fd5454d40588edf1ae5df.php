<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:63:"D:\wamp\www\bick\public/../application/admin\view\conf\conf.htm";i:1524638849;s:55:"D:\wamp\www\bick\application\admin\view\common\head.htm";i:1524194572;s:54:"D:\wamp\www\bick\application\admin\view\common\top.htm";i:1524469511;s:58:"D:\wamp\www\bick\application\admin\view\common\leftnav.htm";i:1524626562;}*/ ?>
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
            <li class="active">配置管理</li>
          </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Body -->
        <div class="page-body">
          <button type="button" class="btn btn-sm btn-azure btn-addon"> 网站配置
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
                           
                            <th class="text-right" width="10%">配置名称</th>
                            <th class="text-left">配置值</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($confres as $k => $v):?>
                          <tr>
                            <td align="right"><?php echo $v['cnname'];?></td>
                            <td align="left">
                              <?php if($v['type']==1):?>
                                <input type="text" class="form-control" style="width: 50%" value="<?php echo $v['value'];?>" name="<?php echo $v['enname'];?>">
                              <?php elseif($v['type']==2):?>
                                <textarea name="<?php echo $v['enname'];?>" class="form-control" style="resize: none;width: 50%;"><?php echo trim($v['value']);?></textarea>
                              <?php elseif($v['type']==3):
                                  if($v['values']){
                                    $arr=explode(',',$v['values']);
                                  }
                                  foreach($arr as $k1 => $v1):
                                ?>
                                  <label style="margin-right: 15px;">
                                    <input type="radio" <?php if($v['value'] == $v1){echo 'checked';}?> value="<?php echo $v1;?>" name="<?php echo $v['enname'];?>">
                                    <span class="text"><?php echo $v1;?></span>
                                  </label>
                                  
                                  <?php endforeach;elseif($v['type']==4):?>
                                  <label>
                                    <input type="checkbox" <?php if(!empty($v['value'])){echo 'checked';}?> value="<?php echo $v['values'];?>" name="<?php echo $v['enname'];?>">
                                    <span class="text"><?php echo $v['values'];?></span>
                                  </label>
                              <?php elseif($v['type']==5):
                                 if($v['values']){
                                    $arr=explode(',',$v['values']);
                                  }
                              ?>
                                <select name="<?php echo $v['enname']?>" class="form-control" style="width: 50%">
                                <?php foreach($arr as $k1 => $v1):?>
                                  <option <?php if($v['value'] == $v1){echo 'selected';}?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                <?php endforeach;?>
                                </select>
                              <?php endif;?>
                            </td>
                           
                          </tr>
                          <?php endforeach;?>
                          
                        </tbody>
                      </table>
                      <div style="margin-top: 20px;width: 55%;text-align: right;">
                        <input class="btn btn-md btn-primary" type="submit" value="提交更改">
                      </div>
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