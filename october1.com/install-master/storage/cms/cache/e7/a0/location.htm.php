<?php 
class Cms5ca9b922086dc013357142_950e05ae33feafc8a97e933e554b6e14Class extends Cms\Classes\PageCode
{
public function onStart() {
    
    $url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=<your_api_key>&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
 
//print the array to see the fields if you wish.
//print_r($url);
 
echo "<table border='1' width='50%' align='center'><tr><td>COUNTRY:</td><td>";
echo $url->countryName;
echo "</td></tr><tr><td>CITY:</td><td>";
echo $url->cityName;
echo "</td></tr><tr><td>STATE OR REGION:</td><td>";
echo $url->regionName;
echo "</td></tr><tr><td>IP ADDRESS:</td><td>";
echo $url->ipAddress;
echo "</td></tr><tr><td>COUNTRY CODE:</td><td>";
echo $url->countryCode;
echo "</td></tr><tr><td>LATITUTE:</td><td>";
echo $url->latitude;
echo "</td></tr><tr><td>LONGITUDE:</td><td>";
echo $url->longitude;
echo "</td></tr><tr><td>TIMEZONE:</td><td>";
echo $url->timeZone;
echo "</td></tr><tr></table>";
 
    
    
    echo $_SERVER['REMOTE_ADDR'];
    
    }
}
