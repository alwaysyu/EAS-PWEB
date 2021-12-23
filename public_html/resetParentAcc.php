<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: dashboardOrtu.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parental Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <a href=""><img src="images/sso.png" alt="gambar"></a>
    </header>
    <div class=" formContainer" style="margin-top: 80px; margin-bottom: 80px">
        <h1>Parent Lupa Password</h1>
        <div class="container">
            <p style="text-align: center; font-size: 28px; margin-top: 40px; margin-bottom: 40px">
            Email untuk reset password telah dikirimkan, <br>
silakan cek email bapak/ibu.<br>
Jika bapak/ibu ingin mengganti email,
<br>silakan hubungi Admin Sekolah. 
            </p>
            <a href="index.php" class="btn btn-primary resetBtn">Back to Login</a>
        </div>
    </div>
    <footer>
        <h6>&copy All Rights Reserved.</h6>
    </footer>
</body>

</html>