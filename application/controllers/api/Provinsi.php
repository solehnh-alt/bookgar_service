<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Provinsi extends REST_Controller {

    function __construct()
    {
		date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
		$this->load->model("Mprovinsi","provinsi");
    }
	
	public function getdata_get()
    {
        $data = $this->provinsi->getdata()->result_array();

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
