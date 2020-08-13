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
        $this->load->view('Modelos/modelo1');   
        $this->load->view('footer');
    }
    public function bobina() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo2');   
        $this->load->view('footer');
    }
    public function capacitor() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo3');   
        $this->load->view('footer');
    }
    public function APractica4() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo4');   
        $this->load->view('footer');
    }
    public function APractica5() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo5');   
        $this->load->view('footer');
    }
    public function control1() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo6');   
        $this->load->view('footer');
    }
    public function APractica7() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo7');   
        $this->load->view('footer');
    }
    public function APractica8() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo8');   
        $this->load->view('footer');
    }
    public function APractica9() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo9');   
        $this->load->view('footer');
    }
    public function osciloscopio() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo10');   
        $this->load->view('footer');
    }
    public function raspberry() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo11');   
        $this->load->view('footer');
    }
    public function APractica12() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo12');   
        $this->load->view('footer');
    }
    public function APractica13() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo13');   
        $this->load->view('footer');
    }
    public function APractica14() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo14');   
        $this->load->view('footer');
    }
     public function APractica15() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo15');   
        $this->load->view('footer');
    }
    public function APractica16() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo16');   
        $this->load->view('footer');
    }
    public function APractica17() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo17');   
        $this->load->view('footer');
    }
    public function APractica18() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo18');   
        $this->load->view('footer');
    }
    public function APractica19() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo19');   
        $this->load->view('footer');
    }
    public function APractica20() {
        $this->load->view('header');
        $this->load->view('Modelos/modelo20');   
        $this->load->view('footer');
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */