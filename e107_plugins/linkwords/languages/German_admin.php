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
define("LWLAN_21", "Wort zu Autolink (oder Komma getrennte Liste von Wörtern)");
define("LWLAN_26", "Bereiche, in denen Link Wörter aktiviert werden können.");
define("LWLAN_28", "Seiten, auf denen Link Wörter deaktiviert werden sollen.");
define("LWLAN_33", "Titelbereiche");
define("LWLAN_34", "Begriffe Überblicke");
define("LWLAN_35", "Textinhalt");
define("LWLAN_36", "Beschreibungen (Links u.s.w)");
define("LWLAN_40", "Vom Benutzer eingegebene Titel (z.B. Forum)");
define("LWLAN_41", "Benutzerdefinierter Text (z.B. Forum)");
define("LWLAN_50", "Tooltip");
define("LWLAN_52", "Nur Link Wort");
define("LWLAN_53", "Nur Tooltip");
define("LWLAN_54", "Link Wort und Tooltip");
define("LWLAN_55", "Link im neuen Fenster öffnen");
define("LWLAN_58", "Pref Hook umgewandelt in 0.8 Format");
define("LWLAN_59", "Ajax Funktionalität aktivieren.");
define("LWLAN_64", "Link auf aktueller Seite unterdrücken");
define("LWLAN_66", "Custom CSS class");
define("LWLAN_67", "Max. Links/Tips");
define("LAN_LW_HELP_01", " <b> Bereiche, die es ermöglichen </b><br /> viele Textbereiche haben einen \'Kontext \', und Link Wörter werden nur in Bereichen angezeigt, die diesem Kontext entsprechen.<br /><br /> <b> Link Wörter Deaktivieren </ b><br /> Link Wörter können auf bestimmten Seiten oder auf Seiten, die einem Muster entsprechen, deaktiviert werden.Geben Sie diese hier ein (gleiche Syntax wie für Menüs), ein Muster pro Zeile.Wenn das Muster in \'!\' endet, entspricht dies dem 'Ende der Abfrage' und ist gewöhnlich eine exakte Übereinstimmung.Andernfalls wird eine URL mit der angegebenen Zeichenfolge Übereinstimmen.<br /> Beachten Sie, dass Link Wörter <i> nie </ i> auf Admin-Seiten angezeigt werden.br /> <br /><b> Ajax-Funktionalität aktivieren </ b> <br /> Die Tooltips können Ajax verwenden, um Informationen für die Anzeige zu erhalten. Dies erfordert in der Regel einige benutzerdefinierte Codierung.<br /><b> Link auf aktueller Seite unterdrücken </ b> <br /> Normalerweise ist es sinnlos, dass der Benutzer auf einen Link klicken kann, wenn er bereits auf der Seite ist.Markieren Sie dieses Kontrollkästchen, um die Option zu entfernen <br />");
define("LAN_LW_HELP_02", " <b>Definieren Sie die Wörter, die anklickbare Links werden, oder den Text anzeigt wenn die Maus darüber fährt, hier <br /><br /><b </u> Wort zu Link </ u></ b> <br />Dabei wird nicht zwischen Groß- und Kleinschreibung unterschieden.
Für mehrere Wörter, die auf dieselben Links und Tooltips zuordnen, trennen Sie sie durch Kommas (ohne Leerzeichen) <br /><br /><b> </u> Link </u></ b> <br /> Definieren Sie hier einen anklickbaren Link. Wenn es sich um einen externen Link handelt, muss [i] 'http://\' beginnen. Wenn es sich um eine Verknüpfung innerhalb dieser Seite handelt, können die normalen Konstanten {e_XXX} verwendet werden.<b><br/><br/><b><u> Tooltip </u></b> <br/> Dies definiert den Text, der angezeigt werden soll, wenn die Maus des Benutzers über das Wort geht.br /><br /><b><u> LW-ID (Tooltip-ID) </ u></ b><br /><br /> Dies definiert eine optionale numerische ID für die Ajax-Verarbeitung.Wenn leer, wird die Datenbank-Datensatznummer verwendet.<br /><br /><b> <u> Aktivieren? </ u></ b><br />Legt fest, welche Optionen aktiv sind.");
define("LAN_LW_HELP_03", "In der Regel ist es sinnlos für den Benutzer, auf einen Link klicken zu können, wenn er sich bereits auf der Seite befindet, auf die er verweist. Wenn diese Option deaktiviert ist, werden die Linkwörter in diesem Fall nicht ausgelöst.");
define("LAN_LW_HELP_04", "Linkwörter können auf bestimmten Seiten oder Seiten deaktiviert werden, die einem Muster entsprechen. Geben Sie diese hier ein (gleiche Syntax wie für Menüvisbility), ein Muster pro Zeile. Wenn das Muster mit '!' endet, entspricht dies 'Ende der Abfrage' und ist in der Regel eine exakte Übereinstimmung. Andernfalls stimmt jede URL, die die angegebene Zeichenfolge enthält, überein.");
define("LAN_LW_HELP_05", "Fügt diese Klasse allen generierten Links hinzu.");
define("LAN_LW_HELP_10", "Hier können Sie die Wörter definieren, die zu klickbaren Links werden oder die Text auf Mouseover anzeigen.");
define("LAN_LW_HELP_11", "Hierbei wird die Groß-/Kleinschreibung nicht berücksichtigt. Wenn mehrere Wörter mit denselben Verknüpfungen und QuickInfos verknüpft sind, trennen Sie sie durch Kommas (keine Leerzeichen)");
define("LAN_LW_HELP_12", "Definieren Sie hier einen anklickbaren Link. Wenn es sich um einen externen Link handelt, muss er mit 'http(s)://' beginnen. Wenn es sich um einen Link innerhalb dieser Site handelt, können die normalen Konstanten von e_XXX verwendet werden.");
define("LAN_LW_HELP_13", "Definiert, welche Optionen aktiv sind.");
define("LAN_LW_HELP_14", "Dadurch wird der Text definiert, der angezeigt werden soll, wenn die Maus des Benutzers über das Wort geht.");
define("LAN_LW_HELP_15", "Maximale Menge der gleichen Linkwords. Muss eine positive Zahl sein. Wird verwendet, wenn dasselbe Wort mehrmals in einem Textstück gefunden wird.");
define("LAN_LW_HELP_16", "Dadurch wird eine optionale numerische ID definiert, die bei der Ajax-Verarbeitung verwendet werden soll. Muss eine postive Zahl sein. Wenn leer, wird die Datenbankdatensatznummer verwendet");
define("LAN_LW_HELP_17", "Wenn diese Taste aktiviert ist, wird der Link in der neuen Browser-Registerkarte/dem neuen Fenster geöffnet.");
