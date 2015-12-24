<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<head>
<title><?php echo $title ?></title>
 <link rel="stylesheet" type="text/css" href="/template/default/css/style.css">
</head>
<body>
	<div id= "site_background">
	</div>
	<div>
		<header class = "content">
			<div id = "logo-container" class="centered_content">
				<h1 id="logo">кинотеатр</h1>
				<hr id="header_logo_line" class = "content" >
			</div>
			<div id = "header_menu" class = "content">
				<a href = "http://kinoteatr/kinoteatr" class = "header_menu_button">главная</a>
				<?php if (isset($_SESSION['id'])){
					if (isset($_SESSION['isadmin'])){
						echo "<a href = \"http://kinoteatr/admin\" class = \"header_menu_button\">Панель администратора</a>";
					}
					else{
						echo "<a href = \"http://kinoteatr/personal\" class = \"header_menu_button\">Личный кабинет</a>";
					}
					echo "<form action=\"/\" method=\"post\" class = \"header_menu_button\">".
					"<input class=\"header_menu_button_out\"  type=\"submit\" value=\"выйти\" name=\"logout\"></form>";
				}
				else{
					echo "<a href = \"http://kinoteatr/login\" class = \"header_menu_button\">войти</a>";
				}
				?>
			</div>
		</header>
		<article>
