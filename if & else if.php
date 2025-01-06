<?php
$age = 18;
$kategori = "Tangerang";
if ($age == 18 && $kategori == "Tangerang") {
    echo "<pre>anda mulai dewasa dan pkl di Tangerang</pre>";
} else {
    echo "<pre>Usia di luar kategori</pre>";
}
?>

<?php
$var = 7;
$harga = 5000;
$diskon = "10%";
$total = ($harga / $diskon);
echo ($total) ? "Total angsuran $total<br>" : "Tidak ada angsuran";
echo ($var == 7) ? "True" : "False<br>";
?> 

<?php 
for ($buat = 0;$buat <= 20; $buat++) {
    echo "terjual 'link1 $buat";
    echo "<br>";
}
?>
<?php
function luasPersegiPanjang($panjang, $lebar){
return $panjang * $lebar;
}
echo luasPersegiPanjang(5,10);
?>
<?php 
define("belajar","php");
define("contohke2","hello world");
const contoh_1 = "soto ayam";
echo contoh_1;
echo belajar;
echo contohke2;
echo "<br><hr>";
?>
<?php 
$harga_belanja = 500.000;

if ($harga_belanja >= 500.000){
   $diskon = 0.2;
    $new1  = $harga_belanja - ($harga_belanja * $diskon) . number_format( $new1, 0, ',',',');
    echo "Anda mendapatka diskon sebesar 20% " . ' total ' . $new1;
}
else if ($harga_belanja >= 250.000){
    $new1  = $harga_belanja - ($harga_belanja * $diskon) . number_format( $new1, 0, ',',',');
    echo "anda mendapatkan diskon sebesar 10%";
}
else {$new1  = $harga_belanja - ($harga_belanja * $diskon) . number_format( $new1, 0, ',',',');
    echo "maaf anda tidak mendapatkan diskon";
    echo "<br> <hr>";
}
?>
<?php 
$nilai = 80;
if ($nilai == 100){
    echo "Category A (Sangat Baik)";
        if ($nilai >= 85){
            echo "Category: B (Sangat baik)";
            if ($nilai >= 70){
                echo "Category: C (Baik)";
                    if ($nilai >= 50){
                        echo "Category D (Kuranng)";
                    }
                    else {
                        echo "Maaf Nilai D kurang";
                    }
                } else {
                    echo "Perlu diperbaiki Nilai C";
                }
            }
            else {
                echo "Selamat anda lulus Nilai B ";
            }
        }
     else {
        echo "Selamat anda lulus dengan nilai A terbaik <br>";
    }
?>
