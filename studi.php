<?php

class kue{
    private $bahan;
    public $sus;
    protected $harga;

    function setSus($sus){
        $this->sus = $sus;
    }
    function setBahan($sus){
        $this->bahan = $sus;
    }
    function setHarga($sus){
        $this->harga = $sus;
    }

    function getSus(){
        return $this->sus;
    }
    function getBahan(){
        return $this->bahan;
    }
    function getHarga(){
        return $this->harga;
    }

    public function tampil(){
        echo "kue ini bernama ".$this->sus."<br>";
        echo "kue ini dijual dengan harga ".$this->harga."<br>";
        echo "kue ini memiliki bahan ".$this->bahan."<br>";
    }

}

$kue1 = new kue;
$kue1->setBahan("200gr cream sus");
$kue1->setHarga("2rb");
$kue1->setSus("kue sus");
 $kue1->tampil();

?>