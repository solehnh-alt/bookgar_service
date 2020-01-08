<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Kunjungan extends REST_Controller
{

    function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
        $this->load->model("Mkunjungan", "kunjungan");
    }

    public function save_post()
    {
        $data = [
            'id_eticket'         => $this->post('id_eticket'),
            'id_user'            => $this->post('id_user'),
            'id_tempat'          => $this->post('id_tempat'),
            'waktumasuk'         => date("Y-m-d h:i:s")
        ];


        $update = $this->kunjungan->save($data);
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
            'id_eticket'         => $this->post('id_eticket'),
            'id_tempat'          => $this->post('id_tempat')
        ];

        $update = $this->kunjungan->update(array('id' => $id), $data);
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

    public function delete_post()
    {
        $id = $this->post('id');

        $delete = $this->kunjungan->delete_by_id($id);
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
        $data = $this->kunjungan->getdata($id);

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
