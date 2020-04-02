<?php 
// Giả sử n = 10
$n = 10;
 
// Khai báo biến tổng và gán giá trị ban đầu = 0
$tong = 0;
// Khai báo biến tổng và gán giá trị ban đầu = 0
$gthua = 1;
// Bắt đầu lặp và cộng dồn vào biến tổng
for ($i = 1; $i <= $n; $i++){
     $gthua *= $i;
    $tong += $i/$i*$gthua ;
}
 
// In kết quả
echo "Tổng là: " . $tong;
 ?>