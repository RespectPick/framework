<?php /* Smarty version Smarty-3.1.15, created on 2014-10-20 11:46:28
         compiled from "Z:\home\my_framework_ru.ru\www\frame\application\view\loginPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104075444bdd4a4bb68-32186325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c14ca9ac3579c6ef0eee473512008d558b2e379' => 
    array (
      0 => 'Z:\\home\\my_framework_ru.ru\\www\\frame\\application\\view\\loginPage.tpl',
      1 => 1390894320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104075444bdd4a4bb68-32186325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5444bdd4a92008_22097618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5444bdd4a92008_22097618')) {function content_5444bdd4a92008_22097618($_smarty_tpl) {?><!-- �������� ������ -->
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8ru">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="�������� ������">
    <meta name="author" content="���� ��������">
    <title>�������� ������</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/js/html5shiv.js"></script>
      <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <form class="form-signin" method="POST" action="auth">
        <h3 class="form-signin-heading">������� ����� � ������</h3>
        <input name="login" type="text" class="form-control" placeholder="�����" autofocus>
        <input name="password" type="password" class="form-control" placeholder="������">
        <input name="Location" type="hidden" value="LoginPage"/>        
        <button class="btn btn-lg btn-primary btn-block" type="submit">�����</button>
      </form>
    </div> <!-- /container -->
  </body>
</html>
<?php }} ?>
