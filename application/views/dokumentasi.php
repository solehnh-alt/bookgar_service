<!DOCTYPE html>
<html lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Dokumentasi API Bookgar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=base_url()?>/assets/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>/assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/flaticon.css">
    <link href="<?=base_url()?>/assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>/assets/slider.css">
    <link href="<?=base_url()?>/assets/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/purple.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/jtable.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/validationEngine.jquery.min.css" rel="stylesheet">
    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="js/html5shim.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?=base_url()?>/assets/img/favicon/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?=base_url()?>/assets/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="<?=base_url()?>assets/ft-syntax-highlight-master/src/ft-syntax-highlight.css">
	<style>
div.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 10px;
}
</style>
</head>
<body>

        <header>
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="logo">
                    <h1><a href="">Book<span class="color">Gar</span></a></h1>
                    <div class="hidden-phone hmeta">Sewa Tempat Olahraga</div>
                </div>
            </div>
            <div class="span8">
            </div>
        </div>
    </div>
</header>        <!-- Navigation bar starts -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span>Menu</span>
            </a>
            <div class="nav-collapse collapse">
                
            </div>
        </div>
    </div>
</div>
<!-- Navigation bar ends -->        
<div class="content">
<div class="container">
	<div class="row">
		<!-- <div class="span3 sticky"> -->
        <!-- <div class="span3 sticky">
			<ul id="ro-doc-nav" class="nav nav-list bs-docs-sidenav">
				<li class="active"><a href="#memulai" data-toggle="list"><i class="icon-chevron-right"></i> Memulai</a></li>
				<li class="nav-header"><span class="b-purple">Cek Nomor Whatsaap User</span></li>
					<li class=""><a href="#province-ringkasan" data-toggle="list"><i class="icon-chevron-right"></i> Ringkasan</a></li>
					<li class=""><a href="#province-request" data-toggle="list"><i class="icon-chevron-right"></i> Request</a></li>
					<li class=""><a href="#province-response" data-toggle="list"><i class="icon-chevron-right"></i> Response</a></li>
				<li class="nav-header"><span class="b-purple">Kirim Kode Verifikasi</span></li>
					<li class=""><a href="#city-ringkasan" data-toggle="list"><i class="icon-chevron-right"></i> Ringkasan</a></li>
					<li class=""><a href="#city-request" data-toggle="list"><i class="icon-chevron-right"></i> Request</a></li>
					<li class=""><a href="#city-response" data-toggle="list"><i class="icon-chevron-right"></i> Response</a>
				</li>
				<li class="nav-header"><span class="b-purple">Verifikasi Akun</span></li>
					<li class=""><a href="#subdistrict-ringkasan" data-toggle="list"><i class="icon-chevron-right"></i> Ringkasan</a></li>
					<li class=""><a href="#subdistrict-request" data-toggle="list"><i class="icon-chevron-right"></i> Request</a></li>
					<li class=""><a href="#subdistrict-response" data-toggle="list"><i class="icon-chevron-right"></i> Response</a></li>
				<li class="nav-header"><span class="b-purple">Login</span></li>
					<li class=""><a href="#cost-ringkasan" data-toggle="list"><i class="icon-chevron-right"></i> Ringkasan</a></li>
					<li class=""><a href="#cost-request" data-toggle="list"><i class="icon-chevron-right"></i> Request</a></li>
					<li class=""><a href="#cost-response" data-toggle="list"><i class="icon-chevron-right"></i> Response</a></li>
                <li class="nav-header"><span class="b-purple">Data Kelurahan</span></li>
					<li class=""><a href="#kelurahan-ringkasan" data-toggle="list"><i class="icon-chevron-right"></i> Ringkasan</a></li>
					<li class=""><a href="#kelurahan-request" data-toggle="list"><i class="icon-chevron-right"></i> Request</a></li>
					<li class=""><a href="#kelurahan-response" data-toggle="list"><i class="icon-chevron-right"></i> Response</a></li>
                <li class="nav-header"><span class="b-purple">Data Kabupaten</span></li>
					<li class=""><a href="#kabupaten-ringkasan" data-toggle="list"><i class="icon-chevron-right"></i> Ringkasan</a></li>
					<li class=""><a href="#kabupaten-request" data-toggle="list"><i class="icon-chevron-right"></i> Request</a></li>
					<li class=""><a href="#kabupaten-response" data-toggle="list"><i class="icon-chevron-right"></i> Response</a></li>
                <li class="nav-header"><span class="b-purple">Data Provinsi</span></li>
					<li class=""><a href="#provinsi-ringkasan" data-toggle="list"><i class="icon-chevron-right"></i> Ringkasan</a></li>
					<li class=""><a href="#provinsi-request" data-toggle="list"><i class="icon-chevron-right"></i> Request</a></li>
					<li class=""><a href="#provinsi-response" data-toggle="list"><i class="icon-chevron-right"></i> Response</a></li>
			</ul>
		</div> -->
		<div class="span12">
        <div class="list-content">
            <section class="ro-docs" id="memulai">
                <h3>Dokumentasi API BookGar</h3>
                <hr/>
                <p>Dokumentasi ini menjelaskan cara mengakses layanan API BookGar</p>
            </section>
            <section id="province-ringkasan">
			<hr/>
                <h3><strong>Cek Nomor Whatsaap User</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "ceknowa" digunakan untuk mengecek nomor whatsapp sudah terdaftar atau belum.</p>
            </section>
            <section id="province-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#province-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#province-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#province-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="province-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/user/ceknowa</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="province-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>nowa</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nomor Whatsapp User</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Catatan:</strong></p>
                        <ul>
                            <li>Nomor Whatsapp Harus di awali dengan 62</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="province-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/user/ceknowa , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="province-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#province-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#province-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#province-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div id="province-success-response" class="tab-pane fade in active">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
	"status": true,
	"message": "6285702015553 Sudah Terdaftar"
}
{
	"status": true,
	"message": "628570201555 Belum Terdaftar"
}
</code>
					
</pre>

                    </div>
                    <div id="province-error-response" class="tab-pane fade">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
	"status": false,
	"message": "Masukan Nomor Whatsapp"
}
</code>
					
</pre>
                    </div>
                    <div class="tab-pane fade" id="province-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>message</td>
                                <td>string</td>
                                <td>pesan sudah terdaftar atau belum</td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="city-ringkasan">
			<hr/>
                <h3><strong>Kirim Kode Verifikasi</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "kirimotp" digunakan untuk mendapatkan kode verifikasi akun yang dikirim melalui Whatsapp jika nomor yang di masukan belum pernah terdaftar pada aplikasi BookGar ini. Nomor yang dimasukan di awali dengan kode 62. Setelah request ini sukses, user akan menerima pesan berupa kode sejumlah 4 karakter yang berlaku 5 menit setelah kode itu di kirimkan</p>
            </section>
            <section id="city-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#city-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#city-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#city-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="city-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/user/kirimotp</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="city-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>nowa</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nomor Whatsapp User</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Catatan:</strong></p>
                        <ul>
                            <li>Nomor Whatsapp Harus di awali dengan 62</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="city-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/user/kirimotp , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="city-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#city-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#city-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#city-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="city-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil Ditambahkan",
    "data": {
        "nowa_val": "6285702015553",
        "otp_val": "6152",
        "createdtime_val": "2019-12-02 10:19:14"
    }
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="city-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Data Tidak Ada",
    "data": {
        "nowa_val": "6285702015553",
        "otp_val": "6152",
        "createdtime_val": "2019-12-02 10:19:14"
    }
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="city-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="subdistrict-ringkasan">
				<hr/>
                <h3><strong>VERIFIKASI & REGISTRASI AKUN</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "verifikasi" digunakan untuk mengecek kode verifikasi apakah cocok atau tidak , dan ketika cocok maka akan mengirimkan biodata user untuk Registrasi.</p>
            </section>
            <section id="subdistrict-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#subdistrict-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#subdistrict-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#subdistrict-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="subdistrict-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/user/verifikasi</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="subdistrict-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>email</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Email User</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>password</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Password User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>fname</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nama Depan User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lname</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nama Belakang User</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>id_kelurahan</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Id Kelurahan Referensi dari tabel Kelurahan</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>tgl_lahir</td>
                                <td>Ya</td>
                                <td>Date</td>
                                <td>Tanggal Lahir User</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>alamat</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Alamat User</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>kode</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Kode yang dikirim oleh sistem kepada User melalui Whatsapp</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Catatan:</strong></p>
                        <ul>
                            <li>Kode sejumlah 4 karakter
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="subdistrict-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/user/verifikasi, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="subdistrict-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#subdistrict-success-response">Response sukses</a>
                    </li>
                    <li><a data-toggle="tab" href="#subdistrict-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#subdistrict-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="subdistrict-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Verifikasi dan Registrasi Berhasil",
    "data": {
        "email_user": "solehn.hayat@gmail.com",
        "fname_user": "Soleh Nur",
        "lname_user": "Hayat",
        "tanggallahir_user": "2008-08-30",
        "id_kelurahan": "1101010001",
        "alamatlengkap_user": "Selanegara",
        "nowa_user": "6285702015553",
        "password_user": "$2y$10$0o6GKXfCLghflG.Mp5qpY.uy6lM0OccOyfd/zcpV/9h39YBZjTBDi",
        "datecreated_user": "2019-12-02 12:36:09",
        "datemodified_user": "2019-12-02 12:36:09"
    }
}
</code>
					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="subdistrict-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Lebih dari 5 menit, kirim olang kode verifikasi"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="subdistrict-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="cost-ringkasan">
			<hr/>
                <h3>Login</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "login" digunakan untuk login aplikasi.</p>
            </section>
            <section id="cost-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#cost-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#cost-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#cost-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="cost-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/user/login</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="cost-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>email</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Email User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>password</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Password User</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="cost-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/user/login, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="cost-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#cost-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#cost-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#cost-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="cost-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Login Berhasil",
    "data": {
        "logged_in": true,
        "id": "10",
        "username": "solehn.hayat@gmail.com"
    }
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="cost-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Cek Kombinasi Password Anda !"
}
</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="cost-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="editbio-ringkasan">
			<hr/>
                <h3>Edit Biodata User</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method editbiodata dalam user ini digunakan untuk Menedit biodata user</p>
            </section>
            <section id="editbio-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#editbio-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#editbio-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#editbio-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="editbio-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/user/editbiodata</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="editbio-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>email</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Email User</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>password</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Password User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>fname</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nama Depan User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lname</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nama Belakang User</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>id_kelurahan</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Id Kelurahan Referensi dari tabel Kelurahan</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>tgl_lahir</td>
                                <td>Ya</td>
                                <td>Date</td>
                                <td>Tanggal Lahir User</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>alamat</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Alamat User</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="editbio-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/user/editbiodata, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="editbio-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#editbio-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#editbio-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#editbio-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="editbio-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Biodata Berhasil di Update",
    "data": {
        "email_user": "ss@gmail.com",
        "fname_user": "richdd",
        "lname_user": "brian",
        "tanggallahir_user": "1999-09-09",
        "id_kelurahan": "1101010001",
        "alamatlengkap_user": "sssd",
        "datemodified_user": "2019-12-24 05:27:49"
    }
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="editbio-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="editbio-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="desa-ringkasan">
			<hr/>
                <h3>Get Data Desa</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method getdata dalam desa ini digunakan untuk mengambil semua data desa dari dalam database.</p>
            </section>
            <section id="desa-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#desa-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#desa-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#desa-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="desa-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>http://devwpa.com/api/desa/getdata</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="desa-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="desa-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.GET, 
	http://devwpa.com/api/desa/getdata, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="desa-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#desa-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#desa-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#desa-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="desa-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status":true,
    "message":"Data Ada",
    "data":[
                {
                    "id": "1101010001",
                    "district_id": "1101010",
                    "name": "LATIUNG"
                }
            ]
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="desa-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="desa-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>id</td>
                                <td>int</td>
                                <td>ID Desa</td>
                            </tr>
                            <tr>
                                <td>district_id</td>
                                <td>int</td>
                                <td>ID Kelurahan</td>
                            </tr>
							<tr>
                                <td>name</td>
                                <td>String</td>
                                <td>Nama Desa</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="kelurahan-ringkasan">
			<hr/>
                <h3>Get Data Kelurahan</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method getdata dalam kelurahan ini digunakan untuk mengambil semua data kelurahan dari dalam database.</p>
            </section>
            <section id="kelurahan-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#kelurahan-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#kelurahan-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#kelurahan-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="kelurahan-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>http://devwpa.com/api/kelurahan/getdata</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="kelurahan-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="kelurahan-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.GET, 
	http://devwpa.com/api/kelurahan/getdata, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="kelurahan-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#kelurahan-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#kelurahan-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#kelurahan-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="kelurahan-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status":true,
    "message":"Data Ada",
    "data":[
                {
                    "id":"1101010",
                    "regency_id":"1101",
                    "name":"TEUPAH SELATAN"
                }
            ]
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="kelurahan-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="kelurahan-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>id</td>
                                <td>int</td>
                                <td>ID Kelurahan</td>
                            </tr>
                            <tr>
                                <td>regency_id</td>
                                <td>int</td>
                                <td>ID Kabupaten</td>
                            </tr>
							<tr>
                                <td>name</td>
                                <td>String</td>
                                <td>Nama Kelurahan</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="kebupaten-ringkasan">
			<hr/>
                <h3>Get Data Kabupaten</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method getdata dalam kabupaten ini digunakan untuk mengambil semua data kabupaten dari dalam database.</p>
            </section>
            <section id="kebupaten-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#kebupaten-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#kebupaten-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#kebupaten-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="kebupaten-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>http://devwpa.com/api/kabupaten/getdata</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="kebupaten-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="kebupaten-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.GET, 
	http://devwpa.com/api/kabupaten/getdata, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="kebupaten-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#kebupaten-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#kebupaten-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#kebupaten-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="kebupaten-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status":true,
    "message":"Data Ada",
    "data":[
                {
                    "id":"1101",
                    "province_id":"11",
                    "name":"KABUPATEN SIMEULUE"                
                }
            ]
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="kebupaten-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="kebupaten-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>id</td>
                                <td>int</td>
                                <td>ID Kabupaten</td>
                            </tr>
                            <tr>
                                <td>province_id</td>
                                <td>int</td>
                                <td>ID Provinsi</td>
                            </tr>
							<tr>
                                <td>name</td>
                                <td>String</td>
                                <td>Nama Kabupaten</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="provinsi-ringkasan">
			<hr/>
                <h3>Get Data Provinsi</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method getdata dalam provinsi ini digunakan untuk mengambil semua data provinsi dari dalam database.</p>
            </section>
            <section id="provinsi-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#provinsi-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#provinsi-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#provinsi-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="provinsi-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>http://devwpa.com/api/provinsi/getdata</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="provinsi-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="provinsi-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.GET, 
	http://devwpa.com/api/provinsi/getdata, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="provinsi-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#provinsi-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#provinsi-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#provinsi-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="provinsi-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status":true,
    "message":"Data Ada",
    "data":[
                {
                    "id":"11",
                    "name":"ACEH"               
                }
            ]
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="provinsi-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="provinsi-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>id</td>
                                <td>int</td>
                                <td>ID Provinsi</td>
                            </tr>
							<tr>
                                <td>name</td>
                                <td>String</td>
                                <td>Nama Kabupaten</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            
            <section id="ceknowamitra-ringkasan">
			<hr/>
                <h3><strong>Cek Nomor Whatsaap Mitra</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "ceknowa" digunakan untuk mengecek nomor whatsapp sudah terdaftar atau belum.</p>
            </section>
            <section id="ceknowamitra-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#ceknowamitra-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#ceknowamitra-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#ceknowamitra-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="ceknowamitra-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/mitra/ceknowa</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="ceknowamitra-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>nowa</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nomor Whatsapp Mitra</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Catatan:</strong></p>
                        <ul>
                            <li>Nomor Whatsapp Harus di awali dengan 62</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="ceknowamitra-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/mitra/ceknowa , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="ceknowamitra-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#ceknowamitra-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#ceknowamitra-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#ceknowamitra-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div id="ceknowamitra-success-response" class="tab-pane fade in active">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
	"status": true,
	"message": "6285702015553 Sudah Terdaftar"
}
{
	"status": true,
	"message": "628570201555 Belum Terdaftar"
}
</code>
					
</pre>

                    </div>
                    <div id="ceknowamitra-error-response" class="tab-pane fade">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
	"status": false,
	"message": "Masukan Nomor Whatsapp"
}
</code>
					
</pre>
                    </div>
                    <div class="tab-pane fade" id="ceknowamitra-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>message</td>
                                <td>string</td>
                                <td>pesan sudah terdaftar atau belum</td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="otpmitra-ringkasan">
			<hr/>
                <h3><strong>Kirim Kode Verifikasi Mitra</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "kirimotp" digunakan untuk mendapatkan kode verifikasi akun yang dikirim melalui Whatsapp jika nomor yang di masukan belum pernah terdaftar pada aplikasi BookGar ini. Nomor yang dimasukan di awali dengan kode 62. Setelah request ini sukses, user akan menerima pesan berupa kode sejumlah 4 karakter yang berlaku 5 menit setelah kode itu di kirimkan</p>
            </section>
            <section id="otpmitra-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#otpmitra-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#otpmitra-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#otpmitra-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="otpmitra-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/mitra/kirimotp</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="otpmitra-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>nowa</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nomor Whatsapp Mitra</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Catatan:</strong></p>
                        <ul>
                            <li>Nomor Whatsapp Harus di awali dengan 62</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="otpmitra-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/mitra/kirimotp , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="otpmitra-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#otpmitra-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#otpmitra-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#otpmitra-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="otpmitra-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil Ditambahkan",
    "data": {
        "nowa_val": "6285702015553",
        "otp_val": "6152",
        "createdtime_val": "2019-12-02 10:19:14"
    }
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="otpmitra-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Data Tidak Ada",
    "data": {
        "nowa_val": "6285702015553",
        "otp_val": "6152",
        "createdtime_val": "2019-12-02 10:19:14"
    }
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="otpmitra-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="registrasimitra-ringkasan">
				<hr/>
                <h3><strong>VERIFIKASI & REGISTRASI AKUN MITRA</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "verifikasi" digunakan untuk mengecek kode verifikasi apakah cocok atau tidak , dan ketika cocok maka akan mengirimkan biodata user untuk Registrasi.</p>
            </section>
            <section id="registrasimitra-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#registrasimitra-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#registrasimitra-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#registrasimitra-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="registrasimitra-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/mitra/verifikasi</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="registrasimitra-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>email</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Email Mitra</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>password</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Password Mitra</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>fname</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nama Depan Mitra</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lname</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nama Belakang Mitra</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>id_kelurahan</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Id Kelurahan Referensi dari tabel Kelurahan</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>tgl_lahir</td>
                                <td>Ya</td>
                                <td>Date</td>
                                <td>Tanggal Lahir Mitra</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>alamat</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Alamat Mitra</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>kode</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Kode yang dikirim oleh sistem kepada User melalui Whatsapp</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>nik_mitra</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nomor Induk Kependudukan Mitra</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Catatan:</strong></p>
                        <ul>
                            <li>Kode sejumlah 4 karakter
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="registrasimitra-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/mitra/verifikasi, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="registrasimitra-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#registrasimitra-success-response">Response sukses</a>
                    </li>
                    <li><a data-toggle="tab" href="#registrasimitra-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#registrasimitra-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="registrasimitra-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Verifikasi dan Registrasi Berhasil",
    "data": {
        "email_mitra": "ss@gmail.com",
        "fname_mitra": "richdd",
        "lname_mitra": "brian",
        "nik_mitra": "3303043007960001",
        "tanggallahir_mitra": "1999-09-09",
        "id_kelurahan": "1101010001",
        "alamatlengkap_mitra": "sssd",
        "nowa_mitra": "6285702015553",
        "password_mitra": "$2y$10$O05PXFZqZGv8bczsHIja7.q63FjoXWfjLGr7AnHLmeRG1Q3FbeqqK",
        "datecreated_mitra": "2019-12-24 05:19:39",
        "datemodified_mitra": "2019-12-24 05:19:39"
    }
}
</code>
					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="registrasimitra-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Lebih dari 5 menit, kirim olang kode verifikasi"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="registrasimitra-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="loginmitra-ringkasan">
			<hr/>
                <h3>Login Mitra</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "login" digunakan untuk login aplikasi.</p>
            </section>
            <section id="loginmitra-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#loginmitra-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#loginmitra-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#loginmitra-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="loginmitra-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/mitra/login</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="loginmitra-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>email</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Email User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>password</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Password User</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="loginmitra-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/mitra/login, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="loginmitra-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#loginmitra-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#loginmitra-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#loginmitra-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="loginmitra-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Login Berhasil",
    "data": {
        "logged_in": true,
        "id": "6",
        "email": "ss@gmail.com"
    }
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="loginmitra-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Cek Kombinasi Password Anda !"
}
</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="loginmitra-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="editbiomitra-ringkasan">
			<hr/>
                <h3>Edit Biodata Mitra</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method editbiodatamitra dalam mitra ini digunakan untuk Mengedit biodata Mitra</p>
            </section>
            <section id="editbiomitra-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#editbiomitra-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#editbiomitra-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#editbiomitra-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="editbiomitra-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/mitra/editbiomitra</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="editbiomitra-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>email</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Email User</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>password</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Password User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>fname</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nama Depan User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lname</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nama Belakang User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>nik_mitra</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>NIK Mitra</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>id_kelurahan</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Id Kelurahan Referensi dari tabel Kelurahan</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>tgl_lahir</td>
                                <td>Ya</td>
                                <td>Date</td>
                                <td>Tanggal Lahir User</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>alamat</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Alamat User</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="editbiomitra-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/user/editbiomitra, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="editbiomitra-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#editbiomitra-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#editbiomitra-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#editbiomitra-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="editbiomitra-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Biodata Berhasil di Update",
    "data": {
        "email_mitra": "mitra@gmail.com",
        "fname_mitra": "mitra",
        "lname_mitra": "mitra",
        "nik_mitra": "3303043007960002",
        "tanggallahir_mitra": "1999-09-10",
        "id_kelurahan": "1101010001",
        "alamatlengkap_mitra": "mitra",
        "nowa_mitra": "6285702015554",
        "datemodified_mitra": "2019-12-24 06:33:19"
    }
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="editbiomitra-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="editbiomitra-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="savetempat-ringkasan">
			<hr/>
                <h3>Save Data Tempat</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method save tempat ini digunakan menambahkan tempat</p>
            </section>
            <section id="savetempat-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#savetempat-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#savetempat-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#savetempat-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="savetempat-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/tempat/save</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="savetempat-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_kelurahan</td>
                                <td>Ya</td>
                                <td>char</td>
                                <td>Kelurahan Referensi dari tabel kelurahan</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>nama_tempat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Nama Tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_kategori</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Kategori Referensi dari tabel kategori</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_mitra</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Mitra Referensi dari tabel mitra</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>alamat_tempat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Alamat Tempat</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>harga_tempat</td>
                                <td>Ya</td>
                                <td>float</td>
                                <td>Harga sewa tempat sebenarnya</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>harga_jual</td>
                                <td>Ya</td>
                                <td>float</td>
                                <td>Harga sewa tempat akhir</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Koordinat Latitude</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lang</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Koordinat Longitude</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>deskripsi</td>
                                <td>Ya</td>
                                <td>text</td>
                                <td>Deskripsi tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_jam_buka</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>menunjukan waktu buka tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_jam_tutup</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>menunjukan waktu tutup tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>status_aktif</td>
                                <td>Ya</td>
                                <td>tinyint</td>
                                <td>menunjukan status tempat</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="savetempat-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/tempat/save, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="savetempat-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#savetempat-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#savetempat-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#savetempat-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="savetempat-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di tambahkan",
    "data": {
        "id_kelurahan": "1101010001",
        "nama_tempat": "lego",
        "id_kategori": "4",
        "id_mitra": "2",
        "alamat_tempat": "selanegara kaligondang",
        "lat": "123456",
        "lang": "1234567",
        "harga_tempat": "14000",
        "harga_jual": "15000",
        "deskripsi": "siap",
        "id_jam_buka": "2",
        "id_jam_tutup": "3",
        "status_aktif": 0
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="savetempat-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="savetempat-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="updatetempat-ringkasan">
			<hr/>
                <h3>Update Data Tempat</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method update tempat ini digunakan mengubah data tempat</p>
            </section>
            <section id="updatetempat-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#updatetempat-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#updatetempat-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#updatetempat-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="updatetempat-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/tempat/update</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="updatetempat-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_kelurahan</td>
                                <td>Ya</td>
                                <td>char</td>
                                <td>Kelurahan Referensi dari tabel kelurahan</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>nama_tempat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Nama Tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_kategori</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Kategori Referensi dari tabel kategori</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_mitra</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Mitra Referensi dari tabel mitra</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>alamat_tempat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Alamat Tempat</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>harga_tempat</td>
                                <td>Ya</td>
                                <td>float</td>
                                <td>Harga sewa tempat sebenarnya</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>harga_jual</td>
                                <td>Ya</td>
                                <td>float</td>
                                <td>Harga sewa tempat akhir</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Koordinat Latitude</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lang</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Koordinat Longitude</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>deskripsi</td>
                                <td>Ya</td>
                                <td>text</td>
                                <td>Deskripsi tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_jam_buka</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>menunjukan waktu buka tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_jam_tutup</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>menunjukan waktu tutup tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>status_aktif</td>
                                <td>Ya</td>
                                <td>tinyint</td>
                                <td>menunjukan status tempat</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="updatetempat-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/tempat/update, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="updatetempat-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#updatetempat-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#updatetempat-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#updatetempat-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="updatetempat-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di update",
    "data": {
        "id_kelurahan": "1101010001",
        "nama_tempat": "Watumas Futsal",
        "id_kategori": "4",
        "id_mitra": "2",
        "alamat_tempat": "selanegara kaligondang",
        "lat": "123456",
        "lang": "1234567",
        "harga_tempat": "14000",
        "harga_jual": "15000",
        "deskripsi": "siap",
        "id_jam_buka": "2",
        "id_jam_tutup": "3"
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="updatetempat-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="updatetempat-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="deltempat-ringkasan">
			<hr/>
                <h3>Delete Data Tempat</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method delete tempat ini digunakan menghapus data tempat</p>
            </section>
            <section id="deltempat-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#deltempat-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#deltempat-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#deltempat-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="deltempat-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/tempat/delete</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="deltempat-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_kelurahan</td>
                                <td>Ya</td>
                                <td>char</td>
                                <td>Kelurahan Referensi dari tabel kelurahan</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>nama_tempat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Nama Tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_kategori</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Kategori Referensi dari tabel kategori</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_mitra</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Mitra Referensi dari tabel mitra</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>alamat_tempat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Alamat Tempat</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>harga_tempat</td>
                                <td>Ya</td>
                                <td>float</td>
                                <td>Harga sewa tempat sebenarnya</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>harga_jual</td>
                                <td>Ya</td>
                                <td>float</td>
                                <td>Harga sewa tempat akhir</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Koordinat Latitude</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lang</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Koordinat Longitude</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>deskripsi</td>
                                <td>Ya</td>
                                <td>text</td>
                                <td>Deskripsi tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_jam_buka</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>menunjukan waktu buka tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_jam_tutup</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>menunjukan waktu tutup tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>status_aktif</td>
                                <td>Ya</td>
                                <td>tinyint</td>
                                <td>menunjukan status tempat</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="deltempat-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/tempat/delete, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="deltempat-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#deltempat-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#deltempat-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#deltempat-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="deltempat-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di delete"
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="deltempat-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="deltempat-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="gettempat-ringkasan">
			<hr/>
                <h3>Get Data Tempat</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method get tempat ini digunakan mendapatkan data tempat</p>
            </section>
            <section id="gettempat-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#gettempat-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#gettempat-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#gettempat-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="gettempat-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>http://devwpa.com/api/tempat/getdata?id=3</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="gettempat-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Tempat</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>id_kelurahan</td>
                                <td>Ya</td>
                                <td>char</td>
                                <td>Kelurahan Referensi dari tabel kelurahan</td>
                            </tr>
							<tr>
                                <td>GET</td>
                                <td>nama_tempat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Nama Tempat</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>id_kategori</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Kategori Referensi dari tabel kategori</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>id_mitra</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Mitra Referensi dari tabel mitra</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>alamat_tempat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Alamat Tempat</td>
                            </tr>
							<tr>
                                <td>GET</td>
                                <td>harga_tempat</td>
                                <td>Ya</td>
                                <td>float</td>
                                <td>Harga sewa tempat sebenarnya</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>harga_jual</td>
                                <td>Ya</td>
                                <td>float</td>
                                <td>Harga sewa tempat akhir</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>lat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Koordinat Latitude</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>lang</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Koordinat Longitude</td>
                            </tr>
							<tr>
                                <td>GET</td>
                                <td>deskripsi</td>
                                <td>Ya</td>
                                <td>text</td>
                                <td>Deskripsi tempat</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>id_jam_buka</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>menunjukan waktu buka tempat</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>id_jam_tutup</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>menunjukan waktu tutup tempat</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>status_aktif</td>
                                <td>Ya</td>
                                <td>tinyint</td>
                                <td>menunjukan status tempat</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Catatan:</strong></p>
                        <ul>
                            <li>Digunakan untuk mendapatkan data berdasarkan id. Jika ingin mendapatkan semua data hilangkan ?id=3
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="gettempat-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.GET, 
	http://devwpa.com/api/tempat/getdata?id=3, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="gettempat-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#gettempat-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#gettempat-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#gettempat-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="gettempat-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Data Ada",
    "data": [
        {
            "id": "3",
            "id_kelurahan": "1101010001",
            "nama_tempat": "lego",
            "id_kategori": "4",
            "id_mitra": "2",
            "alamat_tempat": "selanegara kaligondang",
            "lat": "123456",
            "lang": "1234567",
            "harga_tempat": "14000",
            "harga_jual": "15000",
            "deskripsi": "siap",
            "id_jam_buka": "2",
            "id_jam_tutup": "3",
            "status_aktif": "0"
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="gettempat-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="gettempat-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="aktiftempat-ringkasan">
			<hr/>
                <h3>Status Aktif Tempat</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method aktifkantempat tempat ini digunakan untuk mengaktifkan status tempat ketika sudah terdaftar</p>
            </section>
            <section id="aktiftempat-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#aktiftempat-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#aktiftempat-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#aktiftempat-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="aktiftempat-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/tempat/aktifkantempat</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="aktiftempat-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_kelurahan</td>
                                <td>Ya</td>
                                <td>char</td>
                                <td>Kelurahan Referensi dari tabel kelurahan</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>nama_tempat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Nama Tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_kategori</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Kategori Referensi dari tabel kategori</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_mitra</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Mitra Referensi dari tabel mitra</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>alamat_tempat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Alamat Tempat</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>harga_tempat</td>
                                <td>Ya</td>
                                <td>float</td>
                                <td>Harga sewa tempat sebenarnya</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>harga_jual</td>
                                <td>Ya</td>
                                <td>float</td>
                                <td>Harga sewa tempat akhir</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Koordinat Latitude</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lang</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Koordinat Longitude</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>deskripsi</td>
                                <td>Ya</td>
                                <td>text</td>
                                <td>Deskripsi tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_jam_buka</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>menunjukan waktu buka tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_jam_tutup</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>menunjukan waktu tutup tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>status_aktif</td>
                                <td>Ya</td>
                                <td>tinyint</td>
                                <td>menunjukan status tempat</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="aktiftempat-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/tempat/aktifkantempat, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="aktiftempat-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#aktiftempat-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#aktiftempat-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#aktiftempat-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="aktiftempat-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di update",
    "data": {
        "status_aktif": 1
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="aktiftempat-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="aktiftempat-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="offtempat-ringkasan">
			<hr/>
                <h3>Status Non Aktif Tempat</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method nonaktifkantempat tempat ini digunakan untuk mengubah status tempat menjadi tidak aktif</p>
            </section>
            <section id="offtempat-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#offtempat-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#offtempat-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#offtempat-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="offtempat-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/tempat/nonaktifkantempat</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="offtempat-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_kelurahan</td>
                                <td>Ya</td>
                                <td>char</td>
                                <td>Kelurahan Referensi dari tabel kelurahan</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>nama_tempat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Nama Tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_kategori</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Kategori Referensi dari tabel kategori</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_mitra</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Mitra Referensi dari tabel mitra</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>alamat_tempat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Alamat Tempat</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>harga_tempat</td>
                                <td>Ya</td>
                                <td>float</td>
                                <td>Harga sewa tempat sebenarnya</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>harga_jual</td>
                                <td>Ya</td>
                                <td>float</td>
                                <td>Harga sewa tempat akhir</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lat</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Koordinat Latitude</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>lang</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Koordinat Longitude</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>deskripsi</td>
                                <td>Ya</td>
                                <td>text</td>
                                <td>Deskripsi tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_jam_buka</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>menunjukan waktu buka tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_jam_tutup</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>menunjukan waktu tutup tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>status_aktif</td>
                                <td>Ya</td>
                                <td>tinyint</td>
                                <td>menunjukan status tempat</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="offtempat-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/tempat/nonaktifkantempat, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="offtempat-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#offtempat-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#offtempat-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#offtempat-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="offtempat-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di update",
    "data": {
        "status_aktif": 0
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="offtempat-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="offtempat-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="kategori-ringkasan">
			<hr/>
                <h3>Menambah Kategori</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method save kategori ini digunakan untuk menambahkan Kategori</p>
            </section>
            <section id="kategori-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#kategori-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#kategori-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#kategori-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="kategori-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/kategori/save</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="kategori-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Kategori</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>keterangan</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Keterangan dari kategori</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>creadtedtime</td>
                                <td>Ya</td>
                                <td>datetime</td>
                                <td>Waktu saat kategori dibuat</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="kategori-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/kategori/save, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="kategori-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#kategori-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#kategori-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#kategori-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="kategori-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di tambahkan",
    "data": {
        "keterangan": "Olagraga",
        "creadtedtime": "2020-01-04 05:14:12"
    }
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="kategori-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="kategori-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="updatekategori-ringkasan">
			<hr/>
                <h3>Update Kategori</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method update kategori ini digunakan untuk mengubah Kategori</p>
            </section>
            <section id="updatekategori-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#updatekategori-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#updatekategori-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#updatekategori-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="updatekategori-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/kategori/update</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="updatekategori-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Kategori</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>keterangan</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Keterangan dari kategori</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>creadtedtime</td>
                                <td>Ya</td>
                                <td>datetime</td>
                                <td>Waktu saat kategori dibuat</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="updatekategori-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/kategori/update, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="updatekategori-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#updatekategori-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#updatekategori-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#updatekategori-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="updatekategori-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di update",
    "data": {
        "keterangan": "Olahraga"
    }
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="updatekategori-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="updatekategori-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="delkategori-ringkasan">
			<hr/>
                <h3>Delete Kategori</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method delete kategori ini digunakan untuk menghapus Kategori</p>
            </section>
            <section id="delkategori-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#delkategori-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#delkategori-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#delkategori-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="delkategori-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/kategori/delete</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="delkategori-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Kategori</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>keterangan</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Keterangan dari kategori</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>creadtedtime</td>
                                <td>Ya</td>
                                <td>datetime</td>
                                <td>Waktu saat kategori dibuat</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="delkategori-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/kategori/delete, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="delkategori-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#delkategori-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#delkategori-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#delkategori-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="delkategori-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di delete"
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="delkategori-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="delkategori-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="getkategori-ringkasan">
			<hr/>
                <h3>Get Kategori</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method get kategori ini digunakan untuk mendapatkan data Kategori</p>
            </section>
            <section id="getkategori-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#getkategori-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#getkategori-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#getkategori-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="getkategori-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>http://devwpa.com/api/kategori/getdata?id=4</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="getkategori-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Kategori</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>keterangan</td>
                                <td>Ya</td>
                                <td>varchar</td>
                                <td>Keterangan dari kategori</td>
                            </tr>
							<tr>
                                <td>GET</td>
                                <td>creadtedtime</td>
                                <td>Ya</td>
                                <td>datetime</td>
                                <td>Waktu saat kategori dibuat</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Catatan:</strong></p>
                        <ul>
                            <li>Digunakan untuk mendapatkan data berdasarkan id. Jika ingin mendapatkan semua data hilangkan ?id=4
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="getkategori-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.GET, 
	http://devwpa.com/api/kategori/getdata?id=4, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="getkategori-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#getkategori-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#getkategori-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#getkategori-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="getkategori-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Data Ada",
    "data": [
        {
            "id": "4",
            "keterangan": "Olahraga",
            "creadtedtime": "2019-12-31 03:34:59.000000"
        }
    ]
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="getkategori-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="getkategori-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Catatan:</strong></p>
                        <ul>
                            <li>Digunakan untuk mendapatkan data berdasarkan id. Jika ingin mendapatkan semua data hilangkan ?id=3
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="transaksi-ringkasan">
			<hr/>
                <h3>Membuat Transaksi</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method save transaksi ini digunakan untuk menambahkan Transaksi Booking</p>
            </section>
            <section id="transaksi-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#transaksi-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#transaksi-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#transaksi-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="transaksi-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/transaksi/save</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="transaksi-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Transaksi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_user</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_tempat</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Tempat</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>id_carabayar</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Cara Bayar</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_jadwal</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Jadwal</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>tgl_jadwal</td>
                                <td>Ya</td>
                                <td>datetime</td>
                                <td>Tanggal jadwal</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>jumlah_transaksi</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Jumlah transaksi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>diskon_transaksi</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Diskon transaksi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>potongan_transaksi</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Potongan transaksi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>nominalreal</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Harga asli</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="transaksi-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/transaksi/save, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="transaksi-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#transaksi-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#transaksi-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#transaksi-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="transaksi-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di tambahkan",
    "data": {
        "id_user": "11",
        "id_tempat": "3",
        "id_carabayar": "5",
        "id_jadwal": "1",
        "tgl_jadwal": "2020-01-04 01:00:00.000000",
        "waktu_transaksi": "04-01-2020 05:34:31",
        "waktu_pembayaran": "04-01-2020 05:34:31",
        "jumlah_transaksi": "2",
        "diskon_transaksi": "10",
        "potongan_transaksi": "20",
        "nominalreal": "90",
        "status_transaksi": 0
    }
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="transaksi-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="transaksi-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="updatetransaksi-ringkasan">
			<hr/>
                <h3>Update Transaksi</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method update transaksi ini digunakan untuk mengubah Transaksi Booking</p>
            </section>
            <section id="updatetransaksi-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#updatetransaksi-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#updatetransaksi-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#updatetransaksi-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="updatetransaksi-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/transaksi/update</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="updatetransaksi-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Transaksi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_tempat</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Tempat</td>
                            </tr>
							<tr>
                                <td>POST</td>
                                <td>id_carabayar</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Cara Bayar</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_jadwal</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Jadwal</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>tgl_jadwal</td>
                                <td>Ya</td>
                                <td>datetime</td>
                                <td>Tanggal jadwal</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>jumlah_transaksi</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Jumlah transaksi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>diskon_transaksi</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Diskon transaksi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>potongan_transaksi</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Potongan transaksi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>nominalreal</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Harga asli</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="updatetransaksi-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/transaksi/update, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="updatetransaksi-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#updatetransaksi-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#updatetransaksi-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#updatetransaksi-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="updatetransaksi-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di update",
    "data": {
        "id_tempat": "3",
        "id_carabayar": "6",
        "id_jadwal": "1",
        "tgl_jadwal": "2020-01-04 01:00:00.000000",
        "waktu_transaksi": "04-01-2020 05:38:40",
        "jumlah_transaksi": "2",
        "diskon_transaksi": "10",
        "potongan_transaksi": "20",
        "nominalreal": "90"
    }
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="updatetransaksi-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="updatetransaksi-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="gettransaksi-ringkasan">
			<hr/>
                <h3>Get Transaksi</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method get transaksi ini digunakan untuk menampilkan Transaksi Booking</p>
            </section>
            <section id="gettransaksi-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#gettransaksi-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#gettransaksi-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#gettransaksi-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="gettransaksi-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>http://devwpa.com/api/transaksi/getdata?id=1</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="gettransaksi-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Transaksi</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>id_user</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id User</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>id_tempat</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Tempat</td>
                            </tr>
							<tr>
                                <td>GET</td>
                                <td>id_carabayar</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Cara Bayar</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>id_jadwal</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Jadwal</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>tgl_jadwal</td>
                                <td>Ya</td>
                                <td>datetime</td>
                                <td>Tanggal jadwal</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>jumlah_transaksi</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Jumlah transaksi</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>diskon_transaksi</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Diskon transaksi</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>potongan_transaksi</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Potongan transaksi</td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>nominalreal</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Harga asli</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Catatan:</strong></p>
                        <ul>
                            <li>Digunakan untuk mendapatkan data berdasarkan id. Jika ingin mendapatkan semua data hilangkan ?id=1
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="gettransaksi-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.GET, 
	http://devwpa.com/api/transaksi/getdata?id=1, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="gettransaksi-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#gettransaksi-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#gettransaksi-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#gettransaksi-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="gettransaksi-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Data Ada",
    "data": [
        {
            "id": "1",
            "id_user": "11",
            "id_tempat": "3",
            "id_carabayar": "6",
            "id_jadwal": "1",
            "tgl_jadwal": "2020-01-04 01:00:00.000000",
            "waktu_transaksi": "0000-00-00 00:00:00.000000",
            "waktu_pembayaran": "0000-00-00 00:00:00.000000",
            "jumlah_transaksi": "2",
            "diskon_transaksi": "10",
            "potongan_transaksi": "20",
            "nominalreal": "90",
            "status_transaksi": "0"
        }
    ]
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="gettransaksi-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="gettransaksi-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="waktutransaksi-ringkasan">
			<hr/>
                <h3>Update Waktu Pembayaran</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method update waktu pembayaran ini digunakan untuk mengubah waktu transaksi pembayaran</p>
            </section>
            <section id="waktutransaksi-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#waktutransaksi-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#waktutransaksi-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#waktutransaksi-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="waktutransaksi-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/transaksi/updatewaktupembayaran</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="waktutransaksi-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Transaksi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>waktu_pembayaran</td>
                                <td>Ya</td>
                                <td>datetime</td>
                                <td>Waktu pembayaran</td>
                            </tr>
							</tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="waktutransaksi-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/transaksi/updatewaktupembayaran, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="waktutransaksi-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#waktutransaksi-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#waktutransaksi-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#waktutransaksi-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="waktutransaksi-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Pembayaran Berhasil di update",
    "data": {
        "waktu_pembayaran": "2020-01-04 05:44:37"
    }
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="waktutransaksi-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="waktutransaksi-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="statustransaksi-ringkasan">
			<hr/>
                <h3>Update Status Pembayaran</h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method update status pembayaran ini digunakan untuk mengubah status transaksi pembayaran</p>
            </section>
            <section id="statustransaksi-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#statusransaksi-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#statustransaksi-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#statustransaksi-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="statustransaksi-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/transaksi/updatestatustransaksi</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="statustransaksi-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Transaksi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>status_transaksi</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Status transaksi</td>
                            </tr>
							</tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="statustransaksi-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/transaksi/updatestatustransaksi, 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					
					</div>
                </div>
            </section>
            <section id="statustransaksi-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#statustransaksi-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#statustransaksi-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#statustransaksi-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="statustransaksi-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Transaksi Terferivikasi",
    "data": {
        "status_transaksi": 1
    }
}
</code>					
					</pre>
					
                    </div>
                    <div class="tab-pane fade" id="statustransaksi-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>

</code>					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="statustransaksi-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
							<tr>
                                <td>message</td>
                                <td>String</td>
                                <td>Pesan Berhasil atau Tidak</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Table Jenis Bank-->

            <section id="jenisbank-ringkasan">
			<hr/>
                <h3><strong>Menambahkan Jenis Bank</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "save" digunakan untuk menambahkan jenis bank  </p>
            </section>
            <section id="jenisbank-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#jensbank-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#jenisbank-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#jenisbank-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="jenisbank-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/jenisbank/save</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="jenisbank-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>namabank</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nama bank</td>
                            </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="tab-pane fade" id="jenisbank-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/jenisbank/save , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="jenisbank-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#jenisbank-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#jenisbank-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#jenisbank-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="jenisbank-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil Ditambahkan",
    "data": {
        "id": "1",
        "namabank": "Bank Central Asia"
    }
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="jenisbank-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Gagal di tambahkan"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="jenisbank-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="update-jenisbank-ringkasan">
			<hr/>
                <h3><strong>Edit Jenis Bank</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "update" digunakan untuk merubah data jenis bank  </p>
            </section>
            <section id="update-jenisbank-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#update-jenisbank-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#update-jenisbank-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#update-jenisbank-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="update-jenisbank-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/jenisbank/update</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="update-jenisbank-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>ID Bank</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>namabank</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nama bank</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="update-jenisbank-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/jenisbank/update , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="update-jenisbank-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#update-jenisbank-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#update-jenisbank-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#update-jenisbank-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="update-jenisbank-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di update",
    "data": {
        "namabank": "Bank Central Asia",
    }
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="update-jenisbank-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Gagal di update"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="update-jenisbank-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="delete-jenisbank-ringkasan">
			<hr/>
                <h3><strong>Hapus Jenis Bank</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "delete" digunakan untuk menghapus jenis bank  </p>
            </section>
            <section id="delete-jenisbank-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#delete-jensbank-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#delete-jenisbank-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#delete-jenisbank-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="delete-jenisbank-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/jenisbank/delete</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="delete-jenisbank-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Nama Bank</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="delete-jenisbank-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/jenisbank/delete , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="delete-jenisbank-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#delete-jenisbank-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#delete-jenisbank-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#delete-jenisbank-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="delete-jenisbank-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di delete"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="delete-jenisbank-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Gagal di delete"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="delete-jenisbank-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="getdata-jenisbank-ringkasan">
			<hr/>
                <h3><strong>Get Data Jenis Bank</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "getdata" digunakan untuk menampilkan data jenis bank dari database  </p>
            </section>
            <section id="getdata-jenisbank-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#getdata-jensbank-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#getdata-jenisbank-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#getdata-jenisbank-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="getdata-jenisbank-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>http://devwpa.com/api/jenisbank/getdata?id=1</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="getdata-jenisbank-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>id jenis bank</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Catatan:</strong></p>
                        <ul>
                            <li>Digunakan untuk mendapatkan data berdasarkan id. Jika ingin mendapatkan semua data hilangkan ?id=1
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="getdata-jenisbank-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.GET, 
	http://devwpa.com/api/jenisbank/getdata?id=1 , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="getdata-jenisbank-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#getdata-jenisbank-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#getdata-jenisbank-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#getdata-jenisbank-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="getdata-jenisbank-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Data Ada",
    "data": {
        "id": "1",
        "namabank": "Bank Central Asia"
    }
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="getdata-jenisbank-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Data tidak ada "
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="getdata-jenisbank-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

           
            <!--Table Jadwal-->
            <section id="jadwal-ringkasan">
			<hr/>
                <h3><strong>Menambahkan Jadwal</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "save" digunakan untuk menambahkan jadwal  </p>
            </section>
            <section id="jenisbank-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#jadwal-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#jadwal-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#jadwal-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="jadwal-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/jadwal/save</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="jadwal-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id_tempat</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Id Tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>nama_jadwal</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nama Jadwal</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>jam_mulai</td>
                                <td>Ya</td>
                                <td>Time</td>
                                <td>Jam Dimulai Jadwal</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>jam_akhir</td>
                                <td>Ya</td>
                                <td>Time</td>
                                <td>Jam Selesai Jadwal</td>
                            </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="tab-pane fade" id="jadwal-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/jadwal/save , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="jadwal-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#jadwal-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#jadwal-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#jadwal-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="jadwal-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil Ditambahkan",
    "data": {
        "id_tempat": "1",
        "nama_jadwal": "jadwal casro",
        "jam_mulai": "15:00"
        "jam_akhir" : "17:00"
    }
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="jadwal-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Gagal di tambahkan"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="jadwal-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="update-jadwal-ringkasan">
			<hr/>
                <h3><strong>Edit Jadwal</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "update" digunakan untuk merubah data jadwal  </p>
            </section>
            <section id="update-jenisbank-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#update-jadwal-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#update-jadwal-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#update-jadwal-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="update-jadwal-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/jadwal/update</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="update-jadwal-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>ID Jadwal</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_tempat</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Tempat</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>nama_jadwal</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Nama Jadwal</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>jam_mulai</td>
                                <td>Ya</td>
                                <td>Time</td>
                                <td>Jam Dimulai Jadwal</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>jam_akhir</td>
                                <td>Ya</td>
                                <td>Time</td>
                                <td>Jam Selesai Jadwal</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="update-jadwal-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/jadwal/update , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="update-jadwal-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#update-jadwal-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#update-jadwal-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#update-jadwal-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="update-jadwal-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di update",
    "data": {
        "id_tempat": "1",
        "nama_jadwal": "jadwal casro",
        "jam_mulai": "18:00"
        "jam_akhir" : "20:00"
    }
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="update-jadwal-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Gagal di update"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="update-jadwal-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="delete-jadwal-ringkasan">
			<hr/>
                <h3><strong>Hapus Jadwal</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "delete" digunakan untuk menghapus data jadwal  </p>
            </section>
            <section id="delete-jadwal-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#delete-jadwal-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#delete-jadwal-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#delete-jadwal-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="delete-jadwal-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/jadwal/delete</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="delete-jadwal-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>ID Jadwal</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="delete-jadwal-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/jadwal/delete , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="delete-jadwal-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#delete-jadwal-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#delete-jadwal-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#delete-jadwal-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="delete-jadwal-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di delete"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="delete-jadwal-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Gagal di delete"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="delete-jadwal-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="getdata-jadwal-ringkasan">
			<hr/>
                <h3><strong>Get Data Jadwal</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "getdata" digunakan untuk menampilkan data jadwal berdasarkan id dari database  </p>
            </section>
            <section id="getdata-jadwal-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#getdata-jadwal-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#getdata-jadwal-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#getdata-jadwal-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="getdata-jadwal-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>http://devwpa.com/api/jadwal/getdata?id=1</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="getdata-jadwal-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>id jadwal</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Catatan:</strong></p>
                        <ul>
                            <li>Digunakan untuk mendapatkan data berdasarkan id. Jika ingin mendapatkan semua data hilangkan ?id=1
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="getdata-jadwal-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.GET, 
	http://devwpa.com/api/jadwal/getdata?id=1 , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="getdata-jadwal-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#getdata-jadwal-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#getdata-jadwal-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#getdata-jadwal-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="getdata-jadwal-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Data Ada",
    "data": {
        "id_tempat": "1",
        "nama_jadwal": "jadwal casro",
        "jam_mulai": "18:00"
        "jam_akhir" : "20:00"
    }
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="getdata-jadwal-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Tidak ada data "
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="getdata-jadwal-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

          
            <!--Table Eticket-->
            <section id="eticket-ringkasan">
			<hr/>
                <h3><strong>Menambahkan Eticket</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "save" digunakan untuk menambahkan eticket  </p>
            </section>
            <section id="eticket-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#eticket-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#eticket-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#eticket-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="eticket-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/eticket/save</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="eticket-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id_user</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_transaksi</td>
                                <td>Ya</td>
                                <td>int</td>
                                <td>Id Transaksi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>kode_regis</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Kode Registrasi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>status aktif</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Status aktif/non aktif Eticket</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>createdtime</td>
                                <td>Ya</td>
                                <td>DateTime</td>
                                <td>tanggal dan jam dibuatnya eticket</td>
                            </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="tab-pane fade" id="eticket-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/eticket/save , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="eticket-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#eticket-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#eticket-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#eticket-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="eticket-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di tambahkan",
    "data": {
        "id_user": "11",
        "id_transaksi": "1",
        "kode_regis": "R001",
        "status_aktif": "1",
        "createdtime": "2020-01-05 10:53:51"
    }
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="eticket-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Gagal di tambahkan"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="eticket-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="update-eticket-ringkasan">
			<hr/>
                <h3><strong>Edit Data Eticket</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "update" digunakan untuk merubah data eticket  </p>
            </section>
            <section id="update-eticket-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#update-eticket-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#update-eticket-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#update-eticket-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="update-eticket-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/eticket/update</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="update-eticket-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>ID Eticket</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_user</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id User</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>id_transaksi</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Id Transaksi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>kode_regis</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>Kode Registrasi</td>
                            </tr>
                            <tr>
                                <td>POST</td>
                                <td>status aktif</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>Status aktif/non aktif Eticket</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="update-eticket-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/eticket/update , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="update-eticket-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#update-eticket-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#update-eticket-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#update-eticket-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="update-eticket-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di update",
    "data": {
        "id_transaksi": "1",
        "kode_regis": "R002",
        "status_aktif": "0"
    }
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="update-eticket-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Gagal di update"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="update-eticket-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="delete-eticket-ringkasan">
			<hr/>
                <h3><strong>Hapus Eticket</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "delete" digunakan untuk menghapus data eticket  </p>
            </section>
            <section id="delete-eticket-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#delete-eticket-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#delete-eticket-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#delete-eticket-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="delete-eticket-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>POST</td>
                                <td>http://devwpa.com/api/eticket/delete</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="delete-eticket-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>Int</td>
                                <td>ID Eticket</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="delete-eticket-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.POST, 
	http://devwpa.com/api/eticket/delete , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="delete-eticket-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#delete-eticket-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#delete-eticket-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#delete-eticket-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="delete-eticket-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Berhasil di delete"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="delete-eticket-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Gagal di delete"
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="delete-eticket-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="getdata-jadwal-ringkasan">
			<hr/>
                <h3><strong>Get Data Eticket</strong></h3>
                <hr/>
                <h4>Ringkasan</h4>
                <p>Method "getdata" digunakan untuk menampilkan data eticket berdasarkan id dari database  </p>
            </section>
            <section id="getdata-eticket-request">
                <h4>Request</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#getdata-eticket-request-url">URL</a></li>
                    <li><a data-toggle="tab" href="#getdata-eticket-request-parameter">Parameter</a></li>
                    <li><a data-toggle="tab" href="#getdata-eticket-request-example">Contoh request</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="getdata-eticket-request-url">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>URL</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>http://devwpa.com/api/eticket/getdata?id=1</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="getdata-eticket-request-parameter">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Method</td>
                                <td>Parameter</td>
                                <td>Wajib</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GET</td>
                                <td>id</td>
                                <td>Ya</td>
                                <td>String</td>
                                <td>id eticket</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Catatan:</strong></p>
                        <ul>
                            <li>Digunakan untuk mendapatkan data berdasarkan id. Jika ingin mendapatkan semua data hilangkan ?id=1
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="getdata-eticket-request-example">
					<pre class="ft-syntax-highlight" data-syntax="java" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
StringRequest strReq = new StringRequest(
	Request.Method.GET, 
	http://devwpa.com/api/eticket/getdata?id=1 , 
	new Response.Listener<String>(){
		
	}
</code>
					
					</pre>
					</div>
                </div>
            </section>
            <section id="getdata-eticket-response">
                <h4>Response</h4>
                <ul class="nav nav-tabs ro-doc-tabs">
                    <li class="active"><a data-toggle="tab" href="#getdata-eticket-success-response">Response sukses</a></li>
                    <li><a data-toggle="tab" href="#getdata-eticket-error-response">Response gagal</a></li>
                    <li><a data-toggle="tab" href="#getdata-eticket-penjelasan-response">Penjelasan response</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="getdata-eticket-success-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": true,
    "message": "Data Ada",
    "data": [
        {
            "id": "1",
            "id_user": "11",
            "id_transaksi": "1",
            "kode_regis": "R001",
            "status_aktif": "1",
            "createdtime": "2020-01-05 10:53:51.000000"
        }
    ]
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="getdata-eticket-error-response">
					<pre class="ft-syntax-highlight" data-syntax="JSON" data-syntax-theme="one-dark" data-showTooltips="true">
					
<code>
{
    "status": false,
    "message": "Tidak ada data "
}
</code>
					
					</pre>
                    </div>
                    <div class="tab-pane fade" id="getdata-eticket-penjelasan-response">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>status</td>
                                <td>Bool</td>
                                <td>Status True atau False</td>
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>String</td>
                                <td>Data response</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<a href="#0" class="cd-top">Top</a>
<script>
    $(document).ready(function () {
        var offset = 300;
        var offset_opacity = 1200;
        var scroll_top_duration = 700;
        var $back_to_top = $('.cd-top');

        $(window).scroll(function () {
            ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
            if ($(this).scrollTop() > offset_opacity) {
                $back_to_top.addClass('cd-fade-out');
            }
        });

        $back_to_top.on('click', function (event) {
            event.preventDefault();
            $('body,html').animate({
                scrollTop: 0
            }, scroll_top_duration);
        });
    });
</script>            </div>
        </div>
        <!-- Social -->

<div class="visible-desktop social-links">
    <div class="container">
        <div class="row">
            <div class="span12">
                <p class="big"><span>Copyright &copy; 2019 BookGar</span></p>
            </div>
        </div>    
    </div>
</div>
<script src="<?=base_url()?>/assets/bootstrap.js"></script> 
<script src="<?=base_url()?>/assets/jquery.cslider.js"></script>
<script src="<?=base_url()?>/assets/modernizr.custom.28468.js"></script>
<script src="<?=base_url()?>/assets/jquery.validationEngine.min.js"></script>
<script src="<?=base_url()?>/assets/jquery.validationEngine-id.js"></script>
<script src="<?=base_url()?>/assets/custom.js"></script>
<script src="<?=base_url()?>/assets/cycle.js"></script>
<script src="<?=base_url()?>/assets/jquery.mixitup.min.js"></script>
<script src="<?=base_url()?>/assets/jquery.autocomplete.min.js"></script>    </body>
</html>