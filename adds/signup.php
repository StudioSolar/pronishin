<!-- ПОПАП РЕГИСТРАЦИИ -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Регистрация</h4>
      </div>
      <div class="modal-body">
		<div class="alert alert-warning" role="alert">Обратите внимание на то, что Вы должны ввести правильный адрес электронной почты перед активацией. На указанный Вами адрес придет письмо, содержащее ссылку для активации аккаунта.</div>
			<form method="POST" action="http://<?=$_SERVER['SERVER_NAME'];?>/signup" enctype="multipart/form-data">
			  <div class="form-group">
			  	<div class="form-group has-error has-feedback" id="lname_div">
				<label for="lname">Фамилия</label>
				<input type="text" class="form-control" id="lname" name="lname" placeholder="Фамилия" required>
				<span class="glyphicon glyphicon-remove form-control-feedback" id="lname_glyphicon" aria-hidden="true"></span>
				</div>
			  </div>
			  <div class="form-group">
			  	<div class="form-group has-error has-feedback" id="fname_div">
					<label for="fname">Имя</label>
					<input type="text" class="form-control" id="fname" name="fname" placeholder="Имя" required>
					<span class="glyphicon glyphicon-remove form-control-feedback" id="fname_glyphicon" aria-hidden="true"></span>
				</div>
			  </div>
			  <div class="form-group">
			  	<div class="form-group has-error has-feedback" id="email_div">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					<span class="glyphicon glyphicon-remove form-control-feedback" id="email_glyphicon" aria-hidden="true"></span>
				</div>
			  </div>
			  <div class="form-group">
			  	<div class="form-group has-error has-feedback" id="pass_div">
				<label for="pass">Пароль</label>
				<input type="password" class="form-control" id="pass" name="pass" required>
				<span class="glyphicon glyphicon-remove form-control-feedback" id="pass_glyphicon" aria-hidden="true"></span>
				</div>
			  </div>
			  <div class="form-group">
				<div class="form-group has-error has-feedback" id="confirm_pass_div">
				  <label class="control-label" for="confirm_pass">Подтвердите пароль</label>
				  <input type="text" class="form-control" id="confirm_pass" >
				  <span class="glyphicon glyphicon-remove form-control-feedback" id="confirm_pass_glyphicon" aria-hidden="true"></span>
				</div>
			  </div>
			  <div class="form-group">
				<label for="exampleInputFile">Фотография</label>
				<input type="file" id="exampleInputFile" name="file">
				<p class="help-block">Загружаемая фотография должна весить не более 1Мб.</p>
			  </div>
			  <div class="checkbox">
				<label>
				  <input type="checkbox" id="policy"> Я ознакомлен с <a href="#">Условиями использования форума</a>
				</label>
			  </div>
			<div class="modal-footer">
			<!--<div class="g-recaptcha" data-sitekey="6LcZ0QwTAAAAALHN0VHEE5kTD8eEgvlD46g1hInf"></div>-->
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="submit" onclick="check_data();" id="sign_up" class="btn btn-primary disabled">Регистрация</button>
      </div>
			</form>
      </div>
    </div>
  </div>
</div>
<!-- ПОПАП РЕГИСТРАЦИИ КОНЕЦ -->