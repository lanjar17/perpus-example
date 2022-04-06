<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Koleksi</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
</head>

<body>
    <?php $this->load->view('layout/header'); ?>
    <div class="container">
        <div class="card-header">
            <h5 class="card-title" align="center">Tambah User</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <form action="<?php echo base_url('user/insert') ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" aria-describedby="bantuan" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="number" class="form-control" id="telepon" name="telepon">
                        </div>
                        <div class="mb-3">
                            <label for="profil" class="form-label">Foto Profil</label>
                            <input type="file" name="profil" class="form-control" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>



            <?php $this->load->view('layout/footer'); ?>


</body>

</html>