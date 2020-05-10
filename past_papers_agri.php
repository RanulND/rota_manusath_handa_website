
<html>
    <head>
        
        
    </head>
    <body>
        
        
        <div class="panel-body">Questions 01 - 10</br>
						<audio controls>
							<source src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agri_2016/1.2016_agri_mcq_1-10.mp3" type="audio/mp3">
							Your browser does not support the audio element.
						</audio>						
						
		</div>
        <?php
$ftp_host = "ftp.rotaractmora.org";
$ftp_user = "manusath";
$ftp_password = "MH2020@rt";

//Connect
echo "<br />Connecting to $ftp_host via FTP...";
$conn = ftp_connect($ftp_host);
$login = ftp_login($conn, $ftp_user, $ftp_password);

//
//Enable PASV ( Note: must be done after ftp_login() )
//
$mode = ftp_pasv($conn, TRUE);

//Login OK ?
if ((!$conn) || (!$login) || (!$mode)) {
   die("FTP connection has failed !");
}
echo "<br />Login Ok.<br />";

//
//Now run ftp_nlist()
//
$file_list = ftp_nlist($conn, "/voice_of_humanity_2019_OL_past_papers/Agri/Agri_2016");
sort($file_list,1);
foreach ($file_list as $file)
{
    if(strcmp($file,".")!=0 and strcmp($file,"..")!=0)
    {
       //echo "<br>"; 
       echo '<div class="panel-body">';
       echo "$file</br>";
						echo"<audio controls>";
							echo'<source src='.'"http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agri_2016/'. $file .'"';
				
							echo ' type="audio/mp3">';
							echo'Your browser does not support the audio element.';
						echo'</audio>';						
					
		echo'</div>';
    }
  
}

//close
ftp_close($conn);

?>
    </body>
</html>
