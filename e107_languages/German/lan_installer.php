<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - german language file
|     UTF-8 encoded
|     translated for: http://www.e107cms.de
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $HeadURL: https://svn.code.sf.net/p/e107german/code/trunk/e107_0.7/e107_languages/German/lan_installer.php $ 
|     $Revision: 181 $
|     $Date: 2012-01-03 03:04:36 +0100 (Di, 03. Jan 2012) $
|     $Id: lan_installer.php 181 2012-01-03 02:04:36Z lars78 $
|     $Author: lars78 $
+----------------------------------------------------------------------------+
*/
define("LANINS_001", "e107 Installierung");
define("LANINS_002", "Schritt");
define("LANINS_003", "1");
define("LANINS_004", "Sprachauswahl");
define("LANINS_005", "Bitte wählen Sie eine Sprache, die Sie während des Installationsprozesses verwenden möchten");
define("LANINS_007", "4");
define("LANINS_008", "PHP Version, MySQL Versions / Dateirechte Überprüfung");
define("LANINS_009", "Dateirechte nochmal prüfen");
define("LANINS_010", "Datei nicht beschreibbar:");
define("LANINS_010a", "Verzeichnis nicht beschreibbar:");
define("LANINS_012", "MySQL Funktionen scheinen nicht zu existieren. Dies kann entweder bedeuten, dass die MySQL PHP Erweiterung nicht installiert ist oder Ihre PHP Installation wurde nicht mit MySQL Unterstützung kompiliert.");
define("LANINS_013", "Ihre MySQL Versions Nummer konnte nicht ermittelt werden. Dies ist kein schwerwiegender Fehler, also fahren Sie bitte mit der Installation fort, aber beachten Sie, dass e107 MySQL >= 3.23 benötigt um korrekt zu funktionieren.");
define("LANINS_014", "Dateirechte");
define("LANINS_015", "PHP Version:");
define("LANINS_017", "BESTANDEN");
define("LANINS_018", "Vergewissern Sie sich bitte, dass alle aufgelisteten Dateien existieren und auf dem Server beschreibbar sind. Dies bedeutet normalerweise, dass Sie sie mit 777 CHMOD-Rechten versehen müssen, kann aber von Server zu Server variieren - falls Sie Probleme haben, kontaktieren Sie Ihren Serverprovider.");
define("LANINS_019", "Die PHP Version auf Ihrem Server ist nicht ausreichend. e107 benötigt mindestens eine PHP Version 4.3.0. aktualisieren Sie entweder Ihre PHP Version, oder kontaktieren Sie Ihren Serverprovider für ein aktualisierung.");
define("LANINS_021", "2");
define("LANINS_022", "MySQL Server Details:");
define("LANINS_023", "Bitte geben Sie Ihre Mysql Einstellungen hier ein. Falls Sie Root-Rechte besitzen, können Sie eine neue Datenbank erstellen lassen, indem Sie die Box markieren. Falls nicht, müssen Sie eine neue Datenbank manuell erstellen oder eine bereits existierende verwenden. Falls Sie nur eine Datenbank zur Verfügung haben, benutzen Sie bitte ein Prefix, so dass andere Skripte die gleiche Datenbank benutzen können. Falls Sie Ihre Mysql-Benutzerdaten nicht kennen, kontaktieren Sie Ihren Serverprovider.");
define("LANINS_024", "MySQL Server:");
define("LANINS_025", "MySQL Benutzername:");
define("LANINS_026", "MySQL Passwort:");
define("LANINS_027", "MySQL Datenbank:");
define("LANINS_028", "Datenbank erstellen?");
define("LANINS_029", "Tabellen Prefix:");
define("LANINS_030", "Der MySQL Server den Sie für e107 verwenden möchten. Kann auch aus einer Port-Nummer bestehen wie z.B. 'hostname:port' oder einem Pfad zu einem lokalen Socket z.B. \':/path/to/socket\' für den Localhost.");
define("LANINS_031", "Der Benutzername, den e107 benutzen soll, um sich mit Ihrem MySQL Server zu verbinden");
define("LANINS_032", "Das Passwort für den gerade eingegebenen Benutzer");
define("LANINS_033", "Die MySQL Datenbank in der e107 installiert werden soll, wird manchmal auch als Schema bezeichnet. Falls der Benutzer Rechte zum Erstellen einer Datenbank hat, können Sie die Datenbank automatisch erstellen lassen, falls sie noch nicht existiert.");
define("LANINS_034", "Das Prefix welches e107 benutzen soll, wenn die e107 Tabellen erstellt werden. Nützlich für mehrere e107 Installationen in einem Datenbank Schema.");
define("LANINS_036", "3");
define("LANINS_037", "MySQL Zugriff Verifizierung");
define("LANINS_038", " und Datenbankerstellung");
define("LANINS_039", "Bitte füllen Sie alle Felder aus, am wichtigsten sind, MySQL Server, MySQL Benutzername und MySQL Datenbank (Diese werden vom MySQL Server immer benötigt)");
define("LANINS_040", "Fehler");
define("LANINS_041", "e107 konnte mit den von Ihnen eingegebenen Informationen keine Verbindung zum MySQL Server aufbauen. Bitte stellen Sie sicher, dass die Informationen korrekt sind.");
define("LANINS_042", "Verbindung zum MySQL Server aufgebaut und überprüft.");
define("LANINS_043", "Datenbank konnte nicht erstellt werden. Bitte stellen Sie sicher, dass Sie die richtigen Rechte haben, um Datenbanken auf Ihrem Server erstellen zu dürfen.");
define("LANINS_044", "Datenbank wurde erfolgreich erstellt.");
define("LANINS_045", "Bitte klicken Sie auf den Button, um zum nächsten Schritt zu gelangen.");
define("LANINS_046", "5");
define("LANINS_047", "Administrator - Details");
define("LANINS_048", "EXIF erweiterung");
define("LANINS_049", "Die beiden eingegebenen Passwörter stimmen nicht überein! Bitte gehen Sie zurück und versuchen Sie es erneut.");
define("LANINS_050", "XML Erweiterung");
define("LANINS_051", "Installiert");
define("LANINS_052", "Nicht installiert");
define("LANINS_055", "Installations Bestätigung");
define("LANINS_056", "6");
define("LANINS_057", "e107 hat nun alle nötigen Information um die Installation abzuschließen. Bitte klicken Sie den Button um die Datenbanktabellen zu erstellen und alle Ihre Einstellungen zu speichern.");
define("LANINS_058", "7");
define("LANINS_060", "Sql Datendatei kann nicht gelesen werden. Bitte stellen Sie sicher, dass die Datei [b]core_sql.php[/b] im Verzeichnis [b]/e107_admin/sql[/b] existiert.");
define("LANINS_061", "e107 konnte nicht alle nötigen Datenbanktabellen erstellen. Bitte leeren Sie die Datenbank und beheben Sie alle Probleme, bevor Sie es erneut versuchen.");
define("LANINS_069", "e107 wurde erfolgreich installiert! Aus Sicherheitsgründen sollten Sie die Dateirechte von [b]e107_config.php[/b) auf 644 setzen. Vergessen Sie nicht die install.php von Ihrem Server zu löschen, nachdem Sie auf den Button unten geklickt haben.");
define("LANINS_070", "e107 konnte die Hauptkonfigurationsdatei nicht auf Ihrem Server speichern. Bitte stellen Sie sicher, dass die [b]e107_config.php[/b] Datei die richtigen Rechte hat");
define("LANINS_071", "Installation abschließen");
define("LANINS_072", "Admin Benutzername");
define("LANINS_073", "Dieser Name wird für Webseiten Anmeldung benutzt");
define("LANINS_074", "Admin Anzeigename");
define("LANINS_076", "Admin Passwort");
define("LANINS_077", "Bitte geben Sie hier das gewünschte Admin Passwort ein");
define("LANINS_078", "Admin Passwort Bestätigung");
define("LANINS_079", "Bitte geben Sie das Admin Passwort noch einmal zur Bestätigung ein");
define("LANINS_080", "Admin E-Mail");
define("LANINS_081", "Geben Sie Ihre E-Mail Adresse ein");
define("LANINS_083", "MySQL meldet Fehler:");
define("LANINS_084", "Der Installer konnte keine Verbindung zur Datenbank herstellen.");
define("LANINS_085", "Der Installer konnte die Datenbank nicht auswählen:");
define("LANINS_086", "Admin Benutzername, Admin Passwort und Admin E-Mail sind [b]Pflichtfelder(/b)! Bitte geben Sie richtige Informationen ein.");
define("LANINS_105", "Ein Datenbankname oder Prefixe beginnend mit einigen Ziffern gefolgt von 'e' oder 'E' ist nicht erlaubt. Ein Datenbankname oder Prefix darf nicht leer sein.");
define("LANINS_106", "WARNUNG - e107 kann in die aufgelisteten Verzeichnisse und/oder Dateien nicht schreiben. Obwohl die e107 Installation nicht abgebrochen wird, bedeutet dies, dass einige Funktionen nicht verfügbar sein werden. Sie werden die Dateiberechtigungen ändern müssen, um diese Funktionen nutzen zu können.");
define("LANINS_107", "Name der Webseite");
define("LANINS_108", "z.B. 'Mein Blog'");
define("LANINS_109", "Theme Webseite");
define("LANINS_111", " Inhalt einfügen Konfiguration");
define("LANINS_112", "Schnellübersicht der Themevorschau oder im Demomodus (wenn Vorhanden)");
define("LANINS_113", "Bitte gebe einen Webseitenname ein");
define("LANINS_114", "Bitte wähle ein Theme aus");
define("LANINS_115", "Themename");
define("LANINS_116", "Themetyp");
define("LANINS_117", "Webseiten Voreinstellungen");
define("LANINS_118", "installiere Plugins");
define("LANINS_119", "Installieren Sie alle Plugins, die das Theme benötigt");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php existiert bereits!");
define("LANINS_122", "Möglicherweise haben Sie eine existierende Installation");
define("LANINS_123", "Optional: Ihr öffentlicher Name oder Alias ​​. Leer lassen, um den Benutzernamen zu verwenden");
define("LANINS_124", "Bitte wählen Sie ein Kennwort mit mindestens 8 Zeichen");
define("LANINS_125", "e107 wurde erfolgreich installiert");
define("LANINS_126", "Aus Sicherheitsgründen sollten Sie nun die Dateiberechtigungen der e107_config.php Datei wieder auf CHMOD 644 setzen.");
define("LANINS_127", "Die Datenbank [x] ist bereits vorhanden. Überschreiben? ( alle vorhandenen Daten gehen verloren )");
define("LANINS_128", "Überschreiben");
define("LANINS_129", "Datenbank wurde nicht gefunden.");
define("LANINS_134", "Installation.");
define("LANINS_135", "von");
define("LANINS_136", "Vorhandene Datenbank wurde gelöscht");
define("LANINS_137", "Vohandene Datenbank gefunden");
define("LANINS_141", "Bitte füllen Sie das untenstehende  Formular mit Ihren MySQL Details . Wenn Sie diese Informationen nicht kennen, wenden Sie sich bitte an Ihren Hosting- Anbieter . Sie können sich für zusätzliche Informationen über jedes Feld schweben.");
define("LANINS_142", "WICHTIG: Bitte benennen Sie e107.htaccess in .htaccess");
define("LANINS_144", "WICHTIG: Bitte kopieren sie den Inhalt der [b] e107.htaccess und fügen  sie[ / b] in Ihre [b] .htaccess [/ b] Datei. Bitte darauf achten, dass alle vorhandenen Daten zu überschreiben , die in ihm sein kann.");
define("LANINS_145", "e107 v2.x erfordert die PHP [x] installiert werden. Bitte kontaktieren Sie Ihren Host oder die Informationen auf [y] zu lesen, bevor Sie fortfahren.");
define("LANINS_146", "Admin-Bereich Skin");
define("LANINS_147", "Administration");
