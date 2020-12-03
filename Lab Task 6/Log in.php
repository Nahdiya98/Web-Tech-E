<html>
<head>
<title>Log-In</title>
<link rel="stylesheet" href="style.css">
<body>
    <?php
    $NameErr=$PassErr="";
    $Name=$Pass="";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["Name"])) 
  {
    $NameErr = " Name is required";
  } 
  else 
  {
    $Name = test_input($_POST["Name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Name)) 
	{
      $NameErr = "* Only letters and white space allowed";
    }
    
  }
}
  if (empty($_POST["Pass"])) 
  {
    $PassErr = "* Password is required";
  } 
  else 
  {
    $Pass = test_input($_POST["Pass"]);
    if (!preg_match("/^[a-zA-Z-']*$/",$Pass)) 
	{
      $PassErr = "* Only letters and no space allowed";
    }
  }
  function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    ?>
    <div class="loginbox">
        <img src="login.svg" class="avatar">
        <h1>Log-in Here</h1>
        <form class="form" action="validate.php" method="post">
            <p>Username</p>
            <input type="text" name="Name" placeholder="Enter Username">
            <p>Password</p>
            <input type="text" name="Pass" placeholder="Enter Password">
            <input type="submit" name="Submit" value="Submit" placeholder="Log-in">
          <input type="checkbox" name="rem">
          <label for="remember me">Remember Me</label>
            <a href="#">Forgot Password?</a><br>
            <a href="#">Don't have an account?</a>
        </form>
        
    </div>
</body>
</head>
</html>
