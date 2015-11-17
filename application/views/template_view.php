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
	<link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Александр Пронишин</title>

    <!-- Bootstrap -->
    <link href="<?=$dir?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=$dir?>css/justified-nav.css" rel="stylesheet">
	<link href="<?=$dir?>css/bicycle.css" rel="stylesheet">
	<link href="<?=$dir?>css/footer.css" rel="stylesheet">
	<link href="<?=$dir?>css/watch.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

  <body style="font-family: 'Open Sans', sans-serif;background: #273135 url('<?=$dir?>images/top.png') repeat scroll 0% 0%!important;">
	<div class="container">
		<div class="row">
		  <div class="col-md-5 col-sm-7 col-xs-12"><img src="<?=$dir?>images/logo.png" class="img-responsive" alt="SolarStudio.org"></div>
		  <div class="col-md-7 col-sm-5 col-xs-12" >
		  		<div class="col-md-6 hidden-sm">
				</div>
				<div class="col-md-6 col-sm-12">

					  <ul class="white-text center-block" style="list-style-type:none;">
						<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> &nbsp;02068 Украина, Киев<br/></li>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ул. А. Ахматовой 13д<br/></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;+38 067 2095015<br/></li>
						<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;am@pronishin.com.ua<br/></li>
					  </ul>		
				</div>
		  </div>
		</div>
			<nav>
			<div class="row">
				  <ul class="nav nav-justified">
					<li><a href="/">Главная</a></li>
					<li><a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">О компании</a>
						<ul class="dropdown-menu dropdown-menu-main">
						  <li><a href="/about/company">О компании</a></li>
						  <li><a href="/about/codex">Наши принципы работы</a></li>
						  <li><a href="/about/pronishin">О руководителе</a></li>
						</ul>
					</li>
					<li><a href="/training">Тренинги</a></li>
					<li><a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Консалтинг</a>
						<ul class="dropdown-menu dropdown-menu-main">
						  <li><a href="/consulting/strategy">Стратегия</a></li>
						  <li><a href="#">Управленческий счет</a></li>
						  <li><a href="#">Служба продаж</a></li>
						</ul>
					</li>
					<li><a href="/material">Материалы</a></li>
					
				  </ul>
			  </div>
			</nav>
		<br>
		<?php include 'application/views/'.$content_view; ?>
		<div class="row white-text">
					<div class="col-md-12 text-center">
						<h4>Полезные материалы подписчикам сайта</h4>
					</div>
			 <div class="col-md-8">
				<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6  filter white-text">
							<img src="<?=$dir?>images/brick.jpg" class="img-responsive event-img" alt="Responsive image">
							<h2 class="p">Heading</h2>
							<p class="p">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
							<p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
							<br/>
						</div>	
						<div class="col-lg-6 col-md-6 col-sm-6  filter white-text">
							<img src="<?=$dir?>images/brick.jpg" class="img-responsive event-img" alt="Responsive image">
							<h2 class="p">Heading</h2>
							<p class="p">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
							<p class="p"><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
							<br/>
						</div>	
				</div>
			 </div>
			 <div class="col-md-4 text-center">
				<ul class="list-group black-text">
				  <li class="list-group-item text-center">
					Дополнительная информация
				  </li>
				  <li class="list-group-item technical">
					Информация 1
				  </li>
				  <li class="list-group-item technical">
					Информация 2
				  </li>
				  <li class="list-group-item technical">
					Информация 3
				  </li>
				  <li class="list-group-item technical">
					Информация 4
				  </li>
				</ul>
			 </div>
	</div>
</div>
<div class="container">
	<footer class="footer">
		  <div class="container">
			<p class="text-muted"><a href="http://solarstudio.org"><img style="float:left;" width="150px" height="100px" src="<?=$dir?>images/logo-header.png" class="img-responsive" alt="SolarStudio.org"/></a></p>
		  </div>
		</footer>
</div>
	</body>
		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="<?=$dir?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=$dir?>js/bootstrap-datepicker.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	     <!--<script type="text/javascript" src="../templates/onu/js/moment-with-locales.min.js"></script>-->
	<script type="text/javascript" src="<?=$dir?>js/bicycle.js"></script>
	<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->			
	<script type="text/javascript" src="<?=$dir?>js/jquery.downCount.js"></script>
	<!--<script type="text/javascript" src="<?=$dir?>js/html5kellycolorpicker.js"></script>-->
	        <script>
            new KellyColorPicker({place : 'picker1', input : 'color1', size : 150}); 
            new KellyColorPicker({place : 'picker2', input : 'color2', size : 150}); 
            new KellyColorPicker({place : 'picker3', input : 'color3', size : 150}); 			
        </script> 
	<script type="text/javascript">
        $('.countdown').downCount({
            date: '11/20/2015 12:00:00',
            offset: +10
        }, function () {
            alert('WOOT WOOT, done!');
        });
   </script>


<script type="text/javascript">(function(w,doc) {
if (!w.__utlWdgt ) {
    w.__utlWdgt = true;
    var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
}})(window,document);
</script>	