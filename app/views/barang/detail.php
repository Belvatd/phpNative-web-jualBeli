<!-- Begin page content -->
<main role="main" class="container">
    <div class="clearfix mb-3 mt-3">
        <h1 class="float-left">Detail Barang</h1>
        <a href="<?=  URL . 'barang' ?>" class="btn btn-secondary float-right">Kembali</a>
    </div>
    <hr />
    <input type="hidden" name="idBarang" value="<?php if (isset($data_barang->idBarang)) echo $data_barang->idBarang; ?>" />
    <div class="form-group">
        <label for="namaBarang" class="col-sm-2 control-label">Nama Barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="namaBarang" name="namaBarang" placeholder="Masukan nama barang" value="<?php if (isset($data_barang->namaBarang)) echo $data_barang->namaBarang; ?>" disabled>
        </div>
    </div>
    <div class="form-group">
        <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukan keterangan" disabled><?php if (isset($data_barang->keterangan)) echo $data_barang->keterangan; ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="satuan" class="col-sm-2 control-label">Satuan</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="satuan" name="satuan" placeholder="Masukan satuan" value="<?php if (isset($data_barang->satuan)) echo (int) $data_barang->satuan; ?>" disabled>
        </div>
    </div>
    <div class="form-group">
        <label for="idPengguna" class="col-sm-2 control-label">Nama Pengguna</label>
        <div class="col-sm-10">
        <select class="form-control" id="idPengguna" name="idPengguna" disabled>
            <option value="" selected>Pilih Pengguna</option>
            <?php foreach ($data_pengguna as $pengguna) { ?>
                <option value="<?php if (isset($pengguna->idPengguna)) echo $pengguna->idPengguna; ?>" <?php if (isset($data_barang->idPengguna) && $data_barang->idPengguna == $pengguna->idPengguna) echo 'selected'; ?>><?php if (isset($pelanggan->namaPengguna)) echo $supplier->namaPengguna; ?></option>
            <?php } ?>
        </select>
        </div>
    </div>
</main>