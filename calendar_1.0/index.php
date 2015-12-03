<?
// C a l e n d a r  1.0
// written by Matteo Figus 2001
//
// www.matteofigus.cjb.net
// mattfigs@supereva.it

include "settings.php";
echo "\n<table border=0 cellpadding=1 cellspacing=1 bgcolor=#000000>\n<tr>\n <td bgcolor=#FFFFFF>\n  <center>".$months[(date("n")-1)]." ".date("Y")."</center>\n  <br>\n  <table border=0 cellpadding=3 cellspacing=3>\n  <tr>";
$k=0;
while($k<>count($days)){
echo "\n   <td>".$days[$k]."</td>";
$k++;
}
echo "\n  </tr>\n  <tr>";
$g=date("w")-date("d");
while($g<0){
$g=$g+7;
}
$k=0;
while($k<>($g+1)){
echo "\n   <td></td>";
$k++;
}
$d=0;
while($d<>date("t")){
$d++;
if ($k==7){
$k=0;
echo "\n  </tr>\n  <tr>";
}
echo "\n   <td>";
if (date("d")==$d){
echo "<b>$d</b></td>";
} else {
echo "$d</td>";
}
$k++;
}
while($k<>7){
echo "\n   <td></td>";
$k++;
}
echo "\n  </tr>\n  </table>\n </td>\n</tr>\n</table>\n\n";
?><br><br><center><font size=1>Created by Matteo Figus 2001<br>More Free Scripts @ <a href="http://www.matteofigus.cjb.net" target=new>www.matteofigus.cjb.net</a><br><a href="mailto:mattfigs@supereva.it">mattfigs@supereva.it</a></font></center>
</font></center>
</BODY>
</HTML>