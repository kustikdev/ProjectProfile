<?php 
$Buku = ['sejarah', 'atom', 'bumi', 'astronomi', 'tumbuhan', 'novel'];
$jumlah_buku = 3;
foreach ($Buku as $kategori => $value){
echo "hasil" . "ada" . $kategori . "Jumlah" . $value;
echo "<br>";
    if($value == "astronomi"){
        $jumlah_buku++;
        echo "Reposity $jumlah_buku";
        break;
    }
}
?>
<?php 
$arr_warna	= ['merah','biru','kuning','hitam','hijau','biru','pink','biru','jingga'];
foreach ($arr_warna as $key => $value) {
    if($value=='jingga')
	{
    continue;
	}
	echo "Warna pada elemen array ke-$key adalah $value <br>";
} 
?>
<?php 
$dataakl1= [
    ['nama' => 'Andika', 'struktur' => 'ketua kelas'],
    ['nama' => 'Najwa', 'struktur' => 'sekretaris'],
    ['nama' => 'Anggun', 'struktur' =>'bendahara'],
    ['nama' => 'Nur Rahma', 'struktur' => 'bendahara'],
];
$dataakl2 = [
    ['nama' => 'royhan','struktur' =>'ketua kelas'],
    ['nama' => 'edward', 'struktur' =>'sekretaris'],
    ['nama' => 'aktar', 'struktur' =>'bendahara'],
    ['nama' => 'kepin', 'struktur' =>'bendahara'],
];
foreach ($dataakl1 as $nama => $arr_kategori){
    echo "Nama: " . $arr_kategori['nama']," = ", $arr_kategori['struktur'];
    echo "<br><pre>";
}
foreach ($dataakl2 as $name => $arr_kategori2){
    echo "Nama: " . $arr_kategori2['nama']," = ", $arr_kategori2['struktur'];
    echo "<br><pre>";
}
?>

<?php
$data = [
    ["nama" => "Ali", "umur" => 20],
    ["nama" => "Budi", "umur" => 25],
    ["nama" => "Citra", "umur" => 22],
];

foreach ($data as $item) {
    echo "Nama: " . $item['nama'] . ", Umur: " . $item['umur'] . "<br>";
}
?>
<html>
    <head>
        <header><table border="1"><tr>
            <?php echo "Nama: " . $arr_kategori['nama']," = ", $arr_kategori['struktur'];
    echo "<br><pre>";?></tr>
            </table>
        </header>
    </head>
</html>