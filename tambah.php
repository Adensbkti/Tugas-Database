<?php
include 'database.php';
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db->addBook($_POST['judul'], $_POST['author'], $_POST['tahun_terbit']);
    header("Location: index.php");
}
?>

<style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 20px;
            color: #333;
            line-height: 1.6;
        }
        
        .form-tambah {
            max-width: 600px;
            margin: 30px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .form-title {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 600;
        }
        
        .grup {
            margin-bottom: 20px;
        }
        
        .grup label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #2c3e50;
        }
        
        .form {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }
        
        .form:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        
        .btn-submit {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .btn-submit:hover {
            background-color: #2980b9;
        }
        
        @media (max-width: 768px) {
            .book-form-container {
                padding: 20px;
                margin: 20px 10px;
            }
            
            .form-title {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="form-tambah">
        <h2 class="form-title">Tambah Buku</h2>
        
        <form method="post">
            <div class="grup">
                <label for="judul">Judul</label>
                <input type="text" id="judul" name="judul" class="form" required>
            </div>
            
            <div class="grup">
                <label for="author">Penulis</label>
                <input type="text" id="author" name="author" class="form" required>
            </div>
            
            <div class="grup">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" id="tahun_terbit" name="tahun_terbit" class="form" required>
            </div>
            
            <button type="submit" class="btn-submit">Simpan Buku</button>
        </form>
    </div>
</body>
