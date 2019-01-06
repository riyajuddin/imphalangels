<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function index()
	{   
		$this->load->view('home');
	}
	public function terminology()
	{   
		$this->load->view('terminology');
	}
		public function entrepreneurs()
	{   
		$this->load->view('entrepreneurs');
	}
		public function angels()
	{   
		$this->load->view('angels');
	}
			public function team()
	{   
		$this->load->view('team');
	}
	
}

	