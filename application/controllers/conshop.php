
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class conshop extends CI_Controller {

	function __construct()
  {
   parent::__construct();
   $this->load->helper('url');
   $this->load->library('session');
   $this->load->database();
  }
	public function register()
	{
		$service = $this->db->query('select * from service');
		$open = $this->db->query('select * from timeopen');
		$close = $this->db->query('select * from timeclose');
		$province = $this->db->query('select * from province');
		$daybegin = $this->db->query('select * from daybegin');
		$dayend = $this->db->query('select * from dayend');
		$data = array('service' => $service,
	 								'open' => $open,
									'close' =>$close,
									'daybegin' => $daybegin,
									'dayend' => $dayend,
									'province' =>$province,);
	  $this->load->view('shop/register',$data);
	}
	public function create()
	{
		$config['upload_path'] = './assets/img/logoshop/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '1024';
		$config['max_width'] = '1024';
		$config['max_height'] = '1024';
		$config['remove_spaces'] = TRUE;

		$fullfilename=  $_FILES["picture"]['name'];
		$fileext = pathinfo($fullfilename, PATHINFO_EXTENSION);
		$config['file_name'] = time().".".$fileext;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('picture'))
		{
			echo $this->upload->display_errors();
		} else { $data = array('address' => $_POST['address'],
													'shop_name' => $_POST['shop_name'],
													'callphone' => $_POST['callphone'],
													'username' => $_POST['user'],
													'password' => $_POST['pass'],
													'email' => $_POST['email'],
													'begin_id' => $_POST['daybegin'],
													'end_id' => $_POST['dayend'],
													'service_id' => $_POST['service'],
													'open_id' => $_POST['open'],
													'close_id' => $_POST['close'],
													'province_id' =>$_POST['province'],
													'picture' => $config['file_name'],
													'facebook' => $_POST['facebook'],
													'line' => $_POST['line'],
													'latitude' => $_POST['lat'],
													'longtitude' => $_POST['lng'],);
		$this->db->set('date_register','NOW()',FALSE);
		$this->db->insert('shop_member',$data);
		echo '<script language="javascript">';
		echo 'alert("บันทึกข้อมูลสำเร็จ")';
		echo '</script>';
		}
		$this->load->view('windows');
	}
	public function login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = $this->db->query("select * from shop_member where username = '$username' and password = '$password'");
		$row = $query->num_rows();
		if($row>=1){ foreach($query->result() as $onerow)
			{ $newdata = array( 'shop_id'  => $onerow->shop_id,
													'username'  => $onerow->username,
													'password' => $onerow->password,
													'shop_name' => $onerow->shop_name,
													'callphone' => $onerow->callphone,
													'email'     => $onerow->email,
													'address' => $onerow->address,
													'service_id' => $onerow->service_id,
													'open_id' => $onerow->open_id,
													'close_id' => $onerow->close_id,
													'latitude' => $onerow->latitude,
													'date_register' => $onerow->date_register,
													'longtitude' => $onerow->longtitude,
													'picture'     => $onerow->picture,
													'logged_in' => TRUE);
			 }
		$this->session->set_userdata($newdata);
		$data['gallery'] = $this->db->query("select * from gallery
		INNER JOIN shop_member ON gallery.shop_id = shop_member.shop_id
		where username = '$username' and password = '$password'");
		$this->load->view('shop/shop',$data);
		}else{  echo '<script language="javascript">';
						echo 'alert("ไม่สามารถเข้าสู่ระบบได้")';
						echo '</script>';
						$this->load->view('shop/loginform');
					}
	}
	public function updateform($updateid){
		$service = $this->db->query('select * from service');
		$open = $this->db->query('select * from timeopen');
		$close = $this->db->query('select * from timeclose');
		$province = $this->db->query('select * from province');
		$daybegin = $this->db->query('select * from daybegin');
		$dayend = $this->db->query('select * from dayend');
		$data = array('service' => $service,
									'open' => $open,
									'close' =>$close,
									'daybegin' => $daybegin,
									'dayend' => $dayend,
									'province' =>$province,);
		$data['shop_member'] = $this->db->query('select * from shop_member where shop_id='.$updateid);
		$this->load->view('shop/updateform',$data);

	}
	public function update(){
		 $a = $_POST['shop_id'];
		 $config['upload_path'] = './assets/img/logoshop/';
		 $config['allowed_types'] = 'gif|jpg|jpeg|png';
		 $config['max_size'] = '1500';
		 $config['max_width'] = '1500';
		 $config['max_height'] = '1500';
		 $config['remove_spaces'] = TRUE;
		 $fullfilename=  $_FILES["picture"]['name'];
		 $fileext = pathinfo($fullfilename, PATHINFO_EXTENSION);
		 $config['file_name'] = time().".".$fileext;

		//  $this->upload->initialize($config);
		 $this->load->library('upload', $config);

		 if ( ! $this->upload->do_upload('picture'))
	 		{ echo $this->upload->display_errors();
	 		} else { $newdata = array( 'address' => $_POST['address'],
											'shop_name' => $_POST['shop_name'],
											'callphone' => $_POST['callphone'],
											'username' => $_POST['user'],
											'password' => $_POST['pass'],
											'email' => $_POST['email'],
											'begin_id' => $_POST['daybegin'],
											'end_id' => $_POST['dayend'],
											'service_id' => $_POST['service'],
											'open_id' => $_POST['open'],
											'close_id' => $_POST['close'],
											'province_id' =>$_POST['province'],
											'picture' => $config['file_name'],
											'latitude' => $_POST['lat'],
											'longtitude' => $_POST['lng'],
											'facebook' => $_POST['facebook'],
											'line' => $_POST['line'],
									);
		$this->db->where('shop_id',$a);
		$this->db->update('shop_member', $newdata);
		$this->load->view('shop/confirmed');
		}
	}
	public function logout()
	{
	 session_destroy();
	 echo '<script language="javascript">';
	 echo 'alert("ออกจากระบบเรียบร้อย")';
	 echo '</script>';
	 $this->load->view('windows');
	}
	public function loginform(){
		$this->load->view('shop/loginform');
	}
	public function addgallary(){
		$config['upload_path'] = './assets/img/gallery/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '1024';
		$config['max_width'] = '1024';
		$config['max_height'] = '1024';
		$config['remove_spaces'] = TRUE;
		$fullfilename=  $_FILES["picture"]['name'];
		$fileext = pathinfo($fullfilename, PATHINFO_EXTENSION);
		$config['file_name'] = time().".".$fileext;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('picture'))
		{
			echo $this->upload->display_errors();
		} else { $data = array( 'pic_name' => $config['file_name'],
													 	'shop_id' => $_SESSION['shop_id']);
						}
		$this->db->insert('gallery',$data);
		$this->load->view('shop/confirmadd');
	}
	public function shop(){
		$data['gallery'] = $this->db->query("select * from gallery
		INNER JOIN shop_member ON gallery.shop_id = shop_member.shop_id");
		// $this->session->set_userdata($data);
		$this->load->view('shop/shop',$data);
	}
	public function confirmdl($updateid){
		$data['gallery'] = $this->db->query('select * from gallery
		INNER JOIN shop_member ON gallery.shop_id = shop_member.shop_id where pic_id='.$updateid);
		$this->load->view('shop/confirmdl',$data);
	}
	public function dl_pic($deleteid){
		$a = array( 'pic_id' =>$deleteid );
		$this->db->delete('gallery', $a);
		$this->load->view('shop/sucessdl');
	}
	public function closingaccount($updateid){
		$data['shop'] = $this->db->query('select * from shop_member where shop_id='.$updateid);
		$this->load->view('shop/closingaccount',$data);
	}
	public function dl_shop($deleteid){
		$a = array( 'shop_id' =>$deleteid );
		$this->db->delete('shop_member', $a);
		echo '<script language="javascript">';
		echo 'alert("ปิดบัญชีสำเร็จ")';
		echo '</script>';
		$this->load->view('windows');
	}


}
