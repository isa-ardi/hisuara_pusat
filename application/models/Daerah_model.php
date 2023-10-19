<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daerah_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getProv()
	{
		$sql = "SELECT * FROM provinsi";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getKab($id_prov)
	{
		$sql = "SELECT * FROM kabupaten WHERE id_prov={$id_prov} ORDER BY nama";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function getKabLike($id_prov, $like)
	{
		$this->db->where('id_prov', $id_prov);
		$this->db->like('nama', $like);
		return $this->db->get('kabupaten')->result();
	}
	public function getKabLike2($like)
	{
		$this->db->like('nama', $like);
		return $this->db->get('kabupaten')->result();
	}
	public function getKec($id_kab)
	{
		$sql = "SELECT * FROM kecamatan WHERE id_kab={$id_kab} ORDER BY nama";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getKel($id_kec)
	{
		$sql = "SELECT * FROM kelurahan WHERE id_kec={$id_kec} ORDER BY nama";
		$query = $this->db->query($sql);
		return $query->result();
	}
}
