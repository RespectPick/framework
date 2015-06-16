<?php /* Smarty version Smarty-3.1.15, created on 2015-01-15 08:26:30
         compiled from "Z:\home\diplom1.ru\www\frame\application\view\tableEvent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165665476cec3613d15-46037732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a2e58e4b0c3ba0296ee07ba22e768358bcb7439' => 
    array (
      0 => 'Z:\\home\\diplom1.ru\\www\\frame\\application\\view\\tableEvent.tpl',
      1 => 1421298815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165665476cec3613d15-46037732',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5476cec36e11d9_28304344',
  'variables' => 
  array (
    'AbitArray' => 0,
    'stud' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5476cec36e11d9_28304344')) {function content_5476cec36e11d9_28304344($_smarty_tpl) {?>   <table border=1>
   <tr>
   <td>Изменение/удаление</td>
   <td>Фамилия</td>
   <td>Имя</td>
   <td>Отчество</td>
   <td>Дата рождения</td>
   <td>Номер курса</td>
	
	<?php  $_smarty_tpl->tpl_vars['stud'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stud']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AbitArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stud']->key => $_smarty_tpl->tpl_vars['stud']->value) {
$_smarty_tpl->tpl_vars['stud']->_loop = true;
?>
	 <?php } ?>
	<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stud']->value['event_name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
   <td><?php echo $_smarty_tpl->tpl_vars['event']->value['event_name'];?>
<br />
   <a href="formevent/?event_id=<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
"><img src="assets/img/Изменить.png"><br>
   <a href="eventdelete/?event_id=<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
"><img src="assets/img/Удалить.png" alt="Удалить" ></a> </td>
   <?php } ?>
   </tr>
   <?php  $_smarty_tpl->tpl_vars['stud'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stud']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AbitArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stud']->key => $_smarty_tpl->tpl_vars['stud']->value) {
$_smarty_tpl->tpl_vars['stud']->_loop = true;
?>
   <tr>
   <td><a href="formstudent/?student_id=<?php echo $_smarty_tpl->tpl_vars['stud']->value['student_id'];?>
"><img src="assets/img/Изменить.png"><br>
		<a href="tabledelete/?student_id=<?php echo $_smarty_tpl->tpl_vars['stud']->value['student_id'];?>
"><img src="assets/img/Удалить.png" alt="Удалить" ></a>
   
   </td>
   <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_first_name'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_name'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_patronymic'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_birth_date'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_course_number'];?>
</td>
	<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stud']->value['event_name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
	<td><p style="empty-cells: show;"></p></td>
	<?php } ?>
   </tr>
   <?php } ?>
   </table>
<?php }} ?>
