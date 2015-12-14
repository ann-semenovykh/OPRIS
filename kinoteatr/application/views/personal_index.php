<div class= "content">
	<div id = "person_line">
		<h4 id = "personal_title">Информация о себе</h4>
	</div>
	<ul class = "person_info">
		<li class = "person_image">
			<img src = "" width='250' height='350'/>
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