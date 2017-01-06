<?php

include('koneksi.php');

session_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['submit_gambarkorban'])) {
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
                header("location:table_korban.php");
            } else {
                echo "Gambar gagal dikirim";
            }
        } else {
            echo "Jenis gambar yang anda kirim salah. Harus .jpg";
        }
    } else {
        echo "Anda belum memilih gambar";
    }
}

//PROSES HAPUS
//hapus user
if (isset($_POST['hapus_user'])) {
    $iduser = $_GET['id_user'];
//    print_r($iduser);
    mysql_query("DELETE from user where K_ID_USER = '$iduser'");

    unset($_POST['hapus_user']);
    header("location:table_user.php");
}

//hapus pengadaan
if (isset($_POST['hapus_pengadaan1'])) {
    $id_rekap = $_GET['id_rekapitulasi'];
//    print_r($iduser);
    mysql_query("DELETE from rekapitulasi where K_ID_REKAPITULASI = '$id_rekap'");

    unset($_POST['hapus_pengadaan1']);
    header("location:table_pengadaan.php");
}

//hapus pengadaan
if (isset($_POST['hapus_pengadaan2'])) {
    $id_rekap = $_GET['id_rekapitulasi'];
//    print_r($iduser);
    mysql_query("DELETE from rekapitulasi where K_ID_REKAPITULASI = '$id_rekap'");

    unset($_POST['hapus_pengadaan2']);
    header("location:table_pengadaan.php");
}

//hapus pengadaan
if (isset($_POST['hapus_pengadaan3'])) {
    $id_rekap = $_GET['id_rekapitulasi'];
//    print_r($iduser);
    mysql_query("DELETE from rekapitulasi where K_ID_REKAPITULASI = '$id_rekap'");

    unset($_POST['hapus_pengadaan3']);
    header("location:table_pengadaan.php");
}

//hapus pengadaan
if (isset($_POST['hapus_pengadaan4'])) {
    $id_rekap = $_GET['id_rekapitulasi'];
//    print_r($iduser);
    mysql_query("DELETE from rekapitulasi where K_ID_REKAPITULASI = '$id_rekap'");

    unset($_POST['hapus_pengadaan4']);
    header("location:table_pengadaan.php");
}

//hapus pengadaan
if (isset($_POST['hapus_pengadaan5'])) {
    $id_rekap = $_GET['id_rekapitulasi'];
//    print_r($iduser);
    mysql_query("DELETE from rekapitulasi where K_ID_REKAPITULASI = '$id_rekap'");

    unset($_POST['hapus_pengadaan5']);
    header("location:table_pengadaan.php");
}

//hapus pengadaan
if (isset($_POST['hapus_pengadaan6'])) {
    $id_rekap = $_GET['id_rekapitulasi'];
//    print_r($iduser);
    mysql_query("DELETE from rekapitulasi where K_ID_REKAPITULASI = '$id_rekap'");

    unset($_POST['hapus_pengadaan6']);
    header("location:table_pengadaan.php");
}

//tambah pengadaan
if (isset($_POST['tambah_pengadaan'])) {

    $no = $_POST['no'];
    $no_nde = $_POST['no_nde'];
    $perihal = $_POST['perihal'];
    $tanggal = $_POST['tanggal'];
    $due = $_POST['due'];
    $pengirim = $_POST['pengirim'];
    $pekerjaan = $_POST['pekerjaan'];
    $umur = $_POST['umur'];
    $penerima = $_POST['penerima'];
    $area = $_POST['area'];
    $paket = $_POST['paket'];
    $kegiatan = $_POST['kegiatan'];
    $nilai = $_POST['nilai'];
    $no_pr = $_POST['no_pr'];
    $tgl_pr = $_POST['tgl_pr'];
    $survei = $_POST['survei'];
    $l1 = $_POST['l1'];
    $l3 = $_POST['l3'];
    $boq = $_POST['boq'];
    $kmz = $_POST['kmz'];
    $asb_draw = $_POST['asb_draw'];
    $status = $_POST['status'];
    $no_sp = $_POST['no_sp'];
    $tgl_penetapan = $_POST['tgl_penetapan'];
    $srt_kesanggupan = $_POST['srt_kesanggupan'];
    $mitra = $_POST['mitra'];
    $no_po = $_POST['no_po'];
    $tgl_po = $_POST['tgl_po'];
    $baut = $_POST['baut'];
    $ft = $_POST['ft'];
    $bast1 = $_POST['bast1'];
    $id_sis = $_POST['id_sis'];
    $kendala = $_POST['kendala'];
    $keterangan = $_POST['keterangan'];
    $proaktif = $_POST['proaktif'];
    $ket_proaktif = $_POST['ket_proaktif'];

    print_r($no);
//    mysql_query("INSERT INTO rekapitulasi
//        (K_NO,K_NO_NDE,K_PERIHAL, K_TANGGAL, K_UMUR, K_DUE_DATE, K_PENGIRIM, K_PEKERJAAN, K_PENERIMA, K_AREA_WITEL, K_PAKET, K_KEGIATAN, K_NILAI, K_NO_PR, K_TGL_PR, K_SURVEI
//         K_L1, K_L3, K_BOQ, K_KMZ, K_ASB_DRAW, K_STATUS, K_NO_SP, K_TGL_PENETAPAN, K_SURAT_KESANGGUPAN, K_MITRA, K_NO_PO, K_TGL_PO, 
//         K_BAUT, K_FT, K_BAST1, K_ID_SISTEM, K_KENDALA, K_KETERANGAN, K_PROACTIVE, K_KET_PROACTIVE)
//        VALUES ('$no','$no_nde','$perihal',$tanggal, $umur, $due, $pengirim, $pekerjaan, $penerima
//            ,$area ,$paket, $kegiatan, $nilai, $no_pr, $tgl_pr, $survei, $l1, $l3, $boq, $kmz, $asb_draw, $status, $no_sp, $tgl_penetapan
//            ,$srt_kesanggupan, $mitra, $no_po, $tgl_po, $baut,$ft, $bast1, $id_sis, $kendala, $keterangan, $proaktif, $ket_proaktif)");
//    
    mysql_query("INSERT INTO `rekapitulasi`(`K_NO`, `K_NO_NDE`, `K_PERIHAL`, `K_TANGGAL`, `K_UMUR`, `K_DUE_DATE`, 
        `K_PENGIRIM`, `K_PEKERJAAN`, `K_PENERIMA`, `K_AREA_WITEL`, `K_PAKET`, `K_KEGIATAN`, `K_NILAI`, `K_NO_PR`, 
        `K_TGL_PR`, `K_SURVEI`, `K_L1`, `K_L3`, `K_BOQ`, `K_KMZ`, `K_ASB_DRAW`, `K_STATUS`, `K_NO_SP`, `K_TGL_PENETAPAN`, 
        `K_SURAT_KESANGGUPAN`, `K_MITRA`, `K_NO_PO`, `K_TGL_PO`, `K_BAUT`, `K_FT`, `K_BAST1`, `K_ID_SISTEM`, `K_KENDALA`, 
        `K_KETERANGAN`, `K_PROACTIVE`, `K_KET_PROACTIVE`) VALUES ('$no','$no_nde','$perihal','$tanggal','$umur','$due','$pengirim',
        '$pekerjaan','$penerima','$area','$paket','$kegiatan','$nilai','$no_pr','$tgl_pr','$survei','$l1',
        '$l3','$boq','$kmz','$asb_draw','$status','$no_sp','$tgl_penetapan','$srt_kesanggupan','$mitra','$no_po',
        '$tgl_po','$baut','$ft','$bast1','$id_sis','$kendala','$keterangan','$proaktif','$ket_proaktif')");

    unset($_POST['tambah_pengadaan']);
    header("location:table_pengadaan.php");
}

//update pengadaan
//update pengadaan step1
if (isset($_POST['edit_pengadaan1'])) {
    $id = $_GET['id_pengadaan1'];
    $no2 = $_GET['no'];
    $nde2 = $_GET['nde'];
    $perihal2 = $_GET['perihal'];
    $tanggal2 = $_GET['tanggal'];
    print_r($id);
    print_r($no2);
    print_r($nde2);
    print_r($perihal2);
    print_r($tanggal2);
//    mysql_query("UPDATE `user` SET `K_USERNAME`='$username',`K_PASSWORD`='$password',`K_HAK_AKSES`='$hak' WHERE `K_ID_USER`=$iduser");
//
//    unset($_POST['edit_user']);
//    header("location:table_user.php");
}
?>
