<?php
// Login-FORM
?>
<h1>基于一次性口令登录/ W的时间</h1>
<p>试着用你的凭据登录的TOTP输出
    <a href="https://itunes.apple.com/us/app/google-authenticator/id388497605?mt=8">Google Authenticator App</a> 或
    <a href="https://www.hde.co.jp/otp/en/">HDE OTP Generator</a></BR>
    如果你没有一个用户/密码, 请点击 <a href='signup.php'>signup-form.</a>
<form action="login-post.php" method="post" name="loginform">
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" maxlength="40"  name="username" /></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" maxlength="40"  name="password" /></td>
        </tr>
        <tr>
            <td>时间opt</td>
            <td><input type="password" maxlength="40"  name="totp" /></td>
        </tr>
    </table>
    </BR>
    <input type="submit" VALUE=" Submit " name="submitbutton"/> 
</form>    
</BR>
<a href="index.php">返回主页</a>
</BR>
<br>