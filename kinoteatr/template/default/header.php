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
				<a href = "" class = "header_menu_button">главная</a>
				<a href = "" class = "header_menu_button">личный кабинет</a>
				<?php if (isset($_SESSION['id'])){
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
