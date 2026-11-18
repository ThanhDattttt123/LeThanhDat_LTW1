<?php
// Cau 1.1: In thong tin sinh vien
echo "<h2>THONG TIN SINH VIEN</h2>";
echo "Ho ten: Le Thanh Dat <br>";
echo "Ngay sinh: 06/02/2006 <br>";
echo "Ma so sinh vien: 2125110272 <br>";

echo "<hr>";

// Cau 1.2: Khai bao bien
$hoTen = "Le Thanh Dat";
$maSV = "2125110272";
$soDienThoai = "0869050000";
$ngaySinh = "06/02/2006";

echo "<h2>THONG TIN TU BIEN</h2>";
echo "Ho ten: $hoTen <br>";
echo "Ma sinh vien: $maSV <br>";
echo "So dien thoai: $soDienThoai <br>";
echo "Ngay sinh: $ngaySinh <br>";

// Cau 1.3: Khai bao hang so
define("HOST", "localhost");
define("DATABASE", "ltw1");
define("USERNAME", "root");
define("PASSWORD", "");

echo "<h2>THONG TIN KET NOI CSDL</h2>";
echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: " . PASSWORD . "<br>";

echo "<hr>";

// Cau 1.4: Phan biet nhay don va nhay kep
$ten = "Nguyen Van A";

echo "Su dung nhay kep: Xin chao $ten <br>";
echo 'Su dung nhay don: Xin chao $ten <br>';

// Nhay kep co the hien thi gia tri cua bien.
// Nhay don khong tu dong thay the gia tri bien.

echo "<hr>";

// Cau 1.5: Su dung comment

// Day la comment mot dong

/*
Day la comment nhieu dong.
Comment dung de chu thich ma nguon.
*/

echo "Ket thuc bai thuc hanh cau 1.";
?>