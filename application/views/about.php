<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Igniter</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />

</head>

<body>
    <?php $this->load->view('layout/header') ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Tentang Tiga Serangkai</h1>
            </div>
            <div class="text-center">
                <div class="card-body">
                    <img src="<?php echo base_url('/assets/image/tiga.jpg') ?>" class="img-fluid">
                </div>
            </div>



        </div>
    </div>
    <?php $this->load->view('layout/footer') ?>
</body>

</html>