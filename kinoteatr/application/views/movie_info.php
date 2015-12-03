﻿<?php foreach($movies as $movie): ?>
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
				<img src = "<?php echo $movie->poster; ?>" width="300" height="380">		
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
				<p class = "movie_room">Зал 1</p>
				<table class = "movie_sessions">
					<tr>
						<td class = "movie_time">10:00</td>
						<td class = "movie_time">12:00</td>
						<td class = "movie_time">15:00</td>
						<td class = "movie_time">10:00</td>
						<td class = "movie_time">12:00</td>
						<td class = "movie_time">15:00</td>
					</tr>
					<tr>
						<td class = "movie_price">100 р.</td>
						<td class = "movie_price">150 р.</td>
						<td class = "movie_price">200 р.</td>
						<td class = "movie_price">100 р.</td>
						<td class = "movie_price">150 р.</td>
						<td class = "movie_price">200 р.</td>
					</tr>
				</table>
								<p class = "movie_room">Зал 1</p>
				<table class = "movie_sessions">
					<tr>
						<td class = "movie_time">10:00</td>
						<td class = "movie_time">12:00</td>
						<td class = "movie_time">15:00</td>
						<td class = "movie_time">10:00</td>
						<td class = "movie_time">12:00</td>
						<td class = "movie_time">15:00</td>
					</tr>
					<tr>
						<td class = "movie_price">100 р.</td>
						<td class = "movie_price">150 р.</td>
						<td class = "movie_price">200 р.</td>
						<td class = "movie_price">100 р.</td>
						<td class = "movie_price">150 р.</td>
						<td class = "movie_price">200 р.</td>
					</tr>
				</table>
								<p class = "movie_room">Зал 1</p>
				<table class = "movie_sessions">
					<tr>
						<td class = "movie_time">10:00</td>
						<td class = "movie_time">12:00</td>
						<td class = "movie_time">15:00</td>
						<td class = "movie_time">10:00</td>
						<td class = "movie_time">12:00</td>
						<td class = "movie_time">15:00</td>
					</tr>
					<tr>
						<td class = "movie_price">100 р.</td>
						<td class = "movie_price">150 р.</td>
						<td class = "movie_price">200 р.</td>
						<td class = "movie_price">100 р.</td>
						<td class = "movie_price">150 р.</td>
						<td class = "movie_price">200 р.</td>
					</tr>
				</table>
			</li>
	</ul>
		<div class = "shedule_line">
		</div>
	<?php endforeach ?>
</div>