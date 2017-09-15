<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->library('session');
  }
  public function datamap(){
      $this->load->view('datamap');
  }
  public function test(){
    $this->load->view('test/test');
  }
  public function upost(){
    if($_POST['action'] == 'show'){
      if($_POST['value'] == 1){
      echo 'Test Value 1';
      }else{
      echo 'Test Value 2';
      }
    }
  }
  public function upload2(){
    $this->load->view('test2');
  }
  public function table(){
    $this->load->view('test/table');
  }
  public function slideclick(){
    $this->load->view('test/slideclick');
  }



}
