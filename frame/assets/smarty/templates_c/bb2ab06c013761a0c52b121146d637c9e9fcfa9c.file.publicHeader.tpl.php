<?php /* Smarty version Smarty-3.1.15, created on 2014-08-26 13:22:10
         compiled from "Z:\home\online-ocenka_ru.ru\www\calculator\application\view\publicHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:426253fc8a024450a5-55610887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb2ab06c013761a0c52b121146d637c9e9fcfa9c' => 
    array (
      0 => 'Z:\\home\\online-ocenka_ru.ru\\www\\calculator\\application\\view\\publicHeader.tpl',
      1 => 1403506879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '426253fc8a024450a5-55610887',
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
  'unifunc' => 'content_53fc8a02555fc3_14297704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fc8a02555fc3_14297704')) {function content_53fc8a02555fc3_14297704($_smarty_tpl) {?><!-- Страница логина -->
<!DOCTYPE html>
<html lang="ru">
<head>    
	<meta charset="utf-8ru">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Страница логина">
    <meta name="author" content="Баир Хабитуев">
    <title>Калькулятор</title>
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
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/jquery/jquery-2.0.3.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/ajax/calculator.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/ajax/feedback.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/ajax/background.js"></script>
  </head>
  <body>
  
  <div class="container">
      
      <div class="jumbotron">
        <h1>Калькулятор</h1>
        <p>Добрый день! Для того чтобы оценить вашу квартиру вам необходимо заполнить поля указанные в калькуляторе, система автоматически посчитает стоимость вашей квартиры на текущий момент времени.</p>
        <p>
          <a class="btn btn-lg btn-primary"  data-toggle="modal" data-target="#myModal" role="button">Как этим пользоваться &raquo;</a>
        </p>
      </div>      
		<div class="col-md-12 panel">
			<div class=row>			<?php }} ?>
