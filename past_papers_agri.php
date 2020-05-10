
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title>Past Papers</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="assets/css/main.css" />



</head>

<body>


</body>

</html>
<?php
                     
$ftp_host = "ftp.rotaractmora.org";
$ftp_user = "manusath"; 
$ftp_password = "MH2020@rt";

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
