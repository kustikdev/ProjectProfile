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