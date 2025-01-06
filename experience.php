<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $Container = [];

    if (isset($_POST['upload'])){
        $data = $_POST['upload'];
        $Container = [
            'value' => $data,
            'status' => 0 ,
        ];
        $Then = serialize($Container);
        file_put_contents('contents.txt',$Then);
        header('location:experience.php');
    }
    ?>
</head>
<body>
    <h1>Ujicoba lagi</h1>
        <form action="experience.php" method="post">
            Pencarian : <input type="text" placeholder="Search" name="data">
                <button type="submit"> Submit </button>
       
    <ul>
        <?php foreach ($Container as $vlaue => $status): ?>
                <li>
                    <label> <?php echo $status['upload']?></label>                    
                </li>
                    <a href="experienxe.php?hapus=1key=<?php echo $key;?>">Hapus</a>
             <?php endforeach;?>
             <li>haloo</li> 
             <a href="experience.php?key=<?php echo $key?>">Hapus</a>
            </ul>
        </form>
        <?php 
        if (isset($_POST['delete'])){
            $delete ($_POST['delete']);

            if (isset($Container[$deleteKey]))
            unset($Container[$deleteKey]);
            $Then = serialize($Container);
            file_put_contents('contents.txt',$Then);
            header('location:experience.php');
        }
        ?>
</body>
</html>