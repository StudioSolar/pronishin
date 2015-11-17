<?
$dir="";
$routes = explode('/', $_SERVER['REQUEST_URI']);
for($i=2;$i<count($routes);$i++)
{
	$dir.="../";
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Портал учебно-методических форумов ИМЭМ ОНУ</title>
    <link rel="stylesheet" href="<?=$dir?>css/bootstrap-datepicker3.min.css" />

    <!-- Bootstrap -->
    <link href="<?=$dir?>css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand hidden-sm hidden-xs" href="/">Портал учебно-методических форумов ИМЭМ ОНУ</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="POST" action="<?$_SERVER['SERVER_NAME']?>/logout">
			<ul class="nav nav-pills">
			  <li role="presentation" ><a href="/">Главная</a></li>
			  <li role="presentation" ><a href="/forum">Форум</a></li>
			  <li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				  <?=$userdata[0]['fname'].' '.$userdata[0]['lname'];?><span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
				  <li><a href="/profile">Профиль</a></li>
				  <li><a href="/dialog">Сообщения</a></li>
				  <li><a href="/calendar">Календарь событий</a></li>
				  <li><a href="/settings">Настройки</a></li>
				  <li role="separator" class="divider"></li>
				  <li><a href="/logout">Выход</a></li>
				</ul>
			  </li>
			</ul>

          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	<body>
		<div class="container" style="margin-top:61px;">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-info hidden-sm hidden-xs">
						<div class="panel-heading">
							<h3 class="panel-title">Календарь</h3>
						</div>
						<div class="panel-body small" style="padding:2px;">  <div class="datepicker" style="box-sizing:border-box;"></div></div>
						<ul class="list-group">
						</ul>
					</div>
					<div class="list-group">
					  <a href="#" class="list-group-item active">
						Меню
						<span class="badge pull-right" data-toggle="tooltip" data-placement="left" title="Самые просматриваемые статьи за 90 дней">i</span>
					  </a>
					  <a href="/forum" class="list-group-item">Список форумов</a>
					  <a href="#" class="list-group-item">Наша команда</a>
					  <a href="#" class="list-group-item">Правила</a>
					</div>
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Полезные ссылки</h3>
						</div>
						<div class="list-group small">
						  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Официальный сайт ОНУ</a>
						  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Форум ОНУ</a>
						  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Освiта.UA</a>
						  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Портал естественных наук</a>
						</div>
						
					</div>
				</div>
				<div class="col-md-9">
					<?php include 'application/views/'.$content_view; ?>
				</div>
			</div>
		</div>
			<?/*unset($_SESSION['uid']);*///var_dump($_SESSION);?>
	</body>
		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="<?=$dir?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=$dir?>js/bootstrap-datepicker.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	     <!--<script type="text/javascript" src="../templates/onu/js/moment-with-locales.min.js"></script>-->
	<script type="text/javascript" src="<?=$dir?>js/bicycle.js"></script>
	<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->				