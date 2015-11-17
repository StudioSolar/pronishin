<?php
	foreach($data as $row)
	{
		?>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="media">
				  <div class="media-left media-middle">
					<a href="#">
					  <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGZkYjlhMzhkYSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZmRiOWEzOGRhIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMC43ODMzMzI4MjQ3MDcwMzEiIHk9IjM2LjY4OTk5OTk2MTg1MzAyNiI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64">
					</a>
				  </div>
				  <div class="media-body">
					<h4 class="media-heading"><a href="/forum/view/<?=$row['thread']?>/<?=$row['id']?>"><?=$row['name']?></a></h4>
					<?=$row['description']?>
				  </div>
				</div>
			  </div>
			</div>
		<?
		//var_dump($row);
	}
?>
