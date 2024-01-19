<!-- Begin page content -->
<main role="main" class="container" style="margin-top : 40px">
    <div class="clearfix mb-3 mt-3">
        <h2 class="float-left"><b>Laporan Laba Rugi</b></h>
    </div>
    
  <div class="row p-24" style="margin-bottom : 24px">
  <div class="col-sm-4">
      <div class="card text-white bg-success mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Total Harga Beli</h5>
          <p class="card-text">Rp.<?php echo number_format($data['total_harga_beli'], 0, ',', '.'); ?></p>
        </div>
      </div>
    </div>
  <div class="col-sm-4">
    <div class="card text-white bg-warning mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Total Harga Jual</h5>
        <p class="card-text">Rp.<?php echo number_format($data['total_harga_jual'], 0, ',', '.'); ?></p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-info mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Total Untung/Rugi</h5>
        <p class="card-text">Rp.<?php echo number_format($data['total_harga_jual'] - $data['total_harga_beli']); ?></p>
      </div>
    </div>
  </div>
  </div>
  <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_barang as $barang) { ?>
                <tr>
                    <td><?php echo $barang->namaBarang; ?></td>
                    <td>Rp. <?php echo number_format($barang->hargaBeli, 0, ',', '.')?></td>
                    <td>Rp. <?php echo number_format($barang->hargaJual, 0, ',', '.')?></td>
                    <?php } ?>
                    
                </tr>
            </tbody>
        </table>
</main>
