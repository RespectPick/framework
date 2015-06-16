<?php /* Smarty version Smarty-3.1.15, created on 2014-12-11 16:27:19
         compiled from "Z:\home\diplom1.ru\www\frame\application\view\formAddEvent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3047154892a223f6819-69889450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1db83cd937bc548b4f32f0b24edd3073eb104c72' => 
    array (
      0 => 'Z:\\home\\diplom1.ru\\www\\frame\\application\\view\\formAddEvent.tpl',
      1 => 1418282834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3047154892a223f6819-69889450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54892a22530528_94883530',
  'variables' => 
  array (
    'Event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54892a22530528_94883530')) {function content_54892a22530528_94883530($_smarty_tpl) {?><h2>форма для добавления события.</h2>
  <form method="POST" action="/frame/formeventsuccess">
  <input type="hidden" name="event_id" value="<?php echo $_smarty_tpl->tpl_vars['Event']->value['event_id'];?>
" ><br>
  Введите новое событие
  <input type="text" name="event_name" value="<?php echo $_smarty_tpl->tpl_vars['Event']->value['event_name'];?>
" size="30"><br>
  Введите дату начала
  
  <input name="event_period_start" type="date" value="<?php echo $_smarty_tpl->tpl_vars['Event']->value['event_period_start'];?>
"></br>
 
 Введите дату окончания
 <input name="event_period_end" type="date" value="<?php echo $_smarty_tpl->tpl_vars['Event']->value['event_period_end'];?>
"/></br>
  <input type="hidden" name="Location" value="addEventForm">
  <input type="submit" value="Добавить нового студента">
  </form><?php }} ?>
