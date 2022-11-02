<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">
    <title>Sign UP</title>
</head>

<body>
    <div class="header">
        <div class="header-logo">
            <h2 id="headerLogo"> O Y I P I Y</h2>

        </div>
        <div class="header-list">
            <ul>
                <li>Home</li>
                <li>About us</li>
                <li>sign Up</li>
            </ul>
            <input class="Search1" type="text" placeholder="search">
            <input class="button" type="button" value="search">
        </div>
        <div class="output">
            <?php
            if (isset($_POST['Sign-up'])) {
                $email = $_POST['email'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $date = $_POST['dte'];
                $pwd = $_POST['pwd'];

                echo ("berhasil daftar dengan : <br>");
                echo ("Email      : $email<br>");
                echo ("First Name : $fname<br>");
                echo ("Last Name  : $lname<br>");
                echo ("Date       : $date<br>" );
            }
            ?>
        </div>
</body>

</html>