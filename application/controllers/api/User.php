<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class User extends REST_Controller {

    function __construct()
    {
		date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
		$this->load->model("Muser","user");
    }
	
	public function ceknowa_post()
    {
        $nowa = $this->post('nowa'); //inputan nomor WA dari Text Edit

		if(!empty($nowa)){
			$cek = $this->user->cek_nowa(array('nowa_user'=>$nowa))->num_rows();
			if(!empty($cek)){
				$this->set_response([
					'status' => TRUE,
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
		
		if(!empty($data)){
			$this->user->add_otp($data);
				
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
			$cek = $this->user->cek_otp(array('otp_val'=>$kode))->row_array();
			if(!empty($cek)){
				$waktu = $cek['createdtime_val'];
				$menit = substr($cek['createdtime_val'],14,2);
				$menitnow=substr(date('Y-m-d h:i:s'),14,2);
				
				if($menitnow-$menit<=5){
					
					$data = [
						'email_user' 			=> $this->post('email'),
						'fname_user' 			=> $this->post('fname'),
						'lname_user' 			=> $this->post('lname'),
						'tanggallahir_user' 	=> $this->post('tgl_lahir'),
						'id_kelurahan' 			=> $this->post('id_kelurahan'),
						'alamatlengkap_user' 	=> $this->post('alamat'),
						'nowa_user' 			=> $this->post('nowa'),
						'password_user' 		=> password_hash($this->post('password'),PASSWORD_DEFAULT),
						'datecreated_user' 		=> date("Y-m-d h:i:s"),
						'datemodified_user' 	=> date("Y-m-d h:i:s"),
					];
					
					
					
					if(!empty($data)){
						$register=$this->user->register($data);
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
	
}
