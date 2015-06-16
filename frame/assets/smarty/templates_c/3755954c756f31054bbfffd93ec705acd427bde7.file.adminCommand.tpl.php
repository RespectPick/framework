<?php /* Smarty version Smarty-3.1.15, created on 2015-05-21 07:37:01
         compiled from "Z:\home\diplom1.ru\www\frame\application\view\adminCommand.tpl" */ ?>
<?php /*%%SmartyHeaderCode:263965492601b9dc321-57661478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3755954c756f31054bbfffd93ec705acd427bde7' => 
    array (
      0 => 'Z:\\home\\diplom1.ru\\www\\frame\\application\\view\\adminCommand.tpl',
      1 => 1432013546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263965492601b9dc321-57661478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5492601baa8517_35205451',
  'variables' => 
  array (
    'site_root' => 0,
    'Event' => 0,
    'EventsType' => 0,
    'event_type' => 0,
    'AbitArray' => 0,
    'stud' => 0,
    'StudentArray' => 0,
    'stud2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492601baa8517_35205451')) {function content_5492601baa8517_35205451($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Панель администартора. События</title>

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

    <!-- Custom Fonts -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/Font-Awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/css/bootstrap-select.min.css" rel="stylesheet">
    
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
                


                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-retweet fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/frame/admin"><i class="fa fa-credit-card fa-fw"></i>Таблица событий</a>
                        </li>
                        <li><a href="/frame/adminstud"><i class="fa fa-user fa-fw"></i>Таблица студентов</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logOut"><i class="fa fa-sign-out fa-fw"></i>Выйти</a>
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
                    <h1 class="page-header">Таблица событий</h1>


                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
                            <!--Добавление нового события-->
                            <button type="button" class="btn btn-default btn-lg" id="addEvent" >
                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true" ></span> Добавить событие
                            </button><br />
                            <!--.Добавление нового события-->
                            
                            <!--Добавление типа события -->
                            <button type="button" class="btn btn-default btn-sm" id="addEventType" style="margin-top:10px;">
                                <span class="glyphicon glyphicon-pushpin" aria-hidden="true" ></span> Добавить тип события
                            </button>
                            <form method="POST" id="addEventTypeForm" action="/frame/addeventtype" style="display:none;">
                                <input type="text"  placeholder="Введите новый тип события" class="form-control" name="event_type_name_new"   style="width:220px;height:29px;margin-top:10px;margin-left:8px;float:left"/>
                                <input type="hidden" name="Location" value="addEventTypeForm"/>
                                <input class="btn btn-default" id="addEventType" type="submit" value="OK!" style="margin:9px 0 -6px 7px;height:32px;"/>
                            </form>
                            <!--.Добавление типа события -->
                        </div>
                        
                        
                        
                        <!--Форма добавления события-->
                            <div class="col-md-12 formAddEvent" style="display:none;" id="addEvent2">
                                  <form id="addEventForm"  onsubmit="return false;">
                                      <input type="hidden" name="event_id" value="<?php echo $_smarty_tpl->tpl_vars['Event']->value['event_id'];?>
" /><br/>
                                      <input type="text"  placeholder="Введите новое событие" class="form-control" name="event_name" value="<?php echo $_smarty_tpl->tpl_vars['Event']->value['event_name'];?>
"  style="width:500px;"/><br/>
                                      <select id="select_id"  class="selectpicker" name="event_type_id" size="1" style="width:500px;">
                                          <?php  $_smarty_tpl->tpl_vars['event_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EventsType']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event_type']->key => $_smarty_tpl->tpl_vars['event_type']->value) {
$_smarty_tpl->tpl_vars['event_type']->_loop = true;
?>
                                            <option  value="<?php echo $_smarty_tpl->tpl_vars['event_type']->value['events_type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['event_type']->value['events_type_name'];?>
</option>
                                          <?php } ?>
                                      </select><br/>
                                      <input placeholder="Введите дату начала. Формат:дд.мм.гггг" class="form-control" name="event_period_start" type="date" value="<?php echo $_smarty_tpl->tpl_vars['Event']->value['event_period_start'];?>
" style="margin-top:18px;width:500px;"/></br>
                                      <input class="form-control" placeholder="Введите дату окончания. Формат:дд.мм.гггг" name="event_period_end" type="date" value="<?php echo $_smarty_tpl->tpl_vars['Event']->value['event_period_end'];?>
" style="width:500px;"/></br>
                                      <input type="hidden" name="Location" value="addEventForm"/>
                                      <input class="btn btn-default" id="addE" type="submit" value="OK!"/>
                                  </form>                        
                              </div>  
                          <!--.Форма добавления события-->
                          
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    
                                        <tr>
                                            <th>Событие</th>
                                            <th></th>
                                            <th>Тип</th>
                                            <th>Дата начала</th>
                                            <th>Дата окончания</th>
                                        </tr>
                                    </thead>
                                    <!-- onclick="window.location.href='/somePage'; return false"-->
                                    <tbody id="tableEv">
                                    <?php  $_smarty_tpl->tpl_vars['stud'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stud']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AbitArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stud']->key => $_smarty_tpl->tpl_vars['stud']->value) {
$_smarty_tpl->tpl_vars['stud']->_loop = true;
?>
                                        <tr  class="odd gradeX ">
                                            <td style="width:40%"  id="<?php echo $_smarty_tpl->tpl_vars['stud']->value['event_id'];?>
" class="pointsColor"><div class="col-md-10" style="float:left;"><?php echo $_smarty_tpl->tpl_vars['stud']->value['event_name'];?>
</div><div style="left:30px;" class="col-md-2"></td>
                                            <td style="width:8%"><button  id="<?php echo $_smarty_tpl->tpl_vars['stud']->value['event_id'];?>
" type="button" data-toggle="modal" data-target="#myModal"  title="Изменить событие" class="ssilka glyphicon glyphicon-pencil" ></button> | <button  value="<?php echo $_smarty_tpl->tpl_vars['stud']->value['event_id'];?>
" title="Удалить событие" class="delE glyphicon glyphicon-remove"></button></div></td>
                                            <td style="width:10%"><?php echo $_smarty_tpl->tpl_vars['stud']->value['events_type_name'];?>
</td>
                                            <td style="width:15%"><?php echo $_smarty_tpl->tpl_vars['stud']->value['event_period_start'];?>
</td>
                                            <td style="width:15%" class="center"><?php echo $_smarty_tpl->tpl_vars['stud']->value['event_period_end'];?>
</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Изменить событие</h4>
                                  </div>
                                  <div class="modal-body">
                                   <form method="POST" action="/frame/formeventsuccess">
                                     <input type="hidden" id="event_id" name="event_id" value="<?php echo $_smarty_tpl->tpl_vars['Event']->value['event_id'];?>
" /><br/>
                                         
                                      <input class="form-control" type="text" id="event_name" name="event_name" value="<?php echo $_smarty_tpl->tpl_vars['Event']->value['event_name'];?>
" size="30" /><br/>
                                         
                                           <select class="form-control" id="select_type_id"  name="event_type_id" size="1">
                                              <?php  $_smarty_tpl->tpl_vars['event_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EventsType']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event_type']->key => $_smarty_tpl->tpl_vars['event_type']->value) {
$_smarty_tpl->tpl_vars['event_type']->_loop = true;
?>
                                                 <option class="event_type_id" value="<?php echo $_smarty_tpl->tpl_vars['event_type']->value['events_type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['event_type']->value['events_type_name'];?>
</option>
                                              <?php } ?>
                                           </select><br />                                                             
                                                                                                  
                                       <input class="form-control" id="event_period_start" name="event_period_start" type="date" value="<?php echo $_smarty_tpl->tpl_vars['Event']->value['event_period_start'];?>
" /><br/>                                                          
                                           
                                      <input class="form-control" id="event_period_end" name="event_period_end" type="date" value="<?php echo $_smarty_tpl->tpl_vars['Event']->value['event_period_end'];?>
"/><br/>                             
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                    <input type="hidden" name="Location" value="addEventForm" />
                                    <input type="submit" class="btn btn-primary" value="Изменить событие" />
                                     </form> 
                                  </div>
                                </div>
                              </div>
                            </div><!--.Modal-->
     
                            <!-- /.table-responsive -->
                            <div class="well">
                                <a class="btn btn-default btn-lg btn-block points"  >Начислить баллы</a>
                                
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" >
                <div class="col-lg-12 point-panel" style="display:none;">
                    <div class="panel panel-default ">
                        <div class="panel-heading">
                            <input class="col-md-3 disabledFirst" type="text" id="event_point_name" name="event_point_name" value="<?php echo $_smarty_tpl->tpl_vars['Event']->value['event_name'];?>
" size="60" disabled="disabled" />
                            <input type="hidden" name="admin_event_id_name" id="admin_event_id"  value=""/>
                            <div class="col-md-6"></div>
                                <button style="margin-left:155px;" class="button-points add_student" type="button" class="btn btn-default btn-lg" id="addEvent">
                                    <span class="glyphicon glyphicon-plus-sign " aria-hidden="true" ></span>Добавить студента 
                                </button>
                        </div>
                       
                       <!-- Таблица студентов-->
                   <div class="panel panel-default student_points" style="display:none;">
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                                    <thead>                                  
                                        <tr>
                                            <th>Фамилия</th>
                                            <th>Имя</th>
                                            <th>Отчество</th>
                                            <th>№ группы</th>
                                            <th>Дата рождения</th>
                                            <th>Выбрать студента</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['stud2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stud2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['StudentArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stud2']->key => $_smarty_tpl->tpl_vars['stud2']->value) {
$_smarty_tpl->tpl_vars['stud2']->_loop = true;
?>
                                        <tr class="odd gradeX ">
                                            <td><?php echo $_smarty_tpl->tpl_vars['stud2']->value['student_first_name'];?>

                                             <input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['stud2']->value['student_group_id'];?>
" name="group_id" value="<?php echo $_smarty_tpl->tpl_vars['stud2']->value['student_group_id'];?>
" />
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['stud2']->value['student_name'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['stud2']->value['student_patronymic'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['stud2']->value['student_group'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['stud2']->value['student_birth_date'];?>
</td>
                                            <td><button  style="margin-left:37%;" id="<?php echo $_smarty_tpl->tpl_vars['stud2']->value['student_id'];?>
" type="button"   title="Выбрать студента для начисления баллов" class="ssilkaPoint glyphicon glyphicon-plus-sign" ></button></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                       </div>
                    </div><!--.Таблица студентов-->
                       
                       
                       <form id="addPform" method="POST" action="/frame/addpoints">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr class="trHide" style="display:none;">
                                            <th  style="width:7%;"># Группы</th>
                                            <th style="width:15%;">Фамилия</th>
                                            <th style="width:15%;">Имя</th>
                                            <th style="width:15%;">Отчество</th>
                                            <th style="width:10%;">Общий балл</th>
                                            <th style="width:10%;">Балл</th>
                                            <th style="width:10%;">Комментарий</th>
                                            <th style="width:5%;">Удалить</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody id="tableStudPoint">
                                    
                                        <input  type="hidden" id="event_point_name2" name="event_point_name2" value="" size="60" />

                                        <input id="student_count" type="hidden" name="stud_count" value="" />
                                    </tbody>
                                   
                                </table>
                            </div>
                            
                            <div class="well okbutton" style="display:none;">
                                <input type="hidden" name="Location" value="addPointForm" />
                                <input type="submit" id="addP" class="btn btn-default btn-lg btn-block points" value="OK!"/>
                           
                            </div>
                        

                        
                    </div>
                   </form>
                </div>
           </div>    
              

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/jquery/jquery-2.0.3.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/js/my.js"></script>

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

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/js/bootstrap-select.min.js"></script>
    
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
        
          $('#dataTables-example1').dataTable();

         $('.selectpicker').selectpicker();
       

    });
    </script>
    

    

    




</body>

</html>
<?php }} ?>
