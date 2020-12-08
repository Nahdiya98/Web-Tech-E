<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<link rel="stylesheet" href="style1.css">
<body>
<section class="adr"> 

<?php
$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'pd'))
{
	echo 'Database not selected';
}

$firstname = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['telephone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$permanentaddress = $_POST['address'];
$presentaddress = $_POST['presentaddress'];
$city = $_POST['city'];
$state = $_POST['region'];
$password = $_POST['password'];
$confirmpassword = $_POST['password'];


$sql = "INSERT INTO reg (id, firstname, lastname,username,email,contact,dob,gender,permanentaddress,presentaddress,city,state,password,confirmpassword) VALUES ('', '$firstname','$lastname','$username','$email','$contact','$dob','$gender','$permanentaddress','$presentaddress','$city','$state','$password','$confirmpassword')";

if(!mysqli_query($con,$sql))
{
	echo 'Not inserted';
}
else
{
	echo 'inserted';
}



$nameErr = $lastnameErr = $usernameErr = $emailErr  = $telephoneErr = $dobErr =   $genderErr =  $addressErr = $presentaddressErr = $cityErr = $countryErr = $regionErr = $passErr = $confirmpasswordErr = "";
$name = $lastname = $username = $email = $telephone = $dob =  $gender =  $address =$presentaddress = $city = $country = $region = $pass = $confirmpassword ="";

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
  if (empty($_POST["lastname"])) 
  {
    $lastnameErr = " Last Name is required";
  } 
  else 
  {
    $lastname = test_input($_POST["lastname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) 
	{
      $lastnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["username"])) 
  {
    $usernameErr = "User Name is required";
  } 
  else 
  {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) 
	{
      $usernameErr = "Only letters and white space allowed";
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
    
  if (empty($_POST["telephone"])) 
  {
    $telephoneErr = "Telephone is required";
  } 
  else 
  {
    $telephone = test_input($_POST["telephone"]);
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
  if (empty($_POST["address"])) 
  {
    $addressErr = "Address is required";
  } 
  else 
  {
    $address = test_input($_POST["address"]);
  }
  if (empty($_POST["presentaddress"])) 
  {
    $presentaddressErr = "Address is required";
  } 
  else 
  {
    $presentaddress = test_input($_POST["presentaddress"]);
  }
  if (empty($_POST["city"])) 
  {
    $cityErr = "City is required";
  } 
  else 
  {
    $city = test_input($_POST["city"]);
  }
  if (empty($_POST["country"])) 
  {
    $countryErr = "Country is required";
  } 
  else 
  {
    $country = test_input($_POST["couontry"]);
  }
  if (empty($_POST["region"]))
 {
	 $regionErr = "Must be Selected";
 }
 else
 {
  $region = test_input($_POST["region"]);
 }
 if (empty($_POST["password"])) 
  {
    $passErr = "Password is required";
  } 
  else 
  {
    $pass = test_input($_POST["password"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$pass)) 
	{
      $pass = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["password"])) 
  {
    $confirmpasswordErr = "Confirm Password is required";
  } 
  else 
  {
    $confirmpassword = test_input($_POST["password"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$confirmpassword)) 
	{
      $confirmpassword = "Only letters and white space allowed";
    }
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

<h2  style="text-align:center;">Admin Signup</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <div class="registration_box">
<h3>Personal Details</h3>

 <B>First Name:</b> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
 
  <B>Last Name:</b> <input type="text" lastname="lastname" value="<?php echo $lastname;?>">
  <span class="error">* <?php echo $lastnameErr;?></span>
  <br><br>
  <B>User Name:</b> <input type="text" username="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  <b>E-MAIL:</b> <input type="text" name="email" value=" <?php  echo  $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <b>Contact:</b> <input type="text" name="telephone" value="<?php echo $telephone;?>">
  <span class="error">*<?php echo $telephoneErr;?></span><br><br>
  <b>DOB:</b> <input type="date" name="dob" value="<?php echo $dob;?>">
  <span class="error">*<?php echo $dobErr;?></span>
  <br><br>
  <b>GENDER:</b>
  <br><br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <h4>Your Address</h4>
  <b>Parmanent Address:</b> <input type="text" name="address" value="<?php echo $address;?>">
  <span class="error">*<?php echo $addressErr;?></span><br><br>
  <b>Present Address:</b> <input type="text" name="presentaddress" value="<?php echo $presentaddress;?>">
  <span class="error">*<?php echo $presentaddressErr;?></span><br><br>
  <b>City:</b> <input type="text" name="city" value="<?php echo $city;?>">
  <span class="error">*<?php echo $cityErr;?></span><br><br>
  <b>Country:</b> <input type="text" name="country" value="<?php echo $country;?>">
  <span class="error">*<?php echo $countryErr;?></span><br><br>
  <b>Region/State:</b>
  <select  name="region" >
  <option value="">_ _ _Must Be Selected_ _ _</option>  
    <option value="Bangladesh"<?php if(isset($region) && $region=="Bangladesh"){ echo ' selected="selected"'; } ?>>Bangladesh</option>
    <option value="A-"<?php if(isset($region) && $region=="A-"){ echo ' selected="selected"'; } ?>>Outside Bangladesh</option>
    </select>
	<span class="error">* <?php echo $regionErr;?> </span>
	<br><br>
  <h5>Your Password</h5>
  <B>Password:</b> <input type="text" name="password" value="<?php echo $pass;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  <B>Confirm Password:</b> <input type="text" name="password" value="<?php echo $confirmpassword;?>">
  <span class="error">* <?php echo $confirmpasswordErr;?></span>
  <br><br>
  
  
  <input type="submit" name="Continue" value="continue">  

</form>


</section>
</body>
</html>