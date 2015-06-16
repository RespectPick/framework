<!DOCTYPE html>
<html lang="ru">
<head>    
	<meta charset="utf-8ru">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <!-- Core CSS - Include with every page -->
    <link href="{$site_root}/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{$site_root}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Page-Level Plugin CSS - Tables -->
    <link href="{$site_root}/assets/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="{$site_root}/assets/css/sb-admin.css" rel="stylesheet">
        <!-- Core Scripts - Include with every page -->
    <script src="{$site_root}/assets/jquery/jquery-2.0.3.min.js"></script>
    <script src="{$site_root}/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="{$site_root}/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="{$site_root}/assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="{$site_root}/assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <!-- SB Admin Scripts - Include with every page -->
    <script src="{$site_root}/assets/js/sb-admin.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">               
                <a class="navbar-brand" href="{$site_root}">Личный кабинет Риэлтора</a> <a href="{$site_root}/citySelectForm" class="navbar-brand" title="Сменить город">(Текущий город - {$currentCity.city_name})</a>
            </div>            
            <ul class="nav navbar-top-links navbar-right">       
            	<li><a href="{$site_root}/cabinet" title="Изменить параметры"><i class="fa fa-edit fa-fw"></i></a></li>
            	<li><a href="#" title="Удаление параметров"><i class="fa fa-wrench fa-fw"></i></a></li>
                <li><a href="{$site_root}/logOut" title="Выйти из системы"><i class="fa fa-sign-out fa-fw"></i></a></li>              
            </ul>
        </nav>
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
            	<li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        Нажми &laquo;Изменить параметы&raquo;, чтобы изменить значения параметров.<br>
                        Нажми &laquo;Удаление параметров&raquo;, чтобы удалить параметры.<br>
                	</div>
                </li>
                <li>
                    <a href="{$site_root}/cabinet"><i class="fa fa-edit fa-fw"></i> Изменить параметры</a>
                </li>
                <li>
                	<a href="{$site_root}/addParamForm"><i class="fa fa-wrench fa-fw"></i> Добавление параметров</a>
            	</li>
            	<li>
                	<a href="{$site_root}/editMultForm"><i class="fa fa-bars fa-fw"></i> Редактирование состояний</a>
            	</li>
            	<li>
                	<a href="{$site_root}/editCityForm"><i class="fa fa-cloud-download fa-fw"></i> Редактирование города</a>
            	</li>
            	<li>
                	<a href="{$site_root}/cityTable"><i class="fa fa-table fa-fw"></i> Таблица городов</a>
            	</li>
            	<li>
                	<a href="{$site_root}/feedbackTable"><i class="fa fa-comment-o fa-fw"></i> Обратная связь</a>
            	</li>
            	<li>
            		<a href="{$site_root}/logOut"><i class="fa fa-sign-out fa-fw"></i>Выйти из системы</a>
            	</li>	   
            </ul>
                    
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">