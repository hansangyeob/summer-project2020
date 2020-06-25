<!-- http://localhost/15g/signup.php 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hot summer project</title>
    <link rel="stylesheet" href="../15G/summer.css">


</head>
<body>

<form action="../15G/process.php" method="post" name="signup_Form">
    <div class="signup_session">
    
        <h1>This is for Sign up</h1>
        <br>
        <br>
            <h3>Nick name</h3> 
            <input name="username_signup" type="text" placeholder="Enter your Nickname" > 
            <br>
            <h3>Email</h3>
            <input name="email_signup" type="email" placeholder="Enter your Email" > 
            <br>
            <h3>Password</h3> 
            <input name="password_password" type="password" placeholder="Enter your password" >
            <br>
            <h3>Password repeat</h3> 
            <input name="password_password" type="password" placeholder="Enter your password again" >
            <br>
            <br>
            <input name="signup-submit" type="submit" value="SIGNUP" class="btn-signup" >
    </div>
</form>

</body>
</html>