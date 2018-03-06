<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
	public function index()
	{
		$data['page'] = 'index';
		$this->load->view('index',$data);	
	}

	public function connectDB()
	{
		$this->load->model('musician');
		$data['jan_artist'] = $this->musician->getArtist4Jan();
		$data['feb_artist'] = $this->musician->getArtist4Feb();
		$this->load->view('music',$data);
	
	}


	public function menu()
	{
		$data['page'] = 'menu';
		$this->load->view('menu',$data);
	}

	public function music()
	{
		$this->connectDB();
		
	}

	public function jobs()
	{
		$data['page'] = 'jobs';
		$this->load->view('Jobs',$data);
	}

	public function artistdetails()
	{
		$data['page'] = 'artistdetails';
		$this->load->view('artistdetails',$data);
	}

	public function proxy()
	{
		$data['page'] = 'proxy';
		$this->load->view('proxy',$data);
	}

	
}
?>