<?php


class DasborController extends Controller
{
    public function index()
    {
        $barang_model = $this->loadModel('BarangModel');
        $data_barang = $barang_model->dasborBarang();
        
        $totalHargaBeli = 0;
        $totalbeli = 0;
        $pembelian_model = $this->loadModel('PembelianModel');
        $pembelian = $pembelian_model->getAllPembelian();
        foreach ($pembelian as $pembelian_item) {
            $totalHargaBeli += $pembelian_item->hargaBeli * $pembelian_item->jumlahPembelian;
            $totalbeli = $pembelian_item->jumlahPembelian;
        }
        
        $totalHargaJual = 0;
        $totaljual = 0;
        $penjualan_model = $this->loadModel('PenjualanModel');
        $penjualan = $penjualan_model->getAllPenjualan();
        foreach ($penjualan as $penjualan_item) {
            $totalHargaJual += $penjualan_item->hargaJual * $penjualan_item->jumlahPenjualan;
            $totaljual = $penjualan_item->jumlahPenjualan;
        }

        $labaRugi = $totalHargaJual - $totalHargaBeli;
        $stock = $totalbeli - $totaljual;

    
        $data['total_harga_beli'] = $totalHargaBeli;
        $data['total_harga_jual'] = $totalHargaJual;
        $data['laba_rugi'] = $labaRugi;
        $data['stok'] = $stock;


        $menu = 'dasbor';
        require 'app/views/layouts/header.php';
        require 'app/views/layouts/navbar.php';
        require 'app/views/dasbor/index.php';
        require 'app/views/layouts/footer.php';
    }
}