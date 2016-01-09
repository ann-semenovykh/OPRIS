<div style="height: 500px;text-align:center;"id = "movies_line" class = "full_width">
	<div id = "moviesNow_line" class= "content">
		<h3 id = "moviesNow_title">СЕЙЧАС В КИНО</h3>
	</div>
	<div style="margin:auto;"id="p12" class="s14" >
	<?php foreach($movies1 as $movie){ ?>
		<div style="float: left; width: 200px;position:relative;"id="p40" class="s40" >
		<div style="top:50px;width:189px;height:339px;position:relative;" class="s12" id="p11" >
			<div id="p2" class="s12bg" >
			</div>
			<div id="p3" class="s12inlineContent" >
				<div style="top: 20px; left: 13px; height: 276px; width: 180px;position:absolute;" class="s13" id="p4" >
					<div id="p3" style="width:167px;height:251px;position:relative;overflow:hidden;" class="s13imageItemimage" >
							<img alt="" style="width:167px;height:251px;object-fit:cover;" src="<?php echo $movie->poster; ?>" id="p6" class="s13imageItemimageimage" >
					</div>
				</div>
			</div>
		</div>
		<div style="top: 340px;  width: 190px;position:absolute; " class="s1" id="p5"  >
			<p style="text-transform:uppercase;line-height: 1.4em; text-align: center;" class="font_7"><span style="line-height: 1.4em;"><strong><?php echo$movie->name; ?></strong></span></p>
		</div>
		</div>		
	<?php } ?></div>
</div>


<div id = "shedule" class = "content">
	<div id = "shedule_line" class= "content">
		<h4 id = "shedule_title">РАСПИСАНИЕ</h4>
	</div>
	<?php foreach($movies as $movie){ ?>
		<ul class= "movie_info" class= "content">
			<li class = "movie_image">
<img src = "<?php echo $movie->poster; ?>" width="160" height="220">
			</li>
			<li class = "about_movie">
				<ul type="square">
					<li>
						<a href = "<?php echo _BASEURL_,'movie/info/', $movie->id_mov; ?>">
							<p class= "movie_title"><?php echo $movie->name; ?></p>
						</a>
					</li>
				</ul>
				<p class = "movie_rait"><?php echo $movie->genre.", ".$movie->age."+"; ?></p>
				<?php 
					foreach ($halls as $hall) {
						
					$m='sessions'.$movie->id_mov.$hall->id_hall;
					if ($$m){
				?>
					<p class = "movie_room">Зал <?php echo $hall->name." ".$hall->stat; 
					?></p>
					<table class = "movie_sessions">
					<tr>
					<?php	foreach ($$m as $session){
					?>
						<td class = "movie_time"><?php echo date("G:i",strtotime($session->time)); ?></td>
					<?php }; ?>
					</tr>
					<tr>
					<?php foreach ($$m as $session){
							?>
							<td class = "movie_price"><?php echo $session->price." р."; ?></td>
					<?php }; ?>
					</tr>
					</table>
					<?php 
					}}; ?>
			</li>
		</ul>
		<div class = "shedule_line">
		</div>
	<?php } ?>
</div>