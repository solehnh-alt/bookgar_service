<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Tempat extends REST_Controller {

    function __construct()
    {
		date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
		$this->load->model("Mtempat","tempat");
    }
	
	public function save_post()
    {
        $data = [
            'id_kelurahan' 			=> $this->post('id_kelurahan'),
            'nama_tempat' 	        => $this->post('nama_tempat'),
            'id_kategori' 	        => $this->post('id_kategori'),
            'id_mitra' 	            => $this->post('id_mitra'),
            'alamat_tempat' 	    => $this->post('alamat_tempat'),
            'lat' 	                => $this->post('lat'),
            'lang' 	                => $this->post('lang'),
            'harga_tempat' 	        => $this->post('harga_tempat'),
            'harga_jual' 	        => $this->post('harga_jual'),
            'deskripsi' 	        => $this->post('deskripsi'),
            'id_jam_buka' 	        => $this->post('id_jam_buka'),
            'id_jam_tutup' 	        => $this->post('id_jam_tutup'),
            'status_aktif' 	        => 0

		];

		$update=$this->tempat->save($data);
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

    public function aktifkantempat_post()
    {
        $id = $this->post('id');
        $data = [
			'status_aktif' 	=> 1
		];

		$update=$this->tempat->update(array('id' => $id), $data);
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

    public function nonaktifkantempat_post()
    {
        $id = $this->post('id');
        $data = [
			'status_aktif' 	=> 0
		];

		$update=$this->tempat->update(array('id' => $id), $data);
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

    public function update_post()
    {
        $id = $this->post('id');
        $data = [
            'id_kelurahan' 			=> $this->post('id_kelurahan'),
            'nama_tempat' 	        => $this->post('nama_tempat'),
            'id_kategori' 	        => $this->post('id_kategori'),
            'id_mitra' 	            => $this->post('id_mitra'),
            'alamat_tempat' 	    => $this->post('alamat_tempat'),
            'lat' 	                => $this->post('lat'),
            'lang' 	                => $this->post('lang'),
            'harga_tempat' 	        => $this->post('harga_tempat'),
            'harga_jual' 	        => $this->post('harga_jual'),
            'deskripsi' 	        => $this->post('deskripsi'),
            'id_jam_buka' 	        => $this->post('id_jam_buka'),
            'id_jam_tutup' 	        => $this->post('id_jam_tutup')

		];

		$update=$this->tempat->update(array('id' => $id), $data);
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

		$delete=$this->tempat->delete_by_id($id);
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
        $data = $this->tempat->getdata($id);

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
