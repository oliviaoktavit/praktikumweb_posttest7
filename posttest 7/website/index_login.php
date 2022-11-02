<?php

include '../config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

if (isset($_POST['submit1'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($db, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: ../index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
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

    <title>Login</title>
</head>

<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error'] ?>
    </div>

    <div class="kotak-signup">
        <form action="" method="POST" class="login-email">
            <p class="form-signup" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div>
                <input class="form-signup" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div>
                <input class="form-signup" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div>
                <button class="tombol-signup" name="submit1" class="btn">Login</button>
            </div>
            <p class="" style="color: white;">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>

</html>