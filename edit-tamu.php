<?php
$id_tamu = $_GET['id_tamu'];
include 'koneksi.php';
$sql = "SELECT * FROM tamu WHERE id_tamu='$id_tamu'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Halaman Edit Data SPP.</h5>
<a href="?url=tamu" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-edit-tamu&id_tamu=<?= $id_tamu; ?>">
    <div class="form-group mb-2">
        <label>Nama</label>
        <input value="<?= $data['username'] ?>" type="text" name="username" maxlength="100" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Email</label>
        <input value="<?= $data['email'] ?>" type="text" name="email" maxlength="100" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Asal</label>
        <input value="<?= $data['asal'] ?>" type="text" name="asal" maxlength="100" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Pekerjaan</label>
        <input value="<?= $data['pekerjaan'] ?>" type="text" name="pekerjaan" maxlength="100" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Keperluan</label>
        <input value="<?= $data['keperluan'] ?>" type="text" name="keperluan" maxlength="500" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>