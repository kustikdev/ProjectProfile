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