<?php

if (isset($_POST['title'])) {
$title = $_POST['title'];
if ($title == "") {
unset($title);
}
		}
		if (isset($_POST['class'])) {
		$Class = $_POST['class'];
		if ($Class == "") {
		unset($Class);
		}
		}
		if (isset($_POST['quantity'])) {
		$Quantity = $_POST['quantity'];
		if ($Quantity == "") {
		unset($Quantity);
		}
		}
		if (isset($_POST['price'])) {
		$Price = $_POST['price'];
		if ($Price == "") {
		unset($Price);
		}
		}

		include ("dbconntent.php");
	$result2 = $mysqli->query ("INSERT INTO resource (Title, Class, Quantity, Price) VALUES('$title','$Class','$Quantity','$Price')");
	echo $mysqli->error;

	if ($result2) {
	echo 'Вы успешно добавили ресурс! Теперь вы можете зайти
	на сайт под своим именем. <a href = "main.php
	">Главная</a>';
	}
	else {
	echo "Ошибка!", $result2;
	}
		?>
