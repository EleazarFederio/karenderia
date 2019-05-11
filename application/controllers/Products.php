<?php
class Products extends CI_Controller{

    function view(){
        $this->load->view('templates/header');
        $this->load->view('products/addproduct');
    }

}