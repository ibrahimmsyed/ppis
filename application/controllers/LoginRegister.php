<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginRegister extends CI_Controller{
 function __construct()
  {
   parent::__construct();
    $this->load->helper(array('form', 'url'));
  }
 function index($msg = NULL)
 {

  $this->template
        ->title('Login','Login Page')      
        ->set_layout('access')
        ->build('access/login');
 } 
 function validate_credentials()
 {  
      redirect('/Dashboard');
 }
 
}
