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
|     $HeadURL: https://svn.code.sf.net/p/e107german/code/trunk/e107_0.7/e107_languages/German/admin/help/userclass2.php $ 
|     $Revision: 115 $
|     $Date: 2010-09-26 06:00:45 +0200 (So, 26. Sep 2010) $
|     $Id: userclass2.php 115 2010-09-26 04:00:45Z lars78 $
|     $Author: lars78 $
+----------------------------------------------------------------------------+
*/
$caption = "Benutzerklassen Hilfe";
$text = "Sie können Benutzerklassen editieren, erstellen und löschen. <br /> Dieser Bereich ist hilfreich für die Zugangsbeschränkung für bestimmte Nutzer Ihrer Website. Hilfreich ist es, wenn Sie eine Klasse ADMIN anlegen. Diese Klasse können Sie dann nur für sich freischalten. Das ist hilfreich, wenn Sie Berichte, News, Artikel oder Content erstellen und das Layout auf der Seite im Original sehen wollen oder, wenn Sie Ihre Artikel über einen längeren Zeitraum bearbeiten.<br /><br />
Das Gleiche machen Sie dann für die Nutzer, die Sie in bestimmte Bereich lassne möchten. Bitte achten Sie darauf, dass Sie den Klassen auch die Benutzer zuweisen. <br /><br />
TIPP:<br />
Löschen Sie möglichst NIE eine ganze Klasse, wenn Sie sich nicht ABSOLUT sicher sind! Es gibt KEINE Möglichkeit einmal gelöschte Klassen wieder herzustellen!";
$ns -> tablerender($caption, $text);
?>
