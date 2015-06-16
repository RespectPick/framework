<?php /* Smarty version Smarty-3.1.15, created on 2014-08-26 13:22:10
         compiled from "Z:\home\online-ocenka_ru.ru\www\calculator\application\view\showCityMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2327153fc8a02578720-87233268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7879da4253d80fa9a07bd71f3ab23b72645a2339' => 
    array (
      0 => 'Z:\\home\\online-ocenka_ru.ru\\www\\calculator\\application\\view\\showCityMenu.tpl',
      1 => 1403506879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2327153fc8a02578720-87233268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root' => 0,
    'cities' => 0,
    'city' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53fc8a02601b55_63372436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fc8a02601b55_63372436')) {function content_53fc8a02601b55_63372436($_smarty_tpl) {?>
					<div class="col-md-4">
				    	<div class="panel panel-primary">
				    		<div class="panel-heading">Заполните форму</div>
							  <div class="panel-body">
							    <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/showCalculator">
							    	<div class="form-group">
									    <label  for="street">Выберите город</label>
									    <select name="city" class="form-control" id="city">
									    	<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
									    		<option value="<?php echo $_smarty_tpl->tpl_vars['city']->value['city_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['city']->value['city_name'];?>
</option>
									    	<?php } ?>
									    </select>
									</div>
									<input type="Submit" value="Выбрать" class="btn btn-primary">
									<input type="hidden" name="Location" value="CityForm">
							    </form>
							  </div>
				    	</div>
			    	</div>
			    	<div class="col-md-4">
				    	<div class="panel panel-primary">
				    		<div class="panel-heading"></div>
							  <div class="panel-body">
							    К сожалению частные дома, участки, гаражи, и коммерческая недвижимость пока не оценивается данным калькулятором, но вы можете воспользоваться услугами наших партнёров
							  </div>
				    	</div>
			    	</div>
			    	<div class="col-md-4">
				    	<div class="panel panel-primary">
				    		<div class="panel-heading">Форма обратной связи</div>
							  <div class="panel-body">
							    <form method="POST"  id="feedbackForm" >
							    	<div class="form-group">									    
									    <label  for="flat">Опишите квартиру</label>
										<textarea name="flat" id="flat" class="form-control" rows="3" placeholder="Опишите квартиру"></textarea>								
									</div>
									<div class="form-group">									    
									    <label  for="report">Цель отчёта</label>
										<textarea name="report" id="report" class="form-control" rows="1" placeholder="Цель отчёта"></textarea>								
									</div>
									<div class="form-group">									    
									    <label  for="phone">Контактный телефон</label>
										<input class="form-control"  name="phone" id="phone" type="text" placeholder="Введите ваш контактный телефон">								
									</div>
									<div class="form-group">									    
									    <label  for="email">E - mail</label>
										<input class="form-control" name="email" id="email" type="text" placeholder="Введите ваш e-mail">								
									</div>
									<div class="form-group">
									    <label  for="street">Выберите город</label>
									    <select name="city" class="form-control" id="city">
									    	<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
									    		<option value="<?php echo $_smarty_tpl->tpl_vars['city']->value['city_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['city']->value['city_name'];?>
</option>
									    	<?php } ?>
									    </select>
									</div>
									<input id="feedbackButton" type="button" value="Отправить вопрос" class="btn btn-primary">
									<input type="hidden" name="Location" value="feedbackForm">
							    </form>
							  </div>
				    	</div>
			    	</div>
			 <?php }} ?>
