<?
// M e t a k e y s  I n t e r n a l S e a r c h 1.0
// written by Matteo Figus 2001
//
// www.matteofigus.cjb.net
// mattfigs@supereva.it

include "settings.php";
if ($s<>""){
$dir = opendir($dd);
$k=0;
while($file = readdir($dir)) { 
if ($file<>"."){
if (filetype($file)<>"dir") {
$ss=explode(".",$file);
$tr=(count($ss)-1);
$ext=$ss[$tr];
$n=split(".$ext", $file);
$n=$n[0];
if (in_array($ext,$extensions)){
$a=get_meta_tags("$dd$file");
$keys=split(" ", $a["keywords"]);
if (in_array($s,$keys)) {
$k++;
$aa=split("/",$PHP_SELF);
$a1=$aa[(count($aa)-1)];
$a2=split($a1,$PHP_SELF);
$file2=str_replace(" ","%20",$file);
$ff=join('',file("http://$SERVER_NAME$a2[0]$file2"));
$t=split("<TITLE>",$ff);
$t1=split("</TITLE>",$t[1]);
if ($t1[0]==''){
$t=split("<title>",$ff);
$t1=split("</title>",$t[1]);
if ($t1[0]=='')
$t1[0]=$nt;
}
echo "<b>$t1[0]</b><br>",$a["description"],"<br><a href=\"$dd$file2\">$file</a><br><br>";
}}}}}
closedir($dir);
if ($k==0){
echo $sor.", <b>0</b> ".$trov.".";
} else {
echo "<br><br><b>$k</b> $trov.";
}}
?><br><br><center><font size=1>Created by Matteo Figus 2001<br>More Free Scripts @ <a href="http://www.matteofigus.cjb.net" target=new>www.matteofigus.cjb.net</a><br><a href="mailto:mattfigs@supereva.it">mattfigs@supereva.it</a></font></center>
</font>
</BODY>
</HTML>