<?php
// connect and login to FTP server
$ftp_server = "ftp.rotaractmora.org";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

// get file list of current directory
$file_list = ftp_nlist($ftp_conn, ".");
var_dump($file_list);

// close connection
ftp_close($ftp_conn);
?>