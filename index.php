<?php
  include "database/db.php";

  if (isset($_GET["id"])) {
    $id = $_GET["id"];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="src/style.css">
    <link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">
  </head>
  <body>
    <!-- NAVBAR -->
    <?php include "header.php"; ?>
    <!-- NAVBAR SELESAI -->

    <div class="container mt-4">
      <div class="card">
        <div class="card-body">
          <div class="border-bottom d-flex justify-content-center">
            <span style="font-size: 20px; text-shadow: 1px 1px 2px;">Tabel Database</span>
          </div>
          <table class="mx-auto mt-3">
            <tr>
              <td class="border"><p class="card-text text-center">id</p></td>
              <td class="border"><p class="card-text text-center">Nama</p></td>
              <td class="border"><p class="card-text text-center">Nim</p></td>
              <td class="border"><p class="card-text text-center">Kelas</p></td>
              <td class="border"><p class="card-text text-center">Angkatan</p></td>
            </tr>
            <?php
                $sql = "SELECT * FROM user";
                $result = mysqli_query($connect, $sql);

              if($result) {
                while($row = mysqli_fetch_assoc($result)) {
                  $id = $row["id"];
                  $nama = $row["nama"];
                  $nim = $row["nim"];
                  $kelas = $row["kelas"];
                  $angkatan = $row["angkatan"];

                  echo "
                    <tr class='border'>
                      <td class='border'><p class='card-text text-center p-2'>".$id."</p></td>
                      <td class='border'><p class='card-text text-center p-2'>".$nama."</p></td>
                      <td class='border'><p class='card-text text-center p-2'>".$nim."</p></td>
                      <td class='border'><p class='card-text text-center p-2'>".$kelas."</p></td>
                      <td class='border'><p class='card-text text-center p-2'>".$angkatan."</p></td>
                    </tr>
                  ";
                }
              }
            ?>
        </table>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="src/js/bootstrap.bundle.js"></script>
  </body>
</html>