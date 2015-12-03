<?
// CONFIG FILE
// EDIT THIS FILE TO CUSTOMIZE YOUR SCRIPTS
//
// WRITTEN BY MATTEO FIGUS 2001
// mattfigs@supereva.it
// http://www.matteofigus.cjb.net


// Supported Extensions
// Estensioni Supportate

$extensions=array("HTM","HTML","ASP","PHP","PHP3","PHP4","htm","html","asp","php","php3","php4");


// Directory where find the files ( "./"=Current directory; "./files/"='files' directory; "../"=previous directory)
// Directory in cui trovare i files ( "./"=Directory corrente; "./files/"=directory 'files'; "../"=directory precedente)

$dd="./";


// 'Search' Button
// Pulsante 'Cerca'

$se="Search";


// If '<TITLE></TITLE>' tag equals ""
// Se il tag '<TITLE></TITLE>' vale ""

$nt="No Title";


// 'pages founded' text
// testo 'pagine trovate'

$trov="page(s) founded";


// 'Sorry' text
// testo 'Spiacente'

$sor="Sorry";

// HTML code of the header of the page
// Codice Html dell'header della pagina
?>
<HTML>
<HEAD>
<TITLE>Metakeys InternalSearch 1.0</TITLE>
<!--
Metakeys InternalSearch 1.0 - written by Matteo Figus 2001
Download it from www.matteofigus.cjb.net
mattfigs@supereva.it
-->
</HEAD>
<STYLE TYPE="text/css">
A { COLOR: RED }
FONT { font-family: Verdana }
</STYLE>
<BODY BGCOLOR="#FFFFFF" TEXT="#000000"><font size=2>
<FORM ACTION="<?=$PHP_SELF?>" METHOD=GET>
<CENTER><INPUT TYPE=TEXT NAME="s" VALUE="<?=$s?>">
<INPUT TYPE=SUBMIT VALUE="<?=$se?>"></FORM></CENTER><br><br>