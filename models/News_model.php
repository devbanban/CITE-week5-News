<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class News_model extends CI_Model {

    public function list_all()
        {   
                $query = $this->db->get('tbl_news');
                return $query->result();
        }

    public function news_index()
        {   
                //$this->db->cache_on();
                $this->db->where('news_status','show');
                $this->db->limit(4);
                $this->db->order_by('news_id', 'desc');
                $query = $this->db->get('tbl_news');
                return $query->result();
        }


    public function list_detail_page()
        {   
                //$this->db->cache_on();
                $this->db->where('news_status','show');
                $this->db->limit(5);
                $this->db->order_by('news_id', 'desc');
                $query = $this->db->get('tbl_news');
                return $query->result();
        }

	public function insert_news()
	{
        $news_img = $this->upload->file_name;
		$data = array(
                'news_title' => $this->input->post('news_title'),
                'news_intro' => $this->input->post('news_intro'),
                'news_detail' => $this->input->post('news_detail'),
                'news_img' => $news_img
                );
        $this->db->insert('tbl_news',$data);
	}


//show form edit
	 public function read($news_id){
                $this->db->where('news_id',$news_id);
                $query = $this->db->get('tbl_news');
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }


    public function update_news()
        {
                $data = array(
                    'news_title' => $this->input->post('news_title'),
                    'news_intro' => $this->input->post('news_intro'),
                    'news_detail' => $this->input->post('news_detail'),
                    'news_status' => $this->input->post('news_status')
                );
                $this->db->where('news_id', $this->input->post('news_id'));
                $this->db->update('tbl_news',$data);
        }


    public function update_news_img()
        {
                $news_img = $this->upload->file_name;
                $data = array(
                    'news_title' => $this->input->post('news_title'),
                    'news_intro' => $this->input->post('news_intro'),
                    'news_detail' => $this->input->post('news_detail'),
                    'news_status' => $this->input->post('news_status'),
                    'news_img' => $news_img
                );
                $this->db->where('news_id', $this->input->post('news_id'));
                $this->db->update('tbl_news',$data);
        }


        public function del_news($news_id)
        {
               $this->db->delete('tbl_news',array('news_id'=>$news_id));

        }


}