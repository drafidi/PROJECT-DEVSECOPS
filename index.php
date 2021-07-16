<!DOCTYPE>
<html>
<head>
<title></title>
<style>
input
{
display: block;
}
</style>
</head>
<body>
<h1>Connexion au site d'administration</h1>
<?php
include './config.php';
$username = $_POST['username'];
$password = $_POST['password'];
if(!empty($username) && !empty($password))
{

	$query =
	"SELECT id, username FROM users WHERE username = '".$username."' AND password = '".$password."'";
	$rs = mysqli_query($db, $query);
	if(mysqli_num_rows($rs) == 1)
	{
	$user = mysqli_fetch_assoc($rs);
	echo "Bienvenue ".htmlspecialchars($user['username']);
}
else
 {
	echo "Mauvais nom d'utilisateur et/ou mot de passe !";
 }

 mysqli_free_result($rs);
 mysqli_close($db);
 }
 ?>
<form action="" method="POST">
<b>Nom d'utilisateur :</b> <input type="text" name="username"/>
<b>Mot de passe :</b> <input type="text" name="password" />
<input type="submit" value="Connexion" />
</form>
</body>
</html>