<?php
include 'include/phpqrcode.php';
echo "<h1>DEMO - RFC 6238基于时间的一次性密码</h1>";
$exact_time = microtime(true);
echo '<p>当前服务器的时间：'.date("D M j G:i:s T Y",$exact_time).' <a href="check-ntp.php">检查时间</a></p>';
QRcode::png("generate a unique QR code with your own TOTP seed!", 'tmp/qrcode.png');
?>

<p>
这个网站展示了RFC6238的基于时间的一次性口令的实现。您可以检查您的生成TOTP用
    <a href="https://itunes.apple.com/us/app/google-authenticator/id388497605?mt=8">谷歌身份验证器应用</a> 或 
    <a href="https://www.hde.co.jp/otp/en/">HDE OTP生成器</a>
</p>

<a href="signup.php">注册并创建自己的TOTP密钥</a>    
</BR>
<a href="qrgen.php">查看已创建的QR码（二维码的一种）</a>    
</BR>
<a href="totp.php">显示您的独特的基于时间的一次性密码</a>    
</BR>
<a href="login.php">查看登入演示实例</a>    
</BR>
</BR>
<?php
echo '<img src="tmp/qrcode.png" alt="QR-Code missing :-(">';
?>
</BR>
<a href="qrcode.php">根据文本生成二维码</a>    
</BR>
<h3>相关类库</h3>
<a href='https://github.com/NTICompass/PHP-Base32'>PHP Base32实现<a></br>
<a href='http://phpqrcode.sourceforge.net/'>PHP QR码生成器<a></br>
<a href='http://php.net/manual/en/function.hash-hmac.php'>实现在RFC6238中列出的算法函数<a></br>
<a href='http://www.xenocafe.com/tutorials/php/ntp_time_synchronization/index.php'>NTP时间同步脚本</a>
<?php include 'include/counter.php'; ?>

<br>