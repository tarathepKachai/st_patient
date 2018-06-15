<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

require 'vendor/autoload.php';

class user_Controller extends CI_Controller {

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
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        echo "user";
    }

    public function main_page() {
        $this->load->view("template/header");

        $this->load->view("page/index");
        $this->load->view("page/modal_patient_edit");
        $this->load->view("page/modal_user_sp");
        $this->load->view("template/footer");
    }

    public function test() {

        $this->load->view("test_page");
    }

    function guzzle() {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: *");
        header('Access-Control-Allow-Methods: POST');
        header('Content-Type: application/json');

        # guzzle client define
        $client = new \GuzzleHttp\Client(); //['http_errors' => false]
        #This url define speific Target for guzzle
        $url = 'http://localhost/st_patient/Restserver/patient/save';

        #guzzle
        $x = $this->input->post("username");
        //if($this->input->post("username")==null){
        $param = ['form_params' => ['username' => $this->input->post("username")]
        ];



        echo json_encode($this->input->post("username"));


        # guzzle post request example with form parameter
//            $response = $client->request('POST', $url, $param
//            );
//            #guzzle repose for future use
////            echo $response->getStatusCode(); // 200
////            echo $response->getReasonPhrase(); // OK
////            echo $response->getProtocolVersion(); // 1.1
//            echo $response->getBody();
    }

}
