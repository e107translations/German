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
|     $HeadURL: https://svn.code.sf.net/p/e107german/code/trunk/e107_0.7/e107_languages/German/admin/help/search.php $ 
|     $Revision: 115 $
|     $Date: 2010-09-26 06:00:45 +0200 (So, 26. Sep 2010) $
|     $Id: search.php 115 2010-09-26 04:00:45Z lars78 $
|     $Author: lars78 $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Wenn Ihre Version MySql-Server unterstützt, können Sie zu der MySql-Sortiermethode wechseln, die schneller als die PHP-Sortiermethode ist. Siehe Voreinstellungen.<br /><br />
Falls Sie auf Ihrer Seite Ideographic-Sprachen wie Chinesiche oder Japanisch verwenden, sollten Sie php als Suchmethode verwendenu nd schalten Sie die gesamte Wortabstimmung aus.";
$ns -> tablerender("Such Hilfe", $text);
                                        
