<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
    const LEVEL_MAHASISWA = 4;
    const LEVEL_PIMIPINAN = 3;
    const LEVEL_ADMIN_2 = 2;
    const LEVEL_ADMIN_1 = 1;
    
    function __construct() {
        parent::__construct();
    }    
    
    function makeview($page, array $data) {
        $data['contents'] = $this->load->view($page, $data, true);
        $this->load->view('base/v_base', $data);
    }
    
    function makelinkrel() {
        
    }
}
