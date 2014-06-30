<?php
// SIGNUP - FORM
?>
<h1>注册</h1>
<form action="signup-post.php" method="post" name="loginform">
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" maxlength="40"  name="username" /></td>
            <td>(必须在本系统中是唯一的)<td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" maxlength="40"  name="password" /></td>
            <td>(不能为空)<td>
        </tr>
        <tr>
            <td>重新输入密码</td>
            <td><input type="password" maxlength="40"  name="retypepassword" /></td>
            <td>(必须等于以上的密码字段)<td>
        </tr>
        <tr>
            <td>域</td>
            <td><input type="text" maxlength="40"  name="domain" /></td>
            <td>(用来确定哪些帐户密钥相关联)<td>
        </tr>
        <tr>
            <td>邮件</td>
            <td><input type="text" maxlength="40"  name="email" /></td>
            <td>(将不检查，如果有效...)<td>
        </tr>
        <tr>
            <td>密钥</td>
            <td><input type="text" maxlength="40"  name="seed" /></td>
            <td>(用于生成TOTP，越长越好！)</td>
        </tr>
        <tr>
            <td>密钥十六进制</td>
            <td><input type="checkbox" maxlength="40" value="seedhex" name="seedhex" /></td>
            <td>(勾选此，如果密钥值是一个十六进制值！)</td>
        </tr>
        <tr>
            <td>有效期</td>
            <td>
                <input type="text"  maxlength="4" value="30" name="period" />
            </td>
            <td>(在几秒钟内，无论是30秒或60秒的支持)</td>
        </tr>
                <tr>
            <td>trim</td>
            <td>
                <input type="text"  maxlength="4" value="0" name="trim" />
            </td>
            <td>(“微调”的服务器的时间，允许误差几秒)</td>
        </tr>
        <tr>
            <td>数字</td>
            <td>
                <select name="digits"  type="hidden" id="digits" value="6" >
                    <option value="6">6</option>
                    <option value="8">8</option>
                    <!-- <input type="hidden" name="digits" value="6"/> -->
                </select>            
            </td>
        </tr>
        <tr>
            <td>算法</td>
            <td>
                <select name="algorithm"  type="hidden" id="algorithm" value="SHA1" >
                    <option value="SHA1">SHA1</option>
                    <option value="SHA256">SHA256</option>
                    <option value="SHA512">SHA512</option>
                    <option value="MD5">MD5</option>
                </select>            
                <!-- <input type="hidden" name="algorithm" value="SHA1"/> -->
            </td>
        </tr>
    </table>
    </BR>
    <input type="submit" VALUE=" 提交 " name="submitbutton"/> 
</form>    
<h2>其他领域</h2>
不使用在RFC定义的一些功能还没有在谷歌Autheticator。
<h3>算法</h3>
可选：该算法可以有以下值：</BR>
</BR>
    SHA1 (Default)</BR>
    SHA256</BR>
    SHA512</BR>
    MD5 </BR>
<h3>数字</h3>

可选：数字参数可能的值分别为6或8，并确定如何一次性密码的长，以显示给用户。默认值是6。</BR>
<h3>时间</h3>
定义一个时期，一个TOTP代码的有效期为，单位为秒。默认值是30。</BR>
这一时期参数是由谷歌的Authenticator的实现不再理会。 </BR>
<h3>Trim</h3>
这个值是“微调”的服务器的时间。它可以是正数或负数，并使用，如果你不能改变服务器的时间设置。
</BR>

</BR>
<a href="index.php">
返回到主屏幕</a>
</BR>