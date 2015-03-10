<?php
/**
 * Created by PhpStorm.
 * User: Jetta
 * Date: 29/01/2015
 * Time: 15:10
 */

class Accueil extends CI_Controller{

    public function index(){
        $this->load->view('administration/accueil');
    }

}