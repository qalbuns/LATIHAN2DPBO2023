<?php

class SivitasAkademik extends Human
{
    private $asal_universitas;
    private $email_edu;

    function __construct($asal_universitas = null, $email_edu = null)
    {
        $this->asal_universitas = $asal_universitas;
        $this->email_edu = $email_edu;
    }

    function setAsal($asal_universitas)
    {
        $this->asal_universitas = $asal_universitas;
    }

    function getAsal()
    {
        return $this->asal_universitas;
    }

    function setEmail($email_edu)
    {
        $this->email_edu = $email_edu;
    }

    function getEmail()
    {
        return $this->email_edu;
    }
}

?>