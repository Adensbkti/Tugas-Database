
CREATE TABLE IF NOT EXISTS books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    author VARCHAR(100) NOT NULL,
    tahun_terbit YEAR NOT NULL
);

INSERT INTO books (judul, author, tahun_terbit) VALUES
('Praboro Love Mulyono', 'Lu Hut', 2025);