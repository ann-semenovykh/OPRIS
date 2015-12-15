<form action="/login" method="post">
  <div id = "login_line" class = "full_width">
	<div id = "logintitle_line" class= "content">
		<h3 id = "login_titles"><table class = "login_table">
				<tr>
				<td class = "login_title" width="500" align="center">АВТОРИЗАЦИЯ</td>
				<td class = "login_title" width="500" align="center">РЕГИСТРАЦИЯ</td>
				</tr>
		</table></h3>
		</div>
	<div id="login_rect1" class="content">
</form>
 <br/>
  <input name="login" type="text" size="40" maxlength="15" class="txt" style="top:100px"  placeholder="Логин"><br/>
    <br/>
  <input name="password" type="password" size="40" maxlength="15" class="txt" style="top:100px" placeholder="Пароль"><br/><br/>
  <input type="submit" class="btn" style="top:100px" value="Войти" name="submit_auth"><br/><br/>
<a href = "<?php echo _BASEURL_,'password/recovery'; ?>">
							<p class= "movie_title">Восстановление пароля</p>
						</a>
<form action="/login" method="post">
	<?php
		if (isset($errors)){
			echo "<label>$errors</label><br/>";
		}
	?>
   <div id="login_rect2" class="content">
    <br/>
  <input name="name" type="text" size="40" maxlength="30" class="txt"  placeholder="Имя"><br/>
    <br/>
  <input name="surname" type="text" size="40" maxlength="30" class="txt" placeholder="Фамилия"><br/>
  <br/>
  <input name="altername" type="text" size="40" maxlength="15" class="txt" placeholder="Псевдоним"><br/>
  <br/>
  <input name="email" type="text" size="40" maxlength="30" class="txt" placeholder="E-mail"><br/>
  <br/>
  <input name="pass1" type="password" size="40" maxlength="15" class="txt" placeholder="Пароль"><br/>
  <br/>
  <input name="pass2" type="password" size="40" maxlength="15" class="txt"  placeholder="Повторите пароль"><br/><br/>
  <input type="submit" class="btn" value="Зарегистрироваться" name="submit_reg"><br/><br/>
</form>
	</div>
	</div>
</div>