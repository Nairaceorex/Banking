<?php
// Обязательно запускаем сессию!
session_start();

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
    if (empty($passport) or empty($password) ) {
exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
include ("dbconntent.php");
$result = $mysqli->query("SELECT * FROM client WHERE Passport = '$passport'");
$myrow = $result->fetch_assoc();
if (empty($myrow['Passport'])) {
exit ("Введенный вами Passport или пароль неверный. ");
}
else {

if ($myrow['Password'] == $password) {
$_SESSION['Passport'] = $myrow['Passport'];
$_SESSION['Id'] = $myrow['Id'];
echo "Вы успешно вошли на сайт! <a href = 'main.php'>Главная страница</a>";
}
else {
// Если пароли не сошлись
exit ("Введенный вами Passport или пароль неверный. ");
}
}
?>
