<?php 
// Koneksi ke database
// include '../config/configuration.php';

// Menyisipkan file functions.php agar function yang kita buat dapat dipakai dihalaman ini
require 'function_statistic.php';

/**
 * Test
 * echo ip_user();
 * echo "<br/>";
 * echo browser_user();
 * echo "<br/>";
 * echo os_user();
 */

// rekam data user yang sudah mengakses website kita
$ip      = ip_user();
$browser = browser_user();
$os      = os_user();
// untuk tes hilangkan comment dibawah ini
// unset($_COOKIE['VISITOR']);
// Check bila sebelumnya data pengunjung sudah terrekam
if (! isset($_COOKIE['VISITOR'])) {
    // Masa akan direkam kembali
    // Tujuan untuk menghindari merekam pengunjung yang sama dihari yang sama.
    // Cookie akan disimpan selama 24 jam
    $duration = time()+60*60*24;
    // simpan kedalam cookie browser
    setcookie('VISITOR',$browser,$duration);
    // current time
    $dateTime = date('Y-m-d H:i:s');
    // SQL Command atau perintah SQL INSERT
    $sql = "INSERT INTO statistic (ip_address, os, browser, created_at) VALUES ('$ip', '$os', '$browser', '$dateTime')";
    // variabel { $db } adalah perwakilan dari koneksi database lihat config.php
    $query = $conn->query($sql);
}
?>