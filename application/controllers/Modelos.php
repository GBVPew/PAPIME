<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Modelos extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('header');
        $this->load->view('saludo');   
        $this->load->view('footer');
    }

    public function arduino() {
        $this->load->view('header');
        $this->load->view('modelo1');   
        $this->load->view('footer');
    }
    public function bobina() {
        $this->load->view('header');
        $this->load->view('modelo2');   
        $this->load->view('footer');
    }
    public function capacitor() {
        $this->load->view('header');
        $this->load->view('modelo3');   
        $this->load->view('footer');
    }
    public function celdaSolar() {
        $this->load->view('header');
        $this->load->view('modelo4');   
        $this->load->view('footer');
    }
    public function celular() {
        $this->load->view('header');
        $this->load->view('modelo5');   
        $this->load->view('footer');
    }
    public function control1() {
        $this->load->view('header');
        $this->load->view('modelo6');   
        $this->load->view('footer');
    }
    public function control2() {
        $this->load->view('header');
        $this->load->view('modelo7');   
        $this->load->view('footer');
    }
    public function dron() {
        $this->load->view('header');
        $this->load->view('modelo8');   
        $this->load->view('footer');
    }
    public function microprocesador() {
        $this->load->view('header');
        $this->load->view('modelo9');   
        $this->load->view('footer');
    }
    public function osciloscopio() {
        $this->load->view('header');
        $this->load->view('modelo10');   
        $this->load->view('footer');
    }
    public function raspberry() {
        $this->load->view('header');
        $this->load->view('modelo11');   
        $this->load->view('footer');
    }

    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */