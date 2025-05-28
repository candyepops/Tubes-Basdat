<?php 
include 'koneksi.php';

// ambil total data
$jumlahHewan               = $koneksi->query(query: "SELECT COUNT(*) FROM hewan_peliharaan")->fetch_row()[0];
$jumlahPelanggan           = $koneksi->query("SELECT COUNT(*) FROM pelanggan")->fetch_row()[0];
$jumlahPegawai             = $koneksi->query("SELECT COUNT(*) FROM pegawai")->fetch_row()[0];
$jumlahLayanan             = $koneksi->query("SELECT COUNT(*) FROM layanan")->fetch_row()[0];
$jumlahProduk              = $koneksi->query("SELECT COUNT(*) FROM produk")->fetch_row()[0];
$jumlahSupplier            = $koneksi->query(query: "SELECT COUNT(*) FROM supplier")->fetch_row()[0];
$jumlahPembayaran          = $koneksi->query(query: "SELECT COUNT(*) FROM pembayaran")->fetch_row()[0];
$jumlahTransaksiLayanan    = $koneksi->query(query: "SELECT COUNT(*) FROM transaksi_layanan")->fetch_row()[0];
$jumlahDetailPenjualan     = $koneksi->query(query: "SELECT COUNT(*) FROM detail_penjualan")->fetch_row()[0];



?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin Petshop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f6f8;
      font-family: 'Segoe UI', sans-serif;
    }
    .dashboard-container {
      max-width: 1200px;
      margin: 50px auto;
      padding: 20px;
    }
    .card-box {
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: transform 0.2s ease;
    }
    .card-box:hover {
      transform: translateY(-5px);
    }
    .card-title {
      font-weight: 600;
    }
    .jumlah {
      font-size: 1.5rem;
      font-weight: bold;
      color: #0d6efd;
    }
  </style>
</head>
<body>

<div class="dashboard-container">
  <h4 class="mb-4 fw-bold">Dashboard Admin Petshop 🐾</h4>

  <div class="row g-4">
    <!-- Card -->
    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="card-title">Hewan Peliharaan</h5>
        <p class="jumlah"><?= $jumlahHewan ?></p>
        <a href="hewan/index.php" class="btn btn-sm btn-outline-primary">Lihat</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="card-title">Pelanggan</h5>
        <p class="jumlah"><?= $jumlahPelanggan ?></p>
        <a href="pelanggan/index.php" class="btn btn-sm btn-outline-primary">Lihat</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="card-title">Pegawai</h5>
        <p class="jumlah"><?= $jumlahPegawai ?></p>
        <a href="pegawai/index.php" class="btn btn-sm btn-outline-primary">Lihat</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="card-title">Layanan</h5>
        <p class="jumlah"><?= $jumlahLayanan ?></p>
        <a href="layanan/index.php" class="btn btn-sm btn-outline-primary">Lihat</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="card-title">Produk</h5>
        <p class="jumlah"><?= $jumlahProduk ?></p>
        <a href="produk/index.php" class="btn btn-sm btn-outline-primary">Lihat</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="card-title">Supplier</h5>
        <p class="jumlah"><?= $jumlahSupplier ?></p>
        <a href="supplier/index.php" class="btn btn-sm btn-outline-primary">Lihat</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="card-title">Pembayaran</h5>
        <p class="jumlah"><?= $jumlahPembayaran ?></p>
        <a href="pembayaran/index.php" class="btn btn-sm btn-outline-primary">Lihat</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="card-title">Transaksi Layanan</h5>
        <p class="jumlah"><?= $jumlahTransaksiLayanan ?></p>
        <a href="transaksi_layanan/index.php" class="btn btn-sm btn-outline-primary">Lihat</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-box p-3">
        <h5 class="card-title">Detail Penjualan</h5>
        <p class="jumlah"><?= $jumlahDetailPenjualan ?></p>
        <a href="detail_penjualan/index.php" class="btn btn-sm btn-outline-primary">Lihat</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>

