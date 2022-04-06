<?php
class Koleksimodel extends CI_Model{
    function __construct()
    {
        $this->load->database();
    }

    function get_koleksi()
    {
        $query = $this->db->query("SELECT * FROM koleksi");
        return $query->result_array();
    }

    function get_detail($a)
    {
        $this->db->where('id_koleksi', $a);
        return $this->db->get('koleksi')->row_array();
    }

    function insert($a, $cover)
    {
        $data = [
            'nama' => $a['nama'],
            'penerbit' => $a['penerbit'],
            'penulis' => $a['penulis'],
            'cover' => $cover
        ];
        return $this->db->insert('koleksi', $data);
    }

    function update($a, $id, $cover = null)
    {
        if ($cover ==1){
            $data = [
                'cover' => $a
            ];
        } else {
            $data = [
            'nama' => $a['nama'],
            'penerbit' => $a['penerbit'],
            'penulis' => $a['penulis']
        ];
        }
        
        $this->db->where('id_koleksi', $id);
        return $this->db->update('koleksi', $data);
    }

    function update_cover($cover, $id)
    {
        $data = [
            'cover' => $cover
        ];
        $this->db->where('id_koleksi', $id);
        return $this->db->update('koleksi', $data);
    }

    function delete($id)
    {
        $this->db->where('id_koleksi', $id);
        return $this->db->delete('koleksi');
    }
}
