<?php
class Dispenser {
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    // public isi($vol) {
    //     return $this->volume = $vol;
    // }
    // public harga($price) {
    //     return $this->hargaSegelas = $price;
    // }
    // public gelas($vogel) {
    //     return $this->volumeGelas = $vogel;
    // }
    public function __construct($volume, $hargaSegelas, $volumeGelas) {
        $this->vol = $volume;
        $this->harga = $hargaSegelas;
        $this->vogel = $volumeGelas;
    }
    public function sum() {
        echo "<br/>Volume galonnya adalah $this->vol ml <br/> Harga segelasnya adalah $this->harga Rupiah <br/> Orang membeli air 1 gelas yang volumenya $this->vogel ml";
    }
    function sisa() {
        return $this->vol - $this->vogel;
    }
}

$adua = new Dispenser(1000, 3000, 750);
echo $adua->namaMinuman = "A Dua <hr/>";
$adua->sum();
echo " <br/> Sekarang airnya bervolume ". $adua->sisa()." ml";
