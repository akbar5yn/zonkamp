<?php
class VideoModel extends CI_Model
{
    public function insertVideo($video_path)
    {
        $data['content_link'] = $video_path;
        $id_user = $this->input->post('id_user', true);
        $judul = $this->input->post('judul', true);
        $desc_content = $this->input->post('desc_content', true);
        $id_kategori = $this->input->post('id_kategori', true);
        $data = array(
            'id_user' => $id_user,
            'content_link' => $video_path,
            'judul' => $judul,
            'desc_content' => $desc_content,
            'id_kategori' => $id_kategori,
        );
        return $this->db->insert('contents', $data);
    }

    public function getAllVideos()
    {
        $this->db->select();
        $this->db->from('contents');
        $this->db->join('user', 'contents.id_user = user.id_user');
        return $this->db->get()->result();
    }

    public function getVideoById()
    {
        // $this->db->select_sum('id_user');
        $this->db->join('user', 'contents.id_user = user.id_user');
        $this->db->where('user.email', $this->session->userdata('email'));
        return $this->db->get('contents')->result();
    }

    public function totalById()
    {
        $this->db->select_sum('contents.id_user');
        $this->db->from('contents');
        $this->db->join('user', 'contents.id_user = user.id_user');
        $this->db->where('user.email', $this->session->userdata('email'));
        $total = $this->db->get('');
        if ($total->num_rows() > 0) {
            return $total->row()->id_user;
        } else {
            return 0;
        }
    }

    public function del_video($id_content)
    {
        $this->db->where('id_content', $id_content);
        $this->db->delete('contents');
    }

    public function getVideo($id_content)
    {
        return $this->db->get_where('contents', ['id_content' => $id_content])->row_array();
        // $this->db->where('contents', ['id_content', $id_content]);
        // return $this->db->get('contents')->row_array();
    }

    public function getComment(){
        // $query = $this->db->get_where('comments', array('id_comment' => $id_comment));
        // return $query->row();
        $this->db->select('*');
        $this->db->from('comments');
        $this->db->join('contents', 'comments.id_content = contents.id_content');
        // $this->db->where('comments.id_content', 168);
        $this->db->join('user', 'comments.id_user = user.id_user');
        
        return $this->db->get()->result();
    }

    // public function getComment(){
    //     $this->db->where('id_content');
    //     $query = $this->db->get('comments');
    //     return $query->result_array();
    // }

    // public function tampilComment(){
    //     // $this->db->select('*');
    //     // $this->db->from('contents');
    //     $this->db->join('comments', 'contents.id_content = comments.id_content');
    //     // $this->db->join('user', 'comments.id_user = user.id_user');
    //     $this->db->where('comments.id_content', $this->session->userdata('id_content'));
    //     return $this->db->get('contents')->result();
    // }
}
