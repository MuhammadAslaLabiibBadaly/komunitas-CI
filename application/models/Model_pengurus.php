<?php
	class Model_pengurus extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function get() {
			$data=$this->db->query("SELECT * FROM tb_pengurus");
			return $data;
		}

		function simpan($id,$nama,$gender,$alamat,$gaji) {
			$query="INSERT INTO tb_pengurus VALUES ('$id', '$nama', '$gender', '$alamat', '$gaji')";
			$this->db->query($query);
		}

		function edit($id) {
			$data=$this->db->query("SELECT * FROM tb_pengurus WHERE id='$id'");
			return $data;
		}

		function update($id,$nama,$gender,$alamat,$gaji) {
			$query="UPDATE tb_pengurus SET nama='$nama', gender='$gender', alamat='$alamat', gaji='$gaji' WHERE id='$id'";
			$this->db->query($query);
		}

		function delete($id) {
			$data=$this->db->query("DELETE FROM tb_pengurus WHERE id='$id'");
			return $data;
		}
	}
?>