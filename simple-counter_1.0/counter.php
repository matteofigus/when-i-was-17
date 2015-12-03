<?
include("counter.dat");
$counter_file=fopen("./counter.dat","w");
$counter_value++;
fputs($counter_file,("<?\$counter_value=\"".$counter_value."\";?>"));
fclose($counter_file);
if ($QUERY_STRING=='counter_hide') header("Location: ./counter_img/b.gif");
if ($counter_type=='text') echo $counter_value;
if ($counter_type=='img'){
$k=0;
include("counter.dat");
while($k<>(count(split("\n",chunk_split($counter_value,1)))-1)){
echo "<img src=\"./counter_img/".$counter_value[$k].".JPG\" border=0>";
$k++;
}
}
?>