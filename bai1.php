<?php
// Bài 1: Viết chương trình PHP để in ra số chẵn từ 1 đến 10
echo "<h3>Bài 1: Danh sách các số chẵn từ 1 đến 10</h3>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>
