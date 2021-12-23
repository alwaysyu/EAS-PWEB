<?php
include("config.php");

if (isset($_SESSION['username'])) {
    header("Location: dashboardOrtu.php");
}

if (isset($_POST['submit'])){
    $username = $_POST['username'];

    $sql = "Select * from akunOrtu where nis='$username'";
    $query = mysqli_query($db, $sql);
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        header('Location: resetParentAcc.php');
    } else {
        header('Location: resetParent.php?status=gagal');
    }
}
?>