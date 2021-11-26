<?php
if (isset($_POST['name'])) {
$name = $_POST['name'];
if ($name == "") {
unset($name);
}
}
if (isset($_POST['phone'])) {
$phone = $_POST['phone'];
if ($phone == "") {
unset($phone);
}
}
if (isset($_POST['email'])) {
$email = $_POST['email'];
if ($email == "") {
unset($email);
}
}
if (isset($_POST['passport'])) {
$passport = $_POST['passport'];
if ($passport == "") {
unset($passport);
}
}
if (isset($_POST['password'])) {
$password = $_POST['password'];
if ($password == "") {
unset($password);
}
}


include ("dbconntent.php");
$result = $mysqli->query("SELECT Id FROM client WHERE Passport = '$passport' ");
$myrow = $result->fetch_assoc();
if (!empty($myrow['Id'])) {
exit ("Введенный вами логин уже зарегистрирован. Введите другой логин. ");
}
include ("dbconntent.php");
$result2 = $mysqli->query ("INSERT INTO client (Full_Name, Phone, Email, Passport, Password) VALUES('$name','$phone','$email','$passport','$password')");
echo $mysqli->error;

if ($result2) {
echo 'Вы успешно зарегистрированы! Теперь вы можете зайти
на сайт под своим именем. <a href = "main.php
">Главная</a>';
}
else {
echo "Ошибка! Вы не зарегистрированы.", $result2;
}
    ?>
