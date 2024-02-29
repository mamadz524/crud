<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "biodata");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row =  mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;

}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM sederhana WHERE id = $id");
    return mysqli_affected_rows($conn);
}


?>