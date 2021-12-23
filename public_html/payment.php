<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMSCHOOL SMP LUAR BIASA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="d-flex">
            <div class="mr-auto p-2"><a href="dashboardOrtu.php"><img src="images/sso.png" alt="gambar"></a></div>
            <div class="p-2 align-self-center"><a href="logout.php" class="btn btn-primary">Logout</a></div>
        </div>
    </header>
    <div class=" formContainer" style="margin-top: auto; margin-bottom: auto;">
        <h1>Payment</h1>
        <p style="text-align: center; font-size: 19px; margin-top: 40px; margin-bottom: 40px">
        Transfer melalui BCA Virtual Account<br>
        <b>SMP LUAR BIASA<br>
        12345 <?php echo $_SESSION['nis'] ?><br></b>
        <br>
        Pilih <b>Transaksi Lainnya</b> > <b>Transfer</b> > <b>Ke Rek BCA Virtual Account.</b><br>
        Masukkan no. Virtual Account diatas dan pilih <b>Benar</b>.<br>
        Periksa informasi yang tertera di layar. <br>Pastikan SMP LUAR BIASA sebagai tujuan dan Nama siswa. <br>Jika benar pilih Ya.<br>
        </p>
        <a href="dashboardOrtu.php" class="btn btn-primary resetBtn">Dashboard</a>
    </div>
    <footer>
        <h6>&copy All Rights Reserved.</h6>
    </footer>

</body>

</html>