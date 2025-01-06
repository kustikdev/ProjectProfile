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