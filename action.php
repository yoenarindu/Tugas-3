<?php
include "koneksi.php";

$nama = $_POST['nama_jemaat'];
$alamat = $_POST['alamat_jemaat'];
$asal = $_POST['asal_greja'];
$statusj = $_POST['status_jemaat'];

$sql = "INSERT INTO tbl_145 VALUES(null,'$nama','$alamat','$asal','$statusj')";
$hasil =mysqli_query($koneksi, $sql);

if (!$hasil){
    echo "<script>
    alert('Eksekusi tambah data Jemaat GAGAL!');
    document.location='data_jm.php';
    </script>";
}else{
    echo "<script>
    alert('Eksekusi tambah data Jemaat BERHASIL!');
    document.location='data_jm.php';
    </script>";
}

?>