if($count == 1)
{
// Register $username, $password and redirect to file "login_success.php"
session_start();
$_SESSION["username"] = $username;
header("location:home.php");
}
else {
header("location:index.php?msg=failed");
}