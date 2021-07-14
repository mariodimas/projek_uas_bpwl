<?php
class database{

var $host = "localhost";
var $uname = "root";
var $pass = "";
var $db = "project_uas_bpwl";
var $con;

function __construct(){
    $this->con=mysqli_connect($this->host, $this->uname,$this->pass,$this->db);
    mysqli_select_db($this->con,$this->db);

}

function tampil_data(){
    $data = mysqli_query($this->con, "select*from penerbangan");
    while ($d = mysqli_fetch_array($data)){
        $hasil[] = $d;
    }
    return $hasil;
}

function input($book_id,$maskapai,$kode_pesawat,$jam_keber,$tujuan,$status,$gate){
    mysqli_query($this->con,"insert into penerbangan values('','$book_id','$maskapai','$kode_pesawat','$jam_keber','$tujuan','$status','$gate')");
}

function hapus($id){
    mysqli_query($this->con,"delete from penerbangan where id='$id'");
}

function edit($id){
	$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from penerbangan where id='$id'");
	while($d = mysqli_fetch_array($data)){
	$hasil[] = $d;
	}
    return $hasil;
}
function update($id,$book_id,$maskapai,$kode_pesawat,$jam_keber,$tujuan,$status,$gate){
	mysqli_query($this -> con, "UPDATE penerbangan set book_id = '$book_id', maskapai='$maskapai', 
    kode_pesawat='$kode_pesawat', jam_keber='$jam_keber', tujuan='$tujuan', status='$status', gate='$gate'    
    where id='$id'");
	}
}
?>