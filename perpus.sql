
CREATE TABLE IF NOT EXISTS books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    author VARCHAR(100) NOT NULL,
    tahun_terbit YEAR NOT NULL
);

INSERT INTO books (judul, author, tahun_terbit) VALUES
('Praboro Love Mulyono', 'Lu Hut', 2025),
('Gibran Otw Presiden',	'Lu Meng',	2021),
('Sejarah Indonesia Mundur', 'Lu Xian',	2020),
('Maraknya Penyakit Brainrot', 'Hut meng',	2021),
('Kebangkitan Raja Iblis Obing', 'Cao Reng', 2022);
