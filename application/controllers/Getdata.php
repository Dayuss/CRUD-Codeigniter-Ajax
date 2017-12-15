<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getdata extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array("DataModel" => "dbs"));
	}

	public function index(){
		$this->load->view('index');
	}

	public function get(){
		$id = $this->uri->segment(3);
		// echo $id;
		if($id > 0)
			$result = $this->dbs->get($id);
		else
		// echo "<pre>";
			$result = $this->dbs->get();

		echo json_encode($result);
	}

	public function insert(){
		$data = $this->input->post(null,true);
		$msk = $this->dbs->insert($data);
		if($msk){
			$result = array("status"=>'asup');
		}else{
			$result = array("status"=>'kaga asup');
		}
		echo json_encode($result);
	}

	public function update(){
		$data = $this->input->post(null,true);
		$id = $data['id'];
		unset($data['id']);
		$msk = $this->dbs->update($data,array("id_mhs"=>$id));
		if($msk){
			$result = array("status"=>'asup');
		}else{
			$result = array("status"=>'kaga asup');
		}
		echo json_encode($result);
	}

	public function delete(){
		$data = $this->input->post(null,true);
		$id = $data['id'];
		$msk = $this->dbs->delete($id);
		if($msk){
			$result = array("status"=>'asup');
		}else{
			$result = array("status"=>'kaga asup');
		}
		echo json_encode($result);
	}
}
