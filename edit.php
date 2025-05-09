<?php 
include 'layouts/header.php';
include 'koneksi.php';

// Ambil data pasien berdasarkan ID
$id = $_GET['id'] ?? null;

if (!$id) {
    echo "ID pasien tidak ditemukan.";
    exit;
}

$query = "SELECT * FROM pasien WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$pasien = mysqli_fetch_assoc($result);

if (!$pasien) {
    echo "Pasien tidak ditemukan.";
    exit;
}
?>

<section class="p-4 ml-5 mr-5 w-50">
    <form action="function.php" method="POST">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="<?= $pasien['id'] ?>">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?= htmlspecialchars($pasien['nama']) ?>" placeholder="Masukkan nama...">
        </div>

        <div class="mb-3">
            <label for="umur" class="form-label">Umur Pasien</label>
            <input type="number" class="form-control" name="umur" id="umur" value="<?= htmlspecialchars($pasien['umur']) ?>" placeholder="Masukkan umur...">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Pasien</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= htmlspecialchars($pasien['alamat']) ?>" placeholder="Masukkan alamat...">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</section>

<?php include 'layouts/footer.php'; ?>
