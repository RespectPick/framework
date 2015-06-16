
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>������ ��������������. �������</title>

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
    
    <link href="{$site_root}/assets/css/bootstrap-select.min.css" rel="stylesheet">
    
     <link href="{$site_root}/assets/css/style.css" rel="stylesheet">


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
                <a class="navbar-brand" href="index.html">������ ��������������</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                


                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-retweet fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/frame/admin"><i class="fa fa-credit-card fa-fw"></i>������� �������</a>
                        </li>
                        <li><a href="/frame/adminstud"><i class="fa fa-user fa-fw"></i>������� ���������</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logOut"><i class="fa fa-sign-out fa-fw"></i>�����</a>
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
                    <h1 class="page-header">������� �������</h1>


                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
                            <!--���������� ������ �������-->
                            <button type="button" class="btn btn-default btn-lg" id="addEvent" >
                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true" ></span> �������� �������
                            </button><br />
                            <!--.���������� ������ �������-->
                            
                            <!--���������� ���� ������� -->
                            <button type="button" class="btn btn-default btn-sm" id="addEventType" style="margin-top:10px;">
                                <span class="glyphicon glyphicon-pushpin" aria-hidden="true" ></span> �������� ��� �������
                            </button>
                            <form method="POST" id="addEventTypeForm" action="/frame/addeventtype" style="display:none;">
                                <input type="text"  placeholder="������� ����� ��� �������" class="form-control" name="event_type_name_new"   style="width:220px;height:29px;margin-top:10px;margin-left:8px;float:left"/>
                                <input type="hidden" name="Location" value="addEventTypeForm"/>
                                <input class="btn btn-default" id="addEventType" type="submit" value="OK!" style="margin:9px 0 -6px 7px;height:32px;"/>
                            </form>
                            <!--.���������� ���� ������� -->
                        </div>
                        
                        
                        
                        <!--����� ���������� �������-->
                            <div class="col-md-12 formAddEvent" style="display:none;" id="addEvent2">
                                  <form id="addEventForm"  onsubmit="return false;">
                                      <input type="hidden" name="event_id" value="{$Event.event_id}" /><br/>
                                      <input type="text"  placeholder="������� ����� �������" class="form-control" name="event_name" value="{$Event.event_name}"  style="width:500px;"/><br/>
                                      <select id="select_id"  class="selectpicker" name="event_type_id" size="1" style="width:500px;">
                                          {foreach item=event_type from=$EventsType}
                                            <option  value="{$event_type.events_type_id}">{$event_type.events_type_name}</option>
                                          {/foreach}
                                      </select><br/>
                                      <input placeholder="������� ���� ������. ������:��.��.����" class="form-control" name="event_period_start" type="date" value="{$Event.event_period_start}" style="margin-top:18px;width:500px;"/></br>
                                      <input class="form-control" placeholder="������� ���� ���������. ������:��.��.����" name="event_period_end" type="date" value="{$Event.event_period_end}" style="width:500px;"/></br>
                                      <input type="hidden" name="Location" value="addEventForm"/>
                                      <input class="btn btn-default" id="addE" type="submit" value="OK!"/>
                                  </form>                        
                              </div>  
                          <!--.����� ���������� �������-->
                          
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    
                                        <tr>
                                            <th>�������</th>
                                            <th></th>
                                            <th>���</th>
                                            <th>���� ������</th>
                                            <th>���� ���������</th>
                                        </tr>
                                    </thead>
                                    <!-- onclick="window.location.href='/somePage'; return false"-->
                                    <tbody id="tableEv">
                                    {foreach item=stud from=$AbitArray}
                                        <tr  class="odd gradeX ">
                                            <td style="width:40%"  id="{$stud.event_id}" class="pointsColor"><div class="col-md-10" style="float:left;">{$stud.event_name}</div><div style="left:30px;" class="col-md-2"></td>
                                            <td style="width:8%"><button  id="{$stud.event_id}" type="button" data-toggle="modal" data-target="#myModal"  title="�������� �������" class="ssilka glyphicon glyphicon-pencil" ></button> | <button  value="{$stud.event_id}" title="������� �������" class="delE glyphicon glyphicon-remove"></button></div></td>
                                            <td style="width:10%">{$stud.events_type_name}</td>
                                            <td style="width:15%">{$stud.event_period_start}</td>
                                            <td style="width:15%" class="center">{$stud.event_period_end}</td>
                                        </tr>
                                        {/foreach}
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">�������� �������</h4>
                                  </div>
                                  <div class="modal-body">
                                   <form method="POST" action="/frame/formeventsuccess">
                                     <input type="hidden" id="event_id" name="event_id" value="{$Event.event_id}" /><br/>
                                         
                                      <input class="form-control" type="text" id="event_name" name="event_name" value="{$Event.event_name}" size="30" /><br/>
                                         
                                           <select class="form-control" id="select_type_id"  name="event_type_id" size="1">
                                              {foreach item=event_type from=$EventsType}
                                                 <option class="event_type_id" value="{$event_type.events_type_id}">{$event_type.events_type_name}</option>
                                              {/foreach}
                                           </select><br />                                                             
                                                                                                  
                                       <input class="form-control" id="event_period_start" name="event_period_start" type="date" value="{$Event.event_period_start}" /><br/>                                                          
                                           
                                      <input class="form-control" id="event_period_end" name="event_period_end" type="date" value="{$Event.event_period_end}"/><br/>                             
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">�������</button>
                                    <input type="hidden" name="Location" value="addEventForm" />
                                    <input type="submit" class="btn btn-primary" value="�������� �������" />
                                     </form> 
                                  </div>
                                </div>
                              </div>
                            </div><!--.Modal-->
     
                            <!-- /.table-responsive -->
                            <div class="well">
                                <a class="btn btn-default btn-lg btn-block points"  >��������� �����</a>
                                
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
                            <input class="col-md-3 disabledFirst" type="text" id="event_point_name" name="event_point_name" value="{$Event.event_name}" size="60" disabled="disabled" />
                            <input type="hidden" name="admin_event_id_name" id="admin_event_id"  value=""/>
                            <div class="col-md-6"></div>
                                <button style="margin-left:155px;" class="button-points add_student" type="button" class="btn btn-default btn-lg" id="addEvent">
                                    <span class="glyphicon glyphicon-plus-sign " aria-hidden="true" ></span>�������� �������� 
                                </button>
                        </div>
                       
                       <!-- ������� ���������-->
                   <div class="panel panel-default student_points" style="display:none;">
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                                    <thead>                                  
                                        <tr>
                                            <th>�������</th>
                                            <th>���</th>
                                            <th>��������</th>
                                            <th>� ������</th>
                                            <th>���� ��������</th>
                                            <th>������� ��������</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    {foreach item=stud2 from=$StudentArray}
                                        <tr class="odd gradeX ">
                                            <td>{$stud2.student_first_name}
                                             <input type="hidden" id="{$stud2.student_group_id}" name="group_id" value="{$stud2.student_group_id}" />
                                            </td>
                                            <td>{$stud2.student_name}</td>
                                            <td>{$stud2.student_patronymic}</td>
                                            <td>{$stud2.student_group}</td>
                                            <td>{$stud2.student_birth_date}</td>
                                            <td><button  style="margin-left:37%;" id="{$stud2.student_id}" type="button"   title="������� �������� ��� ���������� ������" class="ssilkaPoint glyphicon glyphicon-plus-sign" ></button></td>
                                        </tr>
                                        {/foreach}
                                    </tbody>
                                </table>
                            </div>
                       </div>
                    </div><!--.������� ���������-->
                       
                       
                       <form id="addPform" method="POST" action="/frame/addpoints">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr class="trHide" style="display:none;">
                                            <th  style="width:7%;"># ������</th>
                                            <th style="width:15%;">�������</th>
                                            <th style="width:15%;">���</th>
                                            <th style="width:15%;">��������</th>
                                            <th style="width:10%;">����� ����</th>
                                            <th style="width:10%;">����</th>
                                            <th style="width:10%;">�����������</th>
                                            <th style="width:5%;">�������</th>
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
    <script src="{$site_root}/assets/jquery/jquery-2.0.3.min.js"></script>
        <script src="{$site_root}/assets/js/my.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{$site_root}/assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{$site_root}/assets/bootstrap/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="{$site_root}/assets/bootstrap/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="{$site_root}/assets/bootstrap/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{$site_root}/assets/bootstrap/js/bootstrap-select.min.js"></script>
    
    <script src="{$site_root}/assets/bootstrap/js/sb-admin-2.js"></script>

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
