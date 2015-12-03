<?
// U p lo a d  F i l e 2.0
// written by Matteo Figus 2001
//
// www.matteofigus.cjb.net
// mattfigs@supereva.it

include "settings.php"; /*Inclusion of the config file*/

if ($pp<>''){
$p=base64_encode($pp);
$pp='';
}
if (base64_decode($p)<>$psw){
echo "<FORM METHOD=\"Post\" ACTION=\"$PHP_SELF\">\nInsert Password: <input type=password name=\"pp\"> <input type=submit value=\"Login\"></FORM>";
} else {
if ($d<>''){
if (!(file_exists($d))){ /*if the dir does not exist...create it*/
umask(011);
mkdir($d,"0777");
echo "The directory $d was successful created.";
}
}
if ($a<>'1'){ 
echo "<FORM METHOD=\"Post\" ENCTYPE=\"multipart/form-data\" ACTION=\"".$PHP_SELF."?p=".$p."\">\n<input type=hidden name=a value=1>\n";
$k=1;
while ($k<=$up){
echo "File $k: <INPUT TYPE=\"file\" NAME=\"file$k\"><BR><BR>\n";
$k++;
}
echo "<INPUT TYPE=\"submit\" value=UPLOAD>\n</FORM>";
} else {
$k=1;
while ($k<=$up){
echo "$c File $k";
$t=$HTTP_POST_FILES["file$k"]['tmp_name'];
$sz=$HTTP_POST_FILES["file$k"]['size'];
$n=$HTTP_POST_FILES["file$k"]['name'];
if ($t=='none'){
echo ": $err1";
} elseif ($sz>$s){
echo ": $err";
} else {
echo " ($n): ";
copy($t,"$d$n"); /* Copying the file */
echo $ok;
}
echo "<br>";
$k++;
}
echo "<br><br><a href=\"$PHP_SELF?p=$p\">$back</a>";
}
}
?><br><br><center><font size=1>Created by Matteo Figus 2001<br>More Free Scripts @ <a href="http://www.matteofigus.cjb.net" target=new>www.matteofigus.cjb.net</a><br><a href="mailto:mattfigs@supereva.it">mattfigs@supereva.it</a></font></center>
</font></body>
</html>