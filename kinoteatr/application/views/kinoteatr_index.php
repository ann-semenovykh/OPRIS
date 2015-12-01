<div id = "movies_line" class = "full_width">
	<div id = "moviesNow_line" class= "content">
		<h3 id = "moviesNow_title">СЕЙЧАС В КИНО</h3>
	</div>
</div>
<div id = "shedule" class = "content">
	<div id = "shedule_line" class= "content">
		<h4 id = "shedule_title">РАСПИСАНИЕ</h4>
	</div>
	<?php foreach($movies as $movie): ?>
		<ul class= "movie_info" class= "content">
			<li class = "movie_image">
				<img src = "template\default\images\4.jpg">
			</li>
			<li class = "about_movie">
				<ul type="square">
					<li>
						<a href = "<?php echo _BASEURL_,'movie/info/123', $movie->id_mov; ?>">
							<p class= "movie_title"><?php echo $movie->name; ?></p>
						</a>
					</li>
				</ul>
				<p class = "movie_rait"><?php echo $movie->genre.", ".$movie->age."+"; ?></p>
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