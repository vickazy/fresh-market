<?php 
session_start();
include '../../connection/connection.php';
include 'sqlcommand.php';

if(!isset($_POST['tipe']) || empty($_POST['tipe'])){
echo "Kesalahan pada input data ke sistem";
echo "<br> Mohon Cek Kembali data yang di proses.";
exit();
}

$tipe = $_POST['tipe'];

if($tipe=='admin'){
	$result = edit_sql($kon,'tb_admin',array('id_admin','user_admin','status_admin'),array($_POST['old_id'],$_POST['username'],$_POST['status']));
}

if($result){
	echo 'Data Telah Terupdate!';
	echo "<META http-equiv='refresh' content='1;".$_SESSION['lastpage']."'>";
}
else{
	echo "Data Gagal Terupdate!";
	echo "<META http-equiv='refresh' content='1;".$_SESSION['lastpage']."'>";
}


?>
