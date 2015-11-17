<?
$dir="";
$routes = explode('/', $_SERVER['REQUEST_URI']);
for($i=2;$i<count($routes);$i++)
{
	$dir.="../";
}
?>
<?php
	foreach($data as $row)
	{
		?>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="media">
						  <div class="media-left">
							<a href="#">
							  <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTBhYTAyMDRkMiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MGFhMDIwNGQyIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMi41IiB5PSIzNi44Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64">
							</a>
						  </div>
						  <div class="media-body">
							<h4 class="media-heading"><?=$row['fname'].' '.$row['lname']?></h4>
								<?=$row['text']?>
							</div>
						</div>	
			  </div>
			</div>
			

				<div class="row">
					<div class="col-md-12 hidden-xs">
						<form method="POST" action="">
							<input type="text" name="msg" id="msg" hidden/>
							<textarea name="area1" cols="40" class="hidden-xs" style="width:100%!important;"></textarea>
						</form>
					</div>
					<div class="visible-xs col-sx-12">
						<form method="POST" action="">
							<div class="container">
							<div class="input-group">
							  <input class="form-control" placeholder="Введите сообщение" type="text">
							  <span class="input-group-btn">
								<button class="btn btn-default" type="submit">Отправить</button>
							  </span>
							</div>
							</div>
						</form>
					</div>
				</div>
		<?
		//var_dump($row);
	}
	//echo htmlspecialchars($_POST['msg']);
?>
			<script type="text/javascript" src="<?=$dir?>/adds/nicEdit.js"></script>
			<script type="text/javascript">
				bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
				document.addEventListener('DOMContentLoaded', function(){
				   $('.nicEdit-panel').append('<div style="float: right; margin-top: 2px;"><button type="button" style="height:20px;font-size:10px;"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></button><button type="submit" style="height:20px;font-size:11px;">Отправить</button></div>');
				   $( ".nicEdit-main" ).bind("DOMSubtreeModified",function() {
						$('#msg').val($( ".nicEdit-main" ).html());
					});
				 });
				
			</script>
