<?php
include 'koneksi.php';
$id + $_GET['id'];
mysql_query($koneksi,"DELETE FROM data WHERE id='$id'");
header("location:index.php");