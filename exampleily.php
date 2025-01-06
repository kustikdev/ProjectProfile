<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penampungan Data</title>
    <?php 
    $WKWK = [];

    if (file_exists('datanama.txt')) {
        $CAPEK = file_get_contents('datanama.txt');
        $WKWK = unserialize($CAPEK);
    }

    if (isset($_POST['data'])) {
        $baru = $_POST['data'];
        $WKWK[] = [
            'data' => $baru,
            'status' => 0
        ];
        $hehe = serialize($WKWK);
        file_put_contents('datanama.txt', $hehe);
    }
    ?>
</head>
<body>
    <h1>Penampungan Data</h1>
    <form action="" method="post">
        <ul>
        <input type="text" name="data" placeholder="Masukkan data baru">
        <button type="submit">Simpan</button>
            <?php foreach ($WKWK as $key => $value): ?>
                <li>
                    <input type="checkbox" <?php echo $value['status'] ? 'checked' : ''; ?>>
                    <?php echo htmlspecialchars($value['data']); ?>
                    <a href="?delete=<?php echo $key; ?>">Hapus</a>
                </li>
            <?php endforeach; ?>
        </ul>

    </form>

    <?php 
    if (isset($_GET['delete'])) {
        $deleteKey = $_GET['delete'];
        if (isset($WKWK[$deleteKey])) {
            unset($WKWK[$deleteKey]);
            $hehe = serialize($WKWK);
            file_put_contents('datanama.txt', $hehe);
            header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
            exit();
        }
    }
    ?>
</body>
</html>