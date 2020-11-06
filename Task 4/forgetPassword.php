<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <?php include_once "./navbar.php"?>

    <fieldset class="form-wrapper">
        <legend><strong>LOGIN</strong></legend>
        <form class="form" action="#" method="post">
            <table>
                <tbody>
                    <tr>
                        <td> Enter Email: </td>
                        <td> <input type="email"> </td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <input class="btn-margin" type="submit" value="Submit">
        </form>
    </fieldset>

    <?php include_once "./footer.php"?>
</body>

</html>