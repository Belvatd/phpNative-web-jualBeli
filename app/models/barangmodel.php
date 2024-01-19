<?php

class BarangModel
{
    /* Properties */
    private $idBarang = null;
    private $idPengguna;
    private $namaBarang;
    private $keterangan;
    private $satuan;
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    function setIdBarang($idBarang) 
    {
        $this->idBarang = $idBarang;
    }

    function setIdPengguna($idPengguna) 
    {
        $this->idPengguna = $idPengguna;
    }
    function setNamaBarang($namaBarang)
    {
        $this->namaBarang = $namaBarang;
    }

    function setKeterangan($keterangan)
    {
        $this->keterangan = $keterangan;
    }

    function setSatuan($satuan)
    {
        $this->satuan = $satuan;
    }

    function getIdBarang()
    {
        return $this->idBarang;
    }

    function getIdPengguna()
    {
        return $this->idPengguna;
    }

    function getNamaBarang()
    {
        return $this->namaBarang;
    }

    function getKeterangan()
    {
        return $this->keterangan;
    }

    function getSatuan()
    {
        return $this->satuan;
    }

    public function getAllBarang($nama_barang)
    {
        try {
            
            if ($nama_barang != null) {
                $query = "SELECT * FROM barang INNER JOIN pengguna ON barang.idPengguna = pengguna.idPengguna WHERE namaBarang LIKE '%$nama_barang%'";
            } else {
                $query = "SELECT * FROM barang INNER JOIN pengguna ON barang.idPengguna = pengguna.idPengguna";
            }
            
            $prepareDB = $this->db->prepare($query);
            $prepareDB->execute();
            $result = $prepareDB->fetchAll();
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function saveBarang()
    {
        try {
            $query = "INSERT INTO barang (idBarang, namaBarang, keterangan, satuan, idPengguna) VALUES (:idBarang,:namaBarang,:keterangan,:satuan,:idPengguna)";
            $prepareDB = $this->db->prepare($query);
            $prepareDB->bindParam(':idBarang', $this->idBarang);
            $prepareDB->bindParam(':namaBarang', $this->namaBarang);
            $prepareDB->bindParam(':keterangan', $this->keterangan);
            $prepareDB->bindParam(':satuan', $this->satuan);
            $prepareDB->bindParam(':idPengguna', $this->idPengguna);
            $prepareDB->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function deleteBarang()
    {
        try {
            $query = "DELETE FROM barang WHERE idBarang = :idBarang";
            $prepareDB = $this->db->prepare($query);
            $prepareDB->bindParam(':idBarang', $this->idBarang);
            $prepareDB->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getBarangById()
    {
        try {
            $query = "SELECT * FROM barang WHERE idBarang = :idBarang";
            $prepareDB = $this->db->prepare($query);
            $prepareDB->bindParam(':idBarang', $this->idBarang);
            $prepareDB->execute();
            $result = $prepareDB->fetch();
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function editBarang()
    {
        try {
            $query = "UPDATE barang SET idBarang = :idBarang, namaBarang = :namaBarang, keterangan = :keterangan, satuan = :satuan, idPengguna = :idPengguna WHERE idBarang = :idBarang";
            $prepareDB = $this->db->prepare($query);
            $prepareDB->bindParam(':idBarang', $this->idBarang);
            $prepareDB->bindParam(':namaBarang', $this->namaBarang);
            $prepareDB->bindParam(':keterangan', $this->keterangan);
            $prepareDB->bindParam(':satuan', $this->satuan);
            $prepareDB->bindParam(':idPengguna', $this->idPengguna);
            $prepareDB->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function dasborBarang(){
        try{
            $query = "SELECT * FROM barang 
            INNER JOIN pengguna ON barang.idPengguna = pengguna.idPengguna
            INNER JOIN penjualan ON barang.idBarang = penjualan.idBarang
            INNER JOIN pembelian ON barang.idBarang = pembelian.idBarang";

            $prepareDB = $this->db->prepare($query);
            $prepareDB->execute();
            $result = $prepareDB->fetchAll();
            return $result;
        } catch (Exception $e){
            throw $e;
        }
    }
}