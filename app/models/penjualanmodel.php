<?php

class PenjualanModel
{
    /* Properties */
    private $idPenjualan = NULL;
    private $jumlahPenjualan;
    private $hargaJual;
    private $idPengguna = NULL;
    private $idBarang = NULL;
    private $db;

    function __construct($db) {
        $this->db = $db;
    }


    function setIdPenjualan($idPenjualan)
    {
        $this->idPenjualan = $idPenjualan;
    }

    function setJumlahPenjualan($jumlahPenjualan)
    {
        $this->jumlahPenjualan = $jumlahPenjualan;
    }
    function setHargaJual($hargaJual)
    {
        $this->hargaJual = $hargaJual;
    }
    function setIdPengguna($idPengguna)
    {
        $this->idPengguna = $idPengguna;
    }
    function setIdBarang($idBarang)
    {
        $this->idBarang = $idBarang;
    }

    function getIdPenjualan()
    {
        return $this->idPenjualan;
    }

    function getJumlahPenjualan()
    {
        return $this->jumlahPenjualan;
    }

    function getHargaJual()
    {
        return $this->hargaJual;
    }

    function getIdPengguna()
    {
        return $this->idPengguna;
    }

    function getIdBarang()
    {
        return $this->idBarang;
    }

    public function getAllPenjualan()
    {
        try {
            $query = "SELECT * FROM penjualan";
            $prepareDB = $this->db->prepare($query);
            $prepareDB->execute();
            $result = $prepareDB->fetchAll();
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

}