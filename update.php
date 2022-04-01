<?php
include "koneksi.php";
$id = $_POST['id_jemaat'];
$nama = $_POST['nama_jemaat'];
$alamat = $_POST['alamat_jemaat'];
$asal = $_POST['asal_greja'];
$statusj = $_POST['status_jemaat'];

$sql = "UPDATE tbl_145 set nama_jemaat = '$nama', alamat_jemaat='$alamat', asal_greja='$asal', status_jemaat='$statusj' where id_jemaat=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "<script>
    alert('Eksekusi Update data Jemaat GAGAL!');
    document.location='data_jm.php';
    </script>";
}else{
    echo "<script>
    alert('Eksekusi update data Jemaat BERHASIL!');
    document.location='data_jm.php';
    </script>";
}

?>