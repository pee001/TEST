</<?php
/**
 *
 */
class Findall extends CI_Controller
{

  function index()
  {
      $this->load->library('parser');
      $this->load->helper('url');
      $this->load->model('Newss');
      //$data = array(
        //  'blog_title' => 'My Blog Title',
          //'blog_heading' => '',

      //);

      $data['blog_heading']='ข่าวสาร';
      $data['blog_title']='สำนักกิจการนักศึกษา มหาวิทยาลัยนอร์ทเชียงใหม่';
      $data['blog_entries']= $this->Newss->findByAll();
      $this->parser->parse('home', $data);
  }
  function findnew()
  {
    $this->load->library('parser');
    $this->load->helper('url');
    $this->load->model('Newss');
    $data['blog_heading']='ข่าวสาร';
    $data['blog_entries']=$this->Newss->findByPk($this->a->get('idnew'));
    $this->parser->parse_single('new', $data);
  }
}

 ?>
