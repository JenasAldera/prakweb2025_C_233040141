<?php

class Rumah {

    //Property
    public $warnaCat= "Putih";
    public $jmlKamar= 4;
    public $alamat= "Jl. Pasundan No. 1";

    

    //Method
    public function __construct($warnaCat,$jmlKamar) {
        $this->warnaCat = $warnaCat;
        $this->jmlKamar = $jmlKamar;
    }
    public function kunciPintu(){
        return "Rumah ini dikunci";
    }
    public function gantiWarna($warnaCat){
        $this->warnaCat = $warnaCat;
    }
}

function pasangListrik(Rumah $rumah){
    return "Rumah ini dipasang listrik, rumah yang berwarna ". 
    $rumah->warnaCat;
}

$rumahAndi = new Rumah('Ungu,', '2');
echo pasangListrik($rumahAndi);
echo "<br>";

// Rumah Saya
$rumahSaya = new Rumah('Biru', '1');
// $rumahSaya->gantiWarna("Hijau");
echo "Rumah Saya : ". $rumahSaya->warnaCat;
echo "<br>";
echo "Jumlah Kamar : ". $rumahSaya->jmlKamar;
echo "<br>";

echo "<br>";

// Rumah Tetangga
$rumahTetangga = new Rumah('Hijau', '2');
// $rumahTetangga->gantiWarna("Biru");
echo "Rumah Tetangga : ". $rumahTetangga->warnaCat;
echo "<br>";
echo "Jumlah Kamar : ". $rumahTetangga->jmlKamar;
echo "<br>";

?>