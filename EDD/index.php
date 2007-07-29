<?php
require_once ("config.inc.php");
session_start();

//ausloggen
if (isset ($_REQUEST[PHPFILE_INDEX_P_LOGOUT]))
{
	unset($_SESSION[SESSION_USER_NAME]);
	unset($_SESSION[SESSION_USER_PASSWORD]);
}

//einloggen
if (isset ($_REQUEST[PHPFILE_INDEX_P_USERNAME]) &&  
	isset ($_REQUEST[PHPFILE_INDEX_P_USERPWD]))
{
	mysql_pconnect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWD);
	echo mysql_error();
	mysql_query("USE " . MYSQL_DB);
	echo mysql_error();
	$query = mysql_query ("SELECT * FROM `" .  TABLE_USER . "` WHERE `" . 
			T_USER_C_NAME . "` = '" . $_REQUEST[PHPFILE_INDEX_P_USERNAME] . 
			"' AND `" . T_USER_C_PASSWD . "` = '" . 
			$_REQUEST[PHPFILE_INDEX_P_USERPWD] . "';");
	echo mysql_error();
	if (mysql_num_rows($query)==0)
	{
		echo get_derefer_html (PHPFILE_INDEX . "?" . PHPFILE_INDEX_P_LOGINFAILED);
		die();
	}
	else
	{
		$_SESSION[SESSION_USER_NAME] = $_REQUEST[PHPFILE_INDEX_P_USERNAME];
		$_SESSION[SESSION_USER_PASSWORD] = $_REQUEST[PHPFILE_INDEX_P_USERPWD] ;
		echo get_derefer_html (PHPFILE_LOGGED_IN);
		die();
	}
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
			<!-- InstanceBeginEditable name="loginuser" -->&nbsp;<!-- InstanceEndEditable -->
			</div>			
			<h2 class="unvisible" id="a_lang">Sprachwahl</h2>
			<div id="logoutlink"><!-- InstanceBeginEditable name="logoutbutton" -->&nbsp;<!-- InstanceEndEditable --></div>
			<hr class="dn" />
			<div id="BreadCrumbOuter"><div id="BreadCrumb">
				<div class="tx-fhbobreadcrumb-pi1-menu"><span class="unvisible">Sie sind hier:  </span><!-- InstanceBeginEditable name="siesindhier" --><strong>Raumverwaltung Login</strong><!-- InstanceEndEditable --></div>
			</div></div>
			<hr class="dn" />			
		</div>		
	</div>
	
	<div id="MainContent">
						
	  <div id="MainContentCols_NoRightCol">
	    <div id="MainLeftCol">
			<h2 class="unvisible" id="a_mainnav">Hauptnavigation</h2>
				
			<!-- InstanceBeginEditable name="navigation" -->
				<div id="MainMenu"><ul><li><span class="selected"><strong>Raumverwaltung Login</strong><span class="unvisible">. </span></span></li></ul></div>		
			<!-- InstanceEndEditable --></div>
			<hr class="dn" />	

            <!-- InstanceBeginEditable name="content" -->
			<div id="MainCenterCol">

				<div id="content">						
					<h1 class="csc-firstHeader">Raumverwaltung</h1>
					<h3>Benutzer Anmeldung</h3>
					<?php
					if (isset ($_REQUEST[PHPFILE_INDEX_P_LOGINFAILED]))
					echo'
					<div class="csc-frame csc-frame-frame3"><div class="csc-textpic-text"><p class="bodytext"><strong><em>Anmeldung fehlgeschlagen. Benutzername oder Passwort falsch.</em></strong></p></div></div>					
					<div class="csc-spacer" style="height:12px;"></div>';
					?>
					<?php
					if (isset ($_REQUEST[PHPFILE_INDEX_P_LOGOUT]))
					echo'
					<div class="csc-frame csc-frame-frame3"><div class="csc-textpic-text"><p class="bodytext"><strong><em>Sie haben sich erfolgreich von diesem System abgemeldet.</em></strong></p></div></div>					
					<div class="csc-spacer" style="height:12px;"></div>';
					?>
					<div class="tx-newloginbox-pi1">
					<p>Geben Sie Ihren Benutzernamen und Ihr Passwort ein, um sich an der Webseite anzumelden:</p>
				
					<!--
						"Login" form, including login result if failure.
					-->
					<form action="<?php echo (PHPFILE_INDEX);?>" target="_top" method="post" style="margin: 0 0 0 0;">
					<fieldset>
					<legend>Raumverwaltungs Login</legend>
					<div class="loginform">
						<input type="hidden" name="<?php echo (PHPFILE_PERFACT_P_ACTION);?>" value="<?php echo (PHPFILE_PERFACT_P_ACTION_PARAM_LOGIN);?>" id="<?php echo (PHPFILE_PERFACT_P_ACTION);?>" />
						<div class="form-item">
						<label for="user">Benutzername:</label><br />
						<input type="text" name="<?php echo (PHPFILE_INDEX_P_USERNAME);?>" value="" id="<?php echo (PHPFILE_INDEX_P_USERNAME);?>" />
						</div>
						<div class="form-item">

						<label for="pass">Passwort:</label><br />
						<input type="password" name="<?php echo (PHPFILE_INDEX_P_USERPWD);?>" value="" id="<?php echo (PHPFILE_INDEX_P_USERPWD);?>" />
						</div>
						<div class="form-item">
						<input type="submit" name="submit" value="Anmelden" class="tx-newloginbox-pi1-submit"   id="tx-newloginbox-pi1-login_submit" />
						</div>

						
					</div>
					</fieldset>
					</form>
				
	</div>

				</div>				
			</div>
			<h2 class="unvisible">Zusätzliche Information</h2>
			<div id="MainRightCol">
				<div id="contentRight">	
				</div>
			</div>
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