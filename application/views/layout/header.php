<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?php echo base_url('/assets/image/ts.png') ?>" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Tiga Serangkai
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('dasboard') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('user') ?>">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('koleksi') ?>">Koleksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('peminjaman') ?>">Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login/logout">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>