

<?php  
include '../sqlcon_sesSt/sessionSt.php';
if (!empty($_SESSION['message'])){
  session_destroy();
}
  


include '../frameworks/bootstrap.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Register</title>
</head>
<body class='text-center'>
  <h1>register your account</h1>
<form method="POST" onsubmit='return validate()' name='myform' action="../actions/registernewaccount.php" >

  <div>
  <p>Name:</p><input type="text" name="firstname" class="someInputs" >
  <span class="msgFn errorField"></span>
</div>

  <div><p>Mobile:</p><input type="text" class="someInputs"  id="mNumber" name="mNumber">
  <span class="msgmN errorField"></span></div>
  
  <div><p>Email:</p><input type="text" class="someInputs" id="email" name="email">
  <span class="msgem errorField"></span></div>

  <div><p>Password:</p><input type="text" class="someInputs" id="password" name="password">
  <span class="msgpss errorField"></span></div>
<input type='hidden' value="student" name="student">
<input type="submit" id="submit" name='submit' value="Register" ></div>

<p class='mt-5' >already registered</p>
<button><a href='studentSignin.php' >login now</a></button>
</form>
</body>

<script src='../validation/validate.js' defer></script>


</form>
    
</body>
</html>