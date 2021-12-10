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
|     $HeadURL: https://svn.code.sf.net/p/e107german/code/trunk/e107_0.7/e107_languages/German/admin/help/newspost.php $ 
|     $Revision: 115 $
|     $Date: 2010-09-26 06:00:45 +0200 (So, 26. Sep 2010) $
|     $Id: newspost.php 115 2010-09-26 04:00:45Z lars78 $
|     $Author: lars78 $
+----------------------------------------------------------------------------+
*/
$caption = "News veröffentlichen (posten) Hilfe";
$text = "<b>Allegemeines</b><br />
Der Teaser oder auch Body wird auf der Hauptseite angezeigt, der ausführliche Text wird dann lesbar, wenn der User 'weiterlesen' anklickt.
<br />
<br />
<b>Zeige nur Überschrift</b>
<br />
Aktivieren Sie diese Einstellung, um nur den Titel auf Ihrer News Seite anzuzeigen. Per Klick wird dann der gesamte Text lesbar angezeigt.
<br /><br />
<b>Aktivierung</b>
<br />
Wenn Sie ein Anfangs- und enddatum auswählen wird der Newseintrag nur in diesem Zeitraum sichtbar.";
$ns -> tablerender($caption, $text);

