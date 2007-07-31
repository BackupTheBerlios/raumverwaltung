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
			<!-- InstanceBeginEditable name="loginuser" --><strong><?php echo $_SESSION[SESSION_USER_NAME] ?></strong><!-- InstanceEndEditable -->
			</div>			
			<h2 class="unvisible" id="a_lang">Sprachwahl</h2>
			<div id="logoutlink"><!-- InstanceBeginEditable name="logoutbutton" --><div class="imglink"><a href="index.php?logout" onclick="if (confirm('Wirklich ausloggen?')) { document.location = 'index.php?logout';}return false;"><img src="fileadmin/templates/web_fh-bochum.de/img/logout.gif" width="20" height="15" border="0" alt="" /></a></div> <div class="textlink"><a href="index.php?logout" onclick="if (confirm('Wirklich ausloggen?')) { document.location = 'index.php?logout';}return false;">Logout</a></div><!-- InstanceEndEditable --></div>
			<hr class="dn" />
			<div id="BreadCrumbOuter"><div id="BreadCrumb">
				<div class="tx-fhbobreadcrumb-pi1-menu"><span class="unvisible">Sie sind hier:  </span><!-- InstanceBeginEditable name="siesindhier" --><strong><a href="<?php echo (PHPFILE_LOGGED_IN); ?>" title="Raumverwaltung">Raumverwaltung</a> &#187; <a href="u_ebene.php" title="Ebene">Ebene</a> </strong><!-- InstanceEndEditable --></div>
			</div></div>
			<hr class="dn" />			
		</div>		
	</div>
	
	<div id="MainContent">
						
	  <div id="MainContentCols_NoRightCol">
	    <div id="MainLeftCol">
			<h2 class="unvisible" id="a_mainnav">Hauptnavigation</h2>
				
			<!-- InstanceBeginEditable name="navigation" -->
<div id="MainMenu"><ul><li class="first"><dfn>1: </dfn><span class="selected"><strong>Raumverwaltung</strong><span class="unvisible">. </span></span>
<ul><li><dfn>1.1: </dfn><a href="u_termin.php" title="Termin" class="navi2">Termin<span class="unvisible">. </span></a></li><li><dfn>1.2: </dfn><span class="selected"><strong>Ebene<span class="unvisible">. </span></strong></span></li><li><dfn>1.3: </dfn><a href="u_raum.php" title="Raum" class="navi2">Raum<span class="unvisible">. </span></a></li></ul>
</li><li><dfn>2: </dfn><a href="admin.php" title="Optionen">Optionen<span class="unvisible">. </span></a></li></ul></div>		

		  <!-- InstanceEndEditable --></div>
			<hr class="dn" />	

            <!-- InstanceBeginEditable name="content" -->Termine<!-- InstanceEndEditable -->
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