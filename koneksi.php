<?php
$conn_str = "host=satao.db.elephantsql.com " .
    "port= " .
    "user= " .
    "dbname= " .
    "password=";
$conn = pg_connect($conn_str);

if($conn) {
    echo "<h3>Koneksi Berhasil</h3>";
} else {
    echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
}
?>