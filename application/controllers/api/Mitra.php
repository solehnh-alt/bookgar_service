<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Mitra extends REST_Controller {

    function __construct()
    {
		date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
		$this->load->model("Mmitra","mitra");
	}
	
	public function getdata_get()
    {
		$id=null;
		if(!empty($_GET['id'])){
			$id=$_GET['id'];
		}

		$data = $this->mitra->getdata($id)->result_array();
		
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
	
	public function ceknowa_post()
    {
        $nowa = $this->post('nowa'); //inputan nomor WA dari Text Edit

		if(!empty($nowa)){
			$cek = $this->mitra->cek_nowa(array('nowa_mitra'=>$nowa))->num_rows();
			if(!empty($cek)){
				$this->set_response([
					'status' => FALSE,
					'message' => $nowa." Sudah Terdaftar"
					] , REST_Controller::HTTP_OK);
			}else{
				$this->set_response([
					'status' => TRUE,
					'message' => $nowa." Belum Terdaftar"
					] , REST_Controller::HTTP_OK);
			}
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'Masukan Nomor Whatsapp'
			], REST_Controller::HTTP_NOT_FOUND);
		}
        
    }
	
	public function kirimotp_post()
    {
        $data = [
            'nowa_val' 			=> $this->post('nowa'),
            'otp_val' 			=> $this->rand_code(),
            'createdtime_val' 	=> date("Y-m-d h:i:s")
        ];
		
		if(!empty($this->post('nowa'))){
			$this->mitra->add_otp($data);
				
				$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => "http://v1.wamanager.id/api/broadcast/create.php",
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 0,
				  CURLOPT_FOLLOWLOCATION => false,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "POST",
				  CURLOPT_POSTFIELDS => array('apikey' => 'd802ffdade','nomor' => $data['nowa_val'],'pesan' => $data['otp_val']." adalah kode verifikasi Bookgar untuk akun anda. Kode ini berlaku hanya 5 menit"),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);

				curl_close($curl);
		
			$this->response([
				'status' 	=> TRUE,
				'message' 	=> 'Berhasil Ditambahkan',
				'data'		=> $data
			], REST_Controller::HTTP_CREATED);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'Data Tidak Ada'
			], REST_Controller::HTTP_NOT_FOUND);
		}		
    }
	
	function verifikasi_post(){
		$kode = $this->post('kode');
		
		if(!empty($kode)){
			$cek = $this->mitra->cek_otp(array('otp_val'=>$kode))->row_array();
			if(!empty($cek)){
				$waktu = $cek['createdtime_val'];
				$menit = substr($cek['createdtime_val'],14,2);
				$menitnow=substr(date('Y-m-d h:i:s'),14,2);
				
				if($menitnow-$menit<=5){
					
					$data = [
						'email_mitra' 			=> $this->post('email'),
						'fname_mitra' 			=> $this->post('fname'),
						'lname_mitra' 			=> $this->post('lname'),
						'nik_mitra'				=> $this->post('nik_mitra'),
						'tanggallahir_mitra' 	=> $this->post('tgl_lahir'),
						'id_kelurahan' 			=> $this->post('id_kelurahan'),
						'alamatlengkap_mitra' 	=> $this->post('alamat'),
						'nowa_mitra' 			=> $this->post('nowa'),
						'password_mitra' 		=> password_hash($this->post('password'),PASSWORD_DEFAULT),
						'datecreated_mitra' 	=> date("Y-m-d h:i:s"),
						'datemodified_mitra' 	=> date("Y-m-d h:i:s"),
					];
					
					
					if(!empty($data)){
						$register=$this->mitra->register($data);
						$this->response([
							'status' 	=> TRUE,
							'message' 	=> 'Verifikasi dan Registrasi Berhasil',
							'data'		=> $data
						], REST_Controller::HTTP_OK);
					}else{
						$this->response([
							'status' 	=> FALSE,
							'message' 	=> 'Verifikasi dan Registrasi Gagal',
						], REST_Controller::HTTP_OK);
					}
					
					
				}else{
					$this->response([
						'status' => FALSE,
						'message' => 'Lebih dari 5 menit, kirim olang kode verifikasi'
					], REST_Controller::HTTP_NOT_FOUND);
				}
				
			}else{				
				$this->response([
					'status' => FALSE,
					'message' => $kode." Tidak Ada"
				], REST_Controller::HTTP_NOT_FOUND);
			}
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'Masukan Kode Verifikasi'
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
		
		$CodeEX = substr($RandCode,0,4);
		 
		return $CodeEX;
	
	}

	public function login_post(){
		$username = $this->post('email');
		$password = $this->post('password');
		if(empty($username) and empty($password)){
			$this->response([
				'status' => FALSE,
				'message' => "Username Mitra dan Password Harus di Isi"
			], REST_Controller::HTTP_NOT_FOUND);
		} else {
			
			$resmitra = $this->mitra->cek_mitra($username);
			if($resmitra->num_rows() < 1){
				$this->response([
					'status' => FALSE,
					'message' => "Email Mitra Tidak Terdaftar"
				], REST_Controller::HTTP_NOT_FOUND);
			} else {
				$r = $resmitra->row();
				$pass = $r->password_mitra;
				$verify = password_verify($password,$pass);
				if(!$verify){
					$this->response([
						'status' => FALSE,
						'message' => "Cek Kombinasi Password Anda !"
					], REST_Controller::HTTP_NOT_FOUND);
				} else {
					$data = array(
						'logged_in'		=> TRUE,
						'id'			=> $r->id,
						'email'		=> $r->email_mitra,
					);
					$this->response([
						'status' 	=> TRUE,
						'message' 	=> 'Login Berhasil',
						'data'		=> $data
					], REST_Controller::HTTP_OK);
				}
			}
		}
	}

	public function editbiomitra_post(){
		$where=$this->post('id');
		
		$data = [
			'email_mitra' 			=> $this->post('email'),
			'fname_mitra' 			=> $this->post('fname'),
			'lname_mitra' 			=> $this->post('lname'),
			'nik_mitra'				=> $this->post('nik_mitra'),
			'tanggallahir_mitra' 	=> $this->post('tgl_lahir'),
			'id_kelurahan' 			=> $this->post('id_kelurahan'),
			'alamatlengkap_mitra' 	=> $this->post('alamat'),
			'nowa_mitra' 			=> $this->post('nowa'),
			'datemodified_mitra' 	=> date("Y-m-d h:i:s"),
		];


		$update=$this->mitra->editbiodata($data,$where);
        if($update){
            $this->response([
                'status' 	=> TRUE,
                'message' 	=> 'Biodata Berhasil di Update',
                'data'		=> $data
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
				'message' => "Biodata Gagal di Update",
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}