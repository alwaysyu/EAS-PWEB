<?php
include("config.php");

error_reporting(0);
 
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboardOrtu.php");
}

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "Select * from akunOrtu where nis='$username' && password='$password'";
    $query = mysqli_query($db, $sql);
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $sqlcont = "Select * from siswa where nis='$username'";
        $querycont = mysqli_query($db, $sqlcont);
        $row = mysqli_fetch_assoc($querycont);
        $_SESSION['nis'] = $row['nis'];
        $_SESSION['username'] = $row['nama'];
        header("Location: dashboardOrtu.php");
    } else {
        header('Location: index.php?status=gagal');
    }
    // INSERT INTO `akunortu` (`idAkunOrtu`, `nis`, `password`, `email`) VALUES (NULL, '1111', '1111', 'a@gmail.com');
}
?>
