<?php /* Smarty version Smarty-3.1.15, created on 2014-11-26 13:56:22
         compiled from "Z:\home\diplom1.ru\www\frame\application\view\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3222254755d76a35fa9-58710776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '015aaf8a7166d300e0c6e3fce0140a5b553529d2' => 
    array (
      0 => 'Z:\\home\\diplom1.ru\\www\\frame\\application\\view\\header.tpl',
      1 => 1403522298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3222254755d76a35fa9-58710776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root' => 0,
    'currentCity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54755d76d34f96_37001022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54755d76d34f96_37001022')) {function content_54755d76d34f96_37001022($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>    
	<meta charset="utf-8ru">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>������ �������</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Page-Level Plugin CSS - Tables -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/css/sb-admin.css" rel="stylesheet">
        <!-- Core Scripts - Include with every page -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/jquery/jquery-2.0.3.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/js/sb-admin.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">               
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
">������ ������� ��������</a> <a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/citySelectForm" class="navbar-brand" title="������� �����">(������� ����� - <?php echo $_smarty_tpl->tpl_vars['currentCity']->value['city_name'];?>
)</a>
            </div>            
            <ul class="nav navbar-top-links navbar-right">       
            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/cabinet" title="�������� ���������"><i class="fa fa-edit fa-fw"></i></a></li>
            	<li><a href="#" title="�������� ����������"><i class="fa fa-wrench fa-fw"></i></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/logOut" title="����� �� �������"><i class="fa fa-sign-out fa-fw"></i></a></li>              
            </ul>
        </nav>
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
            	<li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        ����� &laquo;�������� ��������&raquo;, ����� �������� �������� ����������.<br>
                        ����� &laquo;�������� ����������&raquo;, ����� ������� ���������.<br>
                	</div>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/cabinet"><i class="fa fa-edit fa-fw"></i> �������� ���������</a>
                </li>
                <li>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/addParamForm"><i class="fa fa-wrench fa-fw"></i> ���������� ����������</a>
            	</li>
            	<li>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/editMultForm"><i class="fa fa-bars fa-fw"></i> �������������� ���������</a>
            	</li>
            	<li>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/editCityForm"><i class="fa fa-cloud-download fa-fw"></i> �������������� ������</a>
            	</li>
            	<li>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/cityTable"><i class="fa fa-table fa-fw"></i> ������� �������</a>
            	</li>
            	<li>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/feedbackTable"><i class="fa fa-comment-o fa-fw"></i> �������� �����</a>
            	</li>
            	<li>
            		<a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/logOut"><i class="fa fa-sign-out fa-fw"></i>����� �� �������</a>
            	</li>	   
            </ul>
                    
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper"><?php }} ?>
