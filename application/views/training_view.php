<?
$dir="";
$routes = explode('/', $_SERVER['REQUEST_URI']);
for($i=2;$i<count($routes);$i++)
{
	$dir.="../";
}
?>
<?
foreach($data as $tr)
{

$tr_date1 = explode('-',$tr['start_date']);
$tr_date2 = explode('-',$tr['end_date']);
$year = $tr_date1[0];
$monthes = array(
    1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
    5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
    9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
);
$month = $monthes[$tr_date1[1]];
$days = ($tr_date1[2]==$tr_date2[2])?$tr_date1[2]:$tr_date1[2].'-'.$tr_date2[2];
?>

		<div class="row" style="color: #FFF;">
			<div class="page-header" style="margin:0 0px 20px;">
				<h1><?=$tr['title']?></h1>
			</div>
		</div>
		<div class="row" style="color: #FFF;">
		  <div class="col-md-3 col-sm-12 col-xs-12"  >
			<div class="row space-gray personality">
			<br/>
				<div class="col-md-12">
					<img src="<?=$dir?>images/aleksandr.jpg" class="img-responsive img-circle center-block" alt="Responsive image" style="border: 1px solid white;">
				</div>
				<div class="col-md-12">
					<div class="text-center">
						<h5>&#x1f4c5;&nbsp; &nbsp;Дата проведения:</h5>
						<h1><?=$days?></h1>
						<h4><?=$month?> <?=$year?></h4>
					</div>
						<button type="button" class="center-block btn btn-lg btn-default">Регистрация</button>
					<br/>
				</div>
			</div>
		  </div>
			<div class="col-md-6"  >
			  <div class="">
				  <div class="col-md-12">
				    <h2 class="text-center">До начала осталось:</h2>
				  </div>
				  <div class="col-md-12">
					<ul class="countdown">
						<li> <span class="days">00</span>
							<p class="days_ref">Дней</p>
						</li>
						<li class="seperator">:</li>
						<li> <span class="hours">00</span>
							<p class="hours_ref">Часов</p>
						</li>
						<li class="seperator">:</li>
						<li> <span class="minutes">00</span>
							<p class="minutes_ref">Минут</p>
						</li>
						<li class="seperator">:</li>
						<li> <span class="seconds">00</span>
							<p class="seconds_ref">Секунд</p>
						</li>
					</ul>
				</div>
				<div class="col-md-1 hidden-sm">
				</div>
				<div class="col-md-10">
					<div class="center-block">
						<?=$tr['description']?>
					</div>
				</div>
				<div class="col-md-1 hidden-sm">
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-1 hidden-sm hidden-xs">
							</div>
							<div class="col-md-10 col-sm-12 hidden-xs">
								<div class="center-block">
									<h5><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp; Тренер: <a href="#!">Пронишин Александр</a></h5>
								</div>
							</div>
							<div class="col-md-1 hidden-sm hidden-xs">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-1 hidden-sm hidden-xs">
							</div>
							<div class="col-md-10 col-sm-12  hidden-xs">
								<div class="center-block">
									<div data-background-alpha="0.0" data-buttons-color="#ffffff" data-counter-background-color="#ffffff" data-share-counter-size="14" data-top-button="false" data-share-counter-type="common" data-share-style="13" data-mode="share" data-like-text-enable="false" data-mobile-view="false" data-icon-color="#ffffff" data-orientation="horizontal" data-text-color="#000000" data-share-shape="round-rectangle" data-sn-ids="fb.vk.ok.gp.ln." data-share-size="30" data-background-color="#ffffff" data-preview-mobile="false" data-mobile-sn-ids="fb.vk.tw.wh.ok.gp." data-pid="1413847" data-counter-background-alpha="1.0" data-following-enable="false" data-exclude-show-more="true" data-selection-enable="false" class="uptolike-buttons" ></div>
								</div>
							</div>
							<div class="col-md-1 hidden-sm hidden-xs">
							</div>
						</div>
					</div>
				</div>				
			</div>
		  </div>	  
		  <div class="col-md-3 col-sm-12 col-xs-12"  >
		  	<div class="information">
				<div class="col-md-12 ">
					<div class="row space-gray ">
						<div class="col-md-4 ">
							<br class="hidden-sm"/>
							<div class="text-center">
								<div class="col-md-12">&nbsp;</div>
								<span class="glyphicon glyphicon-map-marker" style="font-size:70px;" aria-hidden="true"></span>
							</div>
							<br class="hidden-sm"/>
						</div>
						<div class="col-md-8 ">
						<br class="hidden-sm"/>
							<div class="center-block">
								<h6>Место проведения:</h6>
								<h3><?=$tr['place']?></h3>
								<h5>Адрес уточняйте у менеджера</h5>
							</div>
						<br class="hidden-sm"/>
					</div>
				  </div>
				</div>
				
				<div class="col-md-12">
					<div class="row space-gray" style="margin-top:20px;">
						<div class="col-md-12">
						<br class="hidden-sm"/>
						<br class="hidden-sm"/>
							<div class="center-block text-center">
								<h5>Цена:</h5>
								<h1><?=$tr['price']?></h1>
								<h5>грн.</h5>
						<br class="hidden-sm"/>
						<br class="hidden-sm"/>
						</div>
					</div>
				  </div>
				</div>
			</div>
		</div>	
</div>
<br class="hidden-sm"/>
<div class="">

		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs space-gray" role="tablist">
			<li role="presentation" class="active col-md-3 col-xs-12 tab-no-padding"><a href="#home" class="white-text white-border" aria-controls="home" role="tab" data-toggle="tab" >Описание мероприятия</a></li>
			<li role="presentation" class="col-md-3 col-xs-12 tab-no-padding"><a href="#profile" class="white-text white-border" aria-controls="profile" role="tab" data-toggle="tab" >Отзывы учасников</a></li>
			<li role="presentation" class="col-md-3 col-xs-12 tab-no-padding"><a href="#messages" class="white-text white-border" aria-controls="messages" role="tab" data-toggle="tab" >Материалы тренинга</a></li>
			<li role="presentation" class="col-md-3 col-xs-12 tab-no-padding"><a href="#about" class="white-text white-border" aria-controls="messages" role="tab" data-toggle="tab" >О тренере</a></li>
		  </ul>

		  <!-- Tab panes -->
			<div class="tab-content light-brown">
			  <div role="tabpanel" class="tab-pane fade in active" id="home">
				  <div class="row">
					<div class="col-md-3 text-center">
						<h3>Описание тренинга</h3>
					</div>
				  
					<div class="col-md-9">
						<h3>Учебной целью тренинга является:</h3>
						<p>Sed turpis velit, venenatis id dui at, scelerisque fringilla erat. Nam in convallis leo. Pellentesque pretium arcu quis est dignissim dignissim. In blandit dapibus arcu. Nunc vel convallis nunc, in fermentum orci. Duis odio eros, mollis eget ligula eu, vehicula cursus mauris. Aenean tempus porttitor rhoncus. Integer dui dolor, vehicula at dui ac, gravida tristique lacus. Nunc lobortis magna tellus, non tempus libero maximus sed. Sed eleifend elit lorem, sit amet sodales leo egestas sed. </p>
						<h3>Новые двери - новые возможности</h3>
						<p>Vivamus vel arcu ut tellus iaculis tincidunt sit amet eget libero. Sed fringilla mattis pulvinar. Maecenas pellentesque tincidunt est, aliquam varius eros vulputate sed. Donec accumsan id lectus sed maximus. </p>
						</div>
				</div>
			</div>
			  <div role="tabpanel" class="tab-pane fade" id="profile">
				  <div class="row">
					<div class="col-md-3 text-center">
						<h3>Отзывы учасников</h3>
					</div>
				  
					<div class="col-md-9">
						<h3>Ля ля тополя</h3>
						<p>Sed id turpis bibendum, porta velit vulputate, porta mi. Duis rhoncus vel mi non consectetur.</p>
					</div>
				</div>
			  </div>
			  <div role="tabpanel" class="tab-pane fade" id="messages">
				  <div class="row">
					<div class="col-md-3 text-center">
						<h3>Материалы тренинга</h3>
					</div>
				  
					<div class="col-md-9">
						<h3>Другие ля ля тополя</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis dictum interdum. Fusce sed quam et metus finibus commodo et et odio. Proin eget vehicula risus. Nunc accumsan velit a felis sagittis posuere. Vestibulum placerat magna elit, et rhoncus augue fermentum eu. Suspendisse potenti.</p>
					</div>
				</div>
			  </div>
			  <div role="tabpanel" class="tab-pane fade" id="about">
				  <div class="row">
					<div class="col-md-3 text-center">
						<h3>О тренере</h3>
					</div>
				  
					<div class="col-md-9">
						<h3>Такой вот хороший человек</h3>
						<p>Consectetur adipiscing elit. Nullam sagittis dictum interdum. Fusce sed quam et metus finibus commodo et et odio. Proin eget vehicula risus. Nunc accumsan velit a felis sagittis posuere. Vestibulum placerat magna elit, et rhoncus augue fermentum eu. Suspendisse potenti.</p>
					</div>
				</div>
			  </div>
			</div>
</div>
<?
}
?>