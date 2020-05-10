
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>



</head>

<body>
	<?php
                     
$ftp_host = "ftp.test.rebex.net";
$ftp_user = "demo"; 
$ftp_password = "password";

echo"hellssso worlds";

// set up a connection or die
$conn_id = ftp_connect($ftp_host,21,180) or die("Couldn't connect to $ftp_host"); 

// try to login
if (@ftp_login($conn_id, $ftp_user, $ftp_password)) {
    echo "Connected as $ftp_user@$ftp_host\n";
} else {
    echo "Couldn't connect as $ftp_user\n";
}

// close the connection
ftp_close($conn_id);  
?>


</body>

</html>

