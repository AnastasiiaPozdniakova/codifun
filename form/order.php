<?php

$number = $_POST["cargo_num"];
$password = $_POST["psw"];
if ($password == "123")
{
	$checkbox = $_POST["allow"];
	if ($checkbox == "true")
	{
		
	}
	else
	{
		echo "ви маєте погодитися! <a href='form.html'>назад</a>"
	}
}
else
{
echo "неправильний пароль! <a href='form.html'>назад</a>";
}

?>