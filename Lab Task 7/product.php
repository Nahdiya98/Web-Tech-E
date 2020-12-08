<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
  
  <fieldset class="form-wrapper">
  <h2>ADD PRODUCT</h2>
  <form class="product-form">
            <table>
                <tbody>
                    <tr>
                        <td><b> Product ID: </b></td>
                        <td> <input type="text" name="name"> </td>
                    </tr>
                    <tr>
                        <td><b>Product Name: <b></td>
                        <td> <input type="text" name="pname"> </td>
                    </tr>
					<tr>
                        <td><b> Product Price : </b></td>
                        <td> <input type="text" name="pprice"> </td>
                    </tr>
					<tr>
                        <td><b> Add description </b></td>
                        <td> <textarea name=message" row="5" cols ="20"> Add description</textarea></td>
                    </tr>
					
                </tbody>
            </table>
           
             
            <input type="submit" style="color:blue; value="Submit"> 
        </form>
    </fieldset>

    <input type="checkbox" id="check">

    <header>

      <div class="left_area">
        <h3>WELCOME <span></span></h3>
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn">Logout</a>
      </div>
    </header>
    
   
    </div>
    
    <div class="sidebar">
      <div class="profile_info">
        <img src="logo.jpg" class="profile_image" alt="">
        <h4>Hello</h4>
      </div>
	  <a href="mypro.php">My profile</span></a>
      <a href="index.php">Product</span></a>
      <a href="product.php">ADD Product</span></a>
      <a href="addjob.php">ADD Jobs</span></a>
	  <a href="editpro.php">Edit profile</span></a>
	  	  <a href="cradmin.php">Create Admin</span></a>
	  
      
    </div>
   

    

    

  </body>
</html>