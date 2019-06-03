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
|     $HeadURL: https://svn.code.sf.net/p/e107german/code/trunk/e107_0.7/e107_languages/German/admin/help/cache.php $ 
|     $Revision: 115 $
|     $Date: 2010-09-26 06:00:45 +0200 (So, 26. Sep 2010) $
|     $Id: cache.php 115 2010-09-26 04:00:45Z lars78 $
|     $Author: lars78 $
+----------------------------------------------------------------------------+
*/
$caption = "Cache-Modus";
$text = "Wenn Sie Cache aktiviert haben, beschleunigen Sie den Seitenaufbau enorm. Außerdem wir die SQL Datenbankabfrage auf eine Minimum reduziert.<br />
<br /><b>WICHITIG!!! Während Sie Ihr eigenes Theme bauen, sollten Sie unbedingt den Chache Modus ausschalten. Sonst werden Ihre vorgenommenen Änderungen gar nicht oder nur rudimentär angezeigt.</b> <br />
TIPP: Sie sollten den Cache gegebenenfalls auch leeren, um Änderungen sichtbar zu machen";
$ns -> tablerender($caption, $text);
?>
