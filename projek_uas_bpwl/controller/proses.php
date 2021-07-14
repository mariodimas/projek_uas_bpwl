<?php
include '../model/database.php';
$db = new database();

$aksi = $_GET["aksi"];
if ($aksi == "tambah"){
    $db->input($_POST['book_id'],$_POST['maskapai'],$_POST['kode_pesawat'],$_POST['jam_keber'],$_POST['tujuan'],$_POST['status'],$_POST['gate']);
    header("location:../view/tampil.php");
}else if($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/tampil.php");
}elseif($aksi == "update"){
    $db->update($_POST['id'],$_POST['book_id'],$_POST['maskapai'],$_POST['kode_pesawat'],$_POST['jam_keber'],$_POST['tujuan'],$_POST['status'],$_POST['gate']);
    header("location:../view/tampil.php");
}
?>