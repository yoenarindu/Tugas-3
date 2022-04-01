<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Jemaat</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php
 include 'koneksi.php';
 $id=$_GET['id'];
$sql = "SELECT * FROM tbl_145 where id_jemaat=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}

?>

<?php
while ($row = mysqli_fetch_array($hasil))
{
?>

<div class="container">
<h1 class="text-center">Form Edit Jemaat GKJW Jawa Timur</h1>
    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
        Form Edit Data Jemaat
        </div>
        <div class="card-body">
            <form method="post" action="update.php">
                <div>
                <input type="hidden" name="id_jemaat" value="<?php echo $row['id_jemaat']?>">
                </div>
                <div class="form-group">
                    <label>Nama Jemaat </label>
                    <input type="text" name="nama_jemaat" class="form-control" placeholder="Input Nama Jemaat"  value="<?php echo $row['nama_jemaat']?>" required>
                </div>
                <div class="form-group">
                    <label>Alamat Jemaat </label>
                    <input type="text"  name="alamat_jemaat" class="form-control" placeholder="Input Alamat Jemaat" value="<?php echo $row['alamat_jemaat']?>" required>
                </div>
                <div class="form-group">
                    <label>Asal Gereja </label>
                    <input type="text" name="asal_greja" class="form-control" placeholder="Input Asal Gereja" value="<?php echo $row['asal_greja']?>" required>
                </div>
                <div class="form-group">
                    <label>Status Jemaat </label>
                    <select class="form-control" name="status_jemaat" value="<?php echo $row['status_jemaat']?>">
                        <option></option>
                        <option value="Aktif">Aktif</option>
                        <option value="Pasif">Pasif</option>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="kirim">Update</button>
                
            </form>
        </div>
    </div>
</div>
<?php }?>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>