<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

    public function _remap($method, $params = array()) {
        switch($method) {
            case "": case "index":
                redirect("login");
                break;
            case "login":
                $this->login_page();
                break;
            case "do_login":
                $this->do_login();
                break;
            default:
                parent::_remap($method, $params);
        }
    }
    
    private function login_page() {
        $data['title'] = "Login";
        $data['login_url'] = base_url('auth/do_login');
        $this->makeview('auth/v_login',$data);
    }
    
    private function do_login() {
        echo $this->input;
    }
}
