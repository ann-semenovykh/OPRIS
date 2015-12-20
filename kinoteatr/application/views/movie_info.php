<?php foreach($movies as $movie): ?>
<div id = "movies_line" class = "full_width">
	<div id = "moviesNow_line" class= "content">
		<h3 id = "moviesNow_title">ОПИСАНИЕ</h3>
	</div>
	<iframe allowfullscreen="" src="<?php echo $movie->trailer; ?>" 
			frameborder="0" top="100" height="80%" width="65%"></iframe>
</div>

<div id = "shedule" class = "content">
	<div id = "shedule_line" class= "content">
		<h4 id = "shedule_title"><?php echo $movie->name; ?></h4>
	</div>
	<ul class= "movie_info" class= "content">
			<li class = "movie_image">
				<img src = "<?php echo "../../",$movie->poster; ?>" width="300" height="380">		
				<ul type="square">
					<a href="<?php echo "http://www.kinopoisk.ru/film/", $movie->rateKP; ?>">
						<img src="<?php echo "http://rating.kinopoisk.ru/", $movie->rateKP,".gif"; ?>" >
					</a>
				</ul>
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
				<p class = "movie_rait"><?php echo "Страна: ".$movie->country; ?></p>
				<p class = "movie_rait"><?php echo "Режиссер: ".$movie->director; ?></p>
				<p class = "movie_rait"><?php echo "Продолжительность: ".$movie->time." мин."; ?></p>
				<p class = "movie_abstract"><?php echo $movie->abstract; ?></p>
				<p class = "movie_rait"><?php echo "Актеры: ".$movie->actors; ?></p>
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
	<?php endforeach ?>
</div>