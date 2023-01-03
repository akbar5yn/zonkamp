<?php
class KategoriContent extends CI_Model
{
    public function getAllKategori()
    {
        $this->db->select();
        $this->db->from('kategori_video');
        return $this->db->get()->result();
    }

    public function get_keyword($keyword = null)
    {
        if ($keyword) {
            $this->db->like("judul", $keyword);
        }
        $this->db->select();
        $this->db->from('contents');
        $this->db->join('user', 'contents.id_user = user.id_user');
        return $this->db->get()->result();
    }

    public function getVideoTipsAndTriks($id_kategori)
    {
        $this->db->join('user', 'contents.id_user = user.id_user');
        return  $this->db->get_where('contents', $id_kategori);
    }
    public function getVideoSeputarTutorial($id_kategori)
    {
        $this->db->join('user', 'contents.id_user = user.id_user');
        return  $this->db->get_where('contents', $id_kategori);
    }
    public function getVideoTrending($id_kategori)
    {
        $this->db->join('user', 'contents.id_user = user.id_user');
        return  $this->db->get_where('contents', $id_kategori);
    }
}
