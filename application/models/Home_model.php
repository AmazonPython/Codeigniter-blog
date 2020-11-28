<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();//加载数据库
    }

    public function home()
    {
        //$query = $this->db->query('select * from article order by id desc limit 0,8');//加载数据表

        //调用article表,按id倒序排列并显示8条数据
        $data = $this->db->from('article')->order_by('id', 'desc')->limit(8)->get();
        return $data->result();
    }

    public function article($id)
    {
        $data = $this->db->from('article')->where('id=', $id)->get();
        return $data->result()[0];
    }

    public function tweets($config)
    {
        $query = $this->db->order_by('id', 'desc')->get('tweets', $config['per_page'], $this->uri->segment(3));
        return $query->result_array();
    }

    public function diaries($config)
    {
        $query = $this->db->get('diaries', $config['per_page'], $this->uri->segment(3));
        return $query->result_array();
    }

    public function diaries_details($id)//日记详情
    {
        $data = $this->db->from('diaries')->where('id=', $id)->get();
        return $data->result_array()[0];
    }

    public function learn($config)
    {
        $query = $this->db->get('article', $config['per_page'], $this->uri->segment(3));
        return $query->result_array();
    }

    public function guestbook($config)
    {
        $query = $this->db->get('guestbook', $config['per_page'], $this->uri->segment(3));
        return $query->result_array();
    }

    public function message($name, $content, $date)
    {
        if ($this->db->insert('guestbook',array(

            'name' => $name,
            'content' => $content,
            'date' => $date

        ) )){

            return $this->db->insert_id() && redirect('home/guestbook');

        }else{
            log_message ('error', 'register error-->' . $this->db->last_query());
            return false;
        }
    }

    function search($keyword)
    {
        $data = $this->db->from('article')->like('title', $keyword)->or_like('content', $keyword)->get();
        return $data->result();
    }
}
