<?php 
 // Core Functions Class - This class contains the main functions of the website
 // to use, include thsi fiel in any page and refer to its functions like this cf::function_name()
 // if you want to add your functions, please create a new file using the same pattern as this class

// -------- declare class
class cf {

//////////////////////pages and routing /////
	public static function redirect($page) {
	 header('location:'.$page.''); exit();}

/*
REDIRECT TO A PARTICULTER LOCATION OR FILE , USE TIME DELAY IF NEEDED
-----------------------------------------------------------------------*/
public static function mobi_redirect($filename,$timer=0) {
		if($timer ==0){
		        echo '<script type="text/javascript">';
		        echo 'window.location.href="'.$filename.'";';
		        echo '</script>';
		 }else{
		 		echo '<script type="text/javascript">

		 		setTimeout(function(){
			 		';
		        echo 'window.location.href="'.$filename.'";';
		        echo '
				},'.$timer.');

		        </script>';
		 }

        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0; url='.$filename.'" />';
        echo '</noscript>';

}


//////////////////////////authentication functions ///
	public static function auth_admin($email,$pass) { $db=config::dbcon();
	 $login_token=cf::selany('login_token','admin','login_email',$email);
	 $password=md5($pass.$login_token);
	 $stmt = $db->prepare("SELECT * FROM admin WHERE login_email=:email and login_password=:password");
	 $stmt->execute(array(':email' => $email, ':password' => $password));
	 $row_count = $stmt->rowCount();
	 if($row_count>0){ return true; }
	}
	public static function login_admin($email,$redirect) { 
	 $_SESSION['admin_id']=cf::selany('admin_id','admin','login_email',$email);
	 $_SESSION['admin_login_token']=cf::selany('login_token','admin','login_email',$email);
	 cf::log_login($email);
	 cf::redirect($redirect);
	}
	public static function checkauthadmin() {
	 if (!isset($_SESSION['admin_id']) or !isset($_SESSION['admin_login_token']))
	 { return false;}
	 else{ $login_token=cf::selany('login_token','admin','admin_id',$_SESSION['admin_id']);
		if ($login_token==$_SESSION['admin_login_token']) { return true; }
		else { return false;}
		 }
	 }

	 ////////////////////////////////////////////////////////
	 // send email function/////////////////////////
	 //////////////////////////////////////////////////////
	 public static function send_email_msg($name,$email,$message,$subject ="Beatdrop"){
		$message = cf::msg_html($name,$message);
		try{
			$Server ="beatdrop.com.ng";
		   	$from = "info@beatdrop.com.ng";
			$subject = $subject ."(".date("F j, Y, D, h:i a") .")";
		    $headers = "From: $Server <".$from.">\n";
		    $headers .= "Reply-To: $Server <".$from.">\n";
		    $headers .= "Return-Path: $Server <".$from.">\n";
		    $headers .= "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			mail($email, $subject, $message, $headers);
			return 1;
		}catch(Exception $e){return 0;}
	}
	////////////////////////////////////////////////////////
	 // send email function/////////////////////////
	 //////////////////////////////////////////////////////
	public static function msg_html($name,$message){
	return '<!DOCTYPE html>
<html>
<title>Beatdrop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"><link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif;}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif;}
.fa-anchor,.fa-coffee {font-size:200px;}
body{
	background-repeat: repeat;
        background-size: cover;
    background-position: top;
}
</style>
<body>
<div  style="color: white;border:1px solid #409a64; background-color:#b4f2cc ;padding-top:20px;">
  <center><img src="http://9property.net/images/9p_color_logo.png" style="height:60px;"> </center>

</div>

 <div class="w3-container" style=" border:1px solid #409a64;border-top: 6px solid #409a64;min-height:60vh;margin-top: -6px;">
 
<p   style="padding:15px;margin:15px;font-size:16px;"><b>Hello '. $name .', </b></p>
 <p style="padding:15px;font-size:14px;"> '.$message .' </p> 
 
 </div>
 
  <div class="w3-container" style=" border:1px solid #409a64; border-top:none;padding: 15px; background-color:#b4f2cc ">
 
<div class="w3-col l12 w3-padding w3-text-blue w3-border  w3-white ">
 
            <b class="   w3-padding-right
  w3-margin-right" style="color: #409a64;"> 9property Search  </b> <br>
 
               <a href ="http://9property.net/search_result.php?sale_rent=sale" target="_blank"> <span class="w3-tag  w3-light-grey w3-small w3-margin-bottom w3-hover-text-pink"> Sale </span> </a>
        
                <a href ="http://9property.net/search_result.php?sale_rent=rent" target="_blank"> <span class="w3-tag  w3-light-grey w3-small w3-margin-bottom w3-hover-text-pink"> Rent </span> </a>
       
                <a href ="http://9property.net/search_result.php?isfurnished=fully" target="_blank"> <span class="w3-tag  w3-light-grey w3-small w3-margin-bottom w3-hover-text-pink"> Fully Furnished </span> </a>
       
                <a href ="http://9property.net/search_result.php?isfurnished=semi" target="_blank"> <span class="w3-tag  w3-light-grey w3-small w3-margin-bottom w3-hover-text-pink"> Semi Furnished </span> </a>
       
                <a href ="http://9property.net/search_result.php?type=land" target="_blank"> <span class="w3-tag  w3-light-grey w3-small w3-margin-bottom w3-hover-text-pink"> Land</span> </a>
                <a href ="http://9property.net/search_result.php?type=house" target="_blank"> <span class="w3-tag  w3-light-grey w3-small w3-margin-bottom w3-hover-text-pink"> House</span> </a>

                <a href ="http://9property.net/search_result.php?type=buildplans" target="_blank"> <span class="w3-tag  w3-light-grey w3-small w3-margin-bottom w3-hover-text-pink"> Building Plans</span> </a>
            
               <a href ="http://9property.net/search_result.php?type=flat" target="_blank"> <span class="w3-tag  w3-light-grey w3-small w3-margin-bottom w3-hover-text-pink"> Flat</span> </a>

               <a href ="http://9property.net/search_result.php?type=duplex" target="_blank"> <span class="w3-tag  w3-light-grey w3-small w3-margin-bottom w3-hover-text-pink"> Duplex</span> </a>

               <a href ="http://9property.net/search_result.php?type=self_contain" target="_blank"> <span class="w3-tag  w3-light-grey w3-small w3-margin-bottom w3-hover-text-pink"> Self Contain</span> </a>
            
               <a href ="http://9property.net/search_result.php?type=comp_prop" target="_blank"> <span class="w3-tag  w3-light-grey w3-small w3-margin-bottom w3-hover-text-pink"> Commercial Property</span> </a>
              
               <a href ="http://9property.net/search_result.php?type=hotel" target="_blank"> <span class="w3-tag  w3-light-grey w3-small w3-margin-bottom w3-hover-text-pink"> Hotel</span> </a>

           
        </div>
 
 
 </div>
 
 
</body>
</html>
';

}

	////////////////////////////////////////////////////////
	 // /////////////////////////
	 //////////////////////////////////////////////////////

	 public static function auth_user($email,$pass) { $db=config::dbcon();
	 $login_token=cf::selany('login_token','users','login_email',$email);
	 $password=md5($pass.$login_token);
	 $stmt = $db->prepare("SELECT * FROM users WHERE login_email=:email and login_password=:password");
	 $stmt->execute(array(':email' => $email, ':password' => $password));
	 $row_count = $stmt->rowCount();
	 if($row_count>0){ return true; }
	}
	 public static function login_user($email,$redirect) { 
	 $_SESSION['member_id']=cf::selany('member_id','users','login_email',$email);
	 $_SESSION['member_login_token']=cf::selany('login_token','users','login_email',$email);
	 cf::log_login($email);
	 cf::redirect($redirect);
	}
	public static function checkauthuser() {
	 if (!isset($_SESSION['member_id']) or !isset($_SESSION['member_login_token']))
	 { return false;}
	 else{ $login_token=cf::selany('login_token','users','member_id',$_SESSION['member_id']);
		if ($login_token==$_SESSION['member_login_token']) { return true; }
		else { return false;}
		 }
	 }
	public static function userid() {
	 $userid=$_SESSION['user']; return $userid;
	}
	
	public static function adminid() {
	 $adminid=$_SESSION['admin']; return $adminid;
	}	

	public static function salt(){ return  '@/*#t07%'; }

	public static function logout() {
	 $_SESSION = array();
	 if (isset($_COOKIE[session_name()])) {setcookie(session_name(), '', time()-86400, '/');}
	 session_destroy();
	}
	public static function change_role($id,$newrole) { 
	cf::update('users','role',$newrole,'id',$id);
	}
	public static function checkuserinfo($userid) {
		$count=cf::countrow('id','user_info','user_id',$userid);
	 if ($count > 0) { return true;}
		else { return false;}
	}

// ////////////////////// short site specific functions ///
	public static function site_data_value($name) { $db=config::dbcon();
	$data=cf::selany('value','site_data','name',$name);
	 return $data;
	}
	public static function calc_roi($amount,$roi) {
		$onePercent=$amount / 100;
		return $onePercent * $roi; 
	}
	public static function process_admin_role($role,$option = '') {
		if ($role == 0) { $data = 'Admin'; $color = 'primary'; } 
		elseif ($role == 1) { $data = 'Super Admin'; $color = 'danger'; } 
			if($option=='color'){ return $color; exit;  }
			else {  return $data; exit; }
	}
	public static function process_user_account_status($status,$option = '') {
		if ($status == 0) { $data = 'Inactive'; $color = 'danger'; $msg = 'Account is Inactive'; } 
		elseif ($status == 1) { $data = 'Active'; $color = 'success'; $msg = 'Account is active'; } 
	if($option=='color'){ return $color; exit;  }
	elseif($option=='message'){ return $msg; exit;  }
		else {  return $data; exit; }
	}
	public static function process_investment_status($status,$option = '') {
		if ($status == 0) { $data = 'Cancelled'; $color = 'danger'; $msg = 'This investment has been cancelled.'; } 
		elseif ($status == 1) { $data = 'Pending Approval'; $color = 'warning'; $msg = 'This investment is pending approval.'; } 
		elseif ($status == 2) { $data = 'Active'; $color = 'success'; $msg = 'This investment is active and running.'; } 
		elseif ($status == 3) { $data = 'Completed'; $color = 'info'; $msg = "This investment has finished it's duration."; }
		elseif ($status == 4) { $data = 'Pending Activation'; $color = 'primary'; $msg = "This investment is pending activation, please go ahead and make the proposed payment into the given Darolls bank account, if you have already made the payment please notify us immediately."; }
	if($option=='color'){ return $color; exit;  }
	elseif($option=='message'){ return $msg; exit;  }
		else {  return $data; exit; }
	}
	public static function process_pay_status($status,$option = '') {
		if ($status == 0) { $data = 'Upcoming'; $color = 'info'; $msg = 'Payment is still upcoming'; } 
		elseif ($status == 1) { $data = 'Due'; $color = 'warning'; $msg = 'Payment is pending'; } 
		elseif ($status == 2) { $data = 'Paid'; $color = 'success'; $msg = 'Paid'; } 
		elseif ($status == 3) { $data = 'Re-invested'; $color = 'primary'; $msg = 'Payment was re-invested'; } 
	if($option=='color'){ return $color; exit;  }
	elseif($option=='message'){ return $msg; exit;  }
		else {  return $data; exit; }
	}
	public static function process_earn_status($status,$option = '') {
		if ($status == 0) { $data = 'Upcoming'; $color = 'info'; $msg = 'Upcoming Earning'; } 
		elseif ($status == 1) { $data = 'Earned'; $color = 'success'; $msg = 'Earned'; } 
	if($option=='color'){ return $color; exit;  }
	elseif($option=='message'){ return $msg; exit;  }
		else {  return $data; exit; }
	}
///////////////Logging functions ///////////////////
public static function log_login($email){ 
 dbi::log('Log in', $email.' login to the system');
}
public static function log_login_failed($email,$url){ 
 dbi::log('Failed login attempt', $email.' tried to login to the system from '.$url.' with wrong credentials');
}
public static function log_logout($email){ 
 dbi::log('Log out', $email.' log out of the system');
}
public static function log_pwchange($email,$by){ 
 dbi::log('Password Change', $email.' changed password by '.$by);
}
public static function log_email_change($oldemail,$newemail,$by){ 
 dbi::log('Login Email Change', $oldemail.' changed login email to '.$newemail.'  by '.$by);
}
public static function log_invest_approved($email,$ref){ 
 dbi::log('Investment Approved', $email.' approved the investment with reference number '.$ref);
}
public static function log_invest_activated($email,$ref){ 
 dbi::log('Investment Activated', $email.' activated the investment with reference number '.$ref);
}
public static function log_pay_toggle($email,$type,$ref,$status){ 
 dbi::log('Payment Status Changed', $email.' marked '.$type.' payment with reference number '.$ref.' as '.$status);
}
public static function log_delete($type,$msg){ 
 dbi::log($type, $msg);
}
public static function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
////////////////// General //////////////////////
	public static function display_user($col) { 
		$info=cf::selany($col,'users','id',$_SESSION['user']);
		echo $info;
	}
	public static function display_admin($col) { 
		$info=cf::selany($col,'users','id',$_SESSION['admin']);
		echo $info;
	}	
	public static function display_userinfo($col) { 
		$info=cf::selany($col,'user_info','user_id',$_SESSION['user']);
		echo $info;
	}
	public static function select_user($col) { 
		$info=cf::selany($col,'users','id',$_SESSION['user']);
		return $info;
	}	
	public static function select_admin($col) { 
		$info=cf::selany($col,'users','id',$_SESSION['admin']);
		return $info;
	}		
	public static function select_userinfo($col) { 
		$info=cf::selany($col,'user_info','user_id',$_SESSION['user']);
		return $info;
	}
	public static function countall($col,$table) { $db=config::dbcon();
	 $stmt = $db->query("SELECT ".$col." FROM ".$table."");
	 $row_count = $stmt->rowCount();
	 return $row_count;
	}
	public static function countrow($col,$table,$where,$val) { $db=config::dbcon();
	 $stmt = $db->query("SELECT ".$col." FROM ".$table." WHERE ".$where."='".$val."'");
	 $row_count = $stmt->rowCount();
	 return $row_count;
	}
	public static function countrow_plus($col,$table,$where,$val,$where2,$val2) { $db=config::dbcon();
	 $stmt = $db->query("SELECT ".$col." FROM ".$table." WHERE ".$where."='".$val."' and ".$where2."='".$val2."'");
	 $row_count = $stmt->rowCount();
	 return $row_count;
	}
	public static function countrow_plus1($col,$table,$where,$val,$where2,$val2,$where3,$val3) { $db=config::dbcon();
	 $stmt = $db->query("SELECT ".$col." FROM ".$table." WHERE ".$where."='".$val."' and ".$where2."='".$val2."' and ".$where3."='".$val3."'");
	 $row_count = $stmt->rowCount();
	 return $row_count;
	}
	public static function selectlast($col,$table,$orderby) { $db=config::dbcon();
	$stmt = $db->query('SELECT '.$col.' FROM '.$table.' ORDER BY '.$orderby.' DESC LIMIT 0,1');
	$row = $stmt->fetchColumn();
	return $row;
	}
	public static function selectlastwhere($col,$table,$col2,$val,$orderby) { $db=config::dbcon();
	$stmt = $db->prepare('SELECT '.$col.' FROM '.$table.' WHERE '.$col2.'=:val ORDER BY '.$orderby.' DESC LIMIT 0,1');
	$stmt->execute(array(':val' => $val));
	$row = $stmt->fetchColumn();
	return $row;
	}
	public static function selectlastwhereandwhere($col,$table,$col2,$val2,$col3,$val3,$orderby) { $db=config::dbcon();
	$stmt = $db->prepare('SELECT '.$col.' FROM '.$table.' WHERE '.$col2.'=:val2 && '.$col3.'=:val3 ORDER BY '.$orderby.' DESC LIMIT 0,1');
	$stmt->execute(array(':val2' => $val2, ':val3' => $val3));
	$row = $stmt->fetchColumn();
	return $row;
	}
	public static function selany($col,$table,$where,$equals) { $db=config::dbcon();
	 $stmt = $db->prepare("SELECT ".$col." FROM ".$table." WHERE ".$where."=:equals");
	 $stmt->execute(array(':equals' => $equals));
	 $rows = $stmt->fetchColumn();
	 return $rows;
	}
	public static function selany_plus($col,$table,$col2,$val2,$col3,$val3) { $db=config::dbcon();
	$stmt = $db->prepare('SELECT '.$col.' FROM '.$table.' WHERE '.$col2.'=:val2 && '.$col3.'=:val3');
	$stmt->execute(array(':val2' => $val2, ':val3' => $val3));
	$row = $stmt->fetchColumn();
	return $row;
	}	
	public static function select_sum($col,$table,$where,$equals) { $db=config::dbcon();
	 $stmt = $db->prepare("SELECT SUM(".$col.") FROM ".$table." WHERE ".$where."=:equals");
	 $stmt->execute(array(':equals' => $equals));
	 $rows = $stmt->fetchColumn();
	 return $rows;
	}
	public static function selany_ltd($col,$table,$where,$equals,$ltd) { $db=config::dbcon();
	 $stmt = $db->prepare("SELECT LEFT(".$col.",".$ltd.") FROM ".$table." WHERE ".$where."=:equals");
	 $stmt->execute(array(':equals' => $equals));
	 $rows = $stmt->fetchColumn();
	 return $rows;
	}
	public static function update($table,$set,$val,$where,$place){  $db=config::dbcon();
	 $stmt = $db->prepare("UPDATE ".$table." SET ".$set."=? WHERE ".$where."=?");
	 $stmt->execute(array($val, $place));
	}
	public static function update_plus($table,$set,$val,$where,$place,$where2,$place2){  $db=config::dbcon();
	 $stmt = $db->prepare("UPDATE ".$table." SET ".$set."=? WHERE ".$where."=? && ".$where2."=?");
	 $stmt->execute(array($val, $place, $place2));
	}
	public static function update_profile($set,$val,$member_id){  $db=config::dbcon();
	 if (empty($member_id)) {$id=$_SESSION['member_id'];} else {$id=$member_id;} 
	 $stmt = $db->prepare("UPDATE users SET ".$set."=? WHERE member_id=?");
	 $stmt->execute(array($val, $id));
	}		
	public static function delete($table,$where,$val){  $db=config::dbcon();
	 $stmt = $db->prepare("DELETE FROM ".$table." WHERE ".$where."=:val");
	 $stmt->bindValue(':val', $val, PDO::PARAM_STR);
	 $stmt->execute();
	}
	public static function keyexist($name,$type) {
		if (array_key_exists($name, $type)) {return true;}
	}
	public static function random_alphanum($size) {
	$alpha_key = '';
	$keys = range('A', 'Z');

	for ($i = 0; $i < 2; $i++) {
		$alpha_key .= $keys[array_rand($keys)];
	}

	$length = $size - 2;

	$key = '';
	$keys = range(0, 9);

	for ($i = 0; $i < $length; $i++) {
		$key .= $keys[array_rand($keys)];
	}

	return $alpha_key . $key;
}

public static function random_num() { 	 $ref=mt_rand(10000000,99999999); }

public static function get_unique_code($length = ""){
	$code = md5(uniqid(rand(), true));
	if ($length != "") return substr($code, 0, $length);
	else return $code;
}

public static function empty_value_exists($array) {
  return array_search("", $array) !== false;
  }

public static function timestamp_to_date($timestamp) {
	// $datetimeFormat = 'Y-m-d H:i:s';
	$datetimeFormat = 'd-M-Y';
	$date = new \DateTime();
	$date = new \DateTime('now', new \DateTimeZone('Africa/Lagos'));
	$date->setTimestamp($timestamp);
	return $date->format($datetimeFormat); 
  }

public static function timestamp_to_datetime($timestamp) {
	$datetimeFormat = 'd-M-Y, H:i:s';
	$date = new \DateTime();
	$date = new \DateTime('now', new \DateTimeZone('Africa/Lagos'));
	$date->setTimestamp($timestamp);
	return $date->format($datetimeFormat); 
  }

public static function months_to_seconds($months) {
  $seconds=$months * 30 * 24 * 60 * 60; return $seconds;
  }

public static function seconds_to_months($seconds) {
  $months=$seconds / 30 / 24 / 60 / 60; return $months;
  }

public static function secondsToWords($seconds)
{
    $ret = "";

    /*** get the days ***/
    $days = intval(intval($seconds) / (3600*24));
    if($days> 0)
    {
        $ret .= "$days days ";
    }

    /*** get the hours ***/
    $hours = (intval($seconds) / 3600) % 24;
    if($hours > 0)
    {
        $ret .= "$hours hours ";
    }

    /*** get the minutes ***/
    $minutes = (intval($seconds) / 60) % 60;
    if($minutes > 0)
    {
        $ret .= "$minutes minutes ";
    }

    /*** get the seconds ***/
    $seconds = intval($seconds) % 60;
    if ($seconds > 0) {
        $ret .= "$seconds seconds";
    }

    return $ret;
}
public static function extract_username($email){
  $substring ='@';
  $firstIndex = stripos($email, $substring);
  $username= substr($email, 0, $firstIndex);
  return $username;
}
////////////////// INPUT CLEANING FUNCTIONS 
	public static function remove_special_characters($data) {
  	 $data=preg_replace('/[^A-Z.a-z0-9]/', '', $data);
  	 return $data;
	}
	public static function remove_letters($data) {
  	 $data = preg_replace("/[a-zA-Z]/", "", $data );
  	 return $data;
	}
	public static function remove_numbers($data) {
  	 $data = preg_replace('/[0-9]+/', '', $data);
  	 return $data;
	}
	public static function numbers_only($data) {
	 $data = preg_replace("/[^0-9]/", "", $data );
  	 return $data;
	}
	public static function letters_only($data) {
  	 $data=cf::remove_special_characters($data);
  	 $data=cf::remove_numbers($data);
  	 return $data;
	}
	public static function sanitize_string($data) {
	 filter_var($data, FILTER_SANITIZE_STRING);
	 return $data;
	}
	public static function sanitize_email($data) {
	 filter_var($data, FILTER_SANITIZE_EMAIL);
	 return $data;
	}	 			
	public static function clean_input($data) {
  	 $data = trim($data);
  	 $data = stripslashes($data);
  	 $data = htmlspecialchars($data);
  	 return $data;
	}

	//  FUNCTIONS THAT CONTROL SESSIONS
	public static function unset_session($name) { 
	 if (isset($_SESSION[''.$name.''])) { unset($_SESSION[''.$name.'']); }
	}
	public static function set_error_invalid_data() { 
	 $_SESSION['invalid_data'] = "*Error: The details you provided were invalid, please try again.";
	}
	public static function show_error($name) { 
	 if (isset($_SESSION[''.$name.''])) {
	 echo ' <span style="color:#F00;"> ' .$_SESSION[''.$name.''].'</span>';
	 unset($_SESSION[''.$name.'']);   }
	}
	public static function show_success($name) { 
	 if (isset($_SESSION[''.$name.''])) {
	 echo ' <span style="color:#29aa33;"> ' .$_SESSION[''.$name.''].'</span>';
	 unset($_SESSION[''.$name.'']);   }
	}	
	public static function displayinput($name) {
	 if (isset($_SESSION[''.$name.''])) {
	 echo $_SESSION[''.$name.''];
	 unset($_SESSION[''.$name.'']);}
	}
	public static function emptyfield($name) {
	 if (isset($_SESSION[''.$name.''])) {
	 if(empty($_SESSION[''.$name.'']))
		{ echo '<span style="color:#F00;">This field is required</span>';  }
	  }
	 }
////////// VALIDATION FUNCTIONS 
	public static function validate($type,$val) {
	 if($type=='name') {
		if (!preg_match("/^[a-zA-Z]*$/",$val) or strlen($val)<'3' or $val=='Investment' or $val=='Investment' or $val=='Investment' or $val=='admin' or $val=='Admin' or $val=='ADMIN' or $val=='site admin' or $val=='Financial Investment admin' or $val=='Site Admin' or $val=='Investment' or $val=='site admin' or $val=='Investment admin')
			{return false;} else  { return true;}
		}
	 if($type=='email') {
		if(!filter_var($val,FILTER_VALIDATE_EMAIL))
		{return false;} else  { return true;}
		}
	 if($type=='newemail') {
		if(cf::countrow('login_email','users','login_email',$val) > 0)
		{return false;} else  { return true;}
		}
	 if($type=='newusername') {
		if(cf::countrow('username','users','username',$val) > 0)
		{return false;} else  { return true;}
		}
	 if($type=='reff_exist') {
		if(cf::countrow('user_ref','users','user_ref',$val) > 0)
		{return true;} else  { return false;}
			}
	 if($type=='passwd') {
		if(strlen($val)>5)
		{return true; } else  { return false; }
		}
	 if($type=='usernamelen') {
		if(strlen($val)<6)
		{return false;} else  { return true;}
		}
	 }
	public static function expired($first,$second,$limit) {
		$diff=$first - $second;
		if ($diff > $limit) { return true;}
	}
//////////////////////miscelleneous////////////nl2br()



/////////////closing bracket for class /////////////
}
?>
