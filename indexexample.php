<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $new2 =[];
    if (file_exists('filebaru.txt')){
        $new = file_get_contents('filebaru.txt');
        $new2 = unserialize($new);
    }
    if (isset($_POST['data'])){
        $data = $_POST['data'];
        $new2 []=[
            'data' => $data,
            'status' => 0
        ];
        file_put_contents('filebaru.txt', serialize($new2));
    }
    ?>

<h1>Testimony</h1>
    <form action="" method="post">
        <input type="text" name="test">
        <button type="submit">Submit</button>
    </form>
    <ul><?php foreach ($new2 as $value => $content): ?>
    <li>
		<input type="checkbox" name="test">
		<label> <?php echo $content['status'];?></label>
		<a href='#'>hapus</a>
	</li>
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
    <?php endforeach;?>
    </ul>
    <footer> <p> tidak ada hasil lagi </p> </footer>
    
</body>
</html>