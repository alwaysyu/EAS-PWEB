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
        <h1>Child Credentials</h1>
        <br>
        <?php
        $nis = $_SESSION['nis'];
        $sql = "Select * from siswa where nis='$nis'";
        $query = mysqli_query($db, $sql);
        $siswa = mysqli_fetch_array($query);
        echo "<p style='font-size:18px;'>";
        if($siswa['foto'] != NULL){
            echo "<img src='images/".$siswa['foto']."' style='float: left;margin-right:15px;'width='125' height='auto'>";
        }
        echo "NIS : ".$siswa['nis']."<br>";
        echo "Nama : ".$siswa['nama']."<br>";
        echo "Alamat : ".$siswa['alamat']."<br>";
        echo "Jenis Kelamin : ".$siswa['jenis_kelamin']."<br>";
        echo "Agama : ".$siswa['agama']."<br>";
        echo "Sekolah Asal : ".$siswa['sekolah_asal']."<br>";
        echo "</p>";
        
        ?>

        <div class="col-md-12 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                    <tr>
                        <th>Semester</th>
                        <th>Nilai rata-rata</th>
                        <th>Rank</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $nis = $_SESSION['nis'];
                    $sql = "Select * from rank where nis='$nis'";
                    $query = mysqli_query($db, $sql);

                    while ($siswa = mysqli_fetch_array($query)) {
                        echo "<tr>";

                        echo "<td>" . $siswa['semester'] . "</td>";
                        if($siswa['nilaimean'] != NULL){
                            echo "<td>" . $siswa['nilaimean'] . "</td>";
                        } else{
                            echo "<td><p>-</p></td>";
                        }
                        if($siswa['ranking'] != NULL){
                            echo "<td>" . $siswa['ranking'] . "</td>";
                        } else{
                            echo "<td><p>-</p></td>";
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

<!-- INSERT INTO `rank` (`id`, `semester`, `nilaimean`, `ranking`, `nis`) VALUES (NULL, '1', '87,5', '2', '1111') -->