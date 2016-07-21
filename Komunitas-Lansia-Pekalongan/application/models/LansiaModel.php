<?php
class LansiaModel extends CI_Model
{

    public function __construct(){
            $this->load->database();
    }
	public function getGaleri($where=""){
		$stmt=$this->db->query("select * from galeri ".$where);
		return $stmt->result_array();

	}
	public function selectData($tableName){
		$stmt=$this->db->query("select * from ".$tableName);
		return $stmt->result_array();
	}

	public function getDataId($tableName,$where){
		$stmt=$this->db->get_where($tableName,$where);
		return $stmt->result_array();
	}

	public function updateData($tableName,$data,$where){
		$this->db->where('id', $where);
		$this->db->update($tableName, $data);
	}

	public function deleteData($tableName,$where){
		$this->db->where('id', $where);
		$this->db->delete($tableName);
	}

	public function authLogin($where=""){
		$stmt=$this->db->get_where("user_login",$where);
		return $stmt->num_rows();
	}
	public function getLogin($where=""){
		$stmt=$this->db->get_where("user_login ",$where);
		return $stmt->result_array();
	}
	public function insertData($tabel,$data){
		$stmt = $this->db->insert($tabel,$data);
		return $stmt;		
	}
	public function countData($tableName){
		$stmt=$this->db->query("select * from ".$tableName);
		return $stmt->num_rows();
	}
}