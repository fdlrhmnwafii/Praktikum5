<?php
class Dispanser
{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas = 250;
    public $namaMinuman;
    public $gelasTerjual = 0;

    public function __construct($minuman,$volGalon, $harga){
        $this->namaMinuman = $minuman;
        $this->volume = $volGalon;
        $this->hargaSegelas = $harga;
    }

    public function minum($gelas)
    {
        if ($this->volume>0) {
            $this->volume = $this->volume - ($this->volumeGelas * $gelas);
            echo 'Minuman Anda '.$this->namaMinuman. 'Telah Berhasil Diisi Sebanyak '.$this->volumeGelas. 'ml. Sisa Volume Dispanser '.$this->volume.'ml<br>';
            $this->gelasTerjual++;
        }else{
            echo 'Mohon Maaf, Minuman Sedang Kosong<br>';
        }
        
    }
    public function isi($vol)
    {
        $this->volume = $vol;
        echo 'Berhasil Melakukan Isi Ulang Minuman '.$this->namaMinuman.' sebanyak '.$vol.'ml.<br>';
    }
    
    public function pendapatan(){
        echo 'Total Pendapatan yang Didapat Sebesar Rp'. number_format($this->hargaSegelas * $this->gelasTerjual, 2, ',', '.').'<br>'; 
    }
}



$fanta = new Dispanser ('Fanta',1000,15000);
$fanta->minum(1);
$fanta->minum(1);
$fanta->minum(1);
$fanta->minum(1);
$fanta->minum(1);
$fanta->minum(1);
$fanta->minum(1);
$fanta->isi(1000);
$fanta->minum(1);
$fanta->pendapatan();
?>