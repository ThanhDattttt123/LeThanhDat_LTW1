
<?php

// Cau 3.1: Su dung ham trim()
echo "<h2>CAU 3.1: SU DUNG HAM TRIM()</h2>";

$chuoi = "    Xin chao cac ban PHP    ";

echo "Chuoi ban dau: [" . $chuoi . "]<br>";

$ketQua = trim($chuoi);

echo "Chuoi sau khi trim: [" . $ketQua . "]<br>";

echo "<hr>";

// Cau 3.2: Su dung ltrim() va rtrim()
echo "<h2>CAU 3.2: SU DUNG LTRIM() VA RTRIM()</h2>";

$chuoi = "    Hoc lap trinh PHP    ";

echo "Chuoi ban dau: [" . $chuoi . "]<br>";

$chuoiTrai = ltrim($chuoi);
echo "Sau khi ltrim: [" . $chuoiTrai . "]<br>";

$chuoiPhai = rtrim($chuoi);
echo "Sau khi rtrim: [" . $chuoiPhai . "]<br>";

echo "<hr>";

// Cau 3.3: Cat chuoi bang substr()
echo "<h2>CAU 3.3: CAT CHUOI SUBSTR()</h2>";

$vanBan = "Hoc PHP co ban den nang cao cho nguoi moi bat dau";

echo "Chuoi ban dau: " . $vanBan . "<br>";

// Lay 10 ky tu dau tien
$chuoiDau = substr($vanBan, 0, 10);
echo "10 ky tu dau tien: " . $chuoiDau . "<br>";

// Lay tu ky tu thu 5 den het chuoi
$chuoiConLai = substr($vanBan, 4);
echo "Tu ky tu thu 5 den het: " . $chuoiConLai . "<br>";

echo "<hr>";

// Cau 3.4: Thay the chuoi bang str_replace()
echo "<h2>CAU 3.4: THAY THE CHUOI</h2>";

$vanBan = "Toi dang hoc lap trinh HTML va HTML rat thu vi";

echo "Chuoi ban dau: " . $vanBan . "<br>";

// Thay the HTML thanh PHP
$ketQua = str_replace("HTML", "PHP", $vanBan);

echo "Chuoi sau khi thay the: " . $ketQua . "<br>";

echo "<hr>";

echo "KET THUC BAI THUC HANH CAU 3.";

?>