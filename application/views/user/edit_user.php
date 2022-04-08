<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
</head>

<body>
    <?php $this->load->view('layout/header'); ?>
    <div class="container">
        <div class="card-header">
            <h5 class="card-title" align="center">Edit User</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <form action="<?php echo base_url('user/update/' . $detail['id']) ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" aria-describedby="bantuan" name="nama" value="<?php echo $detail['nama'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $detail['alamat'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $detail['telepon'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Foto Profil</label>
                            <input type="file" name="avatar" class="form-control" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>



            <?php $this->load->view('layout/footer'); ?>


</body>

</html>