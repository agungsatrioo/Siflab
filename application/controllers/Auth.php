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
        }
    }
    
    public function login_page() {
        $data['title'] = "Login";
        $this->makeview('auth/v_login',$data);
    }
    
    public function do_login() {
        echo $this->input;
    }
}
