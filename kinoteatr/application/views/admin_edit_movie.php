<div class = "content">
	<div id = "person_line">
		<h4 id = "personal_title">Панель администратора</h4>
	</div>
	<div class = "personInfo_container">
		<ul class = "person_info">
			<li class = "person_image">
				<div>
				<img src = '<?php echo "../../".$movie->poster;?>' width='250' height='350'/>
				</div>
			</li>
			<li class = "about_person">
				<div class = "personName_line">
					<h3 id = "personalName_title">Информация о фильме</h3>
				</div>
				<form name = "personInfo_form" action = "<?php echo "/admin/edit_movie/". $movie->id_mov;?>" method = "post" enctype="multipart/form-data">
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Название</h4>
						<input type = "text" class = "personInfo_text" size="40" style="width:350px" value = "<?php echo $movie->name;?>" name = "name">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Жанр</h4>
						<input type = "text" class = "personInfo_text" size="33" style="width:301px" value = "<?php echo $movie->genre;?>" name = "genre">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Описание</h4>
						<input type = "text" class = "personInfo_text" size="26" style="width:249px" value = "<?php echo $movie->abstract;?>" name = "article">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Год</h4>
						<input type = "text" class = "personInfo_text" size="38" style="width:334px" value = "<?php echo $movie->year;?>" name = "year">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Режиссер</h4>
						<input type = "text" class = "personInfo_text" size="34" style="width:307.5px" value = "<?php echo $movie->director;?>" name = "director">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Актеры</h4>
						<input type = "text" class = "personInfo_text" size="34" style="width:307.5px" value = "<?php echo $movie->actors;?>" name = "actors">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Трейлер</h4>
						<input type = "text" class = "personInfo_text" size="34" style="width:307.5px" value = "<?php echo $movie->trailer;?>" name = "trailer">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Страна</h4>
						<input type = "text" class = "personInfo_text" size="34" style="width:307.5px" value = "<?php echo $movie->country;?>" name = "country">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Рейтинг кинопоиск</h4>
						<input type = "text" class = "personInfo_text" size="34" style="width:307.5px" value = "<?php echo $movie->rateKP;?>" name = "rateKP">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Рейтинг MPA</h4>
						<input type = "text" class = "personInfo_text" size="34" style="width:307.5px" value = "<?php echo $movie->rateMPA;?>" name = "rateMPA">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Продолжительность</h4>
						<input type = "text" class = "personInfo_text" size="34" style="width:307.5px" value = "<?php echo $movie->time;?>" name = "time">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Постер</h4>
						<input type = "file" class = "personInfo_text" name = "picture">
					</div>
					<?php
						if (isset($errors)){
							echo "<h4 class = \"personInfo_label\">$errors</h4>";
						}
					?>
					<input type = "submit" name = "submit_edit" class="personBtn" value = "Сохранить">
				</form>
			</li>
		</ul>
	</div>
</div>