<?php

/**
 * Created by PhpStorm.
 * User: adhibarfan
 * Date: 05/11/1
 */
class News_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {

        if ($slug === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        } else {
            $query = $this->db->get_where('news', array('slug' => $slug));
            return $query->row_array();
        }
    }

    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'text' => $this->input->post('text'),
            'slug' => $slug

        );
        $this->db->insert('news', $data);
    }

    public function get_news_id($id = FALSE)
    {
        $query = $this->db->get_where('news', array('id' => $id));
        return $query->row_array();

    }

    public function update_news($id)
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'text' => $this->input->post('text'),
            'slug' => $slug

        );
        $this->db->where('id', $id);
        $this->db->update('news', $data);
    }

    public function delete_news($id){
        return $this->db->delete('news', array('id'=>$id));
    }

}