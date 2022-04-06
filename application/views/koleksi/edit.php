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
            <h5 class="card-title" align="center">Edit Data</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <form action="<?php echo base_url('koleksi/update/'.$detail['id_koleksi']) ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="Judul" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judul" aria-describedby="bantuan" name="nama" value="<?php echo $detail['nama'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $detail['penerbit'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $detail['penulis'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label">Cover</label>
                            <input type="file" name="cover" class="form-control" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>



            <?php $this->load->view('layout/footer'); ?>


</body>

</html>