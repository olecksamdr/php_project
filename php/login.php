<<<<<<< HEAD
<html>
<head>
<meta charset="UTF-8">
<title>Авторизація, зачекайте</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./sys/css/normalize.css">
<link rel="stylesheet" href="./sys/css/style.css">
</head>
<body>
<?php
echo "<div class='wrapper'>";
session_start();
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

if (empty($login) or empty($password))
{
exit ("Ви заповнили не усі дані");
=======
<?php
session_start();
if (isset($_POST['login'])) { 
	$login = $_POST['login']; 
	if ($login == '') { 
		unset($login);
	} 
}
if (isset($_POST['password'])) { 
	$password=$_POST['password']; 
	if ($password =='') {
	 unset($password);
	} 
}

if (empty($login) or empty($password)){
	exit ("Ви заповнили не усі дані");
>>>>>>> upstream/master
}
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

$login = trim($login);
$password = trim($password);

$password = md5($password);
$password = strrev($password);
$password = $password."b3p6f";


<<<<<<< HEAD
include ("./bd.php");


$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);
if (empty($myrow['password'])) {
	exit ("Користувача з таким логіном не знайдено");
} else {
    if ($myrow['password']==$password) {
    	$_SESSION['login']=$myrow['login']; 
    	$_SESSION['id']=$myrow['id'];
=======
include ("db.php");

$sql = "SELECT * FROM users WHERE login='$login' LIMIT 1";
$q = mysqli_query($db,$sql);
$userToAuth = mysqli_fetch_array($q);
if (empty($userToAuth['password'])) {
	exit ("Користувача з таким логіном не знайдено");
} else {
    if ($userToAuth['password']==$password) {
    	$_SESSION['login']=$userToAuth['login']; 
    	$_SESSION['id']=$userToAuth['id'];
>>>>>>> upstream/master
    	echo "Ви успішно авторизовані! Зараз ви будете перенаправлені на головну";
    	header('Location: '.$_SERVER['HTTP_REFERER']);
    } else {
       exit ("Ви ввели невірний пароль");
	}
}
<<<<<<< HEAD
echo "</div>";
?>
</body>
</html>
=======
?>
>>>>>>> upstream/master
