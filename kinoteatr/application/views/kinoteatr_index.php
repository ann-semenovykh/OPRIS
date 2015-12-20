<div id = "moviesLine" class = "full_width">
	<div id = "moviesNow_line" class= "content">
		<h3 id = "moviesNow_title">СЕЙЧАС В КИНО</h3>
		<ul>
			<li class = "horLi">
				<div class = "redRectangleMovie">
				</div>
			</li>
			<li class = "horLi">
				<div class = "redRectangleMovie">
				</div>
			</li>
			<li class = "horLi">
				<div class = "redRectangleMovie">
				</div>
			</li>
		<ul>
	</div>
</div>
<div id = "shedule" class = "content">
	<div id = "shedule_line" class= "content">
		<h4 id = "shedule_title">РАСПИСАНИЕ</h4>
	</div>
	<?php foreach($movies as $movie){ ?>
		<ul class= "movie_info" class= "content">
			<li class = "movie_image">
<<<<<<< HEAD
<img src = "<?php echo $movie->poster; ?>" width="160" height="220">
=======
<img src = "<?php echo "/template/default/images/", $movie->poster; ?>" width="160" height="220">
>>>>>>> origin/master
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
					<p class = "movie_room">Зал <?php echo $hall->name; 
					?></p>
					<table class = "movie_sessions">
					<tr>
					<?php	foreach ($$m as $session){
					?>
						<td class = "movie_time">
							<?php if (isset($_SESSION['id'])){?>
								<a href = "<?php echo _BASEURL_,'reservation/index/', $session->id_session; ?>">
							<?php } ?>
							<?php echo date("G:i",strtotime($session->time)); ?>
							<?php if (isset($_SESSION['id'])){?>
								</a>
							<?php } ?>
						</td>
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