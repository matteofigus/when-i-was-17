<?
// CONFIG FILE
// EDIT THIS FILE TO CUSTOMIZE YOUR SCRIPTS
//
// WRITTEN BY MATTEO FIGUS 2002
// mattfigs@supereva.it
// http://www.matteofigus.cjb.net

// Password

$psw="password";


// Name of the directory where the files will be saved (with slash "/")
// Nome della directory in cui verranno salvati i files (con lo slash "/")

$d="uploads/";


// Maximum filesize (bytes - 15000 = 15KB)
// Dimensione massima del file in bytes (15000= 15KB)	

$s=15000;


// Uploading.. Message
// Messaggio Trasferimento del file...

$c="Creating";


// Error Message (Filesize over limit)
// Messaggio di errore (Dimensione del file al di sopra del limite imposto)

$err="ERROR - Filesize over limit";


// Error Message (Not Found, or File-Browse-Box empty)
// Messaggio di errore (Non trovato, o Casella-Sfoglia-file vuota)

$err1="EMPTY";


// OK Message
// Messaggio di OK

$ok="OK";


// Go-Back Message
// Messaggio torna-indietro

$back="Upload other files";


// Number of simultaneus uploads min=1, max=14 
// Numero di uploads simulanei min=1, max=14

$up=5;


// HTML code of the header of the page
// Codice Html dell'header della pagina
?>
<HTML>
<HEAD>
<TITLE>UploadFile 2.0</TITLE>
<!--
UploadFile 2.0 - written by Matteo Figus 2002
Download it from www.matteofigus.cjb.net
mattfigs@supereva.it
-->
</HEAD>
<STYLE TYPE="text/css">
A { COLOR: RED }
FONT { font-family: Verdana }
</STYLE>
<BODY BGCOLOR="#FFFFFF" TEXT="#000000"><font size=2><BR><BR>