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