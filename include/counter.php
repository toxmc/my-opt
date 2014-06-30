<?php
/**
* 访问统计
*/

$file = 'include/counter.txt';
// 打开文件获取文件内容
$counter = file_get_contents($file);
if (@$_COOKIE["onetimepassword"] !== "counterSet")
{
	$counter = $counter + 1;
	// 把内容写入到文件中
	file_put_contents($file, $counter);
	//设置cookie失效时间为3600秒
	$value = 'counterSet';
	setcookie("onetimepassword", $value, time()+3600);
}
ECHO "</br><p>你是第 <b>".$counter."</b> 位访问本站者</br>"
?>
