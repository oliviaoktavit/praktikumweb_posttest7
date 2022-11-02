<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: website/index_login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oyipiy Makeups Collection</title>
    <link rel="stylesheet" href="./css/style1.css">

</head>

<body id="body">
    <div class="header">
        <div class="header-logo">
            <h2 id="headerLogo"> O Y I P I Y</h2>
        </div>
        <div class="header-list">
            <ul>
                <li>Home</li>
                <li><a href="website/db.php">ADMIN</a></li>
                <li><a style="text-decoration:none" href="website/login.php">Sign Up</a></li>
            </ul>
            <input class="Search1" type="text" placeholder="Search...">
            <input class="button1" type="button" value="search">

        </div>
    </div>
    <form action="" method="POST">

        <div class="kotak-signup">
            <div>
                <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] . "!" . "</h1>"; ?>

                <a class="tombol-signup" href="logout.php" class="btn">Logout</a>
            </div>
        </div>
    </form>
    <div class="image0" align="Center">
        <img src="op.webp" alt="banner">
    </div>
    <div class="dl">
        <div class="dark1">
            <button id="lightmode">light</button>
        </div>
        <div class="dark2">
            <button id="darkmode">dark</button>
        </div>
    </div>
    <div class="cate">
        <h1 id="hdcategory">category</h1>
    </div>
    <div class="kategori">
        <div class="card">
            <div class="header">
                <div class="content" x>
                    <img src="face.PNG" width="250" height="250" alt="kosmetik">
                </div>
            </div>
            <div>
                <h3>Makeup for face <br>
                    <button onclick="myFunctionFace()">face</button>
                </h3>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <div class="content">
                    <img src="eye.png" width="250" height="250" alt="kosmetik">
                </div>
            </div>
            <div>
                <h3>Makeup for eyes <br>
                    <button onclick="myFunctionEyes()">eyes</button>
                </h3>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <div class="content">
                    <img src="lip.PNG" width="250" height="250" alt="kosmetik">
                </div>
            </div>
            <div>
                <h3>Makeup for lips <br>
                    <button onclick="myFunctionLips()">lips</button>
                </h3>
            </div>
        </div>
    </div>


    <div class="content2">
        <div class="image1">
            <div class="for im">
                <div class=" im ">
                    <div class="font">
                        <h2>About Me</h2>
                    </div>
                    <img src="person.png" width="300" height="300" alt="person">
                </div>
            </div>
        </div>
        <div class="image1">
            <div class="for im">
                <div class=" im ">
                    <div class="font2">
                        <p1>
                            Nama : Olivia Oktavi Utami <br>
                            NIM : 2009106102 <br>
                            PRODI : Informatika <br>
                            HOBBY : Nonton Bioskop

                        </p1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="jquery.js"></script>

</body>

</html>