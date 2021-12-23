<?php 
include("config.php");
 
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
        <h1>Invoice</h1>
        <br>
        <div class="col-md-12 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                    <tr>
                        <th>Semester</th>
                        <th>Tanggal Bayar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $nis = $_SESSION['nis'];
                    $sql = "Select * from invoice where nis='$nis'";
                    $query = mysqli_query($db, $sql);

                    while ($siswa = mysqli_fetch_array($query)) {
                        echo "<tr>";

                        echo "<td>" . $siswa['semester'] . "</td>";
                        if($siswa['tgl_bayar'] != NULL){
                            echo "<td>" . $siswa['tgl_bayar'] . "</td>";
                        } else{
                            echo "<td><p>Belum lunas!</p></td>";
                        }

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <p style="font-weight : bolder">Total : <?php echo mysqli_num_rows($query) ?></p>
        </div>
        <a href="dashboardOrtu.php" class="btn btn-primary resetBtn">Dashboard</a>
    </div>
    <footer>
        <h6>&copy All Rights Reserved.</h6>
    </footer>

</body>

</html>

<!-- INSERT INTO `invoice` (`id`, `nis`, `tgl_bayar`, `semester`) VALUES (NULL, '1111', '2021-12-19', '1'); -->