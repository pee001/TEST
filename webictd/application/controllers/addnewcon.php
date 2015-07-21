<?php
/**
*
*/
class Addnewcon extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');

		$data['error']='';

	}

	function index()
	{
			$config['upload_path'] = './img/';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->form_validation->set_rules('feetnew', 'ข่าว', 'required',
			array(
					'required' => 'กรุณากรอก{field}'
		        ));
      $this->form_validation->set_rules('datenew', 'วันที่', 'required',
			array(
					'required' => 'กรุณากรอก{field}'
				));

      $this->form_validation->set_rules('contennew', 'เนื้อหาข่าว', 'required',
			array(
					'required' => 'กรุณากรอก{field}'
				));
		$this->load->library('upload',$config);
		if ( $this->form_validation->run() == FALSE)
		{
			$data['file']['file_name']='';
			$this->load->view('addnew',$data);
		}
		else
		{
			if ( ! $this->upload->do_upload('picture'))
			{
				$data['file']['file_name']='';
				$data['error'] = $this->upload->display_errors();
			}
			else
			{
				$data['file'] = $this->upload->data();
				$this->load->model('Newss');
				$this->Newss->setFeetnew($this->input->post('feetnew'));
				$this->Newss->setContennew($this->input->post('contennew'));
				$this->Newss->setDatenew($this->input->post('datenew'));
				$this->Newss->setFile('img/'.$data['file']['file_name']);

				 $this->Newss->add();


			}
			//$this->load->view('homeaddtour');

				$this->load->view('addnew',$data);
		}


	}

}
?>
