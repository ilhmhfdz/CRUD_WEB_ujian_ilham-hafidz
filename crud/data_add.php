<!DOCTYPE html>
<html>

<head>
    <!-- TABLE STYLES-->
    <link href="css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>

<style>
    .atas {
        background-color: #06283D;
        padding: 20px;
    }

    .atas h2 {
        color: white;
    }

    .gambar {
        text-align: center;
        padding-top: 20px;
    }
</style>

<body style="background-color:#DFF6FF;">


    <div class="atas">
        <h2 style="text-align: center;">
            TAMBAH DATA ANDA DISINI
        </h2>
    </div>

    <div class="gambar">


    </div>


    <body>
        <div class="col-md-8 col-md-offset-2">
            <br><br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="alert alert-warning">
                        <a href="index.php" class="btn btn-danger"><i class="glyphicon glyphicon-file"></i> Lihat Data</a>
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post" action="data_add_s.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Angkatan</label>
                            <input class="form-control" name='angkatan' placeholder="Ini contoh input text dengan placeholder" required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" name='nama' required>
                        </div>
                        <div class="form-group">
                            <label>NPM</label>
                            <input class="form-control" name='nim' required>
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <input class="form-control" name='jurusan' required>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        <button type="reset" class="btn btn-default"><i class="fa fa-file-text"></i> Bersih</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/jquery-1.10.2.js"></script>
        <!-- Bootstrap Js -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.js"></script>
        <script src="js/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').dataTable();
            });
        </script>

    </body>

</html>