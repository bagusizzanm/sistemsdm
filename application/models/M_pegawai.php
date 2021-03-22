<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pegawai extends CI_Model
{
    public function getPegawai()
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        return $this->db->get()->result();
    }

    public function insertDataPegawai($data)
    {
        $this->db->insert('pegawai', $data);
    }

    public function detailPegawai()
    {
    }
}
