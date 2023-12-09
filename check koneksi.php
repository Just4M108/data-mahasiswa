<?php
include "koneksi.php";

$nim = $_post{"nim"};
$nama = $_post["nm_lengkap"];
$tmp_lahir = $_post{"tmp_lahir"};
$tgl_lahir = $_post["tgl_lahir"];
$jk = $_post["jk"];

$insert = mysql_query(konemksi,"insert into tbl_mahasiswa values ('$nim', '$nama', '$tmp_lahir', '$tgl_lahir', '$jk')");

if($insert) {
    echo "Data Berhasil Disimpan":;
} else {
    echo "Data Gagal Disimpan"
}
?>
