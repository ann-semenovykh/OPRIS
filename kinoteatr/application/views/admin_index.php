<div class = "content">
	<div id = "person_line">
		<h4 id = "personal_title">Панель администратора</h4>
	</div>
	<form action = "/admin/movie" method = "post">
		<div class = "personalInfo_field">
			<select name = "movie_id">
				<?php foreach ($movies as $movie){?>
				<option value = "<?php echo $movie->id_mov;?>"><?php echo $movie->name;}?></option>
			</select>
			<input type = "submit" name = "movie_new" class="personBtn" value = "Добавить фильм">
			<input type = "submit" name = "movie_edit" class="personBtn" value = "Изменить фильм">
			<input type = "submit" name = "movie_delete" class="personBtn" value = "Удалить фильм">
		</div>
	</form>
	<form action = "/admin/session" method = "post">
		<div class = "personalInfo_field">
			<select name = "session_id">
				<?php foreach ($sessions as $session){?>
				<option value = "<?php echo $session->id_session;?>"><?php echo $session->name." ".$session->time." зал ".$session->hall;}?></option>
			</select>
			<input type = "submit" name = "session_new" class="personBtn" value = "Добавить сессию">
			<input type = "submit" name = "session_edit" class="personBtn" value = "Изменить сессию">
			<input type = "submit" name = "session_delete" class="personBtn" value = "Удалить сессию">
		</div>
	</form>
</div>