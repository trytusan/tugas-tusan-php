<h4 class="mb-4">Edit Data</h4> 
<form action="index.php?mod=dokter&page=update" method="POST" class="mt-4"> 
    <input type="hidden" name="id_staff" value="<?= $_POST['id_staff']; ?>">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Nama Staff</label>
                <input type="text" name="nama" class="form-control" value="<?= $_POST['nama']; ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Jabatan Staff</label>
                <input type="text" name="jabatan" class="form-control" value="<?= $_POST['jabatan']; ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Keterangan</label>
                <select name="ket_staff" class="form-control">
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

    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
