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
					<p>На Вашу почту отправлено письмо с кодом валидации. Перейдите по ссылке внутри письма для активации Вашего аккаунта.</p>
				</div>
				</div>';
}
?>