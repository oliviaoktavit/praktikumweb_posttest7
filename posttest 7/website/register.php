<?php

include '../config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index_login.php");
}

if (isset($_POST['submit1'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($db, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($db, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../css/style1.css">

    <title>Niagahoster Register</title>
</head>

<body>
    <div class="kotak-signup">
        <form action="" method="POST" class="login-email">
            <p class="form-signup" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div>
                <input class="form-signup" type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div>

                <input class="form-signup" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div>

                <input class="form-signup" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div>

                <input class="form-signup" type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div>
                <button class="tombol-signup" name="submit1" class="btn">Register</button>
            </div>
            <p class="" style="color: white;">Anda sudah punya akun? <a href="index_login.php">Login </a></p>
        </form>
    </div>
</body>

</html>