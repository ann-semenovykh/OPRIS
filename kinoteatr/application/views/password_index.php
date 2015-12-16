<div id = "movies_line" class = "full_width">
	<div id = "moviesNow_line" class= "content">
		<h3 id = "moviesNow_title">ВОССТАНОВЛЕНИЕ ПАРОЛЯ</h3>
	</div>
<div id="conteiner">

<div class="loform">
            <form name="form1" method="post" action="/password">
			<p>
					Введите логин
			</p>			
			<p><input type="text" name="username" size="40" placeholder="Логин" /></p>
            <p>

                <input type="submit" value="Восcтановить" size="40" name="recovery">

            </p>
			<p>
			   <?php
						if (isset($errors)){
							echo "<h4 class = \"movie_title\">$errors</h4>";
						}
					?>
			</p>
        </form>
        
    </div>
</div>
</div>