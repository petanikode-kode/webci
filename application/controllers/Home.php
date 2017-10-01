<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
	public function index()
	{
                $data['title']='webci';
                $data['subtitle']='Website CodeIgnter';
                $data['view_isi']='view_home';
                $this->load->view('layout/login');
	}
}
