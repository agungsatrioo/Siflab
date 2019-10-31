<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    function index() {
        $data['title'] = "Login";
        $data['my_css'] = link_tag(base_url('media/blog.css'));

        $this->makeview('homepage/v_home',$data);
    }
}
