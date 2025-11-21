<?php
// DATA PRODUK TANPA DATABASE
$produk = [
    ["nama" => "Kopi Arabika", "harga" => 35000],
    ["nama" => "Kopi Robusta", "harga" => 28000],
    ["nama" => "Kopi Liberica", "harga" => 45000],
];

// ROUTING SEDERHANA
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situs Kopi Kita</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            margin: 0;
            padding: 0;
        }
        header {
            background: brown;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav {
            background: #333;
            padding: 10px;
        }
        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            padding: 20px;
        }
        .produk {
            background: white;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<header>
    <h1>Kopi Kita</h1>
    <p>Selamat datang di Website Kopi Kita</p>
</header>

<nav>
    <a href="index.php?page=home">Home</a>
    <a href="index.php?page=produk">Produk</a>
    <a href="index.php?page=about">Tentang Kami</a>
</nav>

<div class="container">
    <?php
    // ========== HALAMAN HOME ==========
    if ($page == 'home') {
        echo "<h2>Home</h2>";
        echo "<p>Ini adalah halaman utama website kopi tanpa database.</p>";

    // ========== HALAMAN PRODUK ==========
    } elseif ($page == 'produk') {
        echo "<h2>Daftar Produk Kopi</h2>";

        foreach ($produk as $p) {
            echo "<div class='produk'>
                    <h3>{$p['nama']}</h3>
                    <p>Harga: Rp " . number_format($p['harga'], 0, ',', '.') . "</p>
                  </div>";
        }

    // ========== HALAMAN ABOUT ==========
    } elseif ($page == 'about') {
        echo "<h2>Tentang Kami</h2>";
        echo "<p>Kopi Kita adalah situs sederhana untuk menampilkan produk kopi tanpa database.</p>";
    
    // ========== HALAMAN 404 ==========
    } else {
        echo "<h2>404 - Halaman tidak ditemukan</h2>";
    }
    ?>
</div>

</body>
</html>
