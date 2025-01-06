<?php echo "hello " ?>
<?php 
echo "<tittle>belajar php </tittle>";
echo "<h1 style = text-align:center> Variable php ($)</h1> <hr>";
$namalengkap = "gibran ";//variable dalam bentuk $ dollar
$input1 = "bandung";
$alamat = "<h2>Locate to Tangerang</h2>";
echo $namalengkap;
?>
<?php
echo "hello world "; //untuk menampilkan hasil output
echo "visual studio code"; 
echo 5*1000 // bisa juga buat pengolahan data angka 
// komentar untuk php
/* bisa komen ini*/
#bisa juga seperti ini
?> 
<?php echo $alamat; 
    echo "<h1 style = text-align:center> php ucword and strtoupper</h1><hr>";
    ?>
<?php echo ucwords("try to be better"); #fungisnya menebalkan bagian huruf depan ?><br>
<?php echo ucwords("opportunity comes if learning codepolitan");  ?><br>
<?php echo strtoupper("mengenal fungsi php");#fungsinya untuk menebalkan seluruh huruf ?><br>
<?php echo strtoupper("verification server"); ?><br>
<?php echo $namalengkap.$input1 //concat [.]= menyambungkan varibale. example=($a.$b)?>
<?php 
function kata()
{
    echo "selamat datang semuanya";
}
kata();
?>
<?php
$a = 176523; //ini adalah boolean yaitu = TRUE/FALSE fungsinya menentukan benar salah hasil output //kegunaan boolean = mengecek sebuah kondisi 
$a++; // interger = bilangan bulat 
echo $a;
echo "<br>";
$b = 100;
$c = 100;
$hasil = $b * $c;
var_dump($hasil);
?>
<?php $variable1 = 12.12; $variable2 = 4.5; $hasilvariable = $variable1*$variable2; echo $hasilvariable;
//float = angka desimal 
?>
<?php 
$yudi = 123;
$budi = 123;
$eksekusi = $yudi<$budi;
var_dump($eksekusi);
?>
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
print_r($buah)[3]; //mencetak array pada index ke 3
var_dump($angka)[1];
echo "<br>"
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
<?php
echo $datasekolah=null; // jika error gunakan null
    echo '<a href="pass.php?link=$a"> Link 1 </a>';
    echo '<br/>';
    echo '<a href="pass.php?link=$b"> Link 2 </a>';
if (['Link 1']==$a){
echo "link 1 pencet"; }
?>
<?php $hasil = 5 + 5 / 2 * 10;
echo $hasil; ?>
<?php
define("GREETING","Hello you! How are you today?");
echo constant("GREETING");
?>
<form action="" method="get">
    Nama<input type="text" name ="nama">
    Alamat<input type="text" name="Alamat">
    <input type submit value="submit">
</form>
<form action="" method="post">
    email<input type="email" name ="email">
    password<input type="password"name="password">
    verify<input type="text" name="verify">
    <input type="submit" value="submit">
    <textarea name="GOL" rows="8" col="200"></textarea>
</form>
<?php 
echo "<hr><br>";
function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
echo "<br>";

?>
<?php echo "<h1 style = text-align:center>method _GET AND _POST</h1>";?>
<form action="index.php" method="post"> <ul>
    <li>data<textarea name="data" rows="1" col="30"></textarea></li>
    <li list-style-type:"lower-alpha"><input type="text" name="data">nickname <? // tipe text ?></li>
    <li><input type="submit"value="submit"> <? //submit ?></li>
    <li><input type="date" value="tanggal"> <? //dd/mm/year?></li>
   <li><button><input type="button" name="click button" value="ini button" rows="2" col="200" onCLick="alert('hello')">tombol</li></button>
    <input type="checkbox" name="TikTok" value="tiktok" checked>TikTok
   Password: <input type="password" value="password"> <input type="submit" value="submit"> 
</ul>
<? echo "<hr>"?>
</form action="" method="post">
<form action="" method="post">
    <select name="SMKN1 JURUSAN">
    <option value="Akuntansi">AKL</option>
    <option value="teknik jaringan dan komputer">TJKT</option>
    <option value ="manajemen perkantoran">MPLB</option>
</select>
<input type="radio" name="PM" value="PEMASARAN">PEMASARAN<br>
<input type="file" name="file"> <input type="submit" value="submit">
</form> <?php echo "<hr><br>";?>

<?php $namasiswa = $_POST['nama'];
$namabiasa = $_POST['nama1'];
$umur = $_POST['umur']; 
$hobi = $_POST['hobi'];
?>
<!DOCTYPE html>
<html lang="id">
    <meta charset="UTF-8">
    <tittle> laravel framework</tittle>
    <head>
        <nav>

        </nav>
    </head>
    <body>
        <form action ="webinterface.html" method="post">
    setup array :<input type="text" name="nama1"><br>
    put age  :<input type="number" name="umur"><br>
    input name :<input type="text" name="nama" value="John Doe"><br>
    wichh :<input type="checkbox" name="hobi" value="membaca"> Membaca <br>
    hobby :<input type="text" name="hobi"> <br>
    
    <button type="submit">Submit</button>
</from>
        <p>nama biasa <?php echo $namabiasa;?></p>
        <h4> namanya <?php echo $namasiswa; ?></h4>
        <p>then your age is <?php echo $umur; ?></p>
        <p>Hobi <?php echo $hobi;?></p>
        </html>

<?php echo "<hr><br>"?>
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
<?php
echo "<hr> <br>";
$jadwal = "Selasa";
switch ($jadwal){
    case "Senin";
    echo "Hari senin";
    break;
    case "Selasa";
    echo "Hari Selasa";
    break;
    case "Rabu";
    echo "Hari rabu";
    break;
default;
echo "tidak ada jadwal";
break;
}
?>
<?php
#Buatlah sebuah skrip PHP yang menggunakan pernyataan switch untuk menampilkan nama hari berdasarkan angka yang diberikan. Misalnya, jika angka yang dimasukkan adalah 1, maka outputnya adalah "Senin", jika 2, maka outputnya adalah "Selasa", dan seterusnya.
$Numberday = 8;
$Transportation = "B";
$dollar = "d";
switch ($Numberday){
    case "1":
    echo "Today is monday";
    break;
    case "2":
    echo "Today is tuesday";
    break;
    case 3:
    echo "Today is wednesday";
    break;
    default;
    echo "<pre>None </pre>";
    break;
}
switch ($Transportation){
    case "A":
        echo "car";
        break;
        case "B":
        echo "motorcyle";
        break;
        case "C":
        echo "Bycle";
        break;
        case "D":
        echo "Bus";
        break;
        default;
        echo "None";
        break;

}
switch ($dollar){
    case "A";
    echo $p = (1+1) . $p;
    break;
    case "B";
    echo $e = (5 + 5) . $e;
    break;
    default;
    echo "None";
    break;
}
?>
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
<?php
function tampilkanPesan(){
    echo "Selamat datang di PHP!<br>";
}

tampilkanPesan();
function paradigma($Halonama){
    echo ("halo, $Halonama! selamat datang di dunia php, php adalah penampung database<br>");
}
paradigma("pehapein ae");

function matematika($luas,$lebar){
$hasilnya = $lebar * $luas;
echo $hasilnya;
}
matematika(4,4);
function loop($a){
    echo ($a < 10);
    loop (1);
    return;
}
?>
<?php 
function cetaknama($OUT){
    echo "ini adalah hasil output nya $OUT";
    
}
cetaknama("haha cuy cuy cuy");

$Simi = "haha masa ga bisa";
function katakata($Simi){
    if (null == false){
        echo $Simi;
        return;
}
    if(empty($Simi)){
        echo null;
        return;
    }
    else {
        echo "terjadi kesalahan";
        return;
    }
}
katakata($Simi);
katakata($Simi);
katakata($Simi);
function JURUSAN($jurusan){
    $jurusan = 'akl';
    nl2br($jurusan);
}
$jurusan = 'tkj';
JURUSAN($jurusan);
echo $jurusan;

?>
<?php 
$pesan = "hello cuy HAHHAHA";
switch ($pesan){
case "Opsi 1";
echo file_get_contents("container.txt", $pesan);
break;
case "Opsi 2";
echo file_put_contents("container.txt", $pesan);
break;
default;
echo "NO FLE EXIST";
break;
}
$pesan = "daneshaa coool habizzz";
$chatting = "halo cuy cuy";
file_put_contents("file.txt", $pesan);
$chat = file_get_contents("file.txt",$chatting);
echo $chat;

$dataakl1= [
    ['nama' => 'Andika', 'struktur' => 'ketua kelas'],
    ['nama' => 'Najwa', 'struktur' => 'sekretaris'],
    ['nama' => 'Anggun', 'struktur' =>'bendahara'],
    ['nama' => 'Nur Rahma', 'struktur' => 'bendahara'],
];
$data = serialize($dataakl1);
file_put_contents("datakelas.txt", $data);
$keluar = file_get_contents("datakelas.txt", $data);
$keluarin = unserialize($keluar);
print_r($keluarin);
?>

// Edit lewat GNU MINGW32 Git  terminal seperti termux/linux/vmware dll.


