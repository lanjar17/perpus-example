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
            <h5 class="card-title">Detail buku</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title">Judul <?php echo $detail['nama']?></h4>
                    <h6>Penulis : <?php echo $detail['penulis']?></h6>
                    <h6>Penerbit : <?php echo $detail['penerbit']?></h6>

                    
                </div>
                <div class="col-4">
                    <img height="200px" src="<?php echo base_url("assets/image/").$detail['cover']?>">
                </div>
            </div>

            

        <?php $this->load->view('layout/footer'); ?>


</body>

</html>