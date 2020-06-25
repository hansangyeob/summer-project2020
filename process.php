<?php

//connect to the server and select db
$servername = "sql104.epizy.com";
$username1 = "epiz_25803616";
$password_sql = "NJsCG4o3dKXuOwD";
$dbName = "epiz_25803616_s3821179";
mysql_connect($servername,$username1,$password_sql,$dbName);

//get valuses passed from signup.php
$username_signup = $_POST['username_signup'];
$password_signup = $_POST['password_signup'];

// to pervent mysql injection
$username_signup = stripcslashes($username_signup);
$password_signup = stripcslashes($password_signup);
$email_signup = stripcslashes($email_signup);
$email_signup = mysql_real_escape_string($email_signup);
$username_signup = mysql_real_escape_string($username_signup);
$password_signup = mysql_real_escape_string($password_signup);


// Query the db for users
//고쳐야돼!! login to signup
$result = mysql_query("SELECT * FROM data WHERE name = '$username_login' and password_1 ='$password_login'");

$row = mysql_fetch_array($result);
if ($row["name"] == $username_login && $row ["password_1"] == $password_login){
    echo "Login success!";
}else{
    echo"Failed to login!";
}

?>