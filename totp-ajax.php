<?php
session_start();
include 'include/oauth_totp.php';

if( !$_SESSION['loggedIn'] ) 
{
	echo 'error'; 
	exit();
}
$digits=$_SESSION['digits'];
$algorithm=$_SESSION['algorithm'];
$period= $_SESSION['period'];

// 初始化密钥
$MY_SECRET=$_SESSION['seed'];

// 初始化误差时间
$trim=$_SESSION['trim'];

// 确定时间区间
$time_window = $period;
echo "TimeWindow:".$time_window."<br>";
echo "trim time:".$trim."<br>";
// 从服务器的确切时间
$exact_time = microtime(true)+$trim;
echo "exact_time:".$exact_time."<br>";

// Round the time down to the time window
$rounded_time = floor($exact_time/$time_window);
echo $rounded_time;
//echo "rounded time:".$rounded_time."<br>";

// Seconds until key expires
$str_time_to_expire = $exact_time/$time_window;
$array_time_to_expire= explode(".", $str_time_to_expire);
$erg_time_to_expire="0.".$array_time_to_expire[1];
$time_to_expire=$time_window-floor($erg_time_to_expire*$time_window);

// Generate TOTP
$totp_generated=oauth_totp($MY_SECRET, $rounded_time, $digits, $algorithm);

echo '<h1>'.$totp_generated."</h1>";
echo "time to expire: ".$time_to_expire."s";

?>
