<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class conuser extends CI_Controller {

	function __construct()
  {
   parent::__construct();
   $this->load->helper('url');
   $this->load->library('session');
	 $this->load->library('form_validation');
	 $this->form_validation->set_error_delimiters('<div class="bg-danger" style="padding:3px 10px;">', '</div>');
   $this->load->library('upload');
	 $this->load->helper('path');
	 $this->load->library('pagination');
   $this->load->database();
  }
	public function web(){
		$this->load->view('user/web');
	}
	public function profile(){
		$data['countuser'] = $this->db->query("select *,COUNT(review.user_id) AS countuser FROM review
		INNER JOIN user_member ON review.user_id = user_member.user_id");
		$this->load->view('user/profile',$data);
	}
	public function review(){
		$event = $this->db->query('select * from event');
		$showre = $this->db->query('select * FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE shop_id=2');
		$showre2 = $this->db->query('select * FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE shop_id=4');
		$showre3 = $this->db->query('select * FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE shop_id=1');
		$data = array('event'=>$event , 'showre'=>$showre,'showre2'=>$showre2,'showre3'=>$showre3);
		$this->load->view('user/review',$data);
	}
	public function mailadmin(){
		$this->load->view('user/mailadmin');
	}
	public function eventmotor(){
		$this->load->view('user/eventmotor');
	}
	public function recommend(){
		$shown = $_POST['redata'];
		$query = $this->db->query("select *
		FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE shop_member.shop_id = '$shown'");
		$row = $query->num_rows();
		if($row>=1){ foreach($query->result() as $onerow)
				{ $nshowdata = array('shop_id'  => $onerow->shop_id,
														 'close'  => $onerow->close,
														 'open'  => $onerow->open,
														 'service_name' => $onerow->service_name,
														 'shop_name' => $onerow->shop_name,
														 'callphone'  => $onerow->callphone,
														 'picture'     => $onerow->picture,
														 'begin_name'  => $onerow->begin_name,
														 'end_name'  => $onerow->end_name,
														 'address'  => $onerow->address,
														 'facebook' =>$onerow->facebook,
														 'line' => $onerow->line,
														 'province_name'  => $onerow->province_name,
														);
				 }
		 }
		 $banner = $this->db->query('select * from banner');
		 $show = $this->db->query("select * FROM review
		 INNER JOIN user_member ON user_member.user_id = review.user_id
		 WHERE review.shop_id = '$shown'");
		 $gallery = $this->db->query("select * from gallery where gallery.shop_id='$shown'");
		$data = array('show'=>$show,'banner'=>$banner , 'gallery'=>$gallery ,);
		$this->session->set_userdata($nshowdata);
		$this->load->view('user/recommend',$data);
	}
	public function sl_top(){
		$this->load->view('user/sl_top');
	}
	// ---------------------------------------------------------------------------------------
	// Select service
	public function sl_gen(){
		$banner = $this->db->query('select * from banner where size_id=1');
		$banner2 = $this->db->query('select * from banner where size_id=2');
		$general = $this->db->query('select *
		FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE shop_member.service_id=1');
		$data = array('banner' => $banner,'banner2'=>$banner2,
									 'general' => $general);
		$this->load->view('user/sl_gen',$data);
	}
	public function sl_bigbike(){
		$banner = $this->db->query('select * from banner where size_id=1');
		$banner2 = $this->db->query('select * from banner where size_id=2');
		$general = $this->db->query('select *
		FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE shop_member.service_id=2');
		$data = array('banner' => $banner,'banner2'=>$banner2,
									 'general' => $general);
		$this->load->view('user/sl_bigbike',$data);
	}
	public function sl_vespa(){
		$banner = $this->db->query('select * from banner where size_id=1');
		$banner2 = $this->db->query('select * from banner where size_id=2');
		$general = $this->db->query('select *
		FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE shop_member.service_id=3');
		$data = array('banner' => $banner,'banner2'=>$banner2,
									 'general' => $general);
		$this->load->view('user/sl_vespa',$data);
	}
	// END Select Service
	// --------------------------------------------------------------------------------------
	// Select Area
	public function sl_north(){
		$banner = $this->db->query('select * from banner where size_id=1');
		$banner2 = $this->db->query('select * from banner where size_id=2');
		$area = $this->db->query('select *
		FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE province.area_id=2');
		$data = array('banner' => $banner,'banner2'=>$banner2,
	 								 'area' => $area);
		$this->load->view('user/sl_north',$data);
	}
	public function sl_central(){
		$banner = $this->db->query('select * from banner where size_id=1');
		$banner2 = $this->db->query('select * from banner where size_id=2');
		$area = $this->db->query('select *
		FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE province.area_id=1');
		$data = array('banner' => $banner,'banner2'=>$banner2,
									 'area' => $area);
		$this->load->view('user/sl_central',$data);
	}
	public function sl_northeast(){
		$banner = $this->db->query('select * from banner where size_id=1');
		$banner2 = $this->db->query('select * from banner where size_id=2');
		$area = $this->db->query('select *
		FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE province.area_id=3');
		$data = array('banner' => $banner,'banner2'=>$banner2,
									 'area' => $area);
		$this->load->view('user/sl_northeast',$data);
	}
	public function sl_southern(){
		$banner = $this->db->query('select * from banner where size_id=1');
		$banner2 = $this->db->query('select * from banner where size_id=2');
		$area = $this->db->query('select *
		FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE province.area_id=4');
		$data = array('banner' => $banner,'banner2'=>$banner2,
									 'area' => $area);
		$this->load->view('user/sl_southern',$data);
	}
	public function sl_province(){
		$this->load->view('user/sl_province');
	}
	// END  Slect Area
	// --------------------------------------------------------------------------------------
	//  Show Detail Data
	public function sd_datauser(){
		$showdata = $_POST['showgen'];
		$query = $this->db->query("select *
		FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE shop_member.shop_id = '$showdata'");
		$row = $query->num_rows();
		if($row>=1){ foreach($query->result() as $onerow)
				{ $nshowdata = array('shop_id'  => $onerow->shop_id,
														 'close'  => $onerow->close,
													 	 'open'  => $onerow->open,
														 'service_name' => $onerow->service_name,
														 'shop_name' => $onerow->shop_name,
														 'callphone'  => $onerow->callphone,
														 'picture'     => $onerow->picture,
														 'begin_name'  => $onerow->begin_name,
														 'end_name'  => $onerow->end_name,
														 'address'  => $onerow->address,
														 'facebook' =>$onerow->facebook,
														 'line' => $onerow->line,
														 'province_name'  => $onerow->province_name,
														);
				 }
		 }
		 $banner = $this->db->query('select * from banner where size_id=1');
 		$banner2 = $this->db->query('select * from banner where size_id=2');
		 $show = $this->db->query("select * FROM review
		 INNER JOIN user_member ON user_member.user_id = review.user_id
		 WHERE review.shop_id = '$showdata'");
		 $gallery = $this->db->query("select * from gallery where gallery.shop_id='$showdata'");
		$data = array('show'=>$show,'banner'=>$banner,'banner2'=>$banner2, 'gallery'=>$gallery );
		$this->session->set_userdata($nshowdata);
		$this->load->view('detail/sd_datauser',$data);
	}
	public function sl_search(){
		$s = $_POST['sdata'];
		$banner = $this->db->query('select * from banner where size_id=1');
		$banner2 = $this->db->query('select * from banner where size_id=2');
		$shows = $this->db->query("select * FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE shop_member.shop_name LIKE '$s' OR shop_member.callphone LIKE '$s' OR
					service.service_name LIKE '$s' OR province.province_name LIKE '$s' OR
					timeopen.`open` LIKE '$s' OR timeclose.`close` LIKE '$s' OR
					daybegin.begin_name LIKE '$s' OR
					dayend.end_name LIKE '$s'" );
		$data = array('banner'=>$banner,'banner2'=>$banner2, 'shows'=>$shows);
		$this->load->view('user/sl_search',$data);
	}
	// END Show Detail
	// ------------------------------------------------------------------------------------------
	public function regis_user(){
		$this->load->view('user/regis_user');
	}
	public function createuser(){
		$config['upload_path'] = './assets/img/user/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '1500';
		$config['max_width'] = '1500';
		$config['max_height'] = '1500';
		$config['remove_spaces'] = TRUE;
		$fullfilename=  $_FILES["picture"]['name'];
		$fileext = pathinfo($fullfilename, PATHINFO_EXTENSION);
		$config['file_name'] = time().".".$fileext;
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('picture'))
		{
			echo $this->upload->display_errors();
		} else { $data = array('user_name' => $_POST['user_name'],
													 'username' => $_POST['username'],
													 'password' => $_POST['password'],
													 'email' => $_POST['email'],
													 'user_pic' => $config['file_name'],);
		$this->db->set('date_register','NOW()',FALSE);
		$this->db->insert('user_member',$data);
		echo '<script language="javascript">';
		echo 'alert("บันทึกข้อมูลสำเร็จ")';
		echo '</script>';
		$this->load->view('windows');
		}
	}
	public function comment(){
		$com = $_POST['review'];
		$query = $this->db->query("select *
		FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE shop_member.shop_id = '$com'");
		$row = $query->num_rows();
		if($row>=1){ foreach($query->result() as $onerow)
				{ $comdata = array('shop_id'  => $onerow->shop_id,
														 'close'  => $onerow->close,
													 	 'open'  => $onerow->open,
														 'service_name' => $onerow->service_name,
														 'shop_name' => $onerow->shop_name,
														 'callphone'  => $onerow->callphone,
														 'picture'     => $onerow->picture,
														 'begin_name'  => $onerow->begin_name,
														 'end_name'  => $onerow->end_name,
														 'address'  => $onerow->address,
														 'province_name'  => $onerow->province_name,
														);
				 }
		 }
		$banner = $this->db->query('select * from banner where size_id=1');
		$banner2 = $this->db->query('select * from banner where size_id=2');
		$data = array('banner'=>$banner,'banner2'=>$banner2, 'shows'=>$shows, 'comdata'=>$comdata);
		$this->session->set_userdata($comdata);
		$this->load->view('user/comment',$data);
	}
	public function sendcomment(){
		$data = array('review' => $_POST['review'],
									'shop_id' => $_POST['sendreview'],
									'user_id' => $_POST['waiter'],
								 );
		// $showdata['review'] = $this->db->query('select * from review');
		$this->db->set('date_comment','NOW()',FALSE);
		$this->db->insert('review',$data);
		echo '<script language="javascript">';
		echo 'alert("บันทึกความคิดเห็นเรียบร้อย")';
		echo '</script>';
		$this->load->view('user/review');
	}
	public function mylogin(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$q = $this->db->query("select * FROM user_member where username='$username' and password='$password'" );
		$row = $q->num_rows();
		if($row>=1){ foreach($q->result() as $onerow)
			{ $newdata = array( 'user_id'  => $onerow->user_id,
													'username'  => $onerow->username,
													'password' => $onerow->password,
													'user_name' => $onerow->user_name,
													'email'     => $onerow->email,
													'user_pic'     => $onerow->user_pic,
													'date_register' => $onerow->date_register,
													'logged_in' => TRUE);
			 }
		$this->session->set_userdata($newdata);
		$data['countuser'] = $this->db->query("select *,COUNT(review.user_id) AS countuser FROM review
		INNER JOIN user_member ON review.user_id = user_member.user_id
		WHERE  username='$username' and password='$password'");
		$this->load->view('user/profile',$data);
		}else{  echo '<script language="javascript">';
						echo 'alert("ไม่สามารถเข้าสู่ระบบได้ กรุณา login เข้าใหม่")';
						echo '</script>';
						$this->load->view('user/loginformuser');
					}
	}
	public function logout()
	{
	 session_destroy();
	 echo '<script language="javascript">';
	 echo 'alert("ออกจากระบบเรียบร้อยแล้ว")';
	 echo '</script>';
	 $this->load->view('windows');
	}
	public function loginformuser(){
		$this->load->view('user/loginformuser');
	}
	public function updateuser($updateid){
		$data['user_member'] = $this->db->query('select * from user_member where user_id='.$updateid);
		$this->load->view('user/editprofile',$data);
	}
	public function update(){
		$a = $_POST['user_id'];
		$config['upload_path'] = './assets/img/user/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '1500';
		$config['max_width'] = '1500';
		$config['max_height'] = '1500';
		$config['remove_spaces'] = TRUE;
		$fullfilename=  $_FILES["picture"]['name'];
		$fileext = pathinfo($fullfilename, PATHINFO_EXTENSION);
		$config['file_name'] = time().".".$fileext;
				 $this->upload->initialize($config);
		//  $this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('picture'))
			 { echo $this->upload->display_errors();
			 } else { $newdata = array( 'user_name' => $_POST['user_name'],
	 													 'username' => $_POST['username'],
	 													 'password' => $_POST['password'],
	 													 'email' => $_POST['email'],
	 													 'user_pic' => $config['file_name'],);
		$this->db->where('user_id',$a);
		$this->db->update('user_member', $newdata);
		$this->load->view('user/confirmed');
				}
	}
	public function confirmed(){
		$this->load->view('user/confirmed');
	}
	public function closingaccount($updateid){
		$data['user'] = $this->db->query('select * from user_member where user_id='.$updateid);
		$this->load->view('user/closingaccount',$data);
	}
	public function dl_user($deleteid){
		$a = array( 'user_id' =>$deleteid );
		$this->db->delete('user_member', $a);
		echo '<script language="javascript">';
		echo 'alert("ปิดบัญชีสำเร็จ")';
		echo '</script>';
		$this->load->view('windows');
	}



}
