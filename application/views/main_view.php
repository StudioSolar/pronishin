<?
if(isset($_SESSION['uid'])){
	foreach($data as $news)
	{
		echo'<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">'.$news['title'].'</h3>
				</div>
				<div class="panel-body">
					<p>'.$news['text'].'</p>
					<h5 style="margin-bottom: 0px;"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;<a href="#!">'.$news['fname'].' '.$news['lname'].'</a></h5>
				</div>
				</div>';
	}
}
else{

}
?>