<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <?php include_once "./navbar.php"?>

    <fieldset class="form-wrapper">
        <legend><b>Registration</b></legend>
        <form class="form" action="#" method="post">
            <table>
                <tbody>
                    <tr>
                        <td> Name: </td>
                        <td> <input type="text"> </td>
                    </tr>
                    <tr>
                        <td> Email: </td>
                        <td> <input type="email"> </td>
                    </tr>
                    <tr>
                        <td> User Name: </td>
                        <td> <input type="text"> </td>
                    </tr>
                    <tr>
                        <td> Password: </td>
                        <td> <input type="password"> </td>
                    </tr>
                    <tr>
                        <td> Confirm Password: </td>
                        <td> <input type="password"> </td>
                    </tr>
                </tbody>
            </table>

            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="" > Male
                <input type="radio" name="" > Female
                <input type="radio" name="" > Other
            </fieldset>

            <fieldset>
                <legend>Date Of Birth</legend>
                <div style="display:flex">
                <input style="width:40px" type="text" name=""> /
                <input style="width:40px" type="text" name=""> /
                <input style="width:60px" type="text" name=""> (dd/mm/yyyy)
                </div>
            </fieldset>
            
            <button class="btn-margin" type="submit ">Submit</button>
            <button type="button">Reset</button>
        </form>
    </fieldset>

    <?php include_once "./footer.php"?>
</body>

</html>