<?php

$servername = "localhost";
$username = "mydpmmsc_root";
$password = "ritzanalytics";
$dbname = "mydpmmsc_DPMM";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Sambungan gagal: " . mysqli_connect_error());
}

// Escape user inputs for security
$namaentiti = mysqli_real_escape_string($conn, $_POST['namaentiti']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamatniaga']);
$poskod = mysqli_real_escape_string($conn, $_POST['poskod']);
$bandar = mysqli_real_escape_string($conn, $_POST['bandar']);
$negeri = mysqli_real_escape_string($conn, $_POST['negeri']);
$nopendaftaran = mysqli_real_escape_string($conn, $_POST['nopendaftaran']);

$warga = $_POST['ya'];
$agama = $_POST['ya1'];
$ic = mysqli_real_escape_string($conn, $_POST['ic']);
$username = mysqli_real_escape_string($conn, $_POST['namapemohon']); 
$pekerjaan = mysqli_real_escape_string($conn, $_POST['pekerjaan']); 
$email = $_POST['email'];
$phone = $_POST['telefon'];
$negeri1 = mysqli_real_escape_string($conn, $_POST['negeri1']);


//Bahagian Pertama Lampiran Dokumen Sokongan
$GambarPassportFile = mysqli_real_escape_string($conn, $_POST['GambarPassportFile']);

$SijilPendaftaranPerniagaanFile = mysqli_real_escape_string($conn, $_POST['SijilPendaftaranPerniagaanFile']);

// attempt insert query e	xecution
$sql = "INSERT INTO ahliKelab (nama, warganegara, agama, ic, alamat, poskod, bandar, negeri, kerja, namaSya, noSya, emel, telefon, gambarPass, sijilSya, negeridpmm, waktuTamat, status) VALUES 
('$username','$warga','$agama','$ic','$alamat','$poskod','$bandar','$negeri','$pekerjaan','$namaentiti','$nopendaftaran','$email','$phone','$GambarPassportFile','$SijilPendaftaranPerniagaanFile','$negeri1',now() + interval 3 year - interval 1 day, 'AKTIF');";



if(mysqli_query($conn, $sql)){
    echo '<script>alert("Pendaftaran Sebagai Ahli Kelab DPMM Berjaya! Selamat Datang!")</script>';
	echo '<script>window.location.href = "TestSijil.php";</script>';


} else{
    echo "RALAT: Tidak berjaya $sql. " . mysqli_error($conn);
}

// close connection

mysqli_close($conn);
?>
