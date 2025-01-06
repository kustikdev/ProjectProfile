<?php 
$belajar1 = $_GET['pelajaran'];
$belajar2 = $_GET['siswa'];
$belajaripa = $_GET['guru'];
$Guru = $_GET['dewan guru'];
?>
<?php echo "<h3 style = text-align:center;>mata pelajaran</h3>"?>
<form action="index2.php" method="get">
    Matematika :<input type="text" value="masukan kata" name="pelajaran">
    siswa :<input type="number" name="siswa">
    guru :<input type="checkbox" name="dewan guru">
    <select name="guru">
    <option value="bu rifah">Matematika</option>
    <option value="pak aep">ipas</option>
    </select>
    <button type="submit">Submit</button>
    <p>berikut
    <?php 
    echo $belajar1;
    echo $belajar2;
    echo $belajaripa;
    echo $Guru;
    ?>*/
   /* </p>
    <?php echo "<hr>"?>
<?php
for ($i = 1;$i <= 5;$i++);
{
    echo $i;
}
?>
<?php 
$nilai = 100;

if ($nilai >= 90) {
    echo "Grade: A";
} elseif ($nilai >= 80) {
    echo "Grade: B";
} else {
    echo "Grade: C";
}
// Output: Grade: B
$anomalus = 1;
while ($anomalus <= 4){
    echo "anomali ada $anomalus";
    $anomalus++;
}
function tambah($a, $b) {
    return $a + $b; // Mengembalikan hasil penjumlahan
}

$hasil = tambah(3, 10);
echo "Hasil: $hasil"; // Output: Hasil: 7

?>
<?php 
$var = 12;
$var2 = 10;
if ($var > $var2){
    echo "sama";
}
else {
    echo "tidak sama";
}
?>
<?php 
$a = 15;
$b = 20;
if ($a < $b){
    echo "$a adalah bilangan terbesar";
}
else {
    echo "$b salah";
}
?>
<?php 
$positif = 5;
$negatif = -5;
if ($positif and 0){ 
    echo "$positif nilai positif<br>";
}
else {
    echo "$negatif nilai negatif<br>";
}
if ($negatif or 0){
    echo "$negatif adalah nilai kecil<br>";
}
else {
    echo "$negatif nilai berbeda<br>";
}
?>
<?php 
$umur = 17;
if ($umur >= 18){
    echo "Your has been allowed<br>";
}
else {
    echo "Sorry, Your not been allowed<br>";
}
?>
<?php 
$identik1 = 10;
$identik2 = 'bolla';
if (!$identik1 && $identik2){
    echo "ya benar";
}
else {
    echo "salah<br>";
}
?>
<?php 
$email =isset($_POST['email']);
$password =isset($_POST['password']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['username'];
    $password = $_POST['password'];
}?>
<html>
    <head>
        <tittle> produk dan harga</tittle>
    </head>
    <body>
        <form action="index2.php" method="post" multipart/form-data>
        <input type="file" value="upload" name="file">
        <input type="submit" value="submit" name="file"
            <label for="email">Produk:</label>
        <input type="email" value="masukan email">
        <label for="password">password</label>
        <input type="password" name="password">
        <input type="color">
        <button type="submit" value="submit" rows="5" col="5" onclick="alert('file disimpan')">submit</button> 
        </form>
        <?php echo "Terimakasih sudah login $email dan $password";
        ?>
    </body>
</html>
<?php function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest(); {

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
}
?>
<?/* 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data1 = $_POST['name'];
    $data2 = $_POST['age'];
$reposityindex = new reposityindex(); // new dipelajari pada OOP Object Oriented Php
$result = $reposityindex->saveData($data1, $data2);
}
if ($result) {
    echo "berhasil";
}
else {
    echo "tidka berhasil";
}
*/?>