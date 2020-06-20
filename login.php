<!-- http://localhost/15g/login.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Summer project</title>
    <link rel="stylesheet" href="../15G/summer.css">


</head>
<body>

<form action="../15G/process.php" method="post" name="Login_Form">
    <div class="login_session">
    
        <h1>This is for Log in</h1>
        <br>
        <br>
            <h3>ID</h3> 
            <input name="username_login" type="text" placeholder="Enter your ID" > 
            <br>
            <h3>Password</h3> 
            <input name="password_login" type="password" placeholder="Enter your password" >
            <br>
            <br>
            <input name="login-submit" type="submit" value="LOGIN" class="btn-login" >
    </div>
</form>

</body>
</html>