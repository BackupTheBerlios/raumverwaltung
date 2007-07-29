<?php
require_once ("config.inc.php");
session_start();
if ((!isset ($_SESSION[SESSION_USER_NAME]) || 
	!isset ($_SESSION[SESSION_USER_PASSWORD])) &&
	strcmp ($_SERVER['SCRIPT_NAME'],"/".PHPFILE_INDEX)!=0 )
{
	echo get_derefer_html (PHPFILE_INDEX);
	die();
}
?>

<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de"><!-- InstanceBegin template="/Templates/vorlage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- <base href="http://www.fh-bochum.de/" />-->
	<link rel="stylesheet" type="text/css" href="typo3temp/stylesheet_a83593bbe6.css" />
	<script type="text/javascript" src="fileadmin/templates/web_fh-bochum.de/default.js"></script>
    <link rel="stylesheet" type="text/css" href="fileadmin/templates/web_fh-bochum.de/css/default.css" />

    <link rel="stylesheet" type="text/css" href="fileadmin/templates/web_fh-bochum.de/css/import.css" />
        
    <link rel="stylesheet" type="text/css" media="screen, projection" href="home/header.css" />        
    <link rel="stylesheet" type="text/css" media="screen, projection" href="home/keyvisual.css" />
    <link rel="stylesheet" type="text/css" media="print" href="fileadmin/templates/web_fh-bochum.de/css/page_print.css" />
    <!--[if lt IE 7.]>
    <link rel="stylesheet" type="text/css" href="../fileadmin/templates/web_fh-bochum.de/css/page_ie.css" />
    <link rel="stylesheet" type="text/css" media="print" href="../fileadmin/templates/web_fh-bochum.de/css/page_print_ie.css" />
    <![endif]-->
	<meta name="robots" content="noarchive" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

	<!-- InstanceBeginEditable name="doctitle" -->
	<title>FH Bochum: Raumverwaltung </title>
	<!-- InstanceEndEditable -->

	<script type="text/javascript" src="typo3conf/ext/overlib/overlib_mini.js"></script>
	<script type="text/javascript" language="JavaScript">
	<!--
		overlib.ol_css = CSSCLASS;
		overlib.ol_bgclass = "jwcalendar_olbg";
		overlib.ol_fgclass = "jwcalendar_olfg";
		overlib.ol_captionfontclass = "jwcalendar_olcf";
		overlib.ol_textfontclass = "jwcalendar_oltf";
		overlib.ol_fgcolor = "#eeeeee";
		overlib.ol_bgcolor = "#666666";
	// -->
	</script>

	<script type="text/javascript">
		/*<![CDATA[*/
		function T3_onmousemoveWrapper(e)	{	overlib.mouseMove(e);	}
		function T3_onloadWrapper()	{	overlib.init();	}
		document.onmousemove=T3_onmousemoveWrapper;
		document.onload=T3_onloadWrapper;
		/*]]>*/
	</script>

	<!-- InstanceBeginEditable name="head" -->
	<!-- InstanceEndEditable -->
</head>

<body onload="T3_onloadWrapper();">
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>


<a id="top"></a>
<div id="MainFrame">
    <div id="Header">
    	<div class="HeaderCols">    		
    		<div id="Logo"><a href="http://www.fh-bochum.de/" title="zur Homepage"><img src="fileadmin/templates/web_fh-bochum.de/img/fh_logo.gif" alt="FH Logo" title="FH Logo" border="0" /></a></div>		
    		<div id="Title"><h2>FH Bochum - university of applied sciences</h2></div>
    		<hr class="dn" />    		
    		<div id="OuterBanner">	    				
				<div id="TargetNav">
					<h2 class="unvisible" id="a_target">Zielgruppen</h2>
				</div>

				<div id="MetaNavTop">
					<h2 class="unvisible" id="a_service">Servicenavigation</h2>
					<div id="MetaContent"><ul><li><a href="http://www.fh-bochum.de/" title="zur FHBO Startseite">Home</a><span class="unvisible">. </span></li><li><a href="https://my.fh-bochum.de/" title="myFHBO">myFHBO</a><span class="unvisible">. </span></li><li><a href="http://www.fh-bochum.de/index-a-z.html" title="Index von A bis Z">A bis Z</a><span class="unvisible">. </span></li><li><a href="http://www.fh-bochum.de/hilfe.html" title="Hilfe">Hilfe</a><span class="unvisible">. </span></li><li><a href="http://www.fh-bochum.de/ueberblick.html" title="Überblick über die zentralen Seiten">Überblick</a><span class="unvisible">. </span></li><li><a href="http://www.fh-bochum.de/kontakt.html" title="Mailformular zur Kontaktaufnahme">Kontakt</a><span class="unvisible">. </span></li></ul></div><div style="clear:left;"></div>
					<div id="MetaBGDummy"></div>
				</div>
				<hr class="dn" />				
			</div>				
		</div>
		<div class="HeaderCols" id="headerBottom">
			<h2 class="unvisible" id="a_suche">Anmeldung</h2>
			<div id="loginuser">
			<!-- InstanceBeginEditable name="loginuser" -->loginuser<!-- InstanceEndEditable -->
			</div>			
			<h2 class="unvisible" id="a_lang">Sprachwahl</h2>
			<div id="logoutlink"><!-- InstanceBeginEditable name="logoutbutton" --><div class="imglink"><a href="perform_action.php?logout" onclick="if (confirm('Wirklich ausloggen?')) { document.location = 'perform_action.php?logout';}return false;"><img src="fileadmin/templates/web_fh-bochum.de/img/logout.gif" width="20" height="15" border="0" alt="" /></a></div> <div class="textlink"><a href="perform_action.php?logout" onclick="if (confirm('Wirklich ausloggen?')) { document.location = 'perform_action.php?logout';}return false;">Logout</a></div><!-- InstanceEndEditable --></div>
			<hr class="dn" />
			<div id="BreadCrumbOuter"><div id="BreadCrumb">
				<div class="tx-fhbobreadcrumb-pi1-menu"><span class="unvisible">Sie sind hier:  </span><!-- InstanceBeginEditable name="siesindhier" --><strong>Home</strong><!-- InstanceEndEditable --></div>
			</div></div>
			<hr class="dn" />			
		</div>		
	</div>
	
	<div id="MainContent">
						
	  <div id="MainContentCols_NoRightCol">
	    <div id="MainLeftCol">
			<h2 class="unvisible" id="a_mainnav">Hauptnavigation</h2>
				
			<!-- InstanceBeginEditable name="navigation" -->
<div id="MainMenu"><ul><li class="first"><dfn>1: </dfn><a href="u_termin.php" title="Raumverwaltung">Raumverwaltung<span class="unvisible">. </span></a></li><li><dfn>2: </dfn><span class="selected"><strong>Optionen</strong><span class="unvisible">. </span></span><ul>
<li><dfn>2.1: </dfn><a href="a_termin.php" title="Termin" class="navi2">Termin<span class="unvisible">. </span></a></li>
<li><dfn>2.2: </dfn><a href="a_ebene.php" title="Ebene" class="navi2">Ebene<span class="unvisible">. </span></a></li>
<li><dfn>2.3: </dfn><a href="a_raum.php" title="Raum" class="navi2">Raum<span class="unvisible">. </span></a></li>
<li><dfn>2.4: </dfn><span class="selected"><strong>Benutzer<span class="unvisible">. </span></strong></span></li>
</ul></li></ul></div>
		  <!-- InstanceEndEditable --></div>
			<hr class="dn" />	

            <!-- InstanceBeginEditable name="content" -->			<div id="MainCenterFullCol"> 											
				<div id="content">						
					<h1 class="csc-firstHeader">Personen</h1><a id="c17582"></a><div class="csc-textpic-text"><p class="bodytext">Nachfolgend finden Sie eine Auflistung aller Mitarbeiter des Fachbereichs&nbsp; Elektrotechnik und Informatik.<br />Über die Namen gelangen Sie zu den zugehörigen Labor- bzw Institutsseiten.


</p>
<p class="bodytext">Eine nach Gruppen geordnete Darstellung finden Sie auf den entsprechenden Unterseiten.</p></div><a id="c16721"></a><div class="tx-fhbopersonal-pi tx-fhbopersonal-pi1"><p>Bitte wählen Sie vor der gewünschten Telefon- oder Fax-Durchwahl: +49 (0)234 32</p><table class="contenttable contenttable-0" width="100%"><tr class="tr-even"><th>Name</th><th>Raum</th><th>Telefon</th><th>E-Mail</th></tr><tr class="tr-odd"><td>
<a href="fbe/physik/mitarbeiter/dipl-ing-gisela-adamitzki.html">Adamitzki, Gisela, Dipl.-Ing.</a>
</td><td>B0-07</td><td>10305</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#103;&#105;&#115;&#101;&#108;&#97;&#46;&#97;&#100;&#97;&#109;&#105;&#116;&#122;&#107;&#105;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
Bach, Thorsten, Dipl.-Ing.
</td><td>C6-21a</td><td>10320</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#116;&#104;&#111;&#114;&#115;&#116;&#101;&#110;&#46;&#98;&#97;&#99;&#104;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>

Bachem, Karin, M.A.
</td><td></td><td>10401</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#98;&#97;&#99;&#104;&#101;&#109;&#117;&#107;&#64;&#116;&#45;&#111;&#110;&#108;&#105;&#110;&#101;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
<a href="fbv/personen/professoren/dr-balla.html">Balla, Jochen, Prof. Dr. rer. nat.</a>
</td><td>A1-14a</td><td>10546</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#106;&#111;&#99;&#104;&#101;&#110;&#46;&#98;&#97;&#108;&#108;&#97;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
<a href="fbe/ass-lab/mitarbeiter/leitender-professor.html">Biesenbach, Rolf, Prof. Dr.-Ing.</a>
</td><td>D3-20</td><td>10307</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#114;&#111;&#108;&#102;&#46;&#98;&#105;&#101;&#115;&#101;&#110;&#98;&#97;&#99;&#104;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>

<a href="fbe/aid-labor/personal.html">Brabender, Katrin, Prof. Dr. rer. nat.</a>

</td><td>C5-20</td><td>10391</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#107;&#97;&#116;&#114;&#105;&#110;&#46;&#98;&#114;&#97;&#98;&#101;&#110;&#100;&#101;&#114;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
<a href="fbe/ea-lab/mitarbeiter.html">Brychta, Peter, Prof. Dr.-Ing.</a>
</td><td>D3-30</td><td>10349</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#112;&#101;&#116;&#101;&#114;&#46;&#98;&#114;&#121;&#99;&#104;&#116;&#97;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
Buda, Aurel, Dipl.-Ing.
</td><td>C 5-15</td><td>10379</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#97;&#117;&#114;&#101;&#108;&#46;&#98;&#117;&#100;&#97;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>

<a href="fbe/aid-labor/personal.html">Caninenberg, Wilhelm, Prof. Dr.-Ing.</a>

</td><td>C5-23</td><td>10331</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#119;&#105;&#108;&#104;&#101;&#108;&#109;&#46;&#99;&#97;&#110;&#105;&#110;&#101;&#110;&#98;&#101;&#114;&#103;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
Dienemann, Bastian, Dipl.-Ing.
</td><td>C 5-06</td><td>10326</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#98;&#97;&#115;&#116;&#105;&#97;&#110;&#46;&#100;&#105;&#101;&#110;&#101;&#109;&#97;&#110;&#110;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
<a href="fbe/mathe/personal/dipl-ing-hans-ulrich-dreiner.html">Dreiner, Hans-Ulrich, Dipl.-Ing.</a>
</td><td>C4-28</td><td>10368</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#104;&#97;&#110;&#115;&#45;&#117;&#108;&#114;&#105;&#99;&#104;&#46;&#100;&#114;&#101;&#105;&#110;&#101;&#114;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>

<a href="fbe/cei/personen/dipl-ing-dirk-ernesti.html">Ernesti, Dirk, Dipl.-Ing.</a>

</td><td>C 6-04</td><td>10354</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#100;&#105;&#114;&#107;&#46;&#101;&#114;&#110;&#101;&#115;&#116;&#105;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
Grybsch, Volker, Dipl.-Ing.
</td><td>C 6-11</td><td>10362</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#118;&#111;&#108;&#107;&#101;&#114;&#46;&#103;&#114;&#121;&#98;&#115;&#99;&#104;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
Hawig, Reinhard, Dr.-Ing.
</td><td></td><td>10302</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#114;&#101;&#105;&#110;&#104;&#97;&#114;&#100;&#46;&#104;&#97;&#119;&#105;&#103;&#64;&#114;&#117;&#98;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
<a href="fbe/cei/personen/prof-dr-siegfried-heckmann.html">Heckmann, Siegfried, Prof. Dr.-Ing.</a>

</td><td>C 7-24</td><td>10342</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#115;&#105;&#101;&#103;&#102;&#114;&#105;&#101;&#100;&#46;&#104;&#101;&#99;&#107;&#109;&#97;&#110;&#110;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>

<a href="fbe/professor-heller.html">Heller, Ingmar, Prof. Dr.-Ing.</a>
</td><td>D3-31</td><td>10350</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#103;&#109;&#97;&#114;&#46;&#104;&#101;&#108;&#108;&#101;&#114;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
Himmighofen, Elke
</td><td>C0-15</td><td>10319</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#104;&#105;&#109;&#109;&#105;&#103;&#104;&#111;&#102;&#101;&#110;&#64;&#104;&#118;&#46;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
Hübner, Ingeborg, Prof. Dr.-Ing.

</td><td>C4-26</td><td>10315</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#103;&#101;&#98;&#111;&#114;&#103;&#46;&#104;&#117;&#101;&#98;&#110;&#101;&#114;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
<a href="fbe/ae-lab.html">Hunstig, Peter, Dipl.-Ing.</a>

</td><td>C 6-19</td><td>10336</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#112;&#101;&#116;&#101;&#114;&#46;&#104;&#117;&#110;&#115;&#116;&#105;&#103;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
<a href="fbe/mathe/personal/michael-knorrenschild-deutsch.html">Knorrenschild, Michael, Prof. Dr. rer. nat.</a>
</td><td>C4-27</td><td>10317</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#109;&#105;&#99;&#104;&#97;&#101;&#108;&#46;&#107;&#110;&#111;&#114;&#114;&#101;&#110;&#115;&#99;&#104;&#105;&#108;&#100;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>

<a href="fbe/aid-labor/personal.html">Koch, Andreas, Dipl.-Ing.</a>
</td><td>C5-12</td><td>10325</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#97;&#110;&#100;&#114;&#101;&#97;&#115;&#46;&#107;&#111;&#99;&#104;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
<a href="fbe/miro-lab/personen/leitender-professor.html">Köhn, Carsten, Prof. Dr.-Ing.</a>

</td><td>C6-03</td><td>10333</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#99;&#97;&#114;&#115;&#116;&#101;&#110;&#46;&#107;&#111;&#101;&#104;&#110;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
Krause, Klaus, Prof. Dr.-Ing.
</td><td>C4-22</td><td>10311</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#107;&#108;&#97;&#117;&#115;&#46;&#107;&#114;&#97;&#117;&#115;&#101;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>

Kruse, Thomas, Dipl.-Ing.
</td><td>C 5-15</td><td>10379</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#116;&#104;&#111;&#109;&#97;&#115;&#46;&#107;&#114;&#117;&#115;&#101;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
Kühne, Hans-Joachim, Dr.
</td><td></td><td>10302</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#107;&#117;&#101;&#104;&#110;&#101;&#99;&#109;&#64;&#97;&#111;&#108;&#46;&#99;&#111;&#109;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>

<a href="fbe/cei/personen/martin-kuntze.html">Kuntze, Martin</a>
</td><td>C7-12,15</td><td>10340</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#109;&#97;&#114;&#116;&#105;&#110;&#46;&#107;&#117;&#110;&#116;&#122;&#101;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
Lütticke, Rainer, Dr.

</td><td>C 5-21</td><td>10329</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#108;&#117;&#101;&#116;&#116;&#105;&#99;&#107;&#101;&#64;&#117;&#110;&#105;&#45;&#119;&#117;&#112;&#112;&#101;&#114;&#116;&#97;&#108;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
<a href="fbe/cei/personen/prof-dr-wolfhardt-mueller-gronau.html">Müller-Gronau, Wolfhardt, Prof. Dr.-Ing.</a>
</td><td>C 7-03</td><td>10369</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#119;&#111;&#108;&#102;&#104;&#97;&#114;&#100;&#116;&#46;&#109;&#117;&#101;&#108;&#108;&#101;&#114;&#45;&#103;&#114;&#111;&#110;&#97;&#117;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>

<a href="fbe/meva-lab/personen.html">Nowak, Christoph, Dipl.-Ing.</a>
</td><td>D3-21</td><td>10306</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#99;&#104;&#114;&#105;&#115;&#116;&#111;&#112;&#104;&#46;&#110;&#111;&#119;&#97;&#107;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>

<a href="fbe/cei/personen/meng-dipl-ing-josef-otte.html">Otte, Josef, M.Eng. Dipl.-Ing.</a>
</td><td>C7-23</td><td>10341</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#106;&#111;&#115;&#101;&#102;&#46;&#111;&#116;&#116;&#101;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
<a href="fbe/mac-lab/personen/laborleiter.html">Pautzke, Friedbert, Prof. Dr.-Ing.</a>
</td><td>D3-03</td><td>10343</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#102;&#114;&#105;&#101;&#100;&#98;&#101;&#114;&#116;&#46;&#112;&#97;&#117;&#116;&#122;&#107;&#101;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>

Pilscheur, Oliver, Dipl.-Ing.
</td><td></td><td>10302</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#111;&#108;&#105;&#118;&#101;&#114;&#46;&#112;&#105;&#108;&#115;&#99;&#104;&#101;&#117;&#114;&#64;&#115;&#105;&#101;&#109;&#101;&#110;&#115;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>

<a href="fbe/ge-lab.html">Post, Ulrich, Prof. Dr.-Ing.</a>
</td><td>D 3-36</td><td>10327</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#117;&#108;&#114;&#105;&#99;&#104;&#46;&#112;&#111;&#115;&#116;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
<a href="fbe/ea-lab/mitarbeiter.html">Putz, Friedhelm, Dipl.-Ing.</a>
</td><td>D3-29</td><td>10348</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#102;&#114;&#105;&#101;&#100;&#104;&#101;&#108;&#109;&#46;&#112;&#117;&#116;&#122;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
Röhrig, Holger, Dipl.-Ing.

</td><td>C0-03</td><td>10366</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#104;&#111;&#108;&#103;&#101;&#114;&#46;&#114;&#111;&#101;&#104;&#114;&#105;&#103;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>

Schepers, David, Dipl.-Ing.
</td><td>C6-20</td><td>10358</td><td></td></tr><tr class="tr-odd"><td>
<a href="fbe/cei/personen/prof-dr-frank-schneeberger.html">Schneeberger, Frank, Prof. Dr.-Ing.</a>
</td><td>C 7-04</td><td>10309</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#102;&#114;&#97;&#110;&#107;&#46;&#115;&#99;&#104;&#110;&#101;&#101;&#98;&#101;&#114;&#103;&#101;&#114;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
Schröer, Martin, Dipl.-Ing.
</td><td></td><td>10302</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#115;&#99;&#104;&#114;&#111;&#101;&#114;&#64;&#116;&#101;&#97;&#99;&#104;&#105;&#110;&#103;&#109;&#101;&#100;&#105;&#97;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>

Schürmann, Volker, Dipl.-Ing.
</td><td>C 5-06</td><td>10326</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#118;&#111;&#108;&#107;&#101;&#114;&#46;&#115;&#99;&#104;&#117;&#101;&#114;&#109;&#97;&#110;&#110;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>

<a href="fbe/ae-lab.html">Schugt, Michael, Prof. Dr.-Ing.</a>
</td><td>C6-14a</td><td>10359</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#109;&#105;&#99;&#104;&#97;&#101;&#108;&#46;&#115;&#99;&#104;&#117;&#103;&#116;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
<a href="fbe/mac-lab/personen/mitarbeiter.html">Seidel, Ralf, Dipl.-Ing.</a>
</td><td>D3-04</td><td>10347</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#114;&#97;&#108;&#102;&#46;&#115;&#101;&#105;&#100;&#101;&#108;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>

<a href="fbe/ge-lab.html">Steiner, Jörg, Dipl.-Ing.</a>
</td><td>D 3-37</td><td>10370</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#106;&#111;&#101;&#114;&#103;&#46;&#115;&#116;&#101;&#105;&#110;&#101;&#114;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>

<a href="fbe/physik/mitarbeiter/prof-dr-ing-martin-sternberg.html">Sternberg, Martin, Prof. Dr.-Ing.</a>
</td><td>F 1-23</td><td>10000</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#109;&#97;&#114;&#116;&#105;&#110;&#46;&#115;&#116;&#101;&#114;&#110;&#98;&#101;&#114;&#103;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
<a href="fbe/organisation/dekanat.html">Tillmann, Ellen</a>
</td><td>C0-21</td><td>10302</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#101;&#108;&#108;&#101;&#110;&#46;&#116;&#105;&#108;&#108;&#109;&#97;&#110;&#110;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>

Viethen, Torsten, Dipl.-Ing.
</td><td>C5-21</td><td>10329</td><td></td></tr><tr class="tr-even"><td>

<a href="fbe/meva-lab/personen.html">Weinert, Albrecht, Prof. Dr.-Ing.</a>
</td><td>D3-02</td><td>10328</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#97;&#108;&#98;&#114;&#101;&#99;&#104;&#116;&#46;&#119;&#101;&#105;&#110;&#101;&#114;&#116;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
Weingart, Daniel, Dipl.-Ing.
</td><td>C 5-06</td><td>10326</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#100;&#97;&#110;&#105;&#101;&#108;&#46;&#119;&#101;&#105;&#110;&#103;&#97;&#114;&#116;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
<a href="fbe/mathe/personal/dipl-ing-ulrich-witte.html">Witte, Ulrich, Dipl.-Ing.</a>

</td><td>D3-37-38</td><td>10351</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#117;&#108;&#114;&#105;&#99;&#104;&#46;&#119;&#105;&#116;&#116;&#101;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>

<a href="fbe/sr-lab.html">Wollert, Jörg, Prof. Dr.-Ing.</a>
</td><td>C5-17</td><td>10360</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#106;&#111;&#101;&#114;&#103;&#46;&#119;&#111;&#108;&#108;&#101;&#114;&#116;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-even"><td>
Wüsthoff, Sabine
</td><td></td><td>10401</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;&#101;&#99;&#111;&#45;&#108;&#111;&#117;&#110;&#103;&#101;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr><tr class="tr-odd"><td>
<a href="fbe/almas/kontakt/laborleiter.html">Zacheja, Johannes, Prof. Dr. rer. nat.</a>
</td><td>C6-21</td><td>10337</td><td><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#106;&#111;&#104;&#97;&#110;&#110;&#101;&#115;&#46;&#122;&#97;&#99;&#104;&#101;&#106;&#97;&#64;&#102;&#104;&#45;&#98;&#111;&#99;&#104;&#117;&#109;&#46;&#100;&#101;" title="Öffnet ein Fenster zum Versenden einer E-Mail" class="mail">E-Mail</a></td></tr></table></div>

				</div>								
			</div>
			<!--TYPO3SEARCH_end-->					

<!-- InstanceEndEditable -->
		</div>	
	</div>	
	
	<div id="Footer">
		<div id="dottedBorder"></div>
		<div id="MetaNavFooter">
			<hr class="dn" />
			<h2 class="unvisible" id="a_footer">Fußnavigation</h2>
			<ul><li>&copy; FH Bochum<span class="unvisible">. </span></li><li><a href="http://www.fh-bochum.de/impressum/inhaltlich-verantwortliche/kit.html" title="Allgemeines Webangebot: inhaltliche Verantwortung">Inhaltlich verantwortlich</a><span class="unvisible">. </span></li><li class="noprint"><a href="http://www.fh-bochum.de/impressum.html" title="Impressum">Impressum</a><span class="unvisible">. </span></li><li class="noprint last"><a href="http://www.fh-bochum.de/datenschutz.html" title="Datenschutz">Datenschutz</a><span class="unvisible">. </span></li></ul>

		</div>		
	</div>
</div>
</body>
<!-- InstanceEnd --></html>