<?php
class Berita_model extends CI_Model
{
    public function getAllBerita()
    {
        return $this->db->get('artikel')->result_array();
    }
    public function getAllGallery()
    {
        return $this->db->get('gallery')->result_array();
    }
    public function getAllBeritaDesc()
    {
        $this->db->order_by('id_berita', 'desc');
        return $this->db->get('artikel')->result_array();
    }
    public function getAllGalleryDesc()
    {
        return $this->db->order_by('id_gallery', 'desc');
        return $this->db->get('gallery')->result_array();
    }
    public function getBerita($limit, $start)
    {
        return $this->db->order_by('id_berita', 'desc')->get('artikel', $limit, $start)->result_array();
    }
    public function getGallery($limit, $start)
    {
        return $this->db->order_by('id_gallery', 'desc')->get('gallery', $limit, $start)->result_array();
    }
    public function countAllBerita()
    {
        return $this->db->get('artikel')->num_rows();
    }
    public function countAllGallery()
    {
        return $this->db->get('gallery')->num_rows();
    }
    public function detailBerita($id = NULL)
    {
        $query = $this->db->get_where('artikel', array('id_berita' => $id))->row_array();
        return $query;
    }
    public function detailGallery($id = NULL)
    {
        $query = $this->db->get_where('gallery', array('id_gallery' => $id))->row_array();
        return $query;
    }
    public function detailberitalimit()
    {
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit(4, 0);
        return $this->db->get('artikel')->result_array();
    }
    public function detailgallerylimit()
    {
        $this->db->order_by('id_gallery', 'desc');
        $this->db->limit(5, 0);
        return $this->db->get('gallery')->result_array();
    }
    public function updateData($table, $where, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function ambil_id_gambar($id)
    {
        $this->db->from('artikel');
        $this->db->where('id_berita', $id);
        $result = $this->db->get('');
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    public function hapus_data($id)
    {
        $this->db->where('id_berita', $id);
        $this->db->delete('artikel');
        return TRUE;
    }
    public function ambil_id_gambar_gallery($id)
    {
        $this->db->from('gallery');
        $this->db->where('id_gallery', $id);
        $result = $this->db->get('');
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    public function hapus_data_gallery($id)
    {
        $this->db->where('id_gallery', $id);
        $this->db->delete('gallery');
        return TRUE;
    }
}
