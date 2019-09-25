<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    function __construct() {
        parent::__construct();

        if($this->M_user->user()==null) redirect(base_url("login"));
    }  

    public function _remap($method, $params = array()) {
        $ulevel = $this->M_user->user()->siflab_user_level;

        echo "<br>";
        //print_r($this->uri->segments);

        if($method == "do_logout") $this->do_logout();

        switch($ulevel) {
            case parent::LEVEL_MAHASISWA:
                switch($method) {
                    case "": case "index":
                        $this->make_home_mhs();
                        break;

                    case "up":

                        break;

                }
                break;

        }
    }

    private function make_home_mhs() {
        $data['username'] = $this->M_user->user()->siflab_mhs_name;
        $this->make_dashboard("tile", '', $data);
    }

    private function do_logout() {
        $this->M_user->logout();
        redirect(base_url("login"));
    }
}
