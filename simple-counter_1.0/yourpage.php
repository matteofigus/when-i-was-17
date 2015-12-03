<HTML>
<HEAD>
<TITLE>SimpleCounter 1.0</TITLE>
<!--
SimpleCounter 1.0 - written by Matteo Figus 2002
Download it from www.matteofigus.cjb.net
mattfigs@supereva.it
-->
</HEAD>
<STYLE TYPE="text/css">
A { COLOR: RED }
FONT { font-family: Verdana }
TD { font-family: Verdana; Font-Size: 11px}
IMG { border-color: RED }
</STYLE>
<BODY BGCOLOR="#FFFFFF" TEXT="#000000"><font size=2><BR><BR>
This is a demo file / Questo è un file dimostrativo.<br>
Html code of your counter / Codice html del contatore :<br><br>
<b>1)</b> Text mode / Modo testuale :
<br><br><i>&lt;?<br>$counter_type="text";<br>include("counter.php");<br>?&gt;</i>
<br><br>It will display this / Si visualizzerà questo :<br><br>

<?$counter_type="text";
include("counter.php");?>

<br><br>
<b>2)</b> Graphical mode / Modo grafico :
<br><br><i>&lt;?<br>$counter_type="img";<br>include("counter.php");<br>?&gt;</i>
<br><br>It will display this / Si visualizzerà questo :<br><br>

<?$counter_type="img";
include("counter.php");?>

<br><br>
<b>3)</b> Invisible mode / Modo invisibile :
<br><br><i>&lt;img src="counter.php?counter_hide"&gt;</i>
<br><br>It will display this / Si visualizzerà questo :<br><br>

<img src="counter.php?counter_hide">

<br>
(Nothing, only a traparent 1x1 .gif image / Nulla, solo un'immagine .gif trasparente di dimensioni 1x1)<br>
<br><br>

Each time you paste one of these codes in a page the counter (see counter.dat) will increase.<br>
Ogni volta che incollate uno di questi codici in una pagina il contatore (vedi counter.dat) si incrementerà.
<br><br>Edit counter.dat to set the correct value of your counter.<br>
Edita il file counter.dat per settare il corretto valore del tuo contatore.
<br><br><CENTER><font size=1>Created by Matteo Figus 2002<br>More Free Scripts @ <a href="http://www.matteofigus.cjb.net" target=new>www.matteofigus.cjb.net</a><br><a href="mailto:mattfigs@supereva.it">mattfigs@supereva.it</a></font></center></font></body>
</html>