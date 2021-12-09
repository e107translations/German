<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system German Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2016/09/13 15:58:27
|
|        $Author: Yak $
+---------------------------------------------------------------+
*/
define("LAN_EURL_NAME", "Verwalten von Website-URLs");
define("LAN_EURL_NAME_CONFIG", "Profile");
define("LAN_EURL_NAME_ALIASES", "Aliase");
define("LAN_EURL_NAME_SETTINGS", "Allgemeine Einstellungen");
define("LAN_EURL_NAME_HELP", "Hilfe");
define("LAN_EURL_EMPTY", "Die Liste ist leer");
define("LAN_EURL_LEGEND_CONFIG", "Wählen Sie URL-Profil pro Bereich Website");
define("LAN_EURL_LEGEND_ALIASES", "Konfigurieren Sie Basis-URL -Aliase pro URL Profil");
define("LAN_EURL_DEFAULT", "In der Standardeinstellung");
define("LAN_EURL_PROFILE", "Profil anzeigen:");
define("LAN_EURL_INFOALT", "Info");
define("LAN_EURL_PROFILE_INFO", "Profil-Info nicht verfügbar");
define("LAN_EURL_LOCATION", "Profilspeicherort");
define("LAN_EURL_LOCATION_NONE", "Config-Datei nicht verfügbar");
define("LAN_EURL_FORM_HELP_DEFAULT", "Alias in der Standardsprache.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Standardwert ist");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Alias im");
define("LAN_EURL_FORM_HELP_EXAMPLE", "Basis-URL");
define("LAN_EURL_ERR_ALIAS_MODULE", "Alias '%1\$s' kann nicht gespeichert werden - es gibt eine URL-Profil mit demselben Namen. Bitte wählen Sie einen anderen Aliaswert für URL-Profil '%2\$s'");
define("LAN_EURL_SURL_UPD", "  SEF URLs wurde aktualliert.");
define("LAN_EURL_SURL_NUPD", "  SEF URLs wurde NICHT aktuallisiert .");
define("LAN_EURL_SETTINGS_PATHINFO", "Dateiname aus der URL entfernen");
define("LAN_EURL_SETTINGS_MAINMODULE", "Stammnamespace zuordnen");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Wählen Sie, welche Website-Bereich mit Ihre base URL verbunden wird. Beispiel: Wenn Nachricht ist Ihr Stamm-Namespace http://yoursite.com/News-Item-Title werden Nachrichten zugeordnet (Ansicht Artikelseite werden aufgelöst werden)");
define("LAN_EURL_SETTINGS_REDIRECT", "Seite nicht gefunden-System umleiten");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Wenn auf false, nicht gefunden Seite festgelegt direkte werden gerendert (ohne Browser-Umleitung)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Automatisierte SEF Zeichenfolgentyp Erstellung");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Wählen Sie wie werden montiert SEF-Zeichenfolge, wenn sie von einem Titel-Wert (z. B. in News, benutzerdefinierte Seiten, etc.) automatisch erstellt wird");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Sichern Sie es");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "dasherize-untere-case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Dasherize-Camel-Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Dasherize-mit-Nein-Fall-CHANGE");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "Unterstrich und in Kleinschreibung");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Unterstrich_nach_Camel_Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Unterstrich_mit_kein_case_Änderung");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "Plus + Trennzeichen + nach + untere + Tasche");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Plus + Trennzeichen + nach + Camel + Tasche");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Plus + Trennzeichen + mit + keine + RS + Änderung");
define("LAN_EURL_MODREWR_DESCR", "Ihre URLs entfernt Eintrag Skript-Dateinamen (index.php/). Sie benötigen Mod_rewrite installiert und läuft auf Ihrem Server (Apache Webserver). Gehen Sie nach Aktivierung dieser Einstellung zu Ihrem Stammordner der Site, benennen Sie htaccess.txt in .htaccess und Modifgy <em>'RewriteBase'</em> Richtlinie, falls erforderlich.");
define("LAN_EURL_MENU", "Website-URLs");
define("LAN_EURL_MENU_CONFIG", "URL-profile");
define("LAN_EURL_MENU_ALIASES", "Aliase");
define("LAN_EURL_MENU_SETTINGS", "Einstellungen");
define("LAN_EURL_MENU_HELP", "Hilfe");
define("LAN_EURL_MENU_PROFILES", "Profile");
define("LAN_EURL_UC", "Im Bau");
define("LAN_EURL_CORE_MAIN", "Website-Root-Namespace - alias nicht in Gebrauch.");
define("LAN_EURL_FRIENDLY", "Freundlich");
define("LAN_EURL_LEGACY", "Ältere direkte URLs.");
define("LAN_EURL_REWRITE_LABEL", "-Freundliche URLs");
define("LAN_EURL_REWRITE_DESCR", "Suche Motor und Benutzer-freundliche URLs.");
define("LAN_EURL_CORE_NEWS", "Nachrichten");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "Voll-freundliche URLs (keine Leistung und den meisten freundlich)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "");
define("LAN_EURL_NEWS_REWRITE_LABEL", "-Freundliche URLs ohne ID (keine Leistung, freundlich)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Manuelle Verknüpfung, Analyse und Montage demonstriert.");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "Freundliche URL mit ID (Leistung klug)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Veranschaulicht das automatisierte Link Analyse und Montage anhand von vordefinierten Route Regeln.");
define("LAN_EURL_CORE_USER", "Benutzer");
define("LAN_EURL_USER_REWRITE_LABEL", "-Freundliche URLs");
define("LAN_EURL_USER_REWRITE_DESCR", "Suchmaschine und benutzerfreundliche URLs .");
define("LAN_EURL_CORE_PAGE", "Benutzerdefinierte Seiten");
define("LAN_EURL_PAGE_SEF_LABEL", "Freundliche URL mit ID (Leistung)");
define("LAN_EURL_PAGE_SEF_DESCR", "Suchmaschine und benutzerfreundliche URLs.");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "-Freundliche URLs ohne ID (keine Leistung, freundlich)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Suchmaschine und benutzerfreundliche URLs.");
define("LAN_EURL_CORE_SEARCH", "Suche");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "Standard Such-URL");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Ältere direkte URL.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "Freundliche URL");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "");
define("LAN_EURL_CORE_SYSTEM", "System");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "Standard-System-URLs");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "URLs für Seiten wie nicht gefunden, Zugriff verweigert, etc..");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Freundlich-System URLs");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "URLs für Seiten wie nicht gefunden, Zugriff verweigert, etc..");
define("LAN_EURL_CORE_INDEX", "Titelseite");
define("LAN_EURL_CORE_INDEX_INFO", "Vordere Seite keinen Alias.");
define("LAN_EURL_REBUILD", "Umbau");
define("LAN_EURL_REGULAR_EXPRESSION", "Regulären Ausdruck");
define("LAN_EURL_KEY", "Schlüssel");
define("LAN_EURL_TABLE", "Tabelle");


