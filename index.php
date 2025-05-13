<?php
require_once 'database.php';

$db = new Database();
$books = $db->getBooks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1>Perpus</h1>
    <?php if(count($books) > 0): ?>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($books as $book){?>
            <tr>
                <td><?= $book['id'] ?></td>
                <td><?= $book['judul']?></td>
                <td><?= $book['author'] ?></td>
                <td><?= $book['tahun_terbit'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php else: ?>
        <p style="text-align:center;">Tidak ada data buku tersedia.</p>
    <?php endif; ?>
</body>
</html>
