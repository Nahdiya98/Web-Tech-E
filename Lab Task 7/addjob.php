<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
  
    
<fieldset class="form-wrapper">

<?php
$nameErr = $emailErr = $dobErr = $genderErr = $usernameErr = $passwordErr = $cpasswordErr = "";
$name = $email = $dob = $gender = $username = $password = $cpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  else 
  {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
	{
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["dob"])) 
  {
    $dobErr = "DOB is required";
  } 
  else 
  {
    $dob = test_input($_POST["dob"]);
  }
  if (empty($_POST["gender"])) 
  {
    $genderErr = "Gender is required";
  } 
  else 
  {
    $gender = test_input($_POST["gender"]);
  }
 
 if (empty($_POST["username"])) 
  {
    $usernameErr = "Username is required";
  } 
  else 
  {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) 
	{
      $usernameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
  } 
  else 
  {
    $password = test_input($_POST["password"]);
  }
   
   if (empty($_POST["cpassword"])) 
  {
    $cpasswordErr = "Confirm Password is required";
  } 
  else 
  {
    $cpassword = test_input($_POST["cpassword"]);
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

<h2>Registration Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <b>NAME:</b> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <b>E-MAIL:</b> <input type="text" name="email" value=" <?php  echo  $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  <b>Username:</b> <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  
  <b>Password:</b> <input type="text" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  
  <b>Confirm Password:</b> <input type="text" name="cpassword" value="<?php echo $cpassword;?>">
  <span class="error">* <?php echo $cpasswordErr;?></span>
  <br><br>
  
  <b>DOB:</b> <input type="date" name="dob" value="<?php echo $dob;?>">
  <span class="error">*<?php echo $dobErr;?></span>
  <br><br>
  
  <b>GENDER:</b>
  <br><br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  
  
  <input type="submit" name="submit" value="submit">  
</form>


</fieldset>
  

   
    
    <header>

      <div class="left_area">
        <h3>WELCOME <span></span></h3>
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn">Logout</a>
      </div>
    </header>
   
   
    
    <div class="sidebar">
      <div class="profile_info">
        <img src="logo.jpg" class="profile_image" alt="">
        <h4>Hello</h4>
      </div>
	  <a href="mypro.php">My profile</span></a>
      <a href="index.php">Product</span></a>
      <a href="product.php">ADD Product</span></a>
      <a href="#">ADD Jobs</span></a>
	  <a href="editpro.php">Edit profile</span></a>
	  	  <a href="cradmin.php">Create Admin</span></a>
      
    </div>
	
   

 </body>
</html>