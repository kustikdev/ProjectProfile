<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP menampilkan list</title>
</head>
<body>
    <style>
        html{
            background-color:whitesmoke;
            
        }
    </style>
    <?php 
    $new2 = [];
    // melakukan pengecekan file kalo tidak ada = gunakan file_exists
    if (file_exists('filebaru.txt')&&filesize('filebaru.txt')>0){
        $new = file_get_contents('filebaru.txt');
        // unserialize dari data string berubah ke ata array
        $new2 = unserialize($new);
        
    }
    // pastikan data ada protocol http $_POST
    if (isset($_POST['data'])){
        $data = $_POST['data'];
        $new2 [] = [
            'data' => $data,
            'status' => 0
        ];
        // file diambil dari file filebaru.txt 
        $seperti = serialize($new2);
        // lalu serialize dari data array ke string agar bisa dibaca file.txt 
        file_put_contents('filebaru.txt', $seperti);
        header('location:ujicoba.php');
    }
    ?>

<strong>
    <marquee>back-end PHP</marquee>
    <h1>Testimony</h1>
</strong>
    <div class="form-search">
        <form action="" method="POST"> <!--form mengunakan post-->
            Search : <input type="text" placeholder="Search" name="text" id="search" required minlength="3">
            <button type="submit" >Submit</button>
        
    </div>
    <div class="output-after-search">
        <ul> 
            <?php foreach ($new2 as $value => $content):?>
                <li>
		            <input type="checkbox" name="data">
		            <label><?php echo $content['data'];?></label>
		            <a href='#'>hapus</a>
	            </li>
            <?php endforeach;?>
            </form>
	                <li>
		            <input type="checkbox" name="test">
		            <label> Todo 1</label>
		            <a href='#'>hapus</a>
	            </li>
	            <li>
		            <input type="checkbox" name="test">
		            <label> Todo 1</label>
		            <a href='#'>hapus</a>
                </li>
    
    </ul>
    </div>
</body>
</html>