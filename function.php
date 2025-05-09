<?php
include "koneksi.php";

// INSERT
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'insert') {
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $alamat = $_POST["alamat"];

    if (insertPasien($koneksi, $nama, $umur, $alamat)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Data gagal disimpan";
    }
}

// EDIT
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'edit') {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $alamat = $_POST["alamat"];

    if (updatePasien($koneksi, $id, $nama, $umur, $alamat)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Data gagal diubah";
    }
}

// DELETE
if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['action'] == 'delete') {
    $id = $_GET["id"];

    if (deletePasien($koneksi, $id)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Data gagal dihapus";
    }
}

// FUNGSI
function insertPasien($koneksi, $nama, $umur, $alamat) {
    $query = "INSERT INTO pasien (nama, umur, alamat) VALUES ('$nama', '$umur', '$alamat')";
    return mysqli_query($koneksi, $query);
}

function updatePasien($koneksi, $id, $nama, $umur, $alamat) {
    $query = "UPDATE pasien SET nama='$nama', umur='$umur', alamat='$alamat' WHERE id=$id";
    return mysqli_query($koneksi, $query);
}

function deletePasien($koneksi, $id) {
    $query = "DELETE FROM pasien WHERE id=$id";
    return mysqli_query($koneksi, $query);
}
?>
