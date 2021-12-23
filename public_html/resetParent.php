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
        <h1 style="margin-bottom: 40px;">Parent Lupa Password</h1>
        <div class="container">
            <form id="formMahasiswa" autocomplete="off" action="proses-reset.php" method="POST">
                <div class="form-group">
                    <label for="username">NIS</label>
                    <input type="text" name="username" class="form-control" minlength="1" maxlength="15">
                </div>
                <button name="submit" type="submit" class="btn btn-primary" style="margin-top: 10px; width: 100%;">Submit</button>
            </form>
            <a class="reset" style="padding-top: 10px;" href="index.php">Back to Login</a>
            <div>
                <?php if (isset($_GET['status'])) : ?>
                    <br><br>
                    <p>
                        <?php
                        if ($_GET['status'] == 'gagal') {
                            echo "<h5 style='color: red;'>NIS tidak ditemukan!</h5>";
                        }
                        ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <footer>
        <h6>&copy All Rights Reserved.</h6>
    </footer>
</body>

</html>