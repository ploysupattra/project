<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testmarker extends CI_Controller {

  function __construct()
  {
   parent::__construct();
   $this->load->helper('url');
   $this->load->library('session');
   $this->load->database();
  }

  public function parseToXML($htmlStr)
  {
  $xmlStr=str_replace('<','&lt;',$htmlStr);
  $xmlStr=str_replace('>','&gt;',$xmlStr);
  $xmlStr=str_replace('"','&quot;',$xmlStr);
  $xmlStr=str_replace("'",'&#39;',$xmlStr);
  $xmlStr=str_replace("&",'&amp;',$xmlStr);
  return $xmlStr;
  // Select all the rows in the markers table
  $query = $this->db->query("select * FROM member WHERE 1");
  //$result = mysql_query($query);
  if (!$query) {
    die('Invalid query: ' . mysql_error());
  }

  header("Content-type: text/xml");

  // Start XML file, echo parent node
  echo '<markers>';

  // Iterate through the rows, printing XML nodes for each
  while ($row = @mysql_fetch_assoc($query)){
    // Add to XML document node
    echo '<marker ';
    echo 'id="' . $ind . '" ';
    echo 'name="' . parseToXML($row['name']) . '" ';
    echo 'address="' . parseToXML($row['address']) . '" ';
    echo 'lat="' . $row['lat'] . '" ';
    echo 'lng="' . $row['lng'] . '" ';
    echo 'type="' . $row['type'] . '" ';
    echo '/>';
  }

  // End XML file
  echo '</markers>';

  }
  // $link=mysql_connect("localhost","root",""); // เชื่อมต่อ Server
  // mysql_select_db("motor");  // ติดต่อฐานข้อมูล
  // mysql_query("set character set utf8"); // กำหนดค่า character set ที่จะใช้แสดงผล
  // ดึงข้อมูลจากฐานข้อมูล ตามค่า id ของสถานที่ ที่ส่งมา
  $q="select * FROM  member WHERE shop_id";
  $qr=@mysql_query($q);
  $rs=@mysql_fetch_assoc($qr);
  ?>
  <!--จัดรูปแบบ ที่ต้องการแสดงตามต้องการ -->
  <table width="300" border="0" cellspacing="2" cellpadding="0">
    <tr>
      <td width="10">&nbsp;</td>
      <td width="264">ชื่อสถานที่ <?php=$rs['shop_name']?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Latitude: <?php=$rs['latitude']?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Longitude: <?php=$rs['longitude']?></td>
    </tr>
  </table>





}
