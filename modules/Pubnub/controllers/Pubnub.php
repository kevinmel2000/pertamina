<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pubnub extends MX_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

        public function index(){
        	$this->load->view('vpubnub');
        }


}
