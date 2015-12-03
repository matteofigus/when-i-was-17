<?
include("settings.php");
$tim1=split("_",date("H_i_s_d_m_Y"));
list($time,$date)=split(" ",date("H:i:s $dateformat",mktime(($tim1[0]+$timezone),$tim1[1],$tim1[2],$tim1[4],$tim1[3],$tim1[5])));
?>