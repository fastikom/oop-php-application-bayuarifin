<?php 

class database{
	// properties
	var $host = "localhost";
	var $username = "root";
	var $pass = "";
	var $db = "user";

		//constructor adalah method atau fungsi yang otomatis dilakukan saat instansiasi dilakukan
	function __construct(){ 
		mysql_connect($this->host, $this->username, $this->pass); // Menyambungkan ke server
		mysql_select_db($this->db); // Memilih database
	}

	function tampil_data(){ //Fungsi yang digunakan untuk menampilkan data
		$data = mysql_query("select * from user"); //menampilkan semua data yang berada pada tabel user
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$jeniskelamin,$pekerjaan,$usia){  //Fungsi yang digunakan untuk menginputkan data
		mysql_query("insert into user values('','$nama','$alamat','$jeniskelamin','$pekerjaan','$usia')");
	}

	function hapus($id){  //Fungsi yang digunakan untuk menghapus data
		mysql_query("delete from user where id='$id'");  
	}

	function edit($id){  //Fungsi yang digunakan untuk mengedit data
		$data = mysql_query("select * from user where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$jeniskelamin,$pekerjaan,$usia){  //Fungsi yang digunakan agar data dapat di update
		mysql_query("update user set nama='$nama', alamat='$alamat', jeniskelamin='$jeniskelamin', pekerjaan='$pekerjaan', usia='$usia' where id='$id'");
	}

} 

?>