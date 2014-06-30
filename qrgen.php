<?php

// QR Generate-FORM

?>
<h1>Regenerate the QR-Code with otpauth URI</h1>
<p>You can scan the generated QR code with the 
    <a href="https://itunes.apple.com/us/app/google-authenticator/id388497605?mt=8">Google Authenticator App</a> or with 
    <a href="https://www.hde.co.jp/otp/en/">HDE OTP Generator</a></BR>
    If you don't have a user/password yet, please use the <a href='signup.php'>signup-form.</a>
</p>
<form action="qrgen-post.php" method="post" name="loginform">
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
<a href="index.php">返回主页</a>