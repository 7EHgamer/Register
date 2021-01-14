<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$link = mysql_connect("localhost", "hayder", "Aspire@5742");

$name = mysql_real_escape_string($link,$name);
$email = mysql_real_escape_string($link,$email);
$password = mysql_real_escape_string($link,$password);

mysql_select_db($link, "UserInfo");

$result = mysqli_query($link, "select * from Usersinfo where Name = '$name' and Email = '$email' and Password = '$password'")
    or die(mysqli_errno($link));
$row = mysqli_fetch_array($result);
if ($row['Name'] == $name && $row['Email'] == $email && $row['Password'] == $password) {
    header("Location: home.html")
    exit;
} else {
    echo('Register Failed')
}
?>