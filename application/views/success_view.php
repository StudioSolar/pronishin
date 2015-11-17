<?
if(isset($_SESSION['uid'])){
	header('Location:/404');
}
else{
		echo'<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Добро пожаловать</h3>
				</div>
				<div class="panel-body">
					<p>Профиль успешно активирован. Теперь вы можете войти в систему под своим логином и паролем.</p>
				</div>
				</div>';
}
?>