<?php /* Smarty version Smarty-3.1.15, created on 2015-05-21 08:18:03
         compiled from "Z:\home\diplom1.ru\www\frame\application\view\adminStud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2590454daf02bcbfb79-98079401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fff7454ee3301a9877ee62b96f794a6928077f96' => 
    array (
      0 => 'Z:\\home\\diplom1.ru\\www\\frame\\application\\view\\adminStud.tpl',
      1 => 1432185481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2590454daf02bcbfb79-98079401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54daf02c16f703_49378882',
  'variables' => 
  array (
    'site_root' => 0,
    'Group' => 0,
    'student_group' => 0,
    'Stud' => 0,
    'AbitArray' => 0,
    'stud' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54daf02c16f703_49378882')) {function content_54daf02c16f703_49378882($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Панель администартора. Студенты</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/css/sb-admin-2.css" rel="stylesheet">
    
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/css/bootstrap-select.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/Font-Awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
 <div id="wrapper">
         <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Панель администратора</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                        
            <form method="POST" action="/frame/addexcelfile" style="float:left;margin-top:10px;margin-right:50px;">
                <input class="btn btn-default"  type="file" style="float:left;" />
                <input type="hidden" name="Location" value="addExcelFile"/>
                <input type="submit" class="btn btn-default" style="height:38px;" value="Ok!"/>
            </form>


                <!-- /.dropdown -->
                <li class="dropdown" style="float:right;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-retweet fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/frame/admin"><i class="fa fa-credit-card fa-fw"></i>Таблица событий</a>
                        </li>
                        <li><a href="/frame/adminstud"><i class="fa fa-user fa-fw"></i>Таблица студентов</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logOut"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
   
        </nav>

        <div id="page-wrapper" style="margin:0">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Таблица студентов</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
                            <!--Добавление нового студента-->
                            <button type="button" class="btn btn-default btn-lg" id="addStud" >
                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true" ></span> Добавить студента
                            </button><br />
                            <!--.Добавление нового студента-->
                            <!--Добавление новой группы -->
                            <button type="button" class="btn btn-default btn-sm" id="addNewGroup" style="margin-top:10px;">
                                <span class="glyphicon glyphicon-pushpin" aria-hidden="true" ></span> Добавить/Удалить группу
                            </button><br />
                            <form method="POST" id="addNewGroupForm" action="/frame/addgroupnumber" style="display:none;">
                                <input type="text"  placeholder="Введите новую группу" class="form-control formAddGroup" name="group_number_new"   style="width:220px;height:29px;margin-top:10px;margin-left:8px;float:left"/>
                                <input type="hidden" name="Location" value="addGroupNumberForm"/>
                                <input class="btn btn-default" id="addGroupNumber" type="submit" value="Добавить" style="margin:9px 0 -6px 7px;height:32px;"/>
                            </form>
                            <form method="POST" action="/frame/deletegroup">
                                <select  class="form-control delGroupSelect " name="groups" size="1" style="display:none;width:100px;margin-top:10px;height:30px;">
                                    <?php  $_smarty_tpl->tpl_vars['student_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student_group']->key => $_smarty_tpl->tpl_vars['student_group']->value) {
$_smarty_tpl->tpl_vars['student_group']->_loop = true;
?>
                                        <option  value="<?php echo $_smarty_tpl->tpl_vars['student_group']->value['student_group_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['student_group']->value['student_group'];?>
</option>
                                    <?php } ?>
                                    <input class="btn btn-default" id="DeleteGroupNumber" type="submit" value="Удалить" style="height:32px;display:none;"/>
                                </select>
                            </form>
                            <!--.Добавление новой группы -->
                            
                            <!--Перевод студентов на курс выше -->
                            <form  method="POST" action="/frame/upgroup">
                                <input type="hidden" name="Location" value="upGroup"/>
                                <input type="submit" id="upGroup" class="btn btn-default" value="Повысить курс студентов" style="float:right; margin: -90px -5px 0 0;"/>
                            </form>
                            <!--.Перевод студентов на курс выше -->
                        </div>
                        <!--Форма добавления студента-->
                            <div class="col-md-12 formAddEvent" style="display:none;" id="addStud2">
                                  <form id="addStudForm"  onsubmit="return false;">
                                      <input type="hidden" name="event_id" value="<?php echo $_smarty_tpl->tpl_vars['Stud']->value['student_id'];?>
" /><br/>
                                      <input type="text"  placeholder="Введите фамилию" class="form-control" name="student_first_name" value="<?php echo $_smarty_tpl->tpl_vars['Stud']->value['student_first_name'];?>
"  style="width:500px;"/><br/>
                                      <input type="text"  placeholder="Введите имя" class="form-control" name="student_name" value="<?php echo $_smarty_tpl->tpl_vars['Stud']->value['student_name'];?>
"  style="width:500px;"/><br/>
                                      <input type="text"  placeholder="Введите отчество" class="form-control" name="student_patronymic" value="<?php echo $_smarty_tpl->tpl_vars['Stud']->value['student_patronymic'];?>
"  style="width:500px;"/><br/>
                                      <select  class="selectpicker" name="groups" size="1" style="width:500px;">
                                          <?php  $_smarty_tpl->tpl_vars['student_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student_group']->key => $_smarty_tpl->tpl_vars['student_group']->value) {
$_smarty_tpl->tpl_vars['student_group']->_loop = true;
?>
                                            <option  value="<?php echo $_smarty_tpl->tpl_vars['student_group']->value['student_group_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['student_group']->value['student_group'];?>
</option>
                                          <?php } ?>
                                      </select><br/><br />
                                      <select class="selectpicker" name="course_number" size="1" style="width:500px;margin-top:20px;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                      </select>
                                      <input placeholder="Введите дату рождения. Формат:дд.мм.гггг" class="form-control" name="birth_dates" type="date" value="<?php echo $_smarty_tpl->tpl_vars['Stud']->value['student_birth_date'];?>
" style="margin-top:18px;width:500px;"/></br>
                                      <input type="hidden" name="Location" value="addStudForm"/>
                                      <input class="btn btn-default" id="addS" type="submit" value="OK!"/>
                                  </form>                        
                              </div>  
                          <!--.Форма добавления студента-->
                          
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    
                                        <tr>
                                            <th>Фамилия</th>
                                            <th>Имя</th>
                                            <th>Отчество</th>
                                            <th></th>
                                            <th>Группа</th>
                                            <th>Номер курса</th>
                                            <th>Дата рождения</th>
                                            <th style="width:5%;">История</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableStud">
                                        <?php  $_smarty_tpl->tpl_vars['stud'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stud']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AbitArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stud']->key => $_smarty_tpl->tpl_vars['stud']->value) {
$_smarty_tpl->tpl_vars['stud']->_loop = true;
?>
                                          <tr class="odd gradeX">
                                                
                                                <td id="<?php echo $_smarty_tpl->tpl_vars['stud']->value['student_id'];?>
" class="pointsColorAll"><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_first_name'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_name'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_patronymic'];?>
</td>
                                                <td style="width:8%"><button  id="<?php echo $_smarty_tpl->tpl_vars['stud']->value['student_id'];?>
" type="button" data-toggle="modal" data-target="#myModal"  title="Изменить событие" class="ssilkastud glyphicon glyphicon-pencil" ></button> | <button  value="<?php echo $_smarty_tpl->tpl_vars['stud']->value['student_id'];?>
" title="Удалить событие" class="delS glyphicon glyphicon-remove"></button></div></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_group'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_course_number'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_birth_date'];?>
</td>
                                                <td  style="width:10%;"> <button style="margin-left:35px;" id="<?php echo $_smarty_tpl->tpl_vars['stud']->value['student_id'];?>
" type="button" data-toggle="modal" data-target="#myModal1" title="Просмотреть историю" class="history glyphicon glyphicon-time" ></button></td>
                                          </tr>
                                        <?php } ?>                               
                                    </tbody>
                                </table>
                                
                                 <!-- Форма изменения студента -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Изменить студента</h4>
                                  </div>
                                  <div class="modal-body">
                                     <form method="POST" action="/frame/formstudentsuccess">
                                         <input type="hidden" id="student_id" name="student_id" value="<?php echo $_smarty_tpl->tpl_vars['Stud']->value['student_id'];?>
" /><br>
                                         
                                         <input type="text" id="student_first_name" class="form-control" name="student_first_name" value="<?php echo $_smarty_tpl->tpl_vars['Stud']->value['student_first_name'];?>
" size="30" /><br>
                                         
                                         <input type="text" id="student_name" class="form-control" name="student_name" value="<?php echo $_smarty_tpl->tpl_vars['Stud']->value['student_name'];?>
" size="30" /><br>
                                         
                                         <input type="text" id="student_patronymic" class="form-control" name="student_patronymic" value="<?php echo $_smarty_tpl->tpl_vars['Stud']->value['student_patronymic'];?>
" size="30" /><br>
                                         
                                         <select class="form-control"   name="groups" size="1">
                                                <?php  $_smarty_tpl->tpl_vars['student_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student_group']->key => $_smarty_tpl->tpl_vars['student_group']->value) {
$_smarty_tpl->tpl_vars['student_group']->_loop = true;
?>
                                                      <option class="student_group_id"  value="<?php echo $_smarty_tpl->tpl_vars['student_group']->value['student_group_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['student_group']->value['student_group'];?>
</option>
                                                <?php } ?>
                                         </select><br />
                                         
                                         <select class="form-control"   name="course_number" size="1">
                                                 <option class="student_course_number" value="1">1</option>
                                                 <option class="student_course_number" value="2">2</option>
                                                 <option class="student_course_number" value="3">3</option>
                                                 <option class="student_course_number" value="4">4</option>
                                                 <option class="student_course_number" value="5">5</option>
                                          </select><br />
                                         
                                         <input  id="student_birth_date" class="form-control" name="student_birth_date" type="date" value="<?php echo $_smarty_tpl->tpl_vars['stud']->value['student_birth_date'];?>
" /><br/>                                
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                    <input type="hidden" name="Location" value="addStudForm"/>
                                    <input type="submit" class="btn btn-primary" value="Изменить студента" />
                               </form> 
                                  </div>
                                </div>
                              </div>
                            </div><!--.Форма изменения студента-->
                            </div>
                            
                            <!-- История -->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                   <ul class="nav nav-pills">
                                    <li role="presentation" class="active"><a class="modal-title histTab" href="#histTbody" id="myModalLabel">История</a></li>
                                    <li role="presentation"><a href="#histTbody2" class="modal-title histAllTab">История списаний</a></li>
                                    </ul>
                                  </div>

                                  <div class="modal-body"  id="histTable">
                                           <select class="form-control" id="history_event_id"  size="1">
                                            <option id="enterEvent">Выберите событие</option>
                                           </select><br /> 
                                           
                                           <table class="table">
                                            <thead>
                                                <th>Дата</th>
                                                <th>Баллы</th>
                                                <th>Комментарий</th>
                                            </thead>
                                            <tbody id="histTbody">
                                            </tbody>
                                           </table>
                                       </div>
                                       
                                       <div class="modal-body"  id="histTableAll"  style="display:none;">
                                           <table class="table">
                                            <thead>
                                                <th>Дата</th>
                                                <th>Баллы</th>
                                                <th>Комментарий</th>
                                            </thead>
                                            <tbody id="histTbody2">
                                            </tbody>
                                           
                                           </table>                                                           
                                        
                                                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="closeHistory btn btn-default" data-dismiss="modal">Закрыть</button>
                                  </div>
                                </div>
                              </div>
                            </div><!--.История-->
                            <div class="well">
                                <a class="btn btn-default btn-lg btn-block pointsAll" >Списать баллы</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                <div class="row" >
                    <div class="col-lg-12 point-panelAll" style="display:none;">
                    <form id="addPform" method="POST" action="/frame/deletepointsall">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="height:100px;">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:14%;">Фамилия</th>
                                            <th style="width:14%;">Имя</th>
                                            <th style="width:14%;">Отчество</th>
                                            <th style="width:14%;">Номер группы</th>
                                            <th style="width:14%;">Общий балл</th>
                                            <th style="width:14%;">Списать балл</th>
                                            <th style="width:14%;">Комментарий</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <input type="hidden" name="allPoint_id" id="allPoint_id"  value=""/>
                                        <td style="width:10%;"><input type="text" id="allPoint_FirstName" name="allPoint_FirstName" value=""  disabled/></td>
                                        <td style="width:10%;"><input type="text" id="allPoint_Name" name="allPoint_Name" value=""  disabled/></td>
                                        <td style="width:10%;"><input type="text" id="allPoint_Patronymic" name="allPoint_Patronymic" value="" disabled/></td>
                                        <td style="width:10%;"><input type="text" id="allPoint_GroupNumber" name="allPoint_GroupNumber" value=""  disabled/></td>
                                        <td style="width:10%;"><input type="text" id="allPoint_Points" name="allPoint_Points" value=""  disabled/></td>
                                        <td style="width:10%;"><input type="number" id="allPoint_DeletePoints" name="allPoint_DeletePoints" value=""  /></td>
                                        <td style="width:10%;"><input type="text" id="allPoint_Comment" name="allPoint_Comment" value=""  /></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
               </div>
               <div class="well okbuttonAll" style="display:none;">
                    <input type="hidden" name="Location" value="deletePointsAllForm" />
                    <input type="submit" id="delP" class="btn btn-default btn-lg btn-block points" value="OK!"/>            
               </div>
               </form>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/jquery/jquery-2.0.3.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/js/my.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/js/studjs.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/js/bootstrap-select.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
        
    
    

    $('.selectpicker').selectpicker();
            
    
    });
    

    </script>

</body>

</html>
<?php }} ?>
