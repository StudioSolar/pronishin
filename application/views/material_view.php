<?
$dir="";
$routes = explode('/', $_SERVER['REQUEST_URI']);
for($i=2;$i<count($routes);$i++)
{
	$dir.="../";
}
?>
<?
	foreach($data as $article)
	{
?>

	<div class="row">
		<div class="panel panel-default">
		  <div class="panel-body">
		  	<div class="page-header no-margin">
			  <h2> <?=$article['title']?><small>&nbsp;<?=$article['date']?> в <?=substr($article['time'],0,5)?></small></h2>
			</div>
			<p>
				<div class="part-i" >
					
						<?=$article['text']?>
					
			</p>
		  </div>
		</div>
	</div>
<?
	}
?>