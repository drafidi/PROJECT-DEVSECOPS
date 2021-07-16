<?php
include './env.php';
$db = mysqli_connect($host, $user_mysql, $password_mysql,$database);
if(!$db)
{
echo "Echec de la connexion\n";
exit();
}
mysqli_set_charset($db, "utf8");
?>