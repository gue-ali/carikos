<?php
date_default_timezone_set('Asia/Jakarta');
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Pemilik Kos</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= $base_url ?>css/aos.css" rel="stylesheet">
    <link href="<?= $base_url ?>styles/main.css" rel="stylesheet">
    <link href="<?= $base_url ?>css/bootstrap.min.css" rel="stylesheet">
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
            <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
                <div class="container">
                    <div class="navbar-translate"><a style="color: #91b029 ;" class="navbar-brand" href="../profilpemilik.php" rel="tooltip">kembali</a>
                        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
                    </div>
                   
                </div>
            </nav>
        </div>
    </header>
    <div class="page-content">