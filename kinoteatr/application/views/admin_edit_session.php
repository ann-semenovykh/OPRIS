<div class = "content">
	<div id = "person_line">
		<h4 id = "personal_title">Панель администратора</h4>
	</div>
	<div class = "personName_line">
		<h3 id = "personalName_title">Изменение сеанса</h3>
	</div>
	<form name = "personInfo_form" action = "<?php echo "/admin/edit_session/".$session->id_session;?>" method = "post" enctype="multipart/form-data">
		<div class = "personalInfo_field">
			<h4 class = "personInfo_label">Сеанс</h4>
			<select name = "movie_id">
				<?php foreach ($movies as $movie){?>
				<option value = "<?php echo $movie->id_mov;?>"><?php echo $movie->name;}?></option>
			</select>
		</div>
		<div class = "personalInfo_field">
			<h4 class = "personInfo_label">Зал</h4>
			<select name = "hall_id">
				<?php foreach ($halls as $hall){?>
				<option value = "<?php echo $hall->id_hall;?>"><?php echo $hall->name;}?></option>
			</select>
		</div>
		<div class = "personalInfo_field">
			<h4 class = "personInfo_label">Время</h4>
			<input type = "text" class = "personInfo_text" size="33" style="width:301px" value = "<?php echo $session->time;?>" name = "setDate">
		</div>
		<div class = "personalInfo_field">
			<h4 class = "personInfo_label">Цена</h4>
			<input type = "text" class = "personInfo_text" size="33" style="width:301px" value = "<?php echo $session->price;?>" name = "price">
		</div>
		<?php
			if (isset($errors)){
				echo "<h4 class = \"personInfo_label\">$errors</h4>";
			}
		?>
		<input type = "submit" name = "submit_new" class="personBtn" value = "Сохранить">
	</form>
</div>