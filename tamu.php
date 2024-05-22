<h5>List Tamu</h5>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Nama</td>
        <td>Email</td>
        <td>Asal</td>
        <td>Pekerjaan</td>
        <td>Keperluan</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php

        include 'koneksi.php';
        $no = 1;
        $sql = "SELECT * FROM tamu ORDER BY id_tamu DESC";
        $query = mysqli_query($koneksi, $sql);
        foreach ($query as $data) { ?>
            <tr> 
                <td><?= $no++; ?></td>
                <td><?= $data['username'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['asal'] ?></td>
                <td><?= $data['pekerjaan'] ?></td>
                <td><?= $data['keperluan'] ?></td>
                <td>
                    <a href="?url=edit-tamu&id_tamu=<?= $data['id_tamu']  ?>" class="btn btn-primary">EDIT</a>
                </td>
                <td>
                    <a onclick="return confirm('Yakin Ingin Menghapus Kamar?')"
                     href="?url=hapus-tamu&id_tamu=<?= $data['id_tamu']  ?>" class="btn btn-danger">HAPUS</a>
                </td>
            </tr>
        <?php 
        } ?>
    
</table>