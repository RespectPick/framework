
<!DOCTYPE html>
<html lang="en">

<head>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Таблица рейтинга СОКД</title>

    <!-- Bootstrap Core CSS -->
    <link href="{$site_root}/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{$site_root}/assets/bootstrap/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{$site_root}/assets/bootstrap/css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{$site_root}/assets/bootstrap/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{$site_root}/assets/Font-Awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                                        {foreach item=stud from=$AbitArray}
                                          <tr class="odd gradeX">
                                                <td>{$stud.student_first_name}</td>
                                                <td>{$stud.student_name}</td>
                                                <td>{$stud.student_patronymic}</td>
                                                <td>{$stud.student_group}</td>
                                                <td>{$stud.points}</td>
                                                <td  style="width:10%;"> <button style="margin-left:35px;" id="{$stud.student_id}" type="button" data-toggle="modal" data-target="#myModal1" title="Просмотреть историю" class="history glyphicon glyphicon-time" ></button></td>
                                          </tr>
                                        {/foreach}                               
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
    <script src="{$site_root}/assets/jquery/jquery-2.0.3.min.js"></script>
    <script src="{$site_root}/assets/js/studjs.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{$site_root}/assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{$site_root}/assets/bootstrap/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="{$site_root}/assets/bootstrap/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="{$site_root}/assets/bootstrap/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{$site_root}/assets/bootstrap/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
