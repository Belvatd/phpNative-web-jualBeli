<?php

class PenggunaModel
{
    /* Properties */
    private $idPengguna = null;
    private $namaPengguna;
    private $password;
    private $namaDepan;
    private $namaBelakang;
    private $noHp;
    private $alamat;
    private $idAkses;
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    function setIdPengguna($idPengguna) 
    {
        $this->idPengguna = $idPengguna;
    }

    function setNamaPengguna($namaPengguna)
    {
        $this->namaPengguna = $namaPengguna;
    }
    function setPassword($password)
    {
        $this->password = $password;
    }


    function setNamaDepan($namaDepan)
    {
        $this->namaDepan = $namaDepan;
    }

    function setNamaBelakang($namaBelakang)
    {
        $this->namaBelakang = $namaBelakang;
    }

    function setNoHp($noHp)
    {
        $this->noHp = $noHp;
    }

    function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    function getIdPengguna()
    {
        return $this->idPengguna;
    }

    function getNamaPengguna()
    {
        return $this->namaPengguna;
    }
    function getPassword()
    {
        return $this->password;
    }
    function getNamaDepan()
    {
        return $this->namaDepan;
    }
    function getNamaBelakang()
    {
        return $this->namaBelakang;
    }
    function getNoHp()
    {
        return $this->noHp;
    }
    function getAlamat()
    {
        return $this->alamat;
    }

    public function getAllPengguna()
    {
        try {
            $query = "SELECT * FROM pengguna";
            $prepareDB = $this->db->prepare($query);
            $prepareDB->execute();
            $result = $prepareDB->fetchAll();
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }
}