<?php

class Human extends Mahasiswa
{
    private $nik;
    private $nama2;
    private $jenis_kelamin2;
    

    function __construct($nik = null, $nama2 = null, $jenis_kelamin2 = null)
    {
        $this->nik = $nik;
        $this->nama2 = $nama2;
        $this->jenis_kelamin2 = $jenis_kelamin2;
    }

    function setNik($nik)
    {
        $this->nik = $nik;
    }

    function getNik()
    {
        return $this->nik;
    }

    function setNama2($nama2)
    {
        $this->nama2 = $nama2;
    }

    function getNama2()
    {
        return $this->nama2;
    }

    function setJk2($jenis_kelamin2)
    {
        $this->jenis_kelamin2 = $jenis_kelamin2;
    }

    function getJk2()
    {
        return $this->jenis_kelamin2;
    }
}
