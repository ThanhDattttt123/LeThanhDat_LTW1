<?php

// Cau 2.1: Cac phep toan so hoc
echo "<h2>CAU 2.1: CAC PHEP TOAN SO HOC</h2>";

$a = 10;
$b = 3;

echo "a = $a <br>";
echo "b = $b <br>";

echo "Cong: " . ($a + $b) . "<br>";
echo "Tru: " . ($a - $b) . "<br>";
echo "Nhan: " . ($a * $b) . "<br>";
echo "Chia: " . ($a / $b) . "<br>";
echo "Chia lay du: " . ($a % $b) . "<br>";

echo "<hr>";

// Cau 2.2: Toan tu so sanh
echo "<h2>CAU 2.2: TOAN TU SO SANH</h2>";

$x = 10;
$y = "10";

echo "x == y: ";
var_dump($x == $y);
echo "<br>";

echo "x === y: ";
var_dump($x === $y);
echo "<br>";

echo "x != y: ";
var_dump($x != $y);
echo "<br>";

echo "x <> y: ";
var_dump($x <> $y);
echo "<br>";

echo "x !== y: ";
var_dump($x !== $y);
echo "<br>";

/*
==  : So sanh gia tri.
=== : So sanh gia tri va kieu du lieu.
!=  : Khac nhau ve gia tri.
<>  : Giong toan tu !=.
!== : Khac nhau ve gia tri hoac kieu du lieu.
*/

echo "<hr>";

// Cau 2.3: Phep tang truoc va tang sau
echo "<h2>CAU 2.3: PHEP TANG</h2>";

$x = 5;

echo "Gia tri ban dau: $x <br>";

echo "Tang truoc (++x): " . (++$x) . "<br>";
echo "Gia tri sau tang truoc: $x <br>";

$x = 5;

echo "Gia tri ban dau: $x <br>";

echo "Tang sau (x++): " . ($x++) . "<br>";
echo "Gia tri sau tang sau: $x <br>";

/*
++$x: Tang gia tri truoc roi moi tra ve ket qua.
$x++: Tra ve gia tri hien tai roi moi tang.
*/

echo "<hr>";

// Cau 2.4: Noi chuoi
echo "<h2>CAU 2.4: NOI CHUOI</h2>";

$chuoi1 = "Xin chao ";
$chuoi2 = "cac ban";

$ketQua = $chuoi1 . $chuoi2;

echo "Su dung toan tu . : $ketQua <br>";

$chuoi1 .= $chuoi2;

echo "Su dung toan tu .= : $chuoi1 <br>";

/*
.  : Noi hai chuoi va tao ket qua moi.
.= : Noi chuoi va gan ket qua vao bien ben trai.
*/

echo "<hr>";

// Cau 2.5: Dem so luong ky tu
echo "<h2>CAU 2.5: DEM KY TU</h2>";

$chuoiKhongDau = "Hello PHP";
$chuoiCoDau = "Xin chao Viet Nam";

echo "Chuoi khong dau: $chuoiKhongDau <br>";
echo "So ky tu strlen: " . strlen($chuoiKhongDau) . "<br>";

echo "Chuoi co dau: $chuoiCoDau <br>";
echo "So ky tu mb_strlen: " . mb_strlen($chuoiCoDau, "UTF-8") . "<br>";

/*
strlen(): Dem so byte cua chuoi.
mb_strlen(): Dem so ky tu.
*/

echo "<hr>";

// Cau 2.6: Chuyen chu hoa va chu thuong
echo "<h2>CAU 2.6: CHUYEN DOI CHU HOA VA CHU THUONG</h2>";

$vanBan = "Xin Chao Cac Ban";

echo "Chuoi ban dau: $vanBan <br>";

echo "Chu in hoa: " . strtoupper($vanBan) . "<br>";
echo "Chu thuong: " . strtolower($vanBan) . "<br>";

echo "Chu in hoa Unicode: " . mb_strtoupper($vanBan, "UTF-8") . "<br>";
echo "Chu thuong Unicode: " . mb_strtolower($vanBan, "UTF-8") . "<br>";

/*
strtoupper(): Chuyen chu ASCII thanh chu hoa.
strtolower(): Chuyen chu ASCII thanh chu thuong.
mb_strtoupper(): Ho tro chu hoa Unicode.
mb_strtolower(): Ho tro chu thuong Unicode.
*/

echo "<hr>";

// Cau 2.7: Ep kieu chuoi sang int
echo "<h2>CAU 2.7: EP KIEU DU LIEU</h2>";

$chuoiA = "123 abc";
$chuoiB = "abc 123";

$soA = (int)$chuoiA;
$soB = (int)$chuoiB;

echo "Chuoi A: $chuoiA <br>";
var_dump($soA);

echo "<br>Chuoi B: $chuoiB <br>";
var_dump($soB);

echo "<hr>";

// Cau 2.8: Cac kieu du lieu
echo "<h2>CAU 2.8: CAC KIEU DU LIEU</h2>";

$soNguyen = 100;
$soThuc = 10.5;
$chuoi = "Hello PHP";
$logic = true;

echo "Kieu int: ";
var_dump($soNguyen);

echo "<br>Kieu float: ";
var_dump($soThuc);

echo "<br>Kieu string: ";
var_dump($chuoi);

echo "<br>Kieu bool: ";
var_dump($logic);

?>