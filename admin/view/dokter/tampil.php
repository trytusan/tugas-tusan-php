<?php
$conn = $con->koneksi();
$sql = "SELECT id_staff, nama, jabatan, ket_staff FROM struktur_pengurus"; 
$result = $conn->query($sql);
?>

<div class="row mb-3">
    <div class="col-md-6">
        <h4>Daftar Staff</h4>
    </div>
    <div class="col-md-6 text-end">
        <a href="index.php?mod=dokter&page=add">
            <button class="btn btn-primary">Add Staff</button>
        </a>
    </div>
</div>

<div class="row">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th class="text-center align-middle">Nama</th>
                <th class="text-center align-middle">Jabatan</th>
                <th class="text-center align-middle">Keterangan</th>
                <th class="text-center align-middle">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result != NULL) {
                $no = 1;
                while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td class="text-center align-middle"><?= $no++; ?></td>
                        <td class="text-center align-middle"><?= $row['nama']; ?></td>
                        <td class="text-center align-middle"><?= $row['jabatan']; ?></td>
                        <td class="text-center align-middle"><?= $row['ket_staff']; ?></td>
                        <td class="text-center align-middle">
                            <div class="btn-group" role="group" aria-label="Aksi">
                                <a href="index.php?mod=dokter&page=edit&id=<?= md5($row['id_staff']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="index.php?mod=dokter&page=delete&id=<?= md5($row['id_staff']) ?>" class="btn btn-danger btn-sm ms-2">Delete</a> <!-- Tambahkan ms-2 untuk jarak -->
                            </div>
                        </td>
                    </tr>
                <?php }
            } ?>
        </tbody>
    </table>
</div>
