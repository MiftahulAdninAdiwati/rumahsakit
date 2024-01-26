<?php

class Periksa_model extends CI_model {
    public function getAllPeriksa()
    {
        return $this->db->get('periksa')->result_array();
        
    }
    public function getAllDokter()
    {
        return $this->db->get('dokter')->result_array();
        
    }
    public function getAllRuang()
    {
        return $this->db->get('ruang')->result_array();
        
    }

    public function tambahDataPeriksa()
    {
        $data = [
            "namapasien" => $this->input->post('nama', true),
            "kodedokter" => $this->input->post('kodedokter', true),
            "koderuang" => $this->input->post('koderuang', true),
            "usia" => $this->input->post('usia', true),
            "alamat" => $this->input->post('alamat', true),
            "nohp" => $this->input->post('nohp', true),
        ];

        $this->db->insert('periksa', $data);
    }

    public function hapusDataPeriksa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('periksa');
    }

    public function getPeriksaById($id)
    {
       return $this->db->get_where('periksa', ['id' => $id])->row_array();
    }

    public function ubahDataPeriksa()
    {
        $data = [
            "namapasien" => $this->input->post('nama', true),
            "kodedokter" => $this->input->post('kodedokter', true),
            "koderuang" => $this->input->post('koderuang', true),
            "usia" => $this->input->post('usia', true),
            "alamat" => $this->input->post('alamat', true),
            "nohp" => $this->input->post('nohp', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('periksa', $data);
    }

    public function cariDataPeriksa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('namapasien', $keyword);
        $this->db->or_like('usia', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('nohp', $keyword);
        return $this->db->get('periksa')->result_array();
    }

}