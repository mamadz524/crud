<?php

// Pastikan koneksi DTBS 
require_once 'functions.php';

$id = $_GET["id"];

// Query untuk menghapus data berdasarkan ID
$query = "DELETE FROM sederhana WHERE id = $id";

// query dan periksa hasilnya
if (mysqli_query($conn, $query)) {
    if (mysqli_affected_rows($conn) > 0) {
        echo "
            <script>
                alert('data berhasil dihapus!');
                window.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data tidak ditemukan!');
                window.location.href = 'index.php';
            </script>
        ";
    }
} else {
    echo "
        <script>
            alert('Gagal menghapus data! Hubungi administrator.');
            window.location.href = 'index.php';
        </script>
    ";
}

?>
