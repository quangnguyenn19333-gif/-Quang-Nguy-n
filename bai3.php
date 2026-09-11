<?php
// Bài 3: Viết hàm inHinhChuNhat nhận 2 tham số (chiều rộng, chiều cao)
function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($i = 1; $i <= $chieuCao; $i++) {
        for ($j = 1; $j <= $chieuRong; $j++) {
            echo "* ";
        }
        echo "<br>"; // Xuống dòng trên giao diện web
    }
}

echo "<h3>Bài 3: In hình chữ nhật (Chiều rộng: 5, Chiều cao: 3)</h3>";
// Gọi hàm in hình chữ nhật có chiều rộng 5, chiều cao 3
inHinhChuNhat(5, 3);
?>
