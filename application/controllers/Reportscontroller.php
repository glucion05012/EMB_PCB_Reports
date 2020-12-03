<?php
    class Reportscontroller extends CI_Controller{
        
        public function index(){
            $this->load->view('templates/header');
            $this->load->view('home');
            $this->load->view('templates/footer');
        }

        public function report(){

            $data['region_db'] = $this->api_model->getInventory();

            //echo json_encode($data['region']);
            $this->load->view('templates/header');
            $this->load->view('reports', $data);
            $this->load->view('templates/footer');
        }
        
    }
?>