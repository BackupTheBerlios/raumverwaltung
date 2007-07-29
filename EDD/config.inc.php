<?php

// Name des Tools
define ("TOOL_NAME", "FH Bochum Raumverwaltungssysstem");

// Root-Verzeichniss des Umfrage-Programms auf dem Server, 
// z.B. /srv/www/htdocs/unterverzeichnis/
define ("INTERNAL_ROOT_DIR", "H:/FH/EDD/Projekt/");
 
// Root-Verzeichniss des Umfrage-Programms auf dem Server, 
// z.B. $_SERVER ["SERVER_NAME"] ."/unterverzeichnis/"
define ("EXTERNAL_ROOT_DIR", $_SERVER ["SERVER_NAME"] ."");
 
// admin-Unterverzeichniss , z.B. admin/ 
define ("ADMIN_SUBDIR", "admin/");

//  Server, auf dem dei MySQL-Datenbank installiert ist, z.B. localhost 
define ("MYSQL_SERVER", "localhost");
 
//  User der Datenbank
define ("MYSQL_USER", "root");
 
//  Passwort der Datenbank
define ("MYSQL_PASSWD", "");
 
//  Passwort der Datenbank
define ("MYSQL_DB", "roomadministration");
 
 
 
// Weiterleitungsdatei
function get_derefer_html ($link)
{
	return "<html><head>" .
		"<title>Einen Augenblick bitte...</title>" .
		"<meta http-equiv='REFRESH' content='0; URL=" . $link ."'>".
		"<link rel='SHORTCUT ICON' href='http://www.iml.fhg.de/favicon.ico'>" .
		"<link href='/css/styles.css' rel='stylesheet' type='text/css' />" .
		"</head>" .
		"<body><table border='0' height='100%' width='100%'><tbody>" .
		"<tr><td align='center'> " .
		"<p class='HeaderGrey'>Einen Augenblick bitte...</p>" .
		"<p class='Inhalt1'>Sie werden umgehend zu der von Ihnen gewünschten " .
		"Seite weitergeleitet.</p>" .
		"<p class='Inhalt1'>Sollten Sie nicht weitergeleitet werden, klicken " .
		"Sie bitte auf <a href='" . $link. "'>" . $link. "</a></p>" .
		"</td></tr></tbody></table></body></html>";
}


//===== Namen der Spalten =====
define ("TABLE_APPOINTMENT",						"appointment");  

define ("T_APPOINTMENT_C_ID",						"m_id");
define ("T_APPOINTMENT_C_DATETIME",					"m_datetime");
define ("T_APPOINTMENT_C_DURATION_TIME",			"m_durationtime");
define ("T_APPOINTMENT_C_DESC_BRIEF",				"m_desc_brief");
define ("T_APPOINTMENT_C_DESC_FULL",				"m_desc_full");
define ("T_APPOINTMENT_C_WEEKS_DISTANCE",			"m_weeks_distance");
define ("T_APPOINTMENT_C_RECURRENCES",				"m_recurrences");
define ("T_APPOINTMENT_C_RECURRENCE_END",			"m_recurrence_end");
define ("T_APPOINTMENT_C_RECURRENCE_MO",			"m_recurrence_mo");
define ("T_APPOINTMENT_C_RECURRENCE_TU",			"m_recurrence_tu");
define ("T_APPOINTMENT_C_RECURRENCE_WE",			"m_recurrence_we");
define ("T_APPOINTMENT_C_RECURRENCE_TH",			"m_recurrence_th");
define ("T_APPOINTMENT_C_RECURRENCE_FR",			"m_recurrence_fr");
define ("T_APPOINTMENT_C_RECURRENCE_SA",			"m_recurrence_sa");
define ("T_APPOINTMENT_C_RECURRENCE_SU",			"m_recurrence_su");
define ("T_APPOINTMENT_C_APPOINTMENTGROUP_ID",		"m_appointmentgroup_id");



define ("TABLE_APPOINTMENTGROUP",					"appointmentgroup");  

define ("T_APPOINTMENTGROUP_C_ID",					"m_id");
define ("T_APPOINTMENTGROUP_C_DESC",				"m_desc");



define ("TABLE_APPROOMASSIGN",						"app_room_assignment");  

define ("T_APPROOMASSIGN_C_ROOMID",					"m_room_id");
define ("T_APPROOMASSIGN_C_APPID",					"m_appointment_id");



define ("TABLE_APPROOMASSIGN",						"app_room_assignment");  

define ("T_APPROOMASSIGN_C_ROOMID",					"m_room_id");
define ("T_APPROOMASSIGN_C_APPID",					"m_appointment_id");



define ("TABLE_APPLAYERASSIGN",						"app_layer_assignment");  

define ("T_APPLAYERASSIGN_C_LAYERID",				"m_layer_id");
define ("T_APPLAYERASSIGN_C_APPID",					"m_appointment_id");



define ("TABLE_LAYER",								"layer");  

define ("T_LAYER_C_ID",								"m_id");
define ("T_LAYER_C_DESCRIPTION",					"m_description");



define ("TABLE_ROOM",								"room");  

define ("T_ROOM_C_ID",								"m_id");
define ("T_ROOM_C_CAPACITY",						"m_capacity");
define ("T_ROOM_C_DESCRIPTION",						"m_description");
define ("T_ROOM_C_LAYERID",							"m_layer_id");



define ("TABLE_INVENTORY",							"inventory");  

define ("T_INVENTORY_C_ID",							"m_id");
define ("T_INVENTORY_C_QUANTITY",					"m_quantity");
define ("T_INVENTORY_C_DESCRIPTION",				"m_description");
define ("T_INVENTORY_C_ROOMID",						"m_room_id");



define ("TABLE_USER",								"user");  

define ("T_USER_C_ID",								"m_id");
define ("T_USER_C_NAME",							"m_name");
define ("T_USER_C_PASSWD",							"m_passwd");
define ("T_USER_C_READ",							"m_read");
define ("T_USER_C_WRITE",							"m_write");
define ("T_USER_C_ADMIN",							"m_admin");



define ("TABLE_LOCALUSER",							"local_user");  

define ("T_LOCALUSER_C_ID",							"m_id");
define ("T_LOCALUSER_C_GLOABALID",					"m_global_id");
define ("T_LOCALUSER_C_READ",						"m_read");
define ("T_LOCALUSER_C_WRITE",						"m_write");
define ("T_LOCALUSER_C_ADMIN",						"m_admin");



define ("TABLE_ROOMLOCUSERASSIGN",					"room_localuser_assignment");  

define ("T_ROOMLOCUSERASSIGN_C_ROOMID",				"m_room_id");
define ("T_ROOMLOCUSERASSIGN_C_LOCUSERID",			"m_locuser_id");



define ("TABLE_LAYERLOCUSERASSIGN",					"layer_localuser_assignment");  

define ("T_LAYERLOCUSERASSIGN_C_LAYERID",			"m_layer_id");
define ("T_LAYERLOCUSERASSIGN_C_LOCUSERID",			"m_locuser_id");



//===== PHP FILE LOCATIONS ====
define ("PHPFILE_INDEX", 							"index.php");
define ("PHPFILE_LOGGED_IN",						"u_termin.php");

//==== PHP FILE PARAMETER ==== 
define ("PHPFILE_INDEX_P_LOGOUT", 					"logout");
define ("PHPFILE_INDEX_P_LOGINFAILED",				"login_failed");

define ("PHPFILE_INDEX_P_USERNAME", 				"user");
define ("PHPFILE_INDEX_P_USERPWD", 					"pwd");

define ("PHPFILE_PERFACT_P_ACTION",					"action");
define ("PHPFILE_PERFACT_P_ACTION_PARAM_LOGIN",		"pa_login");
define ("PHPFILE_PERFACT_P_ACTION_PARAM_LOGOUT",	"pa_logout");


// ====== PHP SESSION PARAMETER
define ("SESSION_USER_NAME", 						"user_name");
define ("SESSION_USER_PASSWORD", 					"user_pwd");


?>