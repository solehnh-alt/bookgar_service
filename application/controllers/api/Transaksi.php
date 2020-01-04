<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Transaksi extends REST_Controller {

    function __construct()
    {
		date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
		$this->load->model("Mtransaksi","transaksi");
    }
	
	public function save_post()
    {
        $data = [
            'id_user' 			    => $this->post('id_user'),
            'id_tempat' 			=> $this->post('id_tempat'),
            'id_carabayar' 			=> $this->post('id_carabayar'),
            'id_jadwal' 			=> $this->post('id_jadwal'),
            'tgl_jadwal' 	        => $this->post('tgl_jadwal'),
            'waktu_transaksi' 	    => date("Y-m-d h:i:s"),
            'waktu_pembayaran' 	    => date("Y-m-d h:i:s"),
            'jumlah_transaksi' 	    => $this->post('jumlah_transaksi'),
            'diskon_transaksi' 	    => $this->post('diskon_transaksi'),
            'potongan_transaksi' 	=> $this->post('potongan_transaksi'),
            'nominalreal' 	        => $this->post('nominalreal'),
            'status_transaksi' 	    => 0

		];

		$update=$this->transaksi->save($data);
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

    public function updatewaktupembayaran_post()
    {
        $id = $this->post('id');
        $data = [
			'waktu_pembayaran' 	=> date("Y-m-d h:i:s")
		];

		$update=$this->transaksi->update(array('id' => $id), $data);
        if($update){
            $this->response([
                'status' 	=> TRUE,
                'message' 	=> 'Pembayaran Berhasil di update',
                'data'		=> $data
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
				'message' => "Gagal di update",
            ], REST_Controller::HTTP_NOT_FOUND);
        }
        
    }

    public function updatestatustransaksi_post()
    {
        $id = $this->post('id');
        $data = [
			'status_transaksi' 	=> 1
		];

		$update=$this->transaksi->update(array('id' => $id), $data);
        if($update){
            $this->response([
                'status' 	=> TRUE,
                'message' 	=> 'Transaksi Terferivikasi',
                'data'		=> $data
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
				'message' => "Gagal di update",
            ], REST_Controller::HTTP_NOT_FOUND);
        }
        
    }

    public function update_post()
    {
        $id = $this->post('id');
        $data = [
            'id_tempat' 			=> $this->post('id_tempat'),
            'id_carabayar' 			=> $this->post('id_carabayar'),
            'id_jadwal' 			=> $this->post('id_jadwal'),
            'tgl_jadwal' 	        => $this->post('tgl_jadwal'),
            'waktu_transaksi' 	    => date("Y-m-d h:i:s"),
            'jumlah_transaksi' 	    => $this->post('jumlah_transaksi'),
            'diskon_transaksi' 	    => $this->post('diskon_transaksi'),
            'potongan_transaksi' 	=> $this->post('potongan_transaksi'),
            'nominalreal' 	        => $this->post('nominalreal'),

		];

		$update=$this->transaksi->update(array('id' => $id), $data);
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

		$delete=$this->transaksi->delete_by_id($id);
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
        $data = $this->transaksi->getdata($id);

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
