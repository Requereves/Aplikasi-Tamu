<h5>Halaman Tamu</h5>
<hr>
<form method="post" action="?url=proses-tambah-tamu">
    <div class="form-group mb-2">
        <label>Nama</label>
        <input type="text" name="username" maxlength="100" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Email</label>
        <input type="text" name="email" maxlength="100" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Asal</label>
        <input type="text" name="asal" maxlength="100" class="form-control" required>
    </div>  
    <div class="form-group mb-2">
        <label>Pekerjaan</label>
        <input type="text" name="pekerjaan" maxlength="100" class="form-control" required>
    </div>  
    <div class="form-group mb-2">
        <label>Keperluan</label>
        <input type="text" name="keperluan" maxlength="500" class="form-control" required>
    </div>  
    <div class="form-group">
            <button type="submit" class="btn btn-success">SIMPAN</button>
            <button type="reset" class="btn btn-warning">RESET</button>
    </div>
</form>