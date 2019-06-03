<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2010 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Linkwords plugin - language file (only needed for admin)
 *
 * $Id*
 */
define("LWLAN_4", "Noch keine Links definiert.");
define("LWLAN_5", "Wörter");
define("LWLAN_6", "Link");
define("LWLAN_7", "Aktivieren?");
define("LWLAN_11", "vorhanden Link Wörter");
define("LWLAN_18", "soll dieses Link Wort wirklich gelĂ¶scht werden?");
define("LWLAN_20", "Dieser Link Wort Eintrag konnte nicht gefunden werden.");
define("LWLAN_21", "Wort zu Autolink (oder Komma getrennte Liste von Wörtern)");
define("LWLAN_22", "Aktivieren?");
define("LWLAN_23", "Link Wörter Administration");
define("LWLAN_24", "Wörter verwalten.");
define("LWLAN_26", "Bereiche, in denen Link Wörter aktiviert werden können.");
define("LWLAN_27", "Dies ist der 'Kontext' des angezeigten Textes.");
define("LWLAN_28", "Seiten, auf denen Link Wörter deaktiviert werden sollen.");
define("LWLAN_29", "Gleiches Format wie die Sichtbarkeit des Menüs.Eine Übereinstimmung pro Zeile. Gebe eine teilweise oder vollständige URL an.  Ende mit '!' Für die genaue Übereinstimmung des Endteils des Links");
define("LWLAN_31", "Link Wort hinzufügen/bearbeiten");
define("LWLAN_33", "Titelbereiche");
define("LWLAN_34", "Begriffe Überblicke");
define("LWLAN_35", "Textinhalt");
define("LWLAN_36", "Beschreibungen (Links u.s.w)");
define("LWLAN_40", "Vom Benutzer eingegebene Titel (z.B. Forum)");
define("LWLAN_41", "Benutzerdefinierter Text (z.B. Forum)");
define("LWLAN_50", "Tooltip");
define("LWLAN_51", "Inaktiv");
define("LWLAN_52", "Nur Link Wort");
define("LWLAN_53", "Nur Tooltip");
define("LWLAN_54", "Link Wort und Tooltip");
define("LWLAN_55", "Link im neuen Fenster öffnen");
define("LWLAN_56", "In neue Seite öffnen");
define("LWLAN_58", "Pref HooK  umgewandelt in 0.8 Format");
define("LWLAN_59", "Ajax Funktionalität aktivieren.");
define("LWLAN_60", "LW ID");
define("LWLAN_62", "Tooltip ID (LW ID)");
define("LWLAN_63", "Nur positive Ganzzahlen");
define("LWLAN_64", "Link auf aktueller Seite unterdrücken");
define("LWLAN_65", "Wenn markiert, unterdrĂĽckt den klick baren Link, wenn Punkte auf aktuelle Seite");
define("LAN_LW_HELP_00", "Link Wörter Hilfe");
define("LAN_LW_HELP_01", " <b> Bereiche, die es ermöglichen </b><br /> viele Textbereiche haben einen \'Kontext \', und Link Wörter werden nur in Bereichen angezeigt, die diesem Kontext entsprechen.<br /><br /> <b> Link Wörter Deaktivieren </ b><br /> Link Wörter können auf bestimmten Seiten oder auf Seiten, die einem Muster entsprechen, deaktiviert werden.Geben Sie diese hier ein (gleiche Syntax wie für Menüs), ein Muster pro Zeile.Wenn das Muster in \'!\' endet, entspricht dies dem 'Ende der Abfrage' und ist gewöhnlich eine exakte Übereinstimmung.Andernfalls wird eine URL mit der angegebenen Zeichenfolge ĂĽbereinstimmen.<br /> Beachten Sie, dass Link Wörter <i> nie </ i> auf Admin-Seiten angezeigt werden.br /> <br /><b> Ajax-FunktionalitĂ¤t aktivieren </ b> <br /> Die Tooltips können Ajax verwenden, um Informationen fĂĽr die Anzeige zu erhalten. Dies erfordert in der Regel einige benutzerdefinierte Codierung.<br /><b> Link auf aktueller Seite unterdrĂĽcken </ b> <br /> Normalerweise ist es sinnlos, dass der Benutzer auf einen Link klicken kann, wenn er bereits auf der Seite ist.Markieren Sie dieses KontrollkĂ¤stchen, um die Option zu entfernen <br />");
define("LAN_LW_HELP_02", "Definieren Sie die WĂ¶rter, die anklickbare Links werden, oder den Text anzeigt wenn die Maus darüber fährt, hier br /><br /><b </u> Wort zu Link </ u></ b> <br />Dabei wird nicht zwischen Groß- und Kleinschreibung unterschieden.
Für mehrere Wörter, die auf dieselben Links und Tooltips zuordnen, trennen Sie sie durch Kommas (ohne Leerzeichen) <br /><br /><b> </u> Link </u></ b> <br /> Definieren Sie hier einen anklickbaren Link. Wenn es sich um einen externen Link handelt, muss [i]mit/i] \'http://\' beginnen. Wenn es sich um eine Verknüpfung innerhalb dieser Seite handelt, können die normalen Konstanten {e_XXX} verwendet werden.<br /><br /><b><u> Tooltip </ u></ b> br /> Dies definiert den Text, der angezeigt werden soll, wenn die Maus des Benutzers über das Wort geht.br /><br /><b><u> LW-ID (Tooltip-ID) </ u></ b><br /><br /> Dies definiert eine optionale numerische ID für die Ajax-Verarbeitung.Wenn leer, wird die Datenbank-Datensatznummer verwendet.<br /><br /><b> <u> Aktivieren? </ u></ b><br />Legt fest, welche Optionen aktiv sind.");


?>