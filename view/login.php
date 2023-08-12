<?php
include '../php/config.php';
include '../php/functions.php';

if (isset($_POST['submit2'])) {
    $nic = $_POST['nic'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];

    signUpUser($nic, $password1, $password2, $email, $connection);
}

if(isset($_POST['submit'])){
  $nic=$_POST['nic'];
  $password = $_POST['password1'];

  signInUser($nic,$password,$connection);

  // ... After successful login ...
    session_start();
    $_SESSION['nic'] = $nic;
    // Redirect to welcome.php
    header("Location: welcome.php");

  
}


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/login.css" />
  <title>Form</title>
</head>
<body>
  <div class="login-wrap">
    <div class="login-html">
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
      <div class="login-form">

        <form action="login.php" method="post" enctype="multipart/form">
        <div class="sign-in-htm">
          <div class="group">
            <label for="user" class="label">Username</label>
            <input id="user" type="text" name="nic" class="input">
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            <input id="pass" type="password" name="password1" class="input" data-type="password">
          </div>
          <div class="group">
            <input id="check" type="checkbox" class="check" checked>
            <label for="check"><span class="icon"></span> Keep me Signed in</label>
          </div>
          <div class="group">
            <input type="submit" class="button" value="Sign In" name="submit">
          </div>
          <div class="hr"></div>
          <div class="foot-lnk">
            <a href="#forgot">Forgot Password?</a>
          </div>
        </div>
        </form>


        <form action="login.php" method="post" enctype="multipart/form">
        <div class="sign-up-htm">
          <div class="group">
            <label for="user" class="label">Username</label>
            <input id="user" type="text" class="input" name="nic">
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            <input id="pass" type="password" class="input" data-type="password" name="password1">
          </div>
          <div class="group">
            <label for="pass" class="label">Repeat Password</label>
            <input id="pass" type="password" class="input" data-type="password" name="password2">
          </div>
          <div class="group">
            <label for="pass" class="label">Email Address</label>
            <input id="pass" type="text" class="input" name="email">
          </div>
          <div class="group">
            <input type="submit" class="button" name="submit2" value="Sign Up">
          </div>
          <div class="hr"></div>
          <div class="foot-lnk">
            <label for="tab-1">Already Member?</a>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
