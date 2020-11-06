<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../main.css">
</head>

<body>
    <?php  include_once "./userNav.php" ?>

    <div class="container">

        <div class="sidebar">
            <?php  include_once "./sidebar.php" ?>
        </div>

        <div class="mainbar">
            <fieldset>
                <legend>
                    <h2>Edit Profile</h2>
                </legend>

                <div class="profile-wrapper">
                    <div class="col-1">
                        <table style="">
                            <tbody>
                                <tr>
                                    <td>Name: </td>
                                    <td><input type="text" value="Bob"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email: </td>
                                    <td><input type="email" value="bob@aiub.edu"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender: </td>
                                    <td>
                                        <input type="radio" name="gender"> Male
                                        <input type="radio" name="gender"> Female
                                        <input type="radio" name="gender"> Other
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth: </td>
                                    <td><input type="text"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <hr>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit">Submit</button>
                    </div>
                </div>

            </fieldset>
        </div>
    </div>

    <?php  include_once "./../footer.php" ?>
</body>

</html>