<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Kodeuniktf extends REST_Controller
{

    function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
        $this->load->model("Mkodeuniktf", "kodeuniktf");
    }

    public function save_post()
    {
        $kode=$this->rand_code();
        $total=$this->post('total_transfer')+$kode;
        $data = [
            'id_transaksi'        => $this->post('id_transaksi'),
            'kode_unik'           => $kode,
            'total_transfer'      => $total,
            'createdtime'         => date("Y-m-d h:i:s"),
            'expiredtime'         => $this->post('expiredtime'),
            'status'              => 0
        ];


        $update = $this->kodeuniktf->save($data);
        if ($update) {
            $this->response([
                'status'     => TRUE,
                'message'     => 'Berhasil di tambahkan',
                'data'        => $data
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => "Gagal di tambahkan",
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function update_post()
    {
        $id = $this->post('id');
        $data = [
            'id_transaksi'             => $this->post('id_transaksi'),
            'kode_unik'         => $this->post('kode_unik'),
            'total_transfer'         => $this->post('total_transfer'),
            'expiredtime'         => $this->post('expiredtime'),
            'status'         => $this->post('status')
        ];

        $update = $this->kodeuniktf->update(array('id' => $id), $data);
        if ($update) {
            $this->response([
                'status'     => TRUE,
                'message'     => 'Berhasil di update',
                'data'        => $data
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => "Gagal di update",
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function updatestatus_post()
    {
        $id = $this->post('id');
        $data = [
            'status'         => 1
        ];

        $update = $this->kodeuniktf->update(array('id' => $id), $data);
        if ($update) {
            $this->response([
                'status'     => TRUE,
                'message'     => 'Berhasil di update',
                'data'        => $data
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => "Gagal di update",
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    function rand_code()
	{
		$number = "0123456789";
		$numberS = str_shuffle($number);
		$subG = substr($numberS,0,5);
		$subH = substr($numberS,6,5);
		$subI = substr($numberS,10,5);
		$RandCode1 = str_shuffle($subG.$subH.$subI);
		$RandCode2 = str_shuffle($RandCode1);
		$RandCode = $RandCode1.$RandCode2;
		
		$CodeEX = substr($RandCode,0,3);
		 
		return $CodeEX;
	
	}

    public function delete_post()
    {
        $id = $this->post('id');

        $delete = $this->kodeuniktf->delete_by_id($id);
        if ($delete) {
            $this->response([
                'status'     => TRUE,
                'message'     => 'Berhasil di delete'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => "Gagal di delete",
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function getdata_get()
    {
        $id = null;
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
        }
        $data = $this->kodeuniktf->getdata($id);

        if (!empty($data)) {
            $this->response([
                'status'     => TRUE,
                'message'     => 'Data Ada',
                'data'        => $data
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => "Tidak Ada Data"
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }    
    
    public function getbyidtransaksi_get()
    {
        $idtransaksi = null;
        if (!empty($_GET['idtransaksi'])) {
            $idtransaksi = $_GET['idtransaksi'];
        }
        $data = $this->kodeuniktf->getdata($idtransaksid);

        if (!empty($data)) {
            $this->response([
                'status'     => TRUE,
                'message'     => 'Data Ada',
                'data'        => $data
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => "Tidak Ada Data"
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
