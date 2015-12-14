<div class= "content">
	<div id = "person_line">
		<h4 id = "personal_title">Информация о себе</h4>
	</div>
	<div class = "personInfo_container">
		<ul class = "person_info">
			<li class = "person_image">
				<div>
				<img src = '<?php echo $person->picture;?>' width='250' height='350'/>
				<form action = "/personal" method = "post" enctype="multipart/form-data">
					<input type = "file" name = "picture">
					<br>
					<input type = "submit" vale = "Загрузить" name = "upload_image">
				</form>
				</div>
			</li>
			<li class = "about_person">
				<div class = "personName_line">
					<h3 id = "personalName_title"><?php echo $person->account_name;?></h3>
				</div>
				<form name = "personInfo_form" action = "/personal" method = "post">
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Имя</h4>
						<input type = "text" class = "personInfo_text" value = "<?php echo $person->name;?>" name = "name">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Фамилия</h4>
						<input type = "text" class = "personInfo_text" value = "<?php echo $person->surname;?>" name = "surname">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Дата рождения</h4>
						<input type = "text" class = "personInfo_text" value = "<?php echo $person->birthdate;?>" name = "birthdate">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">E-mail</h4>
						<input type = "text" class = "personInfo_text" value = "<?php echo $person->email;?>" name = "email">
					</div>
					<div class = "personalInfo_field">
						<h4 class = "personInfo_label">Телефон</h4>
						<input type = "text" class = "personInfo_text" value = "<?php echo $person->phonenum;?>" name = "phonenum">
					</div>
					<?php
						if (isset($errors)){
							echo $errors;
							echo "<h4 class = \"personInfo_label\">$errors</h4>";
						}
					?>
					<input type = "submit" name = "submit_edit" value = "Сохранить">
				</form>
			</li>
		</ul>
	</div>
	<div id = "personalActions_container">
		<div id = "personalActions_line" class = "content">
			<h4 id = "personalActions_title">История действий</h4>
		</div>
		<table id  = "personalActions_table">
			<thead>
				<tr>
					<th>Название фильма
						<form>
							<input type="button" value = "up">
							<input type="button" value = "down">
						</form>
					</th>
					<th>Зал
						<form>
							<input type="button" value = "up">
							<input type="button" value = "down">
						</form>
					</th>
					<th>Место
						<form>
							<input type="button" value = "up">
							<input type="button" value = "down">
						</form>
					</th>
					<th>Время
						<form>
							<input type="button" value = "up">
							<input type="button" value = "down">
						</form>
					</th>
					<th>Цена
						<form>
							<input type="button" value = "up">
							<input type="button" value = "down">
						</form>
					</th>
				</tr>
			<thead>
			<tbody>
				<?php
					foreach ($actions as $action){?>
						<tr>
							<td><?php echo $action->moviename;?>
							</td>
							<td><?php echo $action->name;?>
							</td>
							<td><?php echo "Ряд ".$action->numseries." место ".$action->num;?>
							</td>
							<td><?php echo $action->time;?>
							</td>
							<td><?php echo $action->price;?>
							</td>
						</tr>
				<?php };?>
			</tbody>
		</table>
	</div>
</div>