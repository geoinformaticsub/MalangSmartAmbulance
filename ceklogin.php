<?php
include('koneksi.php');
 
session_start();
 
//tangkap data dari form home
$username = $_POST['username'];
$password = $_POST['password'];
 
//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
 
//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
    //kalau username dan password kosong
    header('location:index.php?error=1');
    break;
} else if (empty($username)) {
    //kalau username saja yang kosong
    header('location:index.php?error=2');
    break;
} else if (empty($password)) {
    //kalau password saja yang kosong
    header('location:index.php?error=3');
    break;
}
 
$q = mysql_query("select * from user where USERNAME='$username' and PASSWORD='$password'");
 
if (mysql_num_rows($q) == 1) {
    if($username == 'admin'){
    //kalau username dan password sudah terdaftar di database
    //buat session dengan nama username dengan isi nama user yang home
        $_SESSION['username'] = $username;
     
    //redirect ke halaman home
    header('location:admin/home.php');
    }
    else {
    //kalau username dan password sudah terdaftar di database
    //buat session dengan nama username dengan isi nama user yang home
        $_SESSION['username'] = $username;
     
    //redirect ke halaman home
    header('location:home_user.php');
    }
    
} else {
    //kalau username ataupun password tidak terdaftar di database
    header('location:index.php?error=4');
}
?>