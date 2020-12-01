<html> 
<head><title>Лабораторная работа № 4</title></head>
<body>
  <form method='post'>
  
  <?php
  echo "Лабораторная работа № 4";
  echo "<br>Ежак А.А.";
  echo "<br>Введите Логин и Пароль, котятки:";
  ?>
  <p>Login: <input type="text" name="username" required></p>
  <p>Password: <input type="password" name="password" required></p>
  <button type="submit" name="submit">Log in</button></p>
  </form> 
  <?php
  if (isset($_POST['submit'])){
  $login =implode(file ("Логин.txt"));
  $password =implode(file ("Пароль.txt"));
  
  if (strcmp ($login, $_POST['username']) == 0)
	{
	if (strcmp ($password, $_POST['password']) == 0){
	echo 'Вы залогинены';}
	else echo 'Неверный Логин или Пароль'; 
	}
    else echo 'Неверный Логин или Пароль';  
  
  }
  ?> 
</body>
</html> 