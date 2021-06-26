<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pegawai extends CI_Model
{
    public function getAllPegawai()
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('kepegawaian', 'pegawai.pe_nip=kepegawaian.fk_pe_nip', 'left');
        return $this->db->get()->result_array();
    }

    public function insertDataPegawai($data)
    {
        $this->db->insert('kepegawaian', $data);
    }

    public function updateDataPegawai($where, $where_val, $table, $data){
        $this->db->where($where, $where_val);
        $this->db->update($table,$data);
    }

    public function getDetailPegawai($id_pegawai)
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('kepegawaian', 'pegawai.pe_nip=kepegawaian.fk_pe_nip', 'left');
        $this->db->join('bank', 'pegawai.pe_nip=kepegawaian.fk_pe_nip', 'left');
        $this->db->where('pegawai.pe_nip',$id_pegawai);
        return $this->db->get()->row_array();
    }

    public function getDetailPegawaiJoin($id_pegawai, $table_join)
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join($table_join, 'pegawai.pe_nip='.$table_join.'.fk_pe_nip', 'right');
        $this->db->where('pegawai.pe_nip',$id_pegawai);
        return $this->db->get()->result_array();
    }

    public function inputData($table, $data){
        $this->db->insert($table, $data);
    } 


    public function deleteDataByID($table,$att_table,$id){
        $this->db->where($att_table, $id);
        $this->db->delete($table);
    } 

    public function deleteDataByID2Where($table,$att_table,$id, $att_table_2,$id_2){
        $this->db->where($att_table, $id);
        $this->db->where($att_table_2, $id_2);
        $this->db->delete($table);
    } 

    public function updateData($table, $where ,$where_value, $data){
        $this->db->where($where,$where_value);
        $this->db->update($table,$data);        
    }


    public function getAllPelatihanPegawai()
    {
        $this->db->select('*');
        $this->db->from('pelatihan');
        $this->db->join('pegawai', 'pegawai.pe_nip=pelatihan.fk_pe_nip', 'left');
        $this->db->join('kepegawaian', 'pegawai.pe_nip=kepegawaian.fk_pe_nip', 'left');
        return $this->db->get()->result_array();
    }

    public function getAllDokumenPegawai()
    {
        $this->db->select('*');
        $this->db->from('dokumen');
        $this->db->join('pegawai', 'pegawai.pe_nip=dokumen.fk_pe_nip', 'left');
        $this->db->join('kepegawaian', 'pegawai.pe_nip=kepegawaian.fk_pe_nip', 'left');
        return $this->db->get()->result_array();
    }

    public function getSumTable($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        return $this->db->get()->num_rows();
    }

    public function getDataRekapPegawaiLokasiKerja()
    {
        $this->db->select('kepegawaian.kpe_lokasi_kerja as lokasi, COUNT(*) as total');
        $this->db->from('kepegawaian');
        $this->db->join('pegawai', 'pegawai.pe_nip=kepegawaian.fk_pe_nip', 'inner');
        $this->db->group_by('kepegawaian.kpe_lokasi_kerja');

        return $this->db->get()->result_array();
    }

    public function getDataRekapPegawaiProfesiKerja()
    {
        $this->db->select('kepegawaian.kpe_profesi as profesi, COUNT(*) as total');
        $this->db->from('kepegawaian');
        $this->db->join('pegawai', 'pegawai.pe_nip=kepegawaian.fk_pe_nip', 'inner');
        $this->db->group_by('kepegawaian.kpe_profesi');

        return $this->db->get()->result_array();
    }

    public function getDataRekapPegawaiJabatanFungsionalLokasiKerja()
    {
        $this->db->select('kepegawaian.kpe_jabatan_fungsional as fungsional, kepegawaian.kpe_lokasi_kerja as lokasi, COUNT(*) as total');
        $this->db->from('kepegawaian');
        $this->db->join('pegawai', 'pegawai.pe_nip=kepegawaian.fk_pe_nip', 'inner');
        $this->db->group_by('kepegawaian.kpe_jabatan_fungsional');
        $this->db->group_by('kepegawaian.kpe_lokasi_kerja');
        return $this->db->get()->result_array();
    }
}
