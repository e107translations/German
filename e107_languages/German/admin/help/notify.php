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
|     $HeadURL: https://svn.code.sf.net/p/e107german/code/trunk/e107_0.7/e107_languages/German/admin/help/notify.php $ 
|     $Revision: 115 $
|     $Date: 2010-09-26 06:00:45 +0200 (So, 26. Sep 2010) $
|     $Id: notify.php 115 2010-09-26 04:00:45Z lars78 $
|     $Author: lars78 $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Notify sends email notifications when e107 events occur.<br /><br />
For example, set 'IP banned for flooding site' to user class 'Admin' and all admins will be sent an email when your 
site is being flooded.<br /><br />
You can also, as another example, set 'News item posted by admin' to user class 'Members' and all your users will be 
sent news items you post to the site in an email.<br /><br />
If you would like the email notifications to be sent to an alternative email address - select the 'Email' option and 
enter in the email address in the field provided.";

$ns -> tablerender("Notify Help", $text);
?>