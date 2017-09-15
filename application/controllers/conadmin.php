
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class conadmin extends CI_Controller {

	function __construct()
  {
   parent::__construct();
   $this->load->helper('url');
   $this->load->library('session');
   $this->load->database();
  }
	//---------------------- Begin Set login logout---------------------------------------------
	public function login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = $this->db->query("select * from admin where username = '$username' and password = '$password'");
		$row = $query->num_rows();
		if($row>=1){ foreach($query->result() as $onerow)
			{
				$data = array( 'username'  =>$onerow->username,
											 'password' => $onerow->password,
											 'admin_name' => $onerow->admin_name,
											 'logged_in' => TRUE);
			}
		$this->session->set_userdata($data);
		$this->load->view('admin/home');
		}else{  echo '<script language="javascript">';
						echo 'alert("ไม่สามารถเข้าสู่ระบบได้")';
						echo '</script>';
						$this->load->view('admin/loginform');
					}
	}
	public function loginfrom(){
		$this->load->view('admin/loginfrom');
	}
	public function logout()
	{
	 session_destroy();
	 echo '<script language="javascript">';
	 echo 'alert("ต้องการออกจากระบบ")';
	 echo '</script>';
	 $this->load->view('windows');
	}

	public function loginform(){
		$this->load->view('admin/loginform');
	}
	//---------------------- END Set login logout---------------------------------------------

	// ------------------------Update SET------------------------------------------------------
	public function udf_shop($updateid){
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
		$this->load->view('admin/udf_shop',$data);
	}
	public function udshop()
	{
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
	 $this->load->view('admin/confirmed');
	 }
	}
	public function udf_user($updateid){
		$data['user_member'] = $this->db->query('select * from user_member where user_id='.$updateid);
		$this->load->view('admin/udf_user',$data);
	}
	public function uduser(){
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
		 $this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('picture'))
			 { echo $this->upload->display_errors();
			 } else { $newdata = array( 'user_name' => $_POST['user_name'],
	 													 'username' => $_POST['username'],
	 													 'password' => $_POST['password'],
	 													 'email' => $_POST['email'],
	 													 'user_pic' => $config['file_name'],);
		$this->db->where('user_id',$a);
		$this->db->update('user_member', $newdata);
		$this->load->view('admin/confirmed');
				}
	}

	// -----------------------------Edit SET----------------------------------------------
	public function udf_event($updateid){
		$data['event'] = $this->db->query('select * from event where event_id='.$updateid);
		$this->load->view('admin/udf_event',$data);
	}
	public function udevent(){
		$a = $_POST['event_id'];
		$config['upload_path'] = './assets/img/addevent/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '1500';
		$config['max_width'] = '940';
		$config['max_height'] = '540';
		$config['remove_spaces'] = TRUE;
		$fullfilename=  $_FILES["picture"]['name'];
		$fileext = pathinfo($fullfilename, PATHINFO_EXTENSION);
		$config['file_name'] = time().".".$fileext;
		 $this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('picture'))
			 { echo $this->upload->display_errors();
			 } else { $newdata = array( 'event_name' => $_POST['eventname'],
														 'event_detail' => $_POST['detail'],
														 'date_start' => $_POST['start'],
														 'date_end' => $_POST['end'],
														 'link' => $_POST['link'],
														 'event_pic' => $config['file_name'],);
		$this->db->where('event_id',$a);
		$this->db->update('event', $newdata);
		$this->load->view('admin/confirmed');
				}
	}
	public function udf_banner($updateid){
		$banner = $this->db->query('select * from banner where ban_id='.$updateid);
		$size = $this->db->query('select * from size');
		$data = array('banner'=>$banner,'size'=>$size);
		$this->load->view('admin/udf_banner',$data);
	}
	public function udbanner(){
		$a = $_POST['ban_id'];
		$config['upload_path'] = './assets/img/addbanner/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '1500';
		$config['max_width'] = '1500';
		$config['max_height'] = '1500';
		$config['remove_spaces'] = TRUE;
		$fullfilename=  $_FILES["picture"]['name'];
		$fileext = pathinfo($fullfilename, PATHINFO_EXTENSION);
		$config['file_name'] = time().".".$fileext;
		 $this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('picture'))
			 { echo $this->upload->display_errors();
			 } else { $newdata = array( 'ban_name' => $_POST['banner_name'],
														 'date_start' => $_POST['start'],
														 'date_end' => $_POST['end'],
														 'size_id' => $_POST['size'],
														 'ban_pic' => $config['file_name'],);
		$this->db->where('ban_id',$a);
		$this->db->update('banner', $newdata);
		$this->load->view('admin/confirmed');
				}
	}

	// ----------------------------Delete SET-------------------------------------------------------
	public function cfdl_shop($updateid){
		$data['shop_member'] = $this->db->query('select * from shop_member where shop_id='.$updateid);
		$this->load->view('admin/cfdl_shop',$data);
	}
	public function dl_shop($deleteid)
	{
		$a = array( 'shop_id' => $deleteid );
		$this->db->delete('shop_member', $a);
		echo '<script language="javascript">';
 	  echo 'alert("ลบข้อมูล Shop สำเร็จ")';
 	  echo '</script>';
		$this->load->view('admin/sucessdl');
	}
	public function cfdl_user($updateid){
		$data['user_member'] = $this->db->query('select * from user_member where user_id='.$updateid);
		$this->load->view('admin/cfdl_user',$data);
	}
	public function dl_user($deleteid)
	{
		$a = array( 'user_id' => $deleteid );
		$this->db->delete('user_member', $a);
		echo '<script language="javascript">';
		echo 'alert("ลบข้อมูล User สำเร็จ")';
		echo '</script>';
		$this->load->view('admin/sucessdl');
	}
	public function cfdl_banner($updateid){
		$data['banner'] = $this->db->query('select * from banner where ban_id='.$updateid);
		$this->load->view('admin/cfdl_banner',$data);
	}
	public function dl_banner($deleteid)
	{
		$a = array( 'ban_id' => $deleteid );
		$this->db->delete('banner', $a);
		echo '<script language="javascript">';
		echo 'alert("ลบข้อมูล Banner สำเร็จ")';
		echo '</script>';
		$this->load->view('admin/sucessdl');
	}
	public function cfdl_comment($updateid){
		$data['comment'] = $this->db->query('select * from review where review_id='.$updateid);
		$this->load->view('admin/cfdl_comment',$data);
	}
	public function dl_comment($deleteid)
	{
		$a = array( 'review_id' => $deleteid );
		$this->db->delete('review', $a);
		echo '<script language="javascript">';
		echo 'alert("ลบข้อมูล Comment สำเร็จ")';
		echo '</script>';
		$this->load->view('admin/sucessdl');
	}
	public function cfdl_event($updateid){
		$data['event'] = $this->db->query('select * from event where event_id='.$updateid);
		$this->load->view('admin/cfdl_event',$data);
	}
	public function dl_event($deleteid)
	{
		$a = array( 'event_id' => $deleteid );
		$this->db->delete('event', $a);
		echo '<script language="javascript">';
		echo 'alert("ลบข้อมูล Event สำเร็จ")';
		echo '</script>';
		$this->load->view('admin/sucessdl');
	}
	// ----------------------------Show Manage SET-----------------------------------------------------------------
	public function manage_user(){
		$data['manageuser'] = $this->db->query("select *,DATE_FORMAT(date_register,'%d'),DATE_FORMAT(date_register,'%m'),DATE_FORMAT(date_register,'%Y'),
		CONCAT(DATE_FORMAT(date_register,'%d'),'/',DATE_FORMAT(date_register,'%m'),'/',DATE_FORMAT(date_register,'%Y')) as dateuser from user_member");
		$this->load->view('admin/manage_user',$data);
	}
	public function manage_shop(){
		$data['manageshop'] = $this->db->query("select *,ROUND(latitude,5) AS lat ,ROUND(longtitude,5) as lng,
		DATE_FORMAT(date_register,'%d'),DATE_FORMAT(date_register,'%m'),DATE_FORMAT(date_register,'%Y'),
		CONCAT(DATE_FORMAT(date_register,'%d'),'/',DATE_FORMAT(date_register,'%m'),'/',DATE_FORMAT(date_register,'%Y')) as date
		from shop_member INNER JOIN service ON shop_member.service_id = service.service_id ");
		$this->load->view('admin/manage_shop',$data);
	}
	public function manage_event(){
		$data['event'] = $this->db->query("select *,CONCAT(DATE_FORMAT(date_start,'%d'),'/',DATE_FORMAT(date_start,'%m'),'/',DATE_FORMAT(date_start,'%Y')) as date_s,
		CONCAT(DATE_FORMAT(date_end,'%d'),'/',DATE_FORMAT(date_end,'%m'),'/',DATE_FORMAT(date_end,'%Y')) as date_e FROM event");
		$this->load->view('admin/manage_event',$data);
	}
	public function manage_comment(){
		$data['comment'] = $this->db->query('select * from review');
		$this->load->view('admin/manage_comment',$data);
	}
	public function manage_banner(){
		$data['banner'] = $this->db->query("select *,CONCAT(DATE_FORMAT(date_start,'%d'),'/',DATE_FORMAT(date_start,'%m'),'/',DATE_FORMAT(date_start,'%Y')) as date_s,
		CONCAT(DATE_FORMAT(date_end,'%d'),'/',DATE_FORMAT(date_end,'%m'),'/',DATE_FORMAT(date_end,'%Y')) as date_e
		FROM banner
		INNER JOIN size ON banner.size_id = size.size_id");
		$this->load->view('admin/manage_banner',$data);
	}
	// ------------------------ADD SET-------------------------------------------------------
	public function add_event(){
		$this->load->view('admin/add_event');
	}
	public function addevent(){
		$config['upload_path'] = './assets/img/addevent/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '1500';
		$config['max_width'] = '940';
		$config['max_height'] = '540';
		$config['remove_spaces'] = TRUE;
		$fullfilename=  $_FILES["picture"]['name'];
		$fileext = pathinfo($fullfilename, PATHINFO_EXTENSION);
		$config['file_name'] = time().".".$fileext;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('picture'))
		{
			echo $this->upload->display_errors();
		} else { $data = array('event_name' => $_POST['eventname'],
													 'event_detail' => $_POST['detail'],
													 'date_start' => $_POST['start'],
													 'date_end' => $_POST['end'],
													 'link' => $_POST['link'],
													 'event_pic' => $config['file_name'],);
												 }
		$this->db->insert('event',$data);
		echo '<script language="javascript">';
		echo 'alert("บันทึกข้อมูลสำเร็จ")';
		echo '</script>';
		$this->load->view('admin/confirmadd');
	}
	public function add_banner(){
		$data['sizeban'] = $this->db->query('select * from size');
		$this->load->view('admin/add_banner',$data);
	}
	public function addbanner(){
		$config['upload_path'] = './assets/img/addbanner/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '1200';
		$config['max_width'] = '1200';
		$config['max_height'] = '1000';
		$config['remove_spaces'] = TRUE;
		$fullfilename=  $_FILES["picture"]['name'];
		$fileext = pathinfo($fullfilename, PATHINFO_EXTENSION);
		$config['file_name'] = time().".".$fileext;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('picture'))
		{
			echo $this->upload->display_errors();
		} else { $data = array('ban_name' => $_POST['banner_name'],
													 'size_id' => $_POST['size'],
													 'date_start' => $_POST['start'],
													 'date_end' => $_POST['end'],
													 'ban_pic' => $config['file_name'],);
												 }
		$this->db->insert('banner',$data);
		echo '<script language="javascript">';
		echo 'alert("บันทึกข้อมูลสำเร็จ")';
		echo '</script>';
		$this->load->view('admin/confirmadd');
	}
	// public function home(){
	// 	$this->load->view('admin/home');
	// }
}
