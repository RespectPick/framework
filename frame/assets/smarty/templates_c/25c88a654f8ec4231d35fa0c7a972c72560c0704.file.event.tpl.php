<?php /* Smarty version Smarty-3.1.15, created on 2014-11-27 15:58:25
         compiled from "Z:\home\diplom1.ru\www\frame\application\view\event.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96895476ae7fa82822-47300616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25c88a654f8ec4231d35fa0c7a972c72560c0704' => 
    array (
      0 => 'Z:\\home\\diplom1.ru\\www\\frame\\application\\view\\event.tpl',
      1 => 1417071386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96895476ae7fa82822-47300616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5476ae7fdb0661_08516409',
  'variables' => 
  array (
    'AbitArray' => 0,
    'stud' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5476ae7fdb0661_08516409')) {function content_5476ae7fdb0661_08516409($_smarty_tpl) {?>
   <h2>Таблица абитуриентов</h2>
   
   <table border=1>
   <tr>
   <td>Фамилия</td>
   <td>Имя</td>
   <td>Отчество</td>
   </tr>
   <?php  $_smarty_tpl->tpl_vars['stud'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stud']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AbitArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stud']->key => $_smarty_tpl->tpl_vars['stud']->value) {
$_smarty_tpl->tpl_vars['stud']->_loop = true;
?>
   <tr>
   <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_first_name'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_name'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_patronymic'];?>
</td>
   </tr>
   <?php } ?>
   
   </table>
<?php }} ?>
