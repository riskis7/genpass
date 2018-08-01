#!/data/data/com.termux/files/usr/bin/php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$suci="cls";
} else {
$suci="clear";
}
system($suci);
$olive = "\e[92m";
$orange = "\e[91m";
$yellow = "\e[93m";
$navy = "\e[36m";
echo "\n$yellow
 ______________________________________________________________________
|   /_|_|_|\   ||_|_|_|_|   |_|       /_/|_||_|_|_|_|_|_|_|_|_|_|_|_|_||
|  /_ /   \_\  |_|          |_|      /_/ |_||_| =™™™™™GENERATOR™™™= |_||
| /__/         |_|          |_|     /_/  |_||_|#####################|_||
||__|   ___    |_|______    |_|    /_/   |_||_| =™™™™™™™KATA™™™™™™= |_||
||__|  |_|_|   |_|_|_|_|    |_|   /_/    |_||_|#####################|_||
|\__\    |_|   |_|          |_|  /_/     |_||_| =*******SANDI*****= |_||
| \__\___|_|   |_|______    |_| /_/      |_||_|_____________________|_||
|  \__|_|_||   ||_|_|_|_|   |_|/_/       |_||_|_|_|_|_|_|_|_|_|_|_|_|_||                                                                      
|______________________________________________________________________|";
echo "\n$white
Author : Riskis7
Code : PHP
Github : http://github.com/Riskis7
Team : BENGKULU CYBER TEAM
Version : 0.1 ( Alpha )
Date : 31-7-2018\n";
echo $green."=========================== Riskis_7 ))=====(@)>".$red."\n";
echo $white."=========================== BENGKULU_CYBER_TEAM ))=====(@)>".$white."\n"
$string=str_shuffle("abcdAbcdABCD");
        $array=["1","2","3","4","5","6","7","8","9","0"];
 	       $random=array_rand($array);
	       $rand=$array[$random];
        $a=$rand;
        $b=$rand;
	       $c=$rand;
        $d=$rand;
        $e=$a*$b*$c*$d;
        $f=$string.$e.$string;
        $out=md5(sha1($f));
echo $green.$out."\n";
$ditulis=fopen("pass.txt", "w");
fwrite($ditulis,$out);
fclose(di$tulis);
die($dark brown."gen password".$dark gray." -> ".$emerald."pass.txt"."\n");

