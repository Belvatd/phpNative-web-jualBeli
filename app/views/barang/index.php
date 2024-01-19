<!-- Begin page content -->
<main role="main" class="container" style="margin-top : 40px">
    <div class="clearfix mb-3 mt-3">
        <h1 class="float-left">Daftar Barang</h1>
        <a href="<?= URL . 'barang/tambah' ?>" class="btn btn-dark float-right ml-2">Tambah Barang</a>
        <form class="form-inline float-right" action="<?= URL . 'barang/index' ?>" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari barang" aria-label="Search" name="nama_barang">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Cari Barang</button>
        </form>
    </div>

    <?php if (isset($status) && isset($action)) { ?>
        <?php if ($status == "success" && $action == "add") { ?>
            <div class="alert alert-success" role="alert">
                <strong>Selamat!</strong> Anda berhasil menambahkan barang.
            </div>
        <?php } else if ($status == "success" && $action == "delete") { ?>
            <div class="alert alert-success" role="alert">
                <strong>Selamat!</strong> Anda berhasil menghapus barang.
            </div>
        <?php } else if ($status == "success" && $action == "edit") { ?>
            <div class="alert alert-success" role="alert">
                <strong>Selamat!</strong> Anda berhasil mengedit barang.
            </div>
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                <strong>Maaf!</strong> Proses gagal.
            </div>
        <?php } ?>
    <?php } ?>

    <div class="table-responsive">
        <table class="table table-stripped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Keterangan</th>
                    <th>Satuan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_barang as $barang) { ?>
                <tr>
                    <td><?php if (isset($barang->idBarang)) echo $barang->idBarang; ?></td>
                    <td><?php if (isset($barang->namaBarang)) echo $barang->namaBarang; ?></td>
                    <td><?php if (isset($barang->keterangan)) echo $barang->keterangan; ?></td>
                    <td><?php if (isset($barang->satuan)) echo number_format($barang->satuan, 0, ',', '.'); ?></td>
                    <td class="text-center">
                        <a href="<?php echo URL . 'barang/detail/' . $barang->idBarang; ?>" class="btn btn-info">Detail</a>
                        <a href="<?php echo URL . 'barang/edit/' . $barang->idBarang; ?>" class="btn btn-warning">Edit</a>
                        <form class="d-inline deleteData" action="<?php echo URL . 'barang/proses_hapus'; ?>" method="POST">
                            <input type="hidden" name="idBarang" value="<?php if (isset($barang->idBarang)) echo $barang->idBarang; ?>">
                            <button type="submit" class="btn btn-danger" name="hapus_barang">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>