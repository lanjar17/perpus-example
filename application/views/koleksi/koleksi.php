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
    <?php if ($this->session->flashdata('pesan') != '') { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo $this->session->flashdata('pesan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <div class="container">
        <div class="card-header">
            <h5 class="card-title">Daftar Koleksi Perpustakaan</h5>
        </div>
        <div class="card-body">
            <a href="koleksi/add" class="btn btn-success">Tambah Data</a>

            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nama Buku</th>
                    <th>Penerbit</th>
                    <th>Penulis</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($daftar as $item) { ?>

                    <tr>
                        <td><?php echo $item['id_koleksi'] ?></td>
                        <td><?php echo $item['nama'] ?></td>
                        <td><?php echo $item['penerbit'] ?></td>
                        <td><?php echo $item['penulis'] ?></td>

                        <td>
                            <a href="koleksi/detail/<?php echo $item['id_koleksi'] ?>" class="btn btn-info" type="button">Detail</a>
                            <a href="koleksi/edit/<?php echo $item['id_koleksi'] ?>" class="btn btn-warning" type="button">Edit</a>
                            <a onclick="konfirmasi(<?php echo $item['id_koleksi'] ?>)" class="btn btn-danger" type="button">Hapus</a>
                            <!-- <a class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</a> -->
                        </td>
                    </tr>

                <?php } ?>
            </table>
        </div>
        <!-- <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModal">Konfirmasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah yakin ingin menghapus?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href=" koleksi/delete/<?php echo $item['id_koleksi'] ?>" type=" button" class="btn btn-primary">Hapus Data</a>
                    </div>
                </div>
            </div>
        </div> -->
        <?php $this->load->view('layout/footer'); ?>

        <script>
            function konfirmasi(id_koleksi){
                let text = "Apakah yakin ingin menghapus?";
                if(confirm(text) == true){
                    window.location.href = 'koleksi/delete/' + id_koleksi;
                }
            }
        </script>

</body>

</html>