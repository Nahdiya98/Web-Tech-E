<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <?php include_once "./navbar.php"?>

    <fieldset class="form-wrapper">
        <legend><strong>LOGIN</strong></legend>
        <form class="form" action="./user/dashboard.php" method="post">
            <table>
                <tbody>
                    <tr>
                        <td> Username: </td>
                        <td> <input type="text"> </td>
                    </tr>
                    <tr>
                        <td> Password: </td>
                        <td> <input type="password"> </td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <input type="checkbox" name="" id=""> Remember Me <br>
            <input class="btn-margin" type="submit" value="Submit"> <a href="./forgetPassword.php">Forgot Password?</a>
        </form>
    </fieldset>

    <?php include_once "./footer.php"?>
</body>

</html>