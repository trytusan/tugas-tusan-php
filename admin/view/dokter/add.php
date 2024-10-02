<h4 class="mb-4">Tambah Data</h4>
<hr>
<form action="index.php?mod=dokter&page=save" method="POST" class="mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama">Nama Staff</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama staff">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="jabatan">Jabatan Staff</label>
                <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Masukkan jabatan staff">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="ket_staff">Keterangan</label>
                <select id="ket_staff" name="ket_staff" class="form-control">
                    <option value="">Pilih Keterangan</option>
                    <?php if ($keterangan != null) {
                        foreach ($keterangan as $row) { ?>
                            <option value="<?= $row['keterangan_staff']; ?>"><?= $row['keterangan_staff']; ?></option>
                        <?php }
                    } ?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
