<?php
date_default_timezone_set('Asia/Jakarta');
include "./../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Penyewa</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base_url ?>fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= $base_url ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= $base_url ?>css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?= $base_url ?>css/aos.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= $base_url ?>css/style.css">
    <link rel="stylesheet" href="<?= $base_url ?>font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?= $base_url ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>penyewa/inc/chatstyle.css">
    <style>
        body {
            background-image: url("../images/penyewa.png");
            background-size: cover;
        }


        .nav-item>a {
            color: #fff;
        }
    </style>
</head>

<body id="top">
    <header>
        <div class="profile-page sidebar-collapse">
            <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="400">
                <div class="container">
                    <div class="navbar-translate"><a class="navbar-brand" href="index.php" rel="tooltip">kembali</a>
                        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link smooth-scroll" href="../profilpenyewa.php">Profil Saya</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link smooth-scroll" href="../index1.php">log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="page-content" style="padding-bottom: 200px;">