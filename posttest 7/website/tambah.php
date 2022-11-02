<?php

require '../config.php';
if (isset($_POST['Sign-up'])) {
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $dte = $_POST['dte'];
    $pwd = $_POST['pwd'];
    $gambar = $_FILES['gambar']['name'];

    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    $gambar_baru = "$fname.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($tmp, '../images/' . $gambar_baru)) {
        // $query = "INSERT INTO perpus (pinjam, kembali, nama) VALUES ('$pinjam','$kembali','$gambar_baru')";
        $kirim = "INSERT INTO  signup (email,fname,phone,dte,pwd,gambar) VALUES ('$email', '$fname', '$phone','$dte','$pwd','$gambar')";

        $result = $db->query($kirim);

        if ($result) {
            header("Location:db.php");
        } else {
            echo "gagal kirim";
        }
    }
}


//     if ($kirim) {
//         echo "<script> alert('Data Berhasil Dikirim');</script>";
//         header("Location:db.php");
//     } else {
//         echo "gagal mengirim";
//     }
// }
