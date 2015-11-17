<?
$dir="";
$routes = explode('/', $_SERVER['REQUEST_URI']);
for($i=2;$i<count($routes);$i++)
{
	$dir.="../";
}
?>
<?php
	foreach($data as $row):
?>
<div class="row space-gray border-rad-sm">
	<div class="col-md-2">
		<img src="images/aleksandr.jpg" class="center-block img-responsive img-training hidden-sm hidden-xs" style="position:relative;left:-16px;" alt="Responsive image">
		<img src="images/aleksandr.jpg" class="center-block img-responsive img-circle hidden-lg hidden-md" style="position:relative;top:10px;" alt="Responsive image">
	</div>
	<div class="col-md-8">
		<h3><a style="text-decoration:none;color:white;" href="/training/view/<?=$row['id']?>"><?=$row['title']?></a></h3>
	</div>
	<div class="col-md-2">

	</div>
</div>
<br/>
<?endforeach;?>