<script type="text/javascript" src="js/jquery.js"></script>
<script>
window.setInterval(function(){
  // call your function every 500ms
  showTOTP();
}, 1000);

//显示验证码   
function showTOTP()
{
   $.ajax({
		type:"POST",
		url:"totp-ajax.php",
		dataType:"html",
		success:function(json){
			$('#responseDiv').html(json);
		}	
   })
}

</script>

<?php

include("dbconnect.php");
include 'include/oauth_totp.php';

$USER =trim(strtolower($_POST['username']));
$PASS=trim($_POST['password']);

 if(( isset($_POST['username'], $_POST['password']) AND strcmp(trim($_POST['username']),'') != 0 AND strcmp(trim($_POST['password']),'') != 0 ) )
	{  
            $logon_ergebnis = mysql_query("SELECT lfdnr,user,domain,email,seed,period,trim,digits,algorithm,encodedsecret,password FROM users WHERE user='$USER' AND password='$PASS'") or 
                    die( 'Error[SELECT|User]: <br />
                           <pre>' . $sql . '</pre>
                           <br />
                           MySQL-Error: ' . mysql_error() );     

                                                                                                                                           
            if( mysql_num_rows($logon_ergebnis) != 1 ) 
			{
				echo "<h1>Login error</h1><br>";              
			} 
			else {
				session_start();
				$userObj = mysql_fetch_object($logon_ergebnis);
				$_SESSION['loggedIn'] = true;
				$_SESSION['digits']=$userObj->digits;
				$_SESSION['algorithm']=$userObj->algorithm;
				$_SESSION['period']=$userObj->period;
				$_SESSION['seed']=$userObj->seed;
				$_SESSION['trim']=$userObj->trim;
			   
				echo '<p style="text-decoration:underline;">基于时间的 One-time Password:</p>';
				echo '<div id="responseDiv">loading...</div><br>';
			  } 
        }
?>
<a href="index.php">Return to main screen</a>