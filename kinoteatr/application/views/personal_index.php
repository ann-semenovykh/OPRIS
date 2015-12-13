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
			<form name = "personInfo_form">
				<div class = "personalInfo_field">
					<h4 class = "personInfo_label">Имя</h4>
					<input type = "text" class = "personInfo_text" value = "<?php echo $person->name;?>">
				</div>
				<div class = "personalInfo_field">
					<h4 class = "personInfo_label">Фамилия</h4>
					<input type = "text" class = "personInfo_text" value = "<?php echo $person->surname;?>">
				</div>
				<div class = "personalInfo_field">
					<h4 class = "personInfo_label">Дата рождения</h4>
					<input type = "text" class = "personInfo_text" value = "<?php echo $person->birthdate;?>">
				</div>
				<div class = "personalInfo_field">
					<h4 class = "personInfo_label">E-mail</h4>
					<input type = "text" class = "personInfo_text" value = "<?php echo $person->email;?>">
				</div>
				<div class = "personalInfo_field">
					<h4 class = "personInfo_label">Телефон</h4>
					<input type = "text" class = "personInfo_text" value = "<?php echo $person->phonenum;?>">
				</div>
			</form>
		</li>
	</ul>
</div>