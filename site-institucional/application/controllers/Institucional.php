<?php
defined('BASEPAPH') OR exit('No direct script access allowed');

class Institucioal extends CI_Controller {
    /**
     * @return object
     */
    public function index()
    {
        $this->load->view('home');
    }
}
?>