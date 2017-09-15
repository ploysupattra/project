<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class json extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->library('session');
  }
  public function jsonObj(){
    $q = $this->db->query('select * FROM shop_member  ');
    $row = $q->num_rows();
    if($row>=1){ foreach($q->result() as $onerow)
      { $json_data[]= array(  'shop_name' => $onerow->shop_name,
                              'callphone' => $onerow->callphone,
                              'service_id' => $onerow->service_id,
                              'open_id' => $onerow->open_id,
                              'close_id' => $onerow->close_id,
                              'latitude' => $onerow->latitude,
                              'longtitude' => $onerow->longtitude,
                      );
           }

      $json = json_encode($json_data);
      echo $json;
    }else {
      echo "Erorr Encode JSON from json_data";
    }
  }
  public function jsonGen(){
    $q = $this->db->query('select * FROM shop_member WHERE shop_member.service_id=1');
    $row = $q->num_rows();
    if($row>=1){ foreach($q->result() as $onerow)
      { $json_data[]= array(  'shop_name' => $onerow->shop_name,
                              'callphone' => $onerow->callphone,
                              'service_id' => $onerow->service_id,
                              'open_id' => $onerow->open_id,
                              'close_id' => $onerow->close_id,
                              'latitude' => $onerow->latitude,
                              'longtitude' => $onerow->longtitude,
                      );
           }

      $json = json_encode($json_data);
      echo $json;
    }else {
      echo "Erorr Encode JSON form json_data Service type Genaral";
    }

  }

  public function jsonBig(){
    $q = $this->db->query('select * FROM shop_member WHERE shop_member.service_id=2');
    $row = $q->num_rows();
    if($row>=1){ foreach($q->result() as $onerow)
      { $json_data[]= array(  'shop_name' => $onerow->shop_name,
                              'callphone' => $onerow->callphone,
                              'service_id' => $onerow->service_id,
                              'open_id' => $onerow->open_id,
                              'close_id' => $onerow->close_id,
                              'latitude' => $onerow->latitude,
                              'longtitude' => $onerow->longtitude,
                      );
           }

      $json = json_encode($json_data);
      echo $json;
    }else {
      echo "Erorr Encode JSON form json_data Service type BigBike";
    }

  }

  public function jsonVes(){
    $q = $this->db->query('select * FROM shop_member WHERE shop_member.service_id=3');
    $row = $q->num_rows();
    if($row>=1){ foreach($q->result() as $onerow)
      { $json_data[]= array(  'shop_name' => $onerow->shop_name,
                              'callphone' => $onerow->callphone,
                              'service_id' => $onerow->service_id,
                              'open_id' => $onerow->open_id,
                              'close_id' => $onerow->close_id,
                              'latitude' => $onerow->latitude,
                              'longtitude' => $onerow->longtitude,
                      );
           }

      $json = json_encode($json_data);
      echo $json;
    }else {
      echo "Erorr Encode JSON form json_data Service type Vespa";
    }

  }




}
