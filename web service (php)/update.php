<?php
	include "koneksi.php";
	
	$id 	= $_POST['id'];
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$nama 	= $_POST['nama'];
	$tmpt_lahir 	= $_POST['tmpt_lahir'];
	$tgl_lahir 	= $_POST['tgl_lahir'];
	$jk 	= $_POST['jk'];
	$alamat = $_POST['alamat'];
	$no_hp 	= $_POST['no_hp'];
	$email 	= $_POST['email'];
	$riwayat_organisasi 	= $_POST['riwayat_organisasi'];
	
	class usr{}
	
	if (empty($id) || empty($username) || empty($password) || empty($nama) || empty($tmpt_lahir) || empty($tgl_lahir) || empty($jk) || empty($alamat) || empty($no_hp) || empty($email) || empty($riwayat_organisasi)) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom isian tidak boleh kosong"; 
		die(json_encode($response));
	} else {
		$query = mysql_query("UPDATE users SET username='".$username."', password='".$password."', nama='".$nama."', tmpt_lahir='".$tmpt_lahir."', tgl_lahir='".$tgl_lahir."', jk='".$jk."', alamat='".$alamat."', no_hp='".$no_hp."', email='".$email."', riwayat_organisasi='".$riwayat_organisasi."' WHERE id='".$id."'");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data berhasil di update";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error update Data";
			die(json_encode($response)); 
		}	
	}
?>