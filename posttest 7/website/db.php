<?php
require '../config.php';


if (isset($_GET['cari'])) {
    //mengambil keyword pencarian
    $katakunci = $_GET['keyword'];
    //mengeksekusi
    $result = mysqli_query($db, "SELECT * FROM signup WHERE fname LIKE '%$katakunci%' OR phone LIKE '%$katakunci%'");
} else {
    // eksekusi perintah mysql
    $result = mysqli_query($db, "SELECT * FROM signup");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="../css/db1.css">
</head>

<body>
    <header>
        <h2>Data Customer</h2>
    </header>

    <div class="list-table">
        <h3></h3>
        <a href="signup.php" class="tambah">New account</a>

        <form action="" method="GET">
            <input type="text" name="keyword" placeholder="Search ...">
            <input type="submit" name="cari" value="Search">
        </form>
        <br>
        <button ><a href="../index.php">Back</a></button>

        <table>
            <tr class="thead">
                <th>No</th>
                <th nowrap>Email</th>
                <th>First Name</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Password</th>
                <th>Foto</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {

            ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td nowrap><?= $row['email']; ?></td>
                    <td><?= $row['fname'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td><?= $row['dte'] ?></td>
                    <td><?= $row['pwd'] ?></td>
                    <td><img src="../images/<?php echo $row['gambar']; ?>" width='100' height='100'></td>
                    <!-- <td><?php echo $row['gambar']; ?></td> -->
                    <td class="edit">
                        <a href="edit.php?id=<?= $row['id']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg>
                        </a>
                    </td>
                    <td class="hapus">
                        <a href="hapus.php?id=<?= $row['id']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                        </a>
                    </td>

                </tr>
            <?php
                $i++;
            }
            ?>

        </table>
    </div>

</body>

</html>