<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lobby extends CI_Controller {

	function __construct()
  {
   parent::__construct();
   $this->load->helper('url');
   $this->load->library('session');
	 $this->load->library('pagination');
   $this->load->database();
  }
	public function windows()
	{
		$this->load->view('windows');
	}
	public function web()
	{
		$this->load->view('web');
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
		$this->load->view('review',$data);
	}
	public function information(){
		$this->load->view('information');
	}
	public function nologin(){
		echo '<script language="javascript">';
		echo 'alert("คุณยังไม่ได้เข้าสู่ระบบ กรุณา login เข้าระบบ")';
		echo '</script>';
		$this->load->view('user/loginformuser');
	}
	public function sl_top(){
		$data['general'] = $this->db->query('select *
		FROM shop_member
		INNER JOIN service ON  shop_member.service_id = service.service_id
		INNER JOIN timeopen ON  shop_member.open_id = timeopen.open_id
		INNER JOIN timeclose ON  shop_member.close_id = timeclose.close_id
		INNER JOIN daybegin ON  shop_member.begin_id = daybegin.begin_id
		INNER JOIN dayend ON  shop_member.end_id = dayend.end_id
		INNER JOIN province ON  shop_member.province_id = province.province_id
		WHERE shop_member.service_id>=2');

		$this->load->view('sl_top',$data);
	}
	// ----------------service--------------------------------------------------------
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
		$data = array('banner' => $banner,'banner2' => $banner2,
									 'general' => $general);
		$this->load->view('sl_gen',$data);
	}
	public function pagination(){
		$config['base_url'] = 'http://example.com/index.php/test/page/';
		$config['total_rows'] = 10;
		$config['per_page'] = 5;
		$config ['uri_segment'] = 3;
		$config['num_links'] = 5;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['reuse_query_string'] = FALSE;
		$config['suffix'] = '';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<div>';
		$config['first_tag_close'] = '</div>';
		$config['last_link'] = 'Last';
		$this->pagination->initialize($config);
		echo $this->pagination->create_links();
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
		$data = array('banner' => $banner, 'banner2'=>$banner2,
									 'general' => $general);
		$this->load->view('sl_bigbike',$data);
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
		$this->load->view('sl_vespa',$data);
	}
	// -------------Alea---------------------------------------------------------------
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
		$this->load->view('sl_north',$data);
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
		$this->load->view('sl_central',$data);
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
		$this->load->view('sl_northeast',$data);
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
		$this->load->view('sl_southern',$data);
	}
	// -------------Detail Data---------------------------------------------------------
	public function sd_lobby(){
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
		$data = array('show'=>$show,'banner'=>$banner,'banner2'=>$banner2 , 'gallery'=>$gallery ,);
		$this->session->set_userdata($nshowdata);
		$this->load->view('detail/sd_lobby',$data);
	}
	public function test(){
		$this->load->view('sl_search');
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
		$this->load->view('sl_search',$data);
	}
	public function eventmotor($updateid){
		// $show = $_POST['edata'];
		$query = $this->db->query("select * from event where event_id=".$updateid );
		$row = $query->num_rows();
		if($row>=1){ foreach($query->result() as $onerow)
				{ $showdata = array('event_id'  => $onerow->event_id,
														 'event_name'  => $onerow->event_name,
														 'event_detail'  => $onerow->event_detail,
														 'event_pic'     => $onerow->event_pic,
														 'date_start'  => $onerow->date_start,
														 'date_end'  => $onerow->date_end,
														 'link' => $onerow->link,
														);
				 }
		 }
		$this->session->set_userdata($showdata);
		$this->load->view('eventmotor');
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
		$this->load->view('recommend',$data);
	}


}
