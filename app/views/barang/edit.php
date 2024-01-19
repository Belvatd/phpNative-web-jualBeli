<!-- Begin page content -->
<main role="main" class="container">
    <div class="clearfix mb-3 mt-3">
        <h1 class="float-left">Edit Barang</h1>
        <a href="<?= URL . 'barang' ?>" class="btn btn-secondary float-right">Kembali</a>
    </div>
    <hr />
    <form class="form-horizontal" action="<?php echo URL . 'barang/proses_edit'; ?>" method="POST">
        <input type="hidden" name="idBarang"
            value="<?php if (isset($data_barang->idBarang))
                echo $data_barang->idBarang; ?>" />
        <div class="form-group">
            <label for="idBarang" class="col-sm-2 control-label">Id Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="idBarang" name="idBarang" placeholder="Masukan id barang"
                    value="<?php if (isset($data_barang->idBarang))
                        echo $data_barang->idBarang; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="namaBarang" class="col-sm-2 control-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="namaBarang" name="namaBarang"
                    placeholder="Masukan nama barang"
                    value="<?php if (isset($data_barang->namaBarang))
                        echo $data_barang->namaBarang; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukan keterangan"
                    required><?php if (isset($data_barang->keterangan))
                        echo $data_barang->keterangan; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="satuan" class="col-sm-2 control-label">Satuan</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="satuan" name="satuan" placeholder="Masukan satuan"
                    value="<?php if (isset($data_barang->satuan))
                        echo (int) $data_barang->satuan; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="idPengguna" class="col-sm-2 control-label">Nama Pengguna</label>
            <div class="col-sm-10">
                <select class="form-control" id="idPengguna" name="idPengguna" required>
                    <option value="" selected>Pilih Pengguna</option>
                    <?php foreach ($data_pengguna as $pengguna) { ?>
                        <option value="<?php if (isset($pengguna->idPengguna))
                            echo $pengguna->idPengguna; ?>" <?php if (isset($data_barang->idPengguna) && $data_barang->idPengguna == $pengguna->idPengguna)
                                  echo 'selected'; ?>><?php if (isset($pengguna->namaPengguna))
                                        echo $pengguna->namaPengguna; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary float-right" name="edit_barang">Edit barang</button>
            </div>
        </div>
    </form>
</main>