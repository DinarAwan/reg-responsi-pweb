<?php
session_start();
unset($_SESSION['pengguna']); // Hapus seluruh data pengguna
header('Location: header.php'); // Kembali ke form registrasi
exit;
