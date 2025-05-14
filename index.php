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
    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f0f4f8;
    margin: 0;
    padding: 20px;
    color: #333;
}

  .btn {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }
        
        .btn:hover {
            background-color: #45a049;
        }

h1 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 30px;
}
table {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    border-collapse: collapse;
    background: white;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 8px;
    overflow: hidden;
}
thead {
    background-color: #3498db;
    color: white;
}
th, td {
    padding: 12px 15px;
    text-align: left;
}
tbody tr:nth-child(even) {
    background-color: #f9fbfd;
}
tbody tr:hover {
    background-color: #eaf3fb;
}
@media (max-width: 600px) {
    body {
        padding: 10px;
    }
    table {
        width: 100%;
        font-size: 14px;
    }
}

    </style>
    
</head>
<body>
    <a href="tambah.php" class="btn">Tambah Produk</a>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($books as $book){?>
            <tr>
                <td><?= $book['id'] ?></td>
                <td><?= $book['judul']?></td>
                <td><?= $book['author'] ?></td>
                <td><?= $book['tahun_terbit'] ?></td>
                <td>
            <a href="edit.php?id=<?= $book['id'] ?>">Edit</a> | 
            <a href="hapus.php?id=<?= $book['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
        </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
