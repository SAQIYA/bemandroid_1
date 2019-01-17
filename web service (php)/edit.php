<?php
	include "koneksi.php";
	
	$id 	= $_POST['id'];
	
	class usr{}
	
	if (empty($id)) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Error Mengambil Data"; 
		die(json_encode($response));
	} else {
		$query 	= mysql_query("SELECT * FROM users WHERE id='".$id."'");
		$row 	= mysql_fetch_array($query);
		
		if (!empty($row)) {
			$response = new emp();
			$response->success = 1;
			$response->id = $row["id"];
			$response->username = $row["username"];
			$response->password = $row["password"];
			$response->nama = $row["nama"];
			$response->tmpt_lahir = $row["tmpt_lahir"];
			$response->tgl_lahir = $row["tgl_lahir"];
			$response->jk = $row["jk"];
			$response->alamat = $row["alamat"];
			$response->no_hp = $row["no_hp"];
			$response->email = $row["email"];
			$response->riwayat_organisasi = $row["riwayat_organisasi"];
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error Mengambil Data";
			die(json_encode($response)); 
		}	
	}
?>