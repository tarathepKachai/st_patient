<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Patient extends \Restserver\Libraries\REST_Controller {

    function __construct() {
        // Construct the parent class
        parent::__construct();
        $this->load->model("Patient_model");
    }

    public function patient_save_post() {

        $data = array(
            "input" => $this->post("username")
        );

        $this->response($data, 200);
        // แสดงรายการข่าวทั้งหมด
    }

    public function user_get() {
        $data = array(
            "status" => "success",
            "username" => $this->get("username")
        );
        $this->response($data, 200);
        // แสดงรายการข่าวทั้งหมด
    }

    public function prefix_get() {
        
        $data = $this->Patient_model->get_prefix_list();
        
        $this->response($data,200);
    }

}
