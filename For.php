<?php
$var = 7;
$harga = 5000;
$diskon = "10%";
$total = ($harga / $diskon);
echo ($total) ? "Total angsuran $total<br>" : "Tidak ada angsuran";
echo ($var == 7) ? "True" : "False<br>";
?> 
<?php 
for ($Loop = 0; $Loop <=50; $Loop++ ) {
    
    echo "pelanggan masuk<br>";
    
}
?>
<?php
$kota = ['Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta', 'Medan'];
$jumlah = 0;
for ($i = 0; $i , $i <5; $i ++){
    if ($kota[$i] == 'Jakarta'){
        $jumlah ++;
        echo "Kota di indonesia ada" . $jumlah;
    }
}
?>
<?php 
$angka = [10,20,30,40,50];
$jumlah = 0;
for ($p = 0; $p < count($angka); $p ++) {
    if ($angka[$p] = 10 + 20 + 30 + 40 + 50){
        $jumlah ++;
        echo "hasilnya adalah" . $angka;
    }
}
?>

<?php
$angkagenap =[1,2,3,4,5,6,7,8,9,10,];
$jumlah2 = 2;
for ($i = 0; $i < 10; $i ++){
    if ($angkagenap[$i]  = $jumlah2){
        echo "hasilnya" . $jumlah2;
    }
}
?>

<?php
$nomor = [1,2,3,4,5,6,7,8,9,10];
$sum = 1;
$i = 1;
while ($sum < 10){
    if ($nomor[$i] == 2){
        $sum ++;
    }
    $sum ++;
    echo "Jumlahnya ada ". $sum. "<br>";
}
?>