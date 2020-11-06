<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
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
                <legend><h2>Profile</h2></legend>
                
                <div class="profile-wrapper">
                    <div class="col-1">
                        <table style="width:50%">
                            <tbody>
                                <tr>
                                    <td>Name: </td>
                                    <td>Bob</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>Email: </td>
                                    <td>bob@aiub.edu</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>Gender: </td>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>Date of Birth: </td>
                                    <td>19/09/1998</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="./editProfile.php">Edit Profile</a>
                    </div>
                    <div class="col-2">
                        <img height="200px" src="./../profile.png" alt="profile"> <br>
                        <a href="./changeProfilePicture.php">Change</a>
                    </div>
                </div>

            </fieldset>
        </div>
    </div>

    <?php  include_once "./../footer.php" ?>
</body>

</html>