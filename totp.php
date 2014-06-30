<?php
// TOTP-FORM
?>
<h1>视图 基于时间 One Time Password</h1>
<p>你可以登录您的凭据来检查的输出
    <a href="https://itunes.apple.com/us/app/google-authenticator/id388497605?mt=8">Google Authenticator App</a> or of 
    <a href="https://www.hde.co.jp/otp/en/">HDE OTP Generator</a>.</BR>
    如果你没有一个用户/密码, 请使用 <a href='signup.php'>signup-form.</a>
</p>
<form action="totp-post.php" method="post" name="loginform">
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" maxlength="40"  name="username" /></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" maxlength="40"  name="password" /></td>
        </tr>
    </table>
    </BR>
    <input type="submit" VALUE=" Submit " name="submitbutton"/> 
</form>    
</BR>
<a href="index.php">返回主屏幕</a>
</BR>
<br>
<br>