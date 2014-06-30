<?php
/**
* 此功能的实现算法概述
* RFC 6238为基于时间的一次密码
*
* @param 	string 	$key 字符串使用HMAC密钥
* @param 	mixed  	$time 一个值，该值反映了时间（UNIX时间的例子）
* @param 	int    	$digits OTP的所需长度
* @param 	string 	$crypto 所需的HMAC加密算法
* @return 	string 	生成OTP
*/


function oauth_totp($key, $time, $digits=8, $crypto='sha1')
{
    $digits = intval($digits);
    $result = null;
   
    // 转换为二进制（64位）
    $data = pack('NNC*', $time >> 32, $time & 0xFFFFFFFF);
    
    // 长度小于8则添加到八位 (如果有必要)
    if (strlen ($data) < 8) {
        $data = str_pad($data, 8, chr(0), STR_PAD_LEFT);
    } 
	echo "<br>";	
    echo $data."<br>";
    // 哈希算法加密
    $hash = hash_hmac($crypto, $data, $key);
    echo $hash."<br>";
    // Grab the offset
	echo substr($hash, strlen($hash) - 1, 1)."<br>";
    $offset = 2 * hexdec(substr($hash, strlen($hash) - 1, 1));
    echo $offset."<br>";
    // Grab the portion we're interested in
    $binary = hexdec(substr($hash, $offset, 8)) & 0x7fffffff;
   echo $binary."<br>";
    // Modulus
    $result = $binary % pow(10, $digits);
    echo $result."<br>";
    // Pad (if necessary)
    $result = str_pad($result, $digits, "0", STR_PAD_LEFT);
   
    return $result;
}

?>
