<?php
class IdUpload extends CI_Model
{
    public function getIdUser()
    {
        $this->db->select();
        $this->db->from('user');
        return $this->db->get()->result();
    }
}
