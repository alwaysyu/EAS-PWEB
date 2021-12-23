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
            <h1>Parent Dashboard</h1>
            <br><br>

            <div class="d-flex justify-content-center">
                <a href="credential.php"><button class="mr-5 btn btn-primary">Child Credentials</button></a>
                <a href="invoice.php"><button class="mr-5 btn btn-primary">Invoice</button></a>
                <a href="payment.php"><button class="btn btn-primary">Payment</button></a>
            </div>
            <?php if (isset($_GET['status'])) : ?>
                <br><br><br>
                <p>
                    <?php
                    if ($_GET['status'] == 'sukses') {
                        echo "<h3>Pendaftaran siswa baru berhasil!</h3>";
                    } else {
                        echo "<br><br><h3>Pendaftaran gagal!</h3>";
                    }
                    ?>
                </p>
            <?php endif; ?>
            </div>
            <footer>
                <h6>&copy All Rights Reserved.</h6>
            </footer>

</body>

</html>