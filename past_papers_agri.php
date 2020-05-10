
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

<body class="is-preload">
	<!-- Header -->
	<header id="header">
		<a class="logo" href="index.html">Manusath Handa</a>
		<nav>
			<a href="#menu">Menu</a>
		</nav>
	</header>

	<!-- Nav -->
	<nav id="menu">
		<ul class="links">
			<li><a href="index.html">Home</a></li>
			<li><a href="elements.html">Elements</a></li>
			<li><a href="generic.html">Generic</a></li>
		</ul>
	</nav>

	<!-- Heading -->
	<div id="heading">
		<h2>Past Papers of G.C.E. O/L Examination</h2>
	</div>

	<!-- Main -->
	<div class="container">
		<br />
		<h2>Select an Agriculture audiobook to listen to,</h2>
		<p>Click on the expandable items to listen to & download audio questions of past papers.</p>

		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2016">2016</a>
					</h4>
				</div>
				<div id="collapse2016" class="panel-collapse collapse">
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
// set up a connection or die
$conn_id = ftp_connect($ftp_host) or die("Couldn't connect to $ftp_host"); 
// try to login
if (@ftp_login($conn_id, $ftp_user, $ftp_password)) {
    echo "Connected as $ftp_user@$ftp_host\n";
} else {
    echo "Couldn't connect as $ftp_user\n";
}



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
printr("TEST");
foreach ($file_list as $file)
{
    if(strcmp($file,".")!=0 and strcmp($file,"..")!=0)
    {
       //echo "<br>";
       echo '<div class="panel-body">';
       echo "$file</br>";
						echo"<audio controls>";
							echo"<source src='http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agri_2016/{$file}'";

							echo ' type="audio/mp3">';
							echo'Your browser does not support the audio element.';
						echo'</audio>';

		echo'</div>';
    }

}

//close
ftp_close($conn);

?>


					<div class="panel-body">10.2016 agri essay 6.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agri_2016/10.2016%20agri%20essay%206.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">2.2016 agri mcq 11-20.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agri_2016/2.2016%20agri%20mcq%2011-20.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">3.2016 agri mcq 21-30.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agri_2016/3.2016%20agri%20mcq%2021-30.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">4.2016 agri mcq 31-40.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agri_2016/4.2016%20agri%20mcq%2031-40.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">5.2016 agri essay 1.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agri_2016/5.2016%20agri%20essay%201.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">6.2016 agri essay 2.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agri_2016/6.2016%20agri%20essay%202.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">7.2016 agri essay 3.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agri_2016/7.2016%20agri%20essay%203.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">8.2016 agri essay 4.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agri_2016/8.2016%20agri%20essay%204.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">9.2016 agri essay 5.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agri_2016/9.2016%20agri%20essay%205.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>



				</div>

				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2018">2018</a>
					</h4>
				</div>

				<div id="collapse2018" class="panel-collapse collapse">
					<div class="panel-body">1.2018 agri mcq 1-5.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/1.2018%20agri%20mcq%201-5.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">10.2018 agri Q1 answer.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/10.2018%20agri%20Q1%20answer.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">11.2018 agri Q2.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/11.2018%20agri%20Q2.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">12.2018 agri Q3.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/12.2018%20agri%20Q3.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">13.2018 agri Q3 answers.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/13.2018%20agri%20Q3%20answers.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">14.2018 agri Q4.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/14.2018%20agri%20Q4.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">15.2018 agri Q4 answers.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/15.2018%20agri%20Q4%20answers.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">16.2018 agri Q5.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/16.2018%20agri%20Q5.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">17.2018 agri Q6.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/17.2018%20agri%20Q6.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">18.2018 agri Q6 answers.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/18.2018%20agri%20Q6%20answers.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">19.2018 agri Q7.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/19.2018%20agri%20Q7.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">2.2018 agri mcq 6-10.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/2.2018%20agri%20mcq%206-10.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">20.2018 agri Q7 answers.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/20.2018%20agri%20Q7%20answers.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">3.2018 agri mcq 11-15.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/3.2018%20agri%20mcq%2011-15.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">4.2018 agri mcq 16-20.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/4.2018%20agri%20mcq%2016-20.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">5.2018 agri mcq 21-25.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/5.2018%20agri%20mcq%2021-25.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">6.2018 agri mcq 26-30.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/6.2018%20agri%20mcq%2026-30.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">7.2018 agri mcq 31-35.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/7.2018%20agri%20mcq%2031-35.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">8.2018 agri mcq 36-40.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/8.2018%20agri%20mcq%2036-40.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>


					<div class="panel-body">9.2018 agri Q1.mp3</br>
						<audio controls>
							<source
								src="http://rotaractmora.org/rotaractmora_static/MH/voice_of_humanity_2019_OL_past_papers/Agri/Agriculture%202018/9.2018%20agri%20Q1.mp3"
								type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
						<a href="http://rotaractmora.org/rotaractmora_static/MH/voice%20of%20humanity%202019%20%20OL%20past%20papers/Agri/Agri%202016/1.2016%20agri%20mcq%201-10.mp3&export=download"
							download>
							<img src="./images/icons8-download-32.png">
						</a>
					</div>
				</div>

			</div>


		</div>

	</div>

	<!-- Footer -->
	<footer id="footer">
		<div class="inner">
			<div class="content">
				<section>
					<h4>About Us</h4>
					<p>RotaractMora has grown tremendously to a present member base of over 250 members. RotaractMora
						over the years has earned much recognition in the Rotaract movement,
						bagging multiple local, as well as international awards, and doing projects with high quality,
						sustainability and continuity.</p>
				</section>
				<section>
					<h4>Reach Us</h4>
					<ul class="alt">
						<li>
							<strong>Post</strong>
							<br />
							Rotaract Club of University of Moratuwa,<br>
							University of Moratuwa,<br>
							Bandaranayake Mawatha,<br>
							Moratuwa. <br> 10400
						</li>
						<!--<li><a href="#">Etiam vel lorem sed amet.</a></li>
							<li><a href="#">Felis enim feugiat viverra.</a></li>
							<li><a href="#">Dolor pulvinar magna etiam.</a></li>-->
					</ul>
				</section>
				<section>
					<h4>Follow Us</h4>
					<ul class="plain">
						<li><a href="https://twitter.com/RotaractMora"><i class="icon fa-twitter">&nbsp;</i>Twitter</a>
						</li>
						<li><a href="https://www.facebook.com/rotaractmora/"><i
									class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
						<li><a href="https://www.instagram.com/rotaractmora/"><i
									class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
						<li><a href="https://www.linkedin.com/company/rotaract-club-of-university-of-moratuwa/about/"><i
									class="icon fa-github">&nbsp;</i>LinkedIn</a></li>
					</ul>
				</section>
			</div>
			<div class="copyright">
				<!--&copy; RotaractMora. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.-->
				&copy; RotaractMora 2020
			</div>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
