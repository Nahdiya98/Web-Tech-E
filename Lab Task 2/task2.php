<!DOCTYPE HTML>
<html>

<head>
    <style>
    .error {
        color: #FF0000;
    }
    </style>
</head>

<body style="background-color:#81BEF7;">

    <?php
$NAMEErr = $EMAILErr = $DOBErr = $GENDERErr = $DEGREEErr = $BLOODGRPErr = "";
$NAME = $EMAIL = $DOB = $GENDER = $DEGREE = $BLOODGRP = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["NAME"])) {
    $NAMEErrrr = "Name is required";
  } else {
    $NAME = test_input($_POST["NAME"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$NAME)) {
      $NAMEErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["EMAIL"])) {
    $EMAILErr = "Email is required";
  } else {
    $EMAIL = test_input($_POST["EMAIL"]);
    if (!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
      $EMAILErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["DOB"])) 
  {
    $DOBErr = "DOB is required";
  } 
  else 
  {
    $DOB = test_input($_POST["DOB"]);
  }
  if (empty($_POST["GENDER"])) 
  {
    $GENDERErr = "Gender is required";
  } 
  else 
  {
    $GENDER = test_input($_POST["GENDER"]);
  }
  if (empty($_POST["DEGREE"]))
  {
	  $DEGREEErr = "At least 2 degree have to select";
  }
  else
  {
	  $str = implode (", ", $_POST["DEGREE"]);
	  $DEGREE = test_input($str);
  }
 if (empty($_POST["BLOODGRP"]))
 {
	 $BLOODGRPErr = "Must be Selected";
 }
 else
 {
  $BLOODGRP = test_input($_POST["BLOODGRP"]);
 }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


    <h2>Form Fill up </h2>
    <p><span class="error">* Required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <B>NAME:</b> <input type="text" name="NAME" value="<?php echo $NAME;?>">
        <span class="error">* <?php echo $NAMEErr;?></span>
        <br><br>
        <b>E-MAIL:</b> <input type="text" name="EMAIL" value=" <?php  echo  $EMAIL;?>">
        <span class="error">* <?php echo $EMAILErr;?></span>
        <br><br>
        <b>DOB:</b> <input type="date" name="DOB" value="<?php echo $DOB;?>">
        <span class="error">*<?php echo $DOBErr;?></span>

        <br><br>

        <b>GENDER:</b>
        <br><br>
        <input type="radio" name="GENDER" <?php if (isset($GENDER) && $GENDER=="female") echo "checked";?>
            value="female">Female
        <input type="radio" name="GENDER" <?php if (isset($GENDER) && $GENDER=="male") echo "checked";?>
            value="male">Male
        <input type="radio" name="GENDER" <?php if (isset($GENDER) && $GENDER=="other") echo "checked";?>
            value="other">Other
        <span class="error">* <?php echo $GENDERErr;?></span>
        <br><br>
        <b>DEGREE:</b>
        <br><br>
        <input type="checkbox" name="DEGREE[]" <?php if (isset($DEGREE) && $DEGREE=="SSC") echo "checked";?>
            value="SSC">SSC
        <input type="checkbox" name="DEGREE[]" <?php if (isset($DEGREE) && $DEGREE=="HSC") echo "checked";?>
            value="HSC">HSC
        <input type="checkbox" name="DEGREE[]" <?php if (isset($DEGREE) && $DEGREE=="BSc") echo "checked";?>
            value="BSc">BSc
        <input type="checkbox" name="DEGREE[]" <?php if (isset($DEGREE) && $DEGREE=="Msc") echo "checked";?>
            value="MSc">MSc
        <span class="error">* <?php echo $DEGREEErr;?></span>
        <BR><BR>
        <b>BLOOD:</b>
        <select name="BLOODGRP">
            <option value="BLOODGRP"></option>
            <option value="A+" <?php if(isset($BLOODGRP) && $BLOODGRP=="A+"){ echo ' selected="selected"'; } ?>>A+
            </option>
            <option value="A-" <?php if(isset($BLOODGRP) && $BLOODGRP=="A-"){ echo ' selected="selected"'; } ?>>A-
            </option>
            <option value="B+" <?php if(isset($BLOODGRP) && $BLOODGRP=="B+"){ echo ' selected="selected"'; } ?>>B+
            </option>
            <option value="O+" <?php if(isset($BLOODGRP) && $BLOODGRP=="O+"){ echo ' selected="selected"'; } ?>>O+
            </option>
            <option value="O-" <?php if(isset($BLOODGRP) && $BLOODGRP=="O-"){ echo ' selected="selected"'; } ?>>O-
            </option>
            <option value="AB+" <?php if(isset($BLOODGRP) && $BLOODGRP=="AB+"){ echo ' selected="selected"'; } ?>>AB+
            </option>
            <option value="AB-" <?php if(isset($BLOODGRP) && $BLOODGRP=="AB-"){ echo ' selected="selected"'; } ?>>AB-
            </option>
        </select>
        <span class="error">* <?php echo $BLOODGRPErr;?> </span>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>








<br><br>

 <?php



echo "<h1>Your Details :</h1>";
echo $NAME;
echo "<br>";
echo $EMAIL;
echo "<br>";
echo $DOB;
echo "<br>";
echo $GENDER;
echo "<br>";
print_r($DEGREE);
echo "<br>";
echo $BLOODGRP;
?>




</body>

</html>