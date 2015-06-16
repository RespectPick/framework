<?php /* Smarty version Smarty-3.1.15, created on 2015-03-18 08:33:22
         compiled from "Z:\home\diplom1.ru\www\frame\application\view\tableRating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8072548e65a3799920-90380381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30a5ec16b93ee351fd3efbcbffd2049a54ee1a4d' => 
    array (
      0 => 'Z:\\home\\diplom1.ru\\www\\frame\\application\\view\\tableRating.tpl',
      1 => 1426660400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8072548e65a3799920-90380381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_548e65a383b874_21615316',
  'variables' => 
  array (
    'site_root' => 0,
    'AbitArray' => 0,
    'stud' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e65a383b874_21615316')) {function content_548e65a383b874_21615316($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Таблица рейтинга СОКД</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
 <div id="wrapper">
        <div id="page-wrapper" style="margin:0">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Таблица рейтинга</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    
                                        <tr>
                                            <th>Фамилия</th>
                                            <th>Имя</th>
                                            <th>Отчество</th>
                                            <th>Группа</th>
                                            <th>Общий балл</th>
                                            <th>История</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  $_smarty_tpl->tpl_vars['stud'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stud']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AbitArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stud']->key => $_smarty_tpl->tpl_vars['stud']->value) {
$_smarty_tpl->tpl_vars['stud']->_loop = true;
?>
                                          <tr class="odd gradeX">
                                                <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_first_name'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_name'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_patronymic'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['student_group'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['stud']->value['points'];?>
</td>
                                                <td  style="width:10%;"> <button style="margin-left:35px;" id="<?php echo $_smarty_tpl->tpl_vars['stud']->value['student_id'];?>
" type="button" data-toggle="modal" data-target="#myModal1" title="Просмотреть историю" class="history glyphicon glyphicon-time" ></button></td>
                                          </tr>
                                        <?php } ?>                               
                                    </tbody>
                                </table>
                            </div>

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
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/jquery/jquery-2.0.3.min.js"></script>
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

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
/assets/bootstrap/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
<?php }} ?>
