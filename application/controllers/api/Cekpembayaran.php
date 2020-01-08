<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Cekpembayaran extends REST_Controller {

    function __construct()
    {
		date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
		$this->load->model("Mcekpembayaran","cekpembayaran");
    }
	
	public function save_post()
    {
        $data = [
			'nominal' 		        => $this->post('nominal'),
			'status' 		        => 0
		];


		$update=$this->cekpembayaran->save($data);
        if($update){
            $this->response([
                'status' 	=> TRUE,
                'message' 	=> 'Berhasil di tambahkan',
                'data'		=> $data
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
				'message' => "Gagal di tambahkan",
            ], REST_Controller::HTTP_NOT_FOUND);
        }
        
    }

    public function updatestatus_post()
    {
        $id = $this->post('id');
        $data = [
			'status' 		        => 1
		];

		$update=$this->cekpembayaran->update(array('id' => $id), $data);
        if($update){
            $this->response([
                'status' 	=> TRUE,
                'message' 	=> 'Berhasil di update',
                'data'		=> $data
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
				'message' => "Gagal di update",
            ], REST_Controller::HTTP_NOT_FOUND);
        }
        
    }

    public function delete_post()
    {
        $id = $this->post('id');

		$delete=$this->cekpembayaran->delete_by_id($id);
        if($delete){
            $this->response([
                'status' 	=> TRUE,
                'message' 	=> 'Berhasil di delete'
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
				'message' => "Gagal di delete",
            ], REST_Controller::HTTP_NOT_FOUND);
        }
        
    }

    public function getdata_get()
    {
        $id=null;
		if(!empty($_GET['id'])){
			$id=$_GET['id'];
		}
        $data = $this->cekpembayaran->getdata($id);

        if(!empty($data)){
            $this->response([
                'status' 	=> TRUE,
                'message' 	=> 'Data Ada',
                'data'		=> $data
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => "Tidak Ada Data"
            ], REST_Controller::HTTP_NOT_FOUND);
        }
        
    }
	
}
