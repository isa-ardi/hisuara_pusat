<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;

class Daerah extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Daerah_model', 'daerah');
		$this->load->database();
		require APPPATH . 'libraries/phpmailer/src/Exception.php';
		require APPPATH . 'libraries/phpmailer/src/PHPMailer.php';
		require APPPATH . 'libraries/phpmailer/src/SMTP.php';
	}
	public function index()
	{
		// echo customBaseUrl(false, ['pilkada', 'jatim', 'malang'], 'id');
		// die;

		$data['provinsi'] = $this->daerah->getProv();
		$this->load->view('templates/head', $data);
		// $this->load->view('templates/header', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer', $data);
	}
	public function saksipilihKota()
	{
		// echo customBaseUrl(false, ['pilkada', 'jatim', 'malang'], 'id');
		// die;

		$data['provinsi'] = $this->daerah->getProv();
		$this->load->view('templates/head', $data);
		// $this->load->view('templates/header', $data);
		$this->load->view('dashboardSaksi', $data);
		$this->load->view('templates/footerSaksi', $data);
	}

	
	function loginPages() {
		$this->load->view('auth/login');
	}


	public function provgub($id)
	{
		$data['kota'] = $this->db->where('id_prov', $id)->get('kabupaten')->result();
		$data['prov'] = $this->db->where('id_prov', $id)->get('provinsi')->row();
		$this->load->view('template/headProv', $data);
		$this->load->view('pilpres/kotaGub', $data);
	}

	public function pilkada()
	{
		$data['provinsi'] = $this->daerah->getProv();
		$this->load->view('pilkada', $data);
	}


	public function apiProvinsi($id,$domain)
	{
		$data['domain'] = $domain;
		// $data['id'] = $this->input->post('id');
		$data['id'] = $id;
		$this->load->view('apiProv',$data);
	
	}

	public function provinsi()
	{
	
		$data['provinsi'] = $this->db->get('provinsi')->result();
		$this->load->view('template/headProv', $data);
		$this->load->view('pilpres/provinsi', $data);
		$this->load->view('template/footerProv', $data);
	}
	public function kota($id_prov)
	{
		$data['kota'] = $this->db->where('id_prov', $id_prov)->get('kabupaten')->result();
		$data['prov'] = $this->db->where('id_prov', $id_prov)->get('provinsi')->row();
		$this->load->view('template/headProv', $data);
		$this->load->view('pilpres/kota', $data);
	}

	public function kontak()
	{
		$data = "s0";
		$this->load->view('templates/head', $data);
		// $this->load->view('templates/header', $data);
		$this->load->view('kontak');
		$this->load->view('templates/footer', $data);
	}
	public function getKab()
	{
		if ($this->input->is_ajax_request()) {
			$id_prov = $this->input->post('id_prov');

			$sql = "SELECT * FROM kabupaten WHERE id_prov={$id_prov} ORDER BY nama";
			$query = $this->db->query($sql);
			$kab = $query->result();
			echo "<option value=''>Pilih Kota/Kab</option>";
			foreach ($kab as $k) {
				$let = $this->db->where('id_prov', $k->id_prov)->get('provinsi')->row_object();
				echo "<option value='{$k->id_kab}|{$k->subdomain}|{$let->subdomain}|{$k->nama}'>{$k->nama}</option>";
			}
		}
	}
	public function searchKota()
	{

		$nama = $this->input->post('nama');
		$data['namaKota'] = $this->daerah->getKabLike2($nama);
		$this->load->view('searchKota', $data);
	}
	public function disclaimer()
	{
		$data['provinsi'] = $this->daerah->getProv();
		$this->load->view('template/headTentang', $data);
		$this->load->view('disclaimer', $data);
		$this->load->view('templates/footer', $data);
	}
	public function getKabManual($id_prov)
	{
		$kab = $this->daerah->getKab($id_prov);
		echo "<option value=''>Pilih Kota/Kab</option>";
		foreach ($kab as $k) {
			$let = $this->db->where('id_prov', $k->id_prov)->get('provinsi')->row_object();
			echo "<option value='{$k->id_kab}|{$k->subdomain}|{$let->subdomain}|{$k->nama}'>{$k->nama}</option>";
		}
	}

	public function getKec($id_kab)
	{
		$kec = $this->daerah->getKec($id_kab);
		echo "<option value=''>Pilih Kecamatan</option>";
		foreach ($kec as $k) {
			echo "<option value='{$k->id_kec}'>{$k->nama}</option>";
		}
	}

	public function getKel($id_kec)
	{
		$kel = $this->daerah->getKel($id_kec);
		echo "<option value=''>Pilih Kelurahan/Desa</option>";
		foreach ($kel as $k) {
			echo "<option value='{$k->id_kel}'>{$k->nama}</option>";
		}
	}

	public function loginadmin()
	{

		$data =  $this->db->get_where('kabupaten', ['id_kab' => $this->input->post('kota')])->result();

		foreach ($data as $dt) {
			redirect('http://' . $dt->subdomain . '.rekapitung.com/login');
		}
	}

	// public function adminin()
	// {
	// 	$data['provinsi'] = $this->daerah->getProv();
	// 	$this->load->view('template/head');
	// 	$this->load->view('pages/index', $data);
	// 	$this->load->view('template/footer');
	// }


	public function tentang()
	{
		$data['provinsi'] = $this->daerah->getProv();
		$this->load->view('template/headTentang', $data);
		$this->load->view('pages/tentang', $data);
		$this->load->view('template/footerTentang', $data);
	}

	public function tentangs()
	{
		$data['provinsi'] = $this->daerah->getProv();

		$this->load->view('pages/tentang', $data);
	}

	public function form_2()
	{
		$data = "s0";
// 		$this->load->view('templates/head', $data);
		// $this->load->view('templates/header', $data);
		$this->load->view('form_2');
// 		$this->load->view('templates/footer', $data);
	}

	public function form_2_dpr()
	{
		$data = "s0";
		$this->load->view('templates/head', $data);
		// $this->load->view('templates/header', $data);
		$this->load->view('form_2_dpr');
		$this->load->view('templates/footer', $data);
	}
	public function form_2_dpd()
	{
		$data = "s0";
		$this->load->view('templates/head', $data);
		// $this->load->view('templates/header', $data);
		$this->load->view('form_2_dpd');
		$this->load->view('templates/footer', $data);
	}
	public function contact_us()
	{
		$data = "s0";
		$this->load->view('templates/head', $data);
		// $this->load->view('templates/header', $data);
		$this->load->view('contact_us');
		$this->load->view('templates/footer', $data);
	}
	public function form()
	{


		$data = "s0";
		// 		$this->load->view('template/head2', $data);
		// $this->load->view('templates/header', $data);
		$this->load->view('form');
		// 		$this->load->view('templates/footer', $data);

	}
	public function form_dpr()
	{
		$this->load->view('form_dpr');
	}

	public function form_dpd()
	{
		$this->load->view('form_dpd');
	}

	public function form_test()
	{


		$data = "s0";
		// 		$this->load->view('template/head2', $data);
		// $this->load->view('templates/header', $data);
		$this->load->view('form_test');
		// 		$this->load->view('templates/footer', $data);

	}
	public function sendemail()
	{
		$response = false;
		$mail = new PHPMailer();


		// SMTP configuration
		$mail->isSMTP();
		$mail->Host     = 'rekapitung.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
		$mail->SMTPAuth = true;
		$mail->Username = 'info@rekapitung.com'; // user email
		$mail->Password = 'aditya123@@'; // password email
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;
		$mail->setFrom('info@rekapitung.com', ''); // user email
		$mail->addReplyTo('info@rekapitung.com', ''); //user email

		// Add a recipient
		$mail->addAddress('adityasundawa.co@gmail.com'); //email tujuan pengiriman email

		// Email subject
		$mail->Subject = 'Info Pendaftaran Client Rekapitung.com'; //subject email

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = "<h1>INFO DETAIL AKUNr</h1>
                     <p>Email : " . $this->input->post('email') . "</p><br>
                     <p>Nama : " . $this->input->post('nama') . "</p><br>
                     <p>Status : " . $this->input->post('status') . "</p><br>
                     <p>Kota :  " . $this->input->post('kota') . " </p>
					 <p>No Hp :  " . $this->input->post('nohp') . " </p>
                     <p>Copyright 2021 @ALL Right Reseved,</p>"; // isi email
		$mail->Body = $mailContent;



		// Send email
		if (!$mail->send()) {
			echo 'EROR HUBUNGI ADMIN';
		} else {
			redirect('form');
		} // PHPMailer object
	}
	
}
