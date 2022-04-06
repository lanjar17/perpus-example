<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail User</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
</head>

<body>
    <?php $this->load->view('layout/header'); ?>
    <div class="container">
        <div class="card-header">
            <h5 class="card-title">Detail User</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title"><?php echo $detail['nama'] ?></h4>
                    <h6>Email : <?php echo $detail['email'] ?></h6>
                    <h6>Alamat : <?php echo $detail['alamat'] ?></h6>
                    <h6>Telepon : <?php echo $detail['telepon'] ?></h6>


                </div>
                <div class="col-4">
                    <img height="200px" src="<?php echo base_url("assets/image/ava/") . $detail['avatar'] ?>">
                </div>
            </div>



            <?php $this->load->view('layout/footer'); ?>


</body>

</html>