<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'dbase5314');

$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Gagal tersambung dengan koneksi');

?>