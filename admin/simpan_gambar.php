<html>
    <body>
        <p>
            <?php
            $namafolder = "img/"; //tempat menyimpan file
            $con = mysql_connect("localhost", "root", "") or die("Gagal");
            mysql_select_db("msa") or die("Gagal");
            if (!empty($_FILES["nama_file"]["tmp_name"])) {
                $jenis_gambar = $_FILES['nama_file']['type'];
                $jenisgd = $_POST['jenisgd'];
                $alamat = $_POST['alamat'];
                $longitude = $_POST['longitude'];
                $latitude = $_POST['latitude'];

                if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/gif" || $jenis_gambar == "image/x-png") {
                    $gambar = $namafolder . basename($_FILES['nama_file']['name']);
                    if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
                        //echo "Gambar berhasil dikirim ke" . $gambar;
                        
                        $result = mysql_query("SELECT K_ID_GD FROM gawatdarurat WHERE K_JENIS_GD = '$jenisgd'");
                        while ($test = mysql_fetch_array($result)) {
                            $id_gd = $test['K_ID_GD'];
                        }
                        
                        $sql = "INSERT INTO korban (K_ID_GD, K_JENIS_GD, K_ALAMAT, K_LONGITUDE, K_LATITUDE, K_FOTO, K_STATUS) values ('$id_gd','$jenisgd','$alamat','$longitude','$latitude','$gambar','Belum diproses')";
                        $res = mysql_query($sql) or die(mysql_error());
                    } else {
                        echo "Gambar gagal dikirim";
                    }
                } else {
                    echo "Jenis gambar yang anda kirim salah. Harus .jpg";
                }
            } else {
                echo "Anda belum memilih gambar";
            }
            ?>
        </p>
        <!--<p>Lihat gambar <a href="table_korban.php">DISINI</a></p>-->
    </body>
</html>
