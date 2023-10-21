<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('user_agent');
        $this->load->database();
        
    }



    public function daftar()
    {

        if ($this->input->post()) {
            if ($this->input->post("provinsi") == null) {
                $this->session->set_flashdata('error', 'Input provinsi wajib di isi');
                redirect(base_url("") . "auth/register");
                return true;
            }
            if ($this->input->post("kota") == null) {
                $this->session->set_flashdata('error', 'Input kota wajib di isi');
                redirect(base_url("") . "auth/register");
                return true;
            }




            $this->db->select('*');
            $this->db->from('kabupaten');
            $this->db->where('id_kab', $this->input->post('kota'));
            $kota = $this->db->get()->row();

            $api_url = $kota->subdomain . '/api/public/register-saksi-pusat'; // Ganti dengan URL API yang sesuai
            $bearer_token = '123789'; // Ganti dengan token Bearer yang valid

            $data = array(
                'name' => $this->input->post('name'), // OK
                'address' => $this->input->post('alamat'), // OK
                'no_hp' => $this->input->post('no_hp'), // OK
                'districts' => $this->input->post('kecamatan'), // OK
                'villages' => $this->input->post('kelurahan'), // OK
                'role_id' => "8", // OK
                'is_active' => "1", // OK
                'email' => $this->input->post('email'), // OK
                'password' => $this->input->post('password'), // OK
                'tps_id' => $this->input->post('tps'), // OK
                'cek' => "0", // OK
                'absen' => "hadir", // OK
                'nik' => $this->input->post('nik'), // OK

                // tambahkan parameter lainnya sesuai kebutuhan 
            );
            // var_dump($this->input->post());

            $ch = curl_init($api_url);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer ' . $bearer_token
            ));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            // Mengatur permintaan sebagai POST
            curl_setopt($ch, CURLOPT_POST, 1);

            // Mengatur data yang akan dikirim sebagai parameter
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

            $result = curl_exec($ch);



            if ($result === false) {
                // Error handling jika ada kesalahan dalam permintaan cURL
                echo 'Error: ' . curl_error($ch);
            } else {
                // Respons dari API berhasil diterima

                // $resultArray = json_decode($result, true);
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            }



            curl_close($ch);
            if ($httpCode == 402) {
                // Di dalam controller atau di mana pun yang sesuai
                //SELECT * FROM `users` WHERE `name` LIKE "%hisu%"


                $this->session->set_userdata('response', $result);

                // Kemudian lakukan redirect kembali ke halaman sebelumnya
                redirect(base_url("") . "auth/register");
            }
            $this->session->set_userdata('response', $result);

            // Kemudian lakukan redirect kembali ke halaman sebelumnya
            redirect(base_url("") . "auth/register");
        }
    }



    function btnClose()
    {
        $this->session->unset_userdata('response');
        echo json_encode(['status' => "berhasil"]);
    }

    public function register()
    {
        $data['provinsi'] = $this->db->get('provinsi')->result();
        $this->load->view('auth/register', $data);
        // echo "hai";
    }

    function gantiDomain()
    {
        $url = 'https://pilpres.banten.kab-tangerang-selatan.hisuara.id/api/get-domain'; // Ganti dengan URL API yang sesuai
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($data, true); // 
        foreach ($response as $dat) {
            $this->db->insert('kabupaten', [
                'id_kab' => $dat['regency_id'],
                'nama' => $dat['name'],
                'id_prov' => $dat['province_id'],
                'subdomain' => $dat['domain'],
            ]);
        }
    }

    function getKota()
    {
    
            # code...
            $this->db->select('*');
            $this->db->from('kabupaten');
            $this->db->where('id_prov', $this->input->post('idProvinsi'));
            $data['kota'] = $this->db->get()->result();
            $this->load->view("auth/getKota", $data);
     
    }

    function getKec()
    {

        if ($this->input->post()) {
            $this->db->select('*');
            $this->db->from('kabupaten');
            $this->db->where('id_kab', $this->input->post('idKota'));
            $kota = $this->db->get()->row();

            $url = $kota->subdomain . '/api/public/get-district?id=' . $kota->id_kab; // Ganti dengan URL API yang sesuai
            // Data yang akan Anda kirim dalam permintaan POST

            $ch = curl_init($url);

            // Atur opsi cURL
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Mengembalikan respons ke variabel

            // Eksekusi permintaan cURL
            $response = curl_exec($ch);

            // Cek apakah permintaan berhasil
            if ($response === false) {
                die('Kesalahan cURL: ' . curl_error($ch));
            }

            // Tutup koneksi cURL
            curl_close($ch);

            $response = json_encode($response, true); // 

            echo json_decode($response);
        }

        // echo "asdfsaf";
    }
    function getKel()
    {

        // if($this->input->post()){

        $idKota =  substr($this->input->post('idKec'), 0, 4);
        $kota = $this->getKotaQuery($idKota);

        $url = $kota->subdomain . '/api/public/get-village?id=' . $this->input->post('idKec'); // Ganti dengan URL API yang sesuai
        // Data yang akan Anda kirim dalam permintaan POST

        $ch = curl_init($url);

        // Atur opsi cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Mengembalikan respons ke variabel

        // Eksekusi permintaan cURL
        $response = curl_exec($ch);

        // Cek apakah permintaan berhasil
        if ($response === false) {
            die('Kesalahan cURL: ' . curl_error($ch));
        }

        // Tutup koneksi cURL
        curl_close($ch);

        $response = json_encode($response, true); // 

        echo json_decode($response);
        // }

        // echo "asdfsaf";
    }
    function getTps()
    {


        if ($this->input->post()) {
            $idKota =  substr($this->input->post('idKel'), 0, 4);

            $kota = $this->getKotaQuery($idKota);

            $url = $kota->subdomain . '/api/public/get-tps-by-village-id?village_id=' . $this->input->post('idKel'); // Ganti dengan URL API yang sesuai
            // Data yang akan Anda kirim dalam permintaan POST

            $ch = curl_init($url);

            // Atur opsi cURL
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Mengembalikan respons ke variabel

            // Eksekusi permintaan cURL
            $response = curl_exec($ch);

            // Cek apakah permintaan berhasil
            if ($response === false) {
                die('Kesalahan cURL: ' . curl_error($ch));
            }

            // Tutup koneksi cURL
            curl_close($ch);

            $response = json_encode($response, true); // 

            echo json_decode($response);
        }

        // echo "asdfsaf";
    }

    function getKotaQuery($dataid)
    {
        $this->db->select('*');
        $this->db->from('kabupaten');
        $this->db->where('id_kab', $dataid);
        $kota = $this->db->get()->row();
        return $kota;
    }

    function action_login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $id_kota = $this->input->post('kota');
        $kota = $this->db->where('id_kab',$id_kota)->get("kabupaten")->row();
        

        if ($this->input->post()) {
        

            $url = $kota->subdomain . '/api/login-cek?email='.$email."&password=".$password; // Ganti dengan URL API yang sesuai
            // Data yang akan Anda kirim dalam permintaan POST

            $ch = curl_init($url);

            // Atur opsi cURL
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Mengembalikan respons ke variabel

            // Eksekusi permintaan cURL
            $response = curl_exec($ch);

            // Cek apakah permintaan berhasil
            if ($response === false) {
                die('Kesalahan cURL: ' . curl_error($ch));
            }

            // Tutup koneksi cURL
            curl_close($ch);

            // $response = json_encode($response, true); // 

            $response =  json_decode($response);

            

            if ($response->message == "gagal") {

                $this->session->set_flashdata('error', 'Email atau password anda salah');
    
                redirect('daerah/loginPages');
                // echo "gagal";
            }else{
            
                header("Location: "."https://".$kota->subdomain."/otentifikasi-login?al=".base64_encode($email)."&pa=".base64_encode($password));
                
                // echo "berhasil";
            }
            
        }


        
       
    }   



//    private function encrypt($data, $key, $iv) {
//         $cipher = "aes-256-cbc";
//         $options = OPENSSL_RAW_DATA;
//         $encrypted = openssl_encrypt($data, $cipher, $key, $options, $iv);
//         return base64_encode($encrypted);
//     }

//     private function decrypt($data, $key, $iv) {
//         $cipher = "aes-256-cbc";
//         $options = OPENSSL_RAW_DATA;
//         $decrypted = openssl_decrypt(base64_decode($data), $cipher, $key, $options, $iv);
//         return $decrypted;
//     }

}
