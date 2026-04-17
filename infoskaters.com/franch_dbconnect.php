<?php
//session_start();
$con = mysqli_connect("localhost","infoskat_franchi","mfmMWHOQAFZA","infoskat_franchise");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
    function get_rows($query) {
        global $con;
        $result = [];
        $res = mysqli_query($con, $query);
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $result[] = $row;
            }
            //$result=mysqli_fetch_all($res,MYSQLI_ASSOC);
        }
        return $result;
    }
     function get_row($query) {
           global $con;
         $result = [];
        $res = mysqli_query($con, $query);
        if (mysqli_num_rows($res) >= 1) {
            $result = mysqli_fetch_assoc($res);
            return $result;
        } else {
            return [];
        }
    }
    function query($query){
         global $con;
         $res = mysqli_query($con, $query);
         return $res;
    }
    function lastinsertid(){
        global $con;
        $last_id = $con->insert_id;
        return $last_id;
    }
    function redirect_to_home(){
        $config=new config();
        $url=$_SESSION["url"];
       $url2=$config->site_url."/".$url;
       header("Location: $url2");
    }
    function base_url(){
        $config=new config();
        $url=$_SESSION["url"];
        $url2=$config->site_url."/".$url;
        return $url2;
    }
     function get_partner_url($buisness_name,$partner_id){
       $url = str_replace(' ','-',$buisness_name);
       $url_is_exist=get_row("select * from partners where url='$url' and partner_id!=$partner_id");
       if($url_is_exist)
       {
           $url_is_exist=true;
       }else{
           $url_is_exist=false;
       }
       $count=0;
       while($url_is_exist==true){
          $count++;
          $url = str_replace(' ','-',$buisness_name)."-".$count;
          $url_is_exist=get_row("select * from partners where url='$url' and partner_id!=$partner_id");
          if($url_is_exist)
          {
              $url_is_exist=true;
          }else{
              $url_is_exist=false;
          }
       }
      return $url;
    }
    function build_html_response($status,$message){
      if($status){
          return '<div class="alert alert-success">'.$message.'</div>';
      }else{
        return '<div class="alert alert-danger">'.$message.'</div>';
      }
    }
    function now(){
        date_default_timezone_set('Asia/Kolkata');
        $timestamp = date("Y-m-d H:i:s");
        return $timestamp;
    }

class config{
    public $site_url="https://www.infoskaters.com/digital-marketing-training/franchise";
    public $logged_in;
    public $user_type;
    public $user_id;
    public $partner_id;
     function __construct() {
      if(isset($_SESSION["user"])){
          $user=$_SESSION["user"];
          $this->logged_in=true;
          $this->user_type=$user["usertype"];
          $this->user_id=$user["id"];
      }
         $url = $_SESSION["url"];
         $q = "select * from partners where url='$url'";
         $partner_detail = get_row($q);
         $this->partner_id=$partner_detail["partner_id"];
    }
}
