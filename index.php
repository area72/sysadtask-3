<?php  


$myfile = fopen("f.txt", "r+") or die("Unable to open file!"); $x=1;
while(!feof($myfile)) {
   fgetc($myfile);	$x = $x +1; }
echo $x." views so far<br>";
fwrite($myfile,"n"); fclose($myfile);

function getIP() { 
$ip; 
if (getenv("HTTP_CLIENT_IP")) 
$ip = getenv("HTTP_CLIENT_IP"); 
else if(getenv("HTTP_X_FORWARDED_FOR")) 
$ip = getenv("HTTP_X_FORWARDED_FOR"); 
else if(getenv("REMOTE_ADDR")) 
$ip = getenv("REMOTE_ADDR"); 
else 
$ip = "UNKNOWN";
return $ip; 

} 
$client_ip=getIP();
echo "<br>Your IP :".$client_ip."<br>";
/*
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();
$user_ip = $_SERVER["HTTP_X_REAL_IP"];

echo $user_ip; // Output IP address [Ex: 177.87.193.134]
*/
$s = "nothing";
$myfiles = fopen("g.txt", "r+") or die("Unable to open file!"); $y=1;
if($x==1) echo "<br>Visitor number: 1 has ip : ".$client_ip;
else {
		echo "list of visitors: <br>";
		while(!feof($myfiles)) {
		        $s = fgets($myfiles);		   
			
                        echo $s;
                        echo "<br>"; 
			   $y = $y +1;
		};
}

fwrite($myfiles,$client_ip);
fwrite($myfiles,"<br>");
fclose($myfiles);


?>
<html>
	<head>
	<title>ip & hits</title>
	</head>
	<body bgcolor="grey">
	</body>
</html>
