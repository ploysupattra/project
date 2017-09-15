<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class conupload extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->library('session');

  }
  public function saveall(){
    $config['upload_path'] = './assets/img/gallery/';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['max_size'] = '1024';
    $config['max_width'] = '1024';
    $config['max_height'] = '1024';
    $config['remove_spaces'] = TRUE;
    $fullfilename=  $_FILES["picture"]['name'];
    $full2=  $_FILES["picture2"]['name'];
    $full3=  $_FILES["picture3"]['name'];
    $full4=  $_FILES["picture4"]['name'];
    $full5=  $_FILES["picture5"]['name'];
    $fileext = pathinfo($fullfilename, PATHINFO_EXTENSION);
    $fileext2 = pathinfo($full2, PATHINFO_EXTENSION);
    $fileext3 = pathinfo($full3, PATHINFO_EXTENSION);
    $fileext4 = pathinfo($full4, PATHINFO_EXTENSION);
    $fileext5 = pathinfo($full5, PATHINFO_EXTENSION);
    $config['file_name'] = time().".".$fileext;
    $config['file_name2'] = time().".".$fileext2;
    $config['file_name3'] = time().".".$fileext3;
    $config['file_name4'] = time().".".$fileext4;
    $config['file_name5'] = time().".".$fileext5;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('picture'))
    {
      echo $this->upload->display_errors();
    } else { $con = array('shop_id' => $_POST['shop_id'],
                          'picture_1' => $config['file_name'],
                          'picture_2' => $config['file_name2'],
                          'picture_3' => $config['file_name3'],
                          'picture_4' => $config['file_name4'],
                          'picture_5' => $config['file_name5'],);
    $this->db->insert('gallery',$con);
    echo '<script language="javascript">';
    echo 'alert("บันทึกรูปสำเร็จ")';
    echo '</script>';
    // $this->load->view('shop');
    }
  }
  public function showpic(){
    $query=$this->db->query("select * from gallery2 where img_id=1");
    $row = $query->num_rows();
    if($row>=1){ foreach($query->result() as $onerow)
      { $newdata = array( 'picture1'  => $onerow->picture_1,
                          'picture2'  => $onerow->picture_2,
                          'picture3'     => $onerow->picture_3,
                          'picture4'     => $onerow->picture_4,
                          'picture5' => $onerow->picture_5    );
       }
   $this->session->set_userdata($newdata);
   $this->load->view('datamap');
  }
}






}
