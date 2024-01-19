<?php

class PembelianModel
{
    /* Properties */
    private $idPembelian = null;
    private $jumlahPembelian;
    private $hargaBeli;
    private $idPengguna;
    private $idBarang;
    private $db;

    function __construct($db) {
        $this->db = $db;
    }


    function setIdPembelian($idPembelian)
    {
        $this->idPembelian = $idPembelian;
    }

    function setJumlahPembelian($jumlahPembelian)
    {
        $this->jumlahPembelian = $jumlahPembelian;
    }
    function setHargaBeli($hargaBeli)
    {
        $this->hargaBeli = $hargaBeli;
    }
    function setIdPengguna($idPengguna)
    {
        $this->idPengguna = $idPengguna;
    }
    function setIdBarang($idBarang)
    {
        $this->IdBarang = $idBarang;
    }

    function getIdPembelian()
    {
        return $this->idPembelian;
    }

    function getJumlahPembelian()
    {
        return $this->jumlahPembelian;
    }

    function getHargaBeli()
    {
        return $this->hargaBeli;
    }

    function getIdPengguna()
    {
        return $this->idPengguna;
    }

    function getIdBarang()
    {
        return $this->idBarang;
    }

    public function getAllPembelian()
    {
        try {
            $query = "SELECT * FROM pembelian";
            $prepareDB = $this->db->prepare($query);
            $prepareDB->execute();
            $result = $prepareDB->fetchAll();
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

}