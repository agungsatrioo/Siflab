<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    function __construct() {
        parent::__construct();
        redirect('login');
    }  
    
	public function index() {
		$this->load->view('welcome_message');
	}
    
    public function _remap($method, $params = array()) {
    }
}
