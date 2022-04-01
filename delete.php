<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM tbl_145 WHERE id_jemaat=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "<script>
    alert('Delete data Jemaat GAGAL!');
    document.location='data_jm.php';
    </script>";
}else{
    echo "<script>
    alert('Delete data Jemaat BERHASIL!');
    document.location='data_jm.php';
    </script>";
}

?>