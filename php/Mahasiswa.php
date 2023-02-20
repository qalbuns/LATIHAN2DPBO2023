<?php

class Mahasiswa
{
    private $nim;
    private $nama;
    private $jenis_kelamin;
    private $fakultas;
    private $prodi;

    function __construct($nim = null, $nama = null, $jenis_kelamin = null, $fakultas = null, $prodi = null)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->fakultas = $fakultas;
        $this->prodi = $prodi;
    }

    function setNim($nim)
    {
        $this->nim = $nim;
    }

    function getNim()
    {
        return $this->nim;
    }

    function setNama($nama)
    {
        $this->nama = $nama;
    }

    function getNama()
    {
        return $this->nama;
    }

    function setJk($jenis_kelamin)
    {
        $this->jenis_kelamin = $jenis_kelamin;
    }

    function getJk()
    {
        return $this->jenis_kelamin;
    }

    function setFk($fakultas)
    {
        $this->fakultas = $fakultas;
    }

    function getFk()
    {
        return $this->fakultas;
    }

    function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }

    function getProdi()
    {
        return $this->prodi;
    }
}

?>