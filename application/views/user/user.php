<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
</head>

<body>
    <?php $this->load->view('layout/header'); ?>
    <div class="container">
        <div class="card-header">
            <h5 class="card-title">Daftar Pengguna</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title">Tabel User</h5>
            <a href="user/add" class="btn btn-success">Tambah User</a>

            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($list as $item) { ?>

                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['nama'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['telepon'] ?></td>
                        <td>
                            <a href="user/detail/<?php echo $item['id'] ?>" class="btn btn-info" type="button">Detail</a>
                            <a href="koleksi/edit/<?php echo $item['id'] ?>" class="btn btn-warning" type="button">Edit</a>
                            <a onclick="konfirm(<?php echo $item['id'] ?>)" class="btn btn-danger" type="button">Hapus</a>
                        </td>
                    </tr>

                <?php } ?>
            </table>
        </div>

        <?php $this->load->view('layout/footer'); ?>

        <script>
            function konfirm(id) {
                let text = "Apakah yakin ingin menghapus?";
                if (confirm(text) == true) {
                    window.location.href = 'user/delete/' + id;
                }
            }
        </script>

</body>

</html>