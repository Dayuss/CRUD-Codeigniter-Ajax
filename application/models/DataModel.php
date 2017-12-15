<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataModel extends CI_Model{
	private $tbl = 'tbl_mhs';

	public function get($id=null){
		if($id != null){
			$this->db->where(array("id_mhs"=>$id));
		}

		return $this->db->get($this->tbl)->result();
	}

	public function insert($data=array()){
		$this->db->set($data);
		$this->db->insert($this->tbl);
		return $this->db->insert_id();
	}

	public function update($data=array(),$where=array()){
		$this->db->set($data);
        $this->db->where($where);
        return $this->db->update($this->tbl);
	}

	public function delete($id){
		if (!$id) {
          return FALSE;
        }

        $this->db->where("id_mhs",$id);
        $this->db->limit(1);
        return $this->db->delete($this->tbl);
	}
}
