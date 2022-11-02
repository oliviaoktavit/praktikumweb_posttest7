<?php
require '../config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM signup WHERE id = '$id' ");
    $row = mysqli_fetch_array($result);
}

if (isset($_POST['Sign-up'])) {
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $dte = $_POST['dte'];
    $pwd = $_POST['pwd'];


    $update = mysqli_query($db, "UPDATE signup SET email='$email', fname='$fname', phone='$phone', dte='$dte', pwd='$pwd' WHERE id='$id'");

    if ($update) {
        header("Location:db.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="kotak-signup">
        <p class="tulisan-signup">Sign Up</p>
        <form action="" method="post">
            <label for="email">Your email</label>
            <input type="email" class="form-signup" id="email" name="email" placeholder="Masukan email anda.." value=<?= $row['email']; ?>>

            <label for="fname">username</label>
            <input type="text" class="form-signup" id="fname" name="fname" placeholder="First Name.." value=<?= $row['fname']; ?>>

            <label for="Phone">Phone</label>
            <input type="text" class="form-signup" id="phone" name="phone" placeholder="Phone.." value=<?= $row['phone']; ?>>

            <label for="date">Your Date</label>
            <input type="date" class="form-signup" id="date" name="dte" placeholder="date" value=<?= $row['dte']; ?>>
            <label for="pwd">Password</label>
            <input type="password" class="form-signup" id="pwd" name="pwd" placeholder="Password.." value=<?= $row['pwd']; ?>>

            <input type="submit" class="tombol-signup" name="Sign-up" value="kirim">

        </form>
    </div>

</body>

</html>