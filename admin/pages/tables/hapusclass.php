<?php
require '../../function.php';
$id = $_GET["id"];

if (hapusClass($id) > 0) {
    echo "<script>
            alert('data berhasil dihapus!');
            document.location.herf ='basic-table.php;
        </script>";
} else {
    echo "<script>
            alert('data Gagal dihapus!');
            document.location.herf ='basic-table.php;
        </script>";
}
