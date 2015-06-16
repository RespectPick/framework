<?php /* Smarty version Smarty-3.1.15, created on 2014-12-09 15:39:15
         compiled from "Z:\home\diplom1.ru\www\frame\application\view\formAddStudent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:324565478027e1d6474-25918684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4031afffdac2aac127333e00621499ca18c34ae6' => 
    array (
      0 => 'Z:\\home\\diplom1.ru\\www\\frame\\application\\view\\formAddStudent.tpl',
      1 => 1418107129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324565478027e1d6474-25918684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5478027e2a4230_66234720',
  'variables' => 
  array (
    'Student' => 0,
    'Group' => 0,
    'group' => 0,
    'Course' => 0,
    'course_number' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5478027e2a4230_66234720')) {function content_5478027e2a4230_66234720($_smarty_tpl) {?><h2>форма для добавления в таблицу нового студента.</h2>
  <form method="POST" action="/frame/formstudentsuccess">
  <input type="hidden" name="student_id" value="<?php echo $_smarty_tpl->tpl_vars['Student']->value['student_id'];?>
"><br>
  Введите новую фамилию
  <input type="text" name="student_first_name" value="<?php echo $_smarty_tpl->tpl_vars['Student']->value['student_first_name'];?>
"><br>
  Введите новое имя
  <input type="text" name="student_name" value="<?php echo $_smarty_tpl->tpl_vars['Student']->value['student_name'];?>
"><br>
  Введите новое отчество
  <input type="text" name="student_patronymic" value=<?php echo $_smarty_tpl->tpl_vars['Student']->value['student_patronymic'];?>
><br>
   Выберите группу
      <select name="groups" size="1">
         <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['group']->value['group_id']==$_smarty_tpl->tpl_vars['Student']->value['student_group_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['group']->value['group_number'];?>
</option>
         <?php } ?>
      </select></br>
  Выберите номер курса
  <select name="course_number" size="1">
  <?php  $_smarty_tpl->tpl_vars['course_number'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course_number']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Course']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['course_number']->key => $_smarty_tpl->tpl_vars['course_number']->value) {
$_smarty_tpl->tpl_vars['course_number']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['course_number']->value['student_course_number'];?>
" <?php if ($_smarty_tpl->tpl_vars['course_number']->value['student_course_number']==$_smarty_tpl->tpl_vars['Student']->value['student_course_number']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['course_number']->value['student_course_number'];?>
</option>
 <?php } ?>
  </select></br>
  Введите дату рождения
  <!--<input name="birth_dates" type="date" max="2099-04-20" min="1980-04-10" value="2000-01-01"/></br>-->
    <input name="birth_dates" type="date" value="<?php echo $_smarty_tpl->tpl_vars['Student']->value['student_birth_date'];?>
"/></br>
 
 
  <input type="hidden" name="Location" value="addStudForm">
  <input type="submit" value="Добавить нового студента">
  </form><?php }} ?>
