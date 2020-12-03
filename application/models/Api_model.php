<?php
class Api_model extends CI_Model{
    public function __construct(){
        //$this->load->database();
    }

    public function getInventory(){
        $api =  file_get_contents("http://pcb.emb.gov.ph/api/table/pcb_inventoryTB/7");
        
        $user = json_decode($api, true);

        return $user;
    }

}