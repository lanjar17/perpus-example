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
    <?php $this->load->view('layout/header') ?>;
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Dasboard</h1>
            </div>

            <div class="card-body">
                <h2>Hello <?php echo $this->session->userdata('nama') ?></h2>
                <h3>Alamat <?php echo $alamat?> </h3>
                <h3>Email <?php echo $email?> </h3>

                <h3>Hobi</h3>
                <?php foreach($hobi as $minat) {?>
                    <ul>
                        <li><?php echo $minat ?></li>
                    </ul>
                <?php }?>
            </div>
        </div>
    </div>

    <?php $this->load->view('layout/footer') ?>
</body>

</html>