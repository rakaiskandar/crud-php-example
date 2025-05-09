<?php include 'layouts/header.php' ?>

<section class="p-4 ml-5 mr-5 w-50">
    <form action="function.php" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Masukkan nama...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Umur pasien</label>
            <input type="number" class="form-control" name="umur" id="exampleFormControlInput1" placeholder="Masukkan umur...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Alamat pasien</label>
            <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1" placeholder="Masukkan alamat...">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</section>

<?php include 'layouts/footer.php' ?>