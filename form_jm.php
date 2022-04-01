<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Jemaat</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
        Form Tambah Data Jemaat
        </div>
        <div class="card-body">
            <form method="post" action="action.php">
                <div class="form-group">
                    <label>Nama Jemaat </label>
                    <input type="text" name="nama_jemaat" class="form-control" placeholder="Input Nama Jemaat" required>
                </div>
                <div class="form-group">
                    <label>Alamat Jemaat </label>
                    <input type="text"  name="alamat_jemaat" class="form-control" placeholder="Input Alamat Jemaat" required>
                </div>
                <div class="form-group">
                    <label>Asal Gereja </label>
                    <input type="text" name="asal_greja" class="form-control" placeholder="Input Asal Gereja" required>
                </div>
                <div class="form-group">
                    <label>Status Jemaat </label>
                    <select class="form-control" name="status_jemaat">
                        <option></option>
                        <option value="Aktif">Aktif</option>
                        <option value="Pasif">Pasif</option>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="kirim">Kirim</button>
                <button type="reset" class="btn btn-danger" name="kosong">Kosongkan</button>
                
            </form>
        </div>
    </div>


</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>