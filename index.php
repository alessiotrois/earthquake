<?php

include("config.php"); 
include("srtlib.php"); 

////Connessione al database Satellite//////////
// echo  $PIPPO = "$host,$db_user,$db_psw";
// echo  $PIPPO = "$db_name, $db";
$db=mysql_connect($host,$db_user,$db_psw);
mysql_SELECT_db($db_name, $db);



echo "
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>EARTHQUAKES AGILE MONITORING</title>
		<meta charset=\"utf-8\" />
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
		<!--[if lte IE 8]><script src=\"assets/js/ie/html5shiv.js\"></script><![endif]-->
		<link rel=\"stylesheet\" href=\"assets/css/main.css\" />
		<!--[if lte IE 9]><link rel=\"stylesheet\" href=\"assets/css/ie9.css\" /><![endif]-->
		<!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
		
		
		
	</head>   
<body> 


 ";
system("rm DATA/*");
 
#system("./dropbox start");
#system("dropbox start");
system("cp -an /DATA/ANALISI/Dropbox/EARTHQUAKE/eq* /DATA/ANALISI/Dropbox/EARTHQUAKE/hr*  DATA/ >tmp.txt");
 
$filename1 ='';

$filenamePNG = array("", "", "","", "", "");
$i = 0;
 if ($handle = opendir('DATA/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && strtolower(substr($entry, strrpos($entry, '.') + 1)) == 'png') {
	    $filenamePNG[$i]=$entry;
            $i++;
        }
    }
    closedir($handle);
}
 
 sort($filenamePNG);
 


$fm2 = split("/",$filename);


$filenamefits=$fm2[count($fm2)-1];

$fm2 = split(".fits",$filenamefits);
echo "$fm2[0]"; 



echo "Last Update (UTC): " . date ("F d Y H:i:s", filemtime("DATA/$filenamePNG[0]"));


// for ($i=0; $i<count($filenamePNG); $i++) {
// 	 print "$data<br>"; 
// 
// 	}


// echo $filecheck;
// DATA/$filenamePNG[0]
// DATA/$filenamePNG[1]
// DATA/$filenamePNG[2]
// DATA/$filenamePNG[6]
// DATA/$filenamePNG[8]
// DATA/$filenamePNG[10]
echo "		<table >
<TD>
				


				<TR    >
					<TD  >$filenamePNG[0]</TD><TD  >$filenamePNG[6]</TD>	
				</TR>		
				
				<TR>	
					<TD colspan='2'><a href=DATA/$filenamePNG[0]><img src=DATA/$filenamePNG[0] ></a><a href=DATA/$filenamePNG[6]><img src=DATA/$filenamePNG[6] ></a></TD>					
				</TR>


				<TR    >
					<TD  >$filenamePNG[1]</TD><TD  >$filenamePNG[8]</TD>	
				</TR>					
				<TR>
					<TD colspan='2'><a href=DATA/$filenamePNG[1]><img src=DATA/$filenamePNG[1] ></a><a href=DATA/$filenamePNG[8]><img src=DATA/$filenamePNG[8]></a></TD>						
				</TR>
				<TR    >
					<TD  >$filenamePNG[2]</TD><TD  >$filenamePNG[10]</TD>	
				</TR>					
				<TR>					
					<TD colspan='2'><a href=DATA/$filenamePNG[2]><img src=DATA/$filenamePNG[2] ></a><a href=DATA/$filenamePNG[10]><img src=DATA/$filenamePNG[10] ></a></TD>	
				</TR>	



				<TR    >
					<TD  >$filenamePNG[0]</TD><TD  >$filenamePNG[7]</TD>	
				</TR>		
				
				<TR>	
					<TD colspan='2'><a href=DATA/$filenamePNG[0]><img src=DATA/$filenamePNG[0] ></a><a href=DATA/$filenamePNG[7]><img src=DATA/$filenamePNG[7] ></a></TD>					
				</TR>


				<TR    >
					<TD  >$filenamePNG[1]</TD><TD  >$filenamePNG[9]</TD>	
				</TR>					
				<TR>
					<TD colspan='2'><a href=DATA/$filenamePNG[1]><img src=DATA/$filenamePNG[1] ></a><a href=DATA/$filenamePNG[9]><img src=DATA/$filenamePNG[9]></a></TD>						
				</TR>
				<TR    >
					<TD  >$filenamePNG[2]</TD><TD  >$filenamePNG[11]</TD>	
				</TR>					
				<TR>					
					<TD colspan='2'><a href=DATA/$filenamePNG[2]><img src=DATA/$filenamePNG[2] ></a><a href=DATA/$filenamePNG[11]><img src=DATA/$filenamePNG[11] ></a></TD>	
				</TR>	









				<TR    >
					<TD  >$filenamePNG[3]</TD><TD  >$filenamePNG[12]</TD>	
				</TR>		
				
				<TR>	
					<TD colspan='2'><a href=DATA/$filenamePNG[3]><img src=DATA/$filenamePNG[3] ></a><a href=DATA/$filenamePNG[12]><img src=DATA/$filenamePNG[12] ></a></TD>					
				</TR>


				<TR    >
					<TD  >$filenamePNG[4]</TD><TD  >$filenamePNG[14]</TD>	
				</TR>					
				<TR>
					<TD colspan='2'><a href=DATA/$filenamePNG[4]><img src=DATA/$filenamePNG[4] ></a><a href=DATA/$filenamePNG[14]><img src=DATA/$filenamePNG[14]></a></TD>						
				</TR>
				<TR    >
					<TD  >$filenamePNG[5]</TD><TD  >$filenamePNG[16]</TD>	
				</TR>					
				<TR>					
					<TD colspan='2'><a href=DATA/$filenamePNG[5]><img src=DATA/$filenamePNG[5] ></a><a href=DATA/$filenamePNG[16]><img src=DATA/$filenamePNG[16] ></a></TD>	
				</TR>	



				<TR    >
					<TD  >$filenamePNG[3]</TD><TD  >$filenamePNG[13]</TD>	
				</TR>		
				
				<TR>	
					<TD colspan='2'><a href=DATA/$filenamePNG[3]><img src=DATA/$filenamePNG[3] ></a><a href=DATA/$filenamePNG[13]><img src=DATA/$filenamePNG[13] ></a></TD>					
				</TR>


				<TR    >
					<TD  >$filenamePNG[4]</TD><TD  >$filenamePNG[15]</TD>	
				</TR>					
				<TR>
					<TD colspan='2'><a href=DATA/$filenamePNG[4]><img src=DATA/$filenamePNG[4] ></a><a href=DATA/$filenamePNG[15]><img src=DATA/$filenamePNG[15]></a></TD>						
				</TR>
				<TR    >
					<TD  >$filenamePNG[5]</TD><TD  >$filenamePNG[17]</TD>	
				</TR>					
				<TR>					
					<TD colspan='2'><a href=DATA/$filenamePNG[5]><img src=DATA/$filenamePNG[5] ></a><a href=DATA/$filenamePNG[17]><img src=DATA/$filenamePNG[17] ></a></TD>	
				</TR>	
	

				
	</TD>
	
	</table>
	
	
	
	
		<!-- Scripts -->
			<script src=\"assets/js/jquery.min.js\"></script>
			<script src=\"assets/js/jquery.poptrox.min.js\"></script>
			<script src=\"assets/js/skel.min.js\"></script>
			<script src=\"assets/js/skel-viewport.min.js\"></script>
			<script src=\"assets/js/util.js\"></script>
			<!--[if lte IE 8]><script src=\"assets/js/ie/respond.min.js\"></script><![endif]-->
			<script src=\"assets/js/main.js\"></script>	
	
	</BODY>
	</HTML>	
	
	"
		

		
		

?>
