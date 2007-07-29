<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Einrichten der Datenbank</title>
</head>
<h2>Einrichten der Datenbank</h2>
<p>Sofern nachfolgend keine Fehler angezeigt werden, war die Einrichtung erfolgreich. Werden Fehler angezeigt, 
beheben Sie sie bitte. Bitte kontrollieren Sie insbesondere die Daten für die Anmeldung am MySQL-Server in der Datei config.inc.php
im root-Verzeichnis.</p>
<?php
require_once("../config.inc.php");
echo ("<h4>Verbinde mit Datenbank...</h4>");
mysql_pconnect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWD);
echo ("<p>" . mysql_error() . "</p>");


echo ("<h4>Erstelle Datenbank...</h4>");
mysql_query("CREATE DATABASE " . MYSQL_DB . ";");
echo ("<p>" . mysql_error() . "</p>");
mysql_query("USE " . MYSQL_DB . ";");
echo ("<p>" . mysql_error() . "</p>");



echo ("<h4>Erstelle Tabelle " . TABLE_APPOINTMENTGROUP. "...</h4>");
mysql_query("CREATE TABLE `" . TABLE_APPOINTMENTGROUP . "` (" .
	"`" . T_APPOINTMENTGROUP_C_ID 				. "` INT UNSIGNED NOT NULL, " .
	"`" . T_APPOINTMENTGROUP_C_DESC 			. "` TEXT, " .
		"PRIMARY KEY ( `" . T_APPOINTMENTGROUP_C_ID  . "` )) ENGINE=INNODB;");
echo ("<p>" . mysql_error() . "</p>");

echo ("<h4>Erstelle Default-Element in Tabelle " . TABLE_APPOINTMENTGROUP. "...</h4>");
mysql_query ("INSERT INTO `" . TABLE_APPOINTMENTGROUP . "` VALUES (0, 'Default')");
echo ("<p>" . mysql_error() . "</p>");



echo ("<h4>Erstelle Tabelle " . TABLE_APPOINTMENT. "...</h4>");
mysql_query("CREATE TABLE `" . TABLE_APPOINTMENT . "` (" .
	"`" . T_APPOINTMENT_C_ID 					. "` INT UNSIGNED NOT NULL, " .
	"`" . T_APPOINTMENT_C_DATETIME 				. "` DATETIME NOT NULL , " .
	"`" . T_APPOINTMENT_C_DURATION_TIME 		. "` INT UNSIGNED NOT NULL , " .
	"`" . T_APPOINTMENT_C_DESC_BRIEF 			. "` TEXT NOT NULL, " .
	"`" . T_APPOINTMENT_C_DESC_FULL 			. "` TEXT, " .
	"`" . T_APPOINTMENT_C_WEEKS_DISTANCE 		. "` INT NOT NULL, " .
	"`" . T_APPOINTMENT_C_RECURRENCES 			. "` INT , " .
	"`" . T_APPOINTMENT_C_RECURRENCE_END 		. "` DATETIME , " .
	"`" . T_APPOINTMENT_C_RECURRENCE_MO 		. "` BOOL NOT NULL DEFAULT FALSE, " .
	"`" . T_APPOINTMENT_C_RECURRENCE_TU 		. "` BOOL NOT NULL DEFAULT FALSE, " .
	"`" . T_APPOINTMENT_C_RECURRENCE_WE 		. "` BOOL NOT NULL DEFAULT FALSE, " .
	"`" . T_APPOINTMENT_C_RECURRENCE_TH 		. "` BOOL NOT NULL DEFAULT FALSE, " .
	"`" . T_APPOINTMENT_C_RECURRENCE_FR 		. "` BOOL NOT NULL DEFAULT FALSE, " .
	"`" . T_APPOINTMENT_C_RECURRENCE_SA 		. "` BOOL NOT NULL DEFAULT FALSE, " .
	"`" . T_APPOINTMENT_C_RECURRENCE_SU 		. "` BOOL NOT NULL DEFAULT FALSE, " .
	"`" . T_APPOINTMENT_C_APPOINTMENTGROUP_ID 	. "` INT UNSIGNED NOT NULL ".
			"REFERENCES `" . TABLE_APPOINTMENTGROUP 	. "` (`" . T_APPOINTMENTGROUP_C_ID 	. "`), " .
		"PRIMARY KEY ( `" . T_APPOINTMENT_C_ID  . "` )) ENGINE=INNODB;");
echo ("<p>" . mysql_error() . "</p>");



echo ("<h4>Erstelle Tabelle " . TABLE_LAYER. "...</h4>");
mysql_query("CREATE TABLE `" . TABLE_LAYER . "` (" .
	"`" . T_LAYER_C_ID 							. "` INT UNSIGNED NOT NULL, " .
	"`" . T_LAYER_C_DESCRIPTION					. "` TEXT NOT NULL, " .
		"PRIMARY KEY ( `" . T_LAYER_C_ID  . "` )) ENGINE=INNODB;");
echo ("<p>" . mysql_error() . "</p>");



echo ("<h4>Erstelle Tabelle " . TABLE_ROOM. "...</h4>");
mysql_query("CREATE TABLE `" . TABLE_ROOM . "` (" .
	"`" . T_ROOM_C_ID 							. "` INT UNSIGNED NOT NULL, " .
	"`" . T_ROOM_C_CAPACITY 					. "` INT UNSIGNED NOT NULL , " .
	"`" . T_ROOM_C_DESCRIPTION 					. "` TEXT NOT NULL, " .
	"`" . T_ROOM_C_LAYERID 						. "` INT UNSIGNED NOT NULL ".
			"REFERENCES `" . TABLE_LAYER 	. "` (`" . T_LAYER_C_ID 	. "`), " .
		"PRIMARY KEY ( `" . T_ROOM_C_ID  . "` )) ENGINE=INNODB;");
echo ("<p>" . mysql_error() . "</p>");



echo ("<h4>Erstelle Tabelle " . TABLE_APPROOMASSIGN. "...</h4>");
mysql_query("CREATE TABLE `" . TABLE_APPROOMASSIGN . "` (" .
	"`" . T_APPROOMASSIGN_C_ROOMID 				. "` INT UNSIGNED NOT NULL " .
			"REFERENCES `" . TABLE_ROOM 		. "` (`" . T_ROOM_C_ID 	. "`) ON DELETE CASCADE, " .
	"`" . T_APPROOMASSIGN_C_APPID 				. "` INT UNSIGNED NOT NULL " .
			"REFERENCES `" . TABLE_APPOINTMENT 	. "` (`" . T_APPOINTMENT_C_ID . "`) ON DELETE CASCADE, " .
		"PRIMARY KEY ( `" . T_APPROOMASSIGN_C_ROOMID . "`, `" . T_APPROOMASSIGN_C_APPID . "`)) ENGINE=INNODB;");
echo ("<p>" . mysql_error() . "</p>");



echo ("<h4>Erstelle Tabelle " . TABLE_APPLAYERASSIGN. "...</h4>");
mysql_query("CREATE TABLE `" . TABLE_APPLAYERASSIGN . "` (" .
	"`" . T_APPLAYERASSIGN_C_LAYERID 			. "` INT UNSIGNED NOT NULL " .
			"REFERENCES `" . TABLE_LAYER 		. "` (`" . T_LAYER_C_ID 	. "`) ON DELETE CASCADE, " .
	"`" . T_APPROOMASSIGN_C_APPID 				. "` INT UNSIGNED NOT NULL " .
			"REFERENCES `" . TABLE_APPOINTMENT 	. "` (`" . T_APPOINTMENT_C_ID . "`) ON DELETE CASCADE, " .
		"PRIMARY KEY ( `" . T_APPLAYERASSIGN_C_LAYERID . "`, `" . T_APPROOMASSIGN_C_APPID . "`)) ENGINE=INNODB;");
echo ("<p>" . mysql_error() . "</p>");



echo ("<h4>Erstelle Tabelle " . TABLE_INVENTORY. "...</h4>");
mysql_query("CREATE TABLE `" . TABLE_INVENTORY. "` (" .
	"`" . T_INVENTORY_C_ID 						. "` INT UNSIGNED NOT NULL, " .
	"`" . T_INVENTORY_C_QUANTITY 				. "` INT UNSIGNED NOT NULL , " .
	"`" . T_INVENTORY_C_DESCRIPTION 			. "` TEXT NOT NULL, " .
	"`" . T_INVENTORY_C_ROOMID 					. "` INT UNSIGNED NOT NULL ".
			"REFERENCES `" . TABLE_ROOM 		. "` (`" . T_ROOM_C_ID 	. "`), " .
		"PRIMARY KEY ( `" . T_INVENTORY_C_ID  . "` )) ENGINE=INNODB;");
echo ("<p>" . mysql_error() . "</p>");



echo ("<h4>Erstelle Tabelle " . TABLE_USER. "...</h4>");
mysql_query("CREATE TABLE `" . TABLE_USER . "` (" .
	"`" . T_USER_C_ID 							. "` INT UNSIGNED NOT NULL, " .
	"`" . T_USER_C_NAME 						. "` TEXT NOT NULL, " .
	"`" . T_USER_C_PASSWD 						. "` TEXT, " .
	"`" . T_USER_C_READ 						. "` BOOL DEFAULT FALSE, " .
	"`" . T_USER_C_WRITE 						. "` BOOL DEFAULT FALSE, " .
	"`" . T_USER_C_ADMIN 						. "` BOOL DEFAULT FALSE, " .
		"PRIMARY KEY ( `" . T_USER_C_ID  . "` )) ENGINE=INNODB;");
echo ("<p>" . mysql_error() . "</p>");



echo ("<h4>Erstelle Tabelle " . TABLE_LOCALUSER. "...</h4>");
mysql_query("CREATE TABLE `" . TABLE_LOCALUSER . "` (" .
	"`" . T_LOCALUSER_C_ID 						. "` INT UNSIGNED NOT NULL, " .
	"`" . T_USER_C_GLOABALID 					. "` INT UNSIGNED NOT NULL ".
			"REFERENCES `" . TABLE_USER . "` (`" . T_USER_C_ID 	. "`) ON DELETE CASCADE, " .
	"`" . T_LOCALUSER_C_READ 					. "` BOOL DEFAULT FALSE, " .
	"`" . T_LOCALUSER_C_WRITE 					. "` BOOL DEFAULT FALSE, " .
	"`" . T_LOCALUSER_C_ADMIN 					. "` BOOL DEFAULT FALSE, " .
		"PRIMARY KEY ( `" . T_LOCALUSER_C_ID  . "` )) ENGINE=INNODB;");
echo ("<p>" . mysql_error() . "</p>");



echo ("<h4>Erstelle Tabelle " . TABLE_ROOMLOCUSERASSIGN. "...</h4>");
mysql_query("CREATE TABLE `" . TABLE_ROOMLOCUSERASSIGN . "` (" .
	"`" . T_ROOMLOCUSERASSIGN_C_ROOMID 			. "` INT UNSIGNED NOT NULL " .
			"REFERENCES `" . TABLE_ROOM 		. "` (`" . T_ROOM_C_ID 	. "`) ON DELETE CASCADE, " .
	"`" . T_ROOMLOCUSERASSIGN_C_LOCUSERID		. "` INT UNSIGNED NOT NULL " .
			"REFERENCES `" . TABLE_LOCALUSER 	. "` (`" . T_LOCALUSER_ID . "`) ON DELETE CASCADE, " .
		"PRIMARY KEY ( `" . T_ROOMLOCUSERASSIGN_C_ROOMID . "`, `" . T_ROOMLOCUSERASSIGN_C_LOCUSERID . "`)) ENGINE=INNODB;");
echo ("<p>" . mysql_error() . "</p>");



echo ("<h4>Erstelle Tabelle " . TABLE_LAYERLOCUSERASSIGN. "...</h4>");
mysql_query("CREATE TABLE `" . TABLE_LAYERLOCUSERASSIGN . "` (" .
	"`" . T_LAYERLOCUSERASSIGN_C_LAYERID 			. "` INT UNSIGNED NOT NULL " .
			"REFERENCES `" . TABLE_LAYER 		. "` (`" . T_LAYER_C_ID 	. "`) ON DELETE CASCADE, " .
	"`" . T_LAYERLOCUSERASSIGN_C_LOCUSERID		. "` INT UNSIGNED NOT NULL " .
			"REFERENCES `" . TABLE_LOCALUSER 	. "` (`" . T_LOCALUSER_ID . "`) ON DELETE CASCADE, " .
		"PRIMARY KEY ( `" . T_LAYERLOCUSERASSIGN_C_LAYERID . "`, `" . T_LAYERLOCUSERASSIGN_C_LOCUSERID . "`)) ENGINE=INNODB;");
echo ("<p>" . mysql_error() . "</p>");

?>
<body>
</body>
</html>
