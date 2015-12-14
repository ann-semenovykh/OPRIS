<form action="/login" method="post">
    <label>логин:</label><br/>
  <input name="login" type="text" size="15" maxlength="15"><br/>
    <label>пароль:</label><br/>
  <input name="password" type="password" size="15" maxlength="15"><br/><br/>
  <input type="submit" value="войти" name="submit_auth"><br/><br/>
</form>

<form action="/login" method="post">
	<?php
		if (isset($errors)){
			echo "<label>$errors</label><br/>";
		}
	?>
    <label>Имя</label><br/>
  <input name="name" type="text" size="15" maxlength="30"><br/>
    <label>Фамилия</label><br/>
  <input name="surname" type="text" size="15" maxlength="30"><br/>
  <label>Псевдоним</label><br/>
  <input name="altername" type="text" size="15" maxlength="15"><br/>
  <label>E-mail<label><br/>
  <input name="email" type="text" size="15" maxlength="30"><br/>
  <label>Пароль</label><br/>
  <input name="pass1" type="password" size="15" maxlength="15"><br/>
  <label>Повторите пароль</label><br/>
  <input name="pass2" type="password" size="15" maxlength="15"><br/><br/>
  <input type="submit" value="Зарегистрироваться" name="submit_reg"><br/><br/>
</form>