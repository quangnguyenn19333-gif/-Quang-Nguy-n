<?php
// Bài 2: Viết chương trình PHP để kiểm tra xem một số nguyên có phải là số nguyên tố hay không

function laSoNguyenTo($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "<h3>Bài 2: Kiểm tra số nguyên tố</h3>";
$so = 7; // Khai báo số cần kiểm tra

if (laSoNguyenTo($so)) {
    echo "Số $so là số nguyên tố.";
} else {
    echo "Số $so không phải là số nguyên tố.";
}
?>
