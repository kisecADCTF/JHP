<?php

include('utils/constants.php');
include('utils/connect.php');

if (!isset($_POST['submit']))
    exit('Illegal call to this page.');

$username = $_POST['username'];
$username = addslashes($username);
if (strlen($username) <= 4 or strlen($username) >= 10)
{
    exit('잘못된 아이디 길이입니다.');
}
$pwd = $_POST['password'];
if (strlen($pwd) <= 7)
{
    exit('잘못된 비밀번호 길이입니다.');
}
$password = MD5($pwd);
$permission = $_POST['permission'];
$permission = addslashes($permission);


$now = date('Y-m-d H:i:s', time());
$query = "INSERT INTO user(username, password, default_permission, registration_time, money) ";
$query .= "VALUES('$username', '$password', 2, '$now', 10000)";

mysqli_query($conn, $query) or die(mysqli_error($conn));

?>

<!DOCTYPE html>
<script>
    alert("Registered completed.");
    window.location.href = "index.html";
</script>
