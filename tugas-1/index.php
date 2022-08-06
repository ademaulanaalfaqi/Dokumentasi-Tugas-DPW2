<?php
class animal {
    public $jumlah_kaki, $bisa_terbang;
}

class kera extends animal {
    function bersuara(){
        return "uuu aaa uu aaa";
    }
}

class anjing extends animal {
    function bersuara(){
        return "guk guk guk";
    }
}

class burung_gereja extends animal {
    function bersuara(){
        return "cit cit cit";
    }
}

class kambing extends animal {
    function bersuara(){
        return "mbeeeeekkk";
    }
}
echo "Animal";
echo "<hr>";
$jamal = new kera;
$jamal->jumlah_kaki = 2;
$jamal->bisa_terbang = "tidak bisa terbang";
echo "Jamal adalah seekor Kera <br>";
echo "Kaki Jamal berjumlah " .$jamal->jumlah_kaki ."<br>";
echo "Jamal " .$jamal->bisa_terbang ."<br>";
echo "Suaranya " .$jamal->bersuara() ."<br>";
echo "<hr>";

$jono = new anjing;
$jono->jumlah_kaki = 4;
$jono->bisa_terbang = "tidak bisa terbang";
echo "Jono adalah seekor Anjing <br>";
echo "Kaki jono berjumlah " .$jono->jumlah_kaki ."<br>";
echo "Jono " .$jono->bisa_terbang ."<br>";
echo "Suaranya " .$jono->bersuara() ."<br>";
echo "<hr>";

$handoko = new burung_gereja;
$handoko->jumlah_kaki = 2;
$handoko->bisa_terbang = "bisa terbang";
echo "Handoko adalah seekor Burung gereja <br>";
echo "Kaki handoko berjumlah " .$handoko->jumlah_kaki ."<br>";
echo "Handoko " .$handoko->bisa_terbang ."<br>";
echo "Suaranya " .$handoko->bersuara() ."<br>";
echo "<hr>";

$maman = new kambing;
$maman->jumlah_kaki = 4;
$maman->bisa_terbang = "tidak bisa terbang";
echo "Maman adalah seekor Kambing <br>";
echo "Kaki maman berjumlah " .$maman->jumlah_kaki ."<br>";
echo "Maman " .$maman->bisa_terbang ."<br>";
echo "Suaranya " .$maman->bersuara() ."<br>";
echo "<hr>";
?>