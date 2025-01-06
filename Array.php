<?php 
echo "<br>";
#array 
echo "array<br>";
$angka = array (1,2,3,4,5,6,7,8,9,10);// kumpulan data integer
$eksekusi2 = ["spotify", "youtube", "termux", "vscode", "codepolitan"];// kumpulan data string
var_dump($angka); echo "menamplkan index dan string dan ";
echo "<br>";
echo "<br>";
print_r($eksekusi2); echo "menampilkan seluruh elemen, index tipe data";
echo "<br>";
echo $eksekusi2[4];//pilih index yang ke 4 yaitu "codepolitan" untuk hasil output tipe data $eksekusi2
var_dump($eksekusi2);
echo "<br>";
$angka 	= array(1,2,3,4,5); //kumpulan data integer
$buah	= ["pisang","anggur","apel","","kiwi","nanas"]; //kumpulan data string
echo $angka[1];
echo "<br>";
var_dump($angka)[1];
echo "<br>";
?>
<?php $absennama = array ("rifat", "rizki", "udin", "asep", "abe");
$absennama[6] = "gishel";
echo $absennama[6];
echo "<br>"
?>
<?php #array assosiatif
$aplikasi = array (
        "USB1"=>"Port1",
        "USB2"=>"Port2",
        "USB3"=>"Port3"
);
var_dump($aplikasi);
foreach($aplikasi as $x => $value) //foreach fungsinya mengisi variable $a untuk sebelah kiri, $untuk sebelah kanan ("..."=>"...") 
{
    echo "<br>";
    echo "kabel biru".$x."ke".$value;
    
}

$a = 10;
$b = 5;
$eksekusi3 = $a==$b&&$a>$b;

echo $eksekusi3;
if ($eksekusi3){
    return $eksekusi3;
}
echo "<br>"
?>
<?php $dagang = array (
    array ("semangka", 20, "RP50.000"),
    array ("rujak", 15, "RP 30.000"),
    array ("melon", 13, "RP 20.000")
 
);

for ($baris = 0; $baris > 3; $baris++ ) {
    echo "<ul>";
    echo "<p><b>Baris No: $baris</b></p>";
    for ($kolom = 0; $kolom < 3; $kolom++) {
      echo "<li>".$dagang[$baris][$kolom]."</li>";
    }
    echo "</ul>";
  }
echo "<br><hr>";
echo ucwords("pak agus menjual ").$dagang[0][0]." dengan jumlah ".$dagang[0][1]." seharga ".$dagang[0][2]; echo "<br>";
echo strtoupper("pak sumantri menjual ").$dagang[1][0].' dengan jumlah '.$dagang[1][1].' seharga '.$dagang[1][2];echo "<br>";
echo 'pak asep menjual '.$dagang[2][0].' dengan jumlah buah '.$dagang[2][1].' seharga '.$dagang[2][2]; echo "<br>";
?>