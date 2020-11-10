<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
   

    <fieldset class="form-wrapper">
        <legend><strong>ADD Product</strong></legend>
        <form class="form" action="insert.php" method="post">
            <table>
                <tbody>
                    <tr>
                        <td> Name: </td>
                        <td> <input type="text" name="name"> </td>
                    </tr>
                    <tr>
                        <td> Buying Price: </td>
                        <td> <input type="text" name="bprice"> </td>
                    </tr>
					<tr>
                        <td> Selling Price : </td>
                        <td> <input type="text" name="sprice"> </td>
                    </tr>
                </tbody>
            </table>
           
            <input type="checkbox" name="" id=""> Display <br>
            <input type="submit" value="Submit"> 
        </form>
    </fieldset>

  
</body>

</html>