<?php

/*
 +--------------------------------------------------------------------------+
 | phpMyBackupPro                                                           |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2004-2015 by Dirk Randhahn                                 |
 | http://www.phpMyBackupPro.net                                            |
 | version information can be found in definitions.php.                     |
 |                                                                          |
 | This program is free software; you can redistribute it and/or            |
 | modify it under the terms of the GNU General Public License              |
 | as published by the Free Software Foundation; either version 2           |
 | of the License, or (at your option) any later version.                   |
 |                                                                          |
 | This program is distributed in the hope that it will be useful,          |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
 | GNU General Public License for more details.                             |
 |                                                                          |
 | You should have received a copy of the GNU General Public License        |
 | along with this program; if not, write to the Free Software              |
 | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307,USA.|
 +--------------------------------------------------------------------------+
*/

require_once ("login.php");

// set the timelimit
@set_time_limit($CONF['timelimit']);

// show the requested file
if (isset ($_GET['view']) && file_exists($_GET['view'])) {

	$ext4 = substr($_GET['view'],-4);
	$ext5 = substr($_GET['view'],-5);
	$ext7 = substr($_GET['view'],-7);
	$ext8 = substr($_GET['view'],-8);
	if (($ext4 != ".php" && $ext5 != ".html" && $ext4 != ".htm" && $ext5 != ".php3" && $ext4 != ".sql" && $ext8 != ".sql.zip" && $ext7 != ".sql.gz")
		|| substr($_GET['view'], -strlen("definitions.php"))=="definitions.php"
		|| substr($_GET['view'], -strlen(PMBP_GLOBAL_CONF_SQL))==PMBP_GLOBAL_CONF_SQL
		|| substr($_GET['view'], -strlen(PMBP_GLOBAL_CONF_MU))==PMBP_GLOBAL_CONF_MU
		|| substr($_GET['view'], -strlen($_PMBP_GLOBAL_CONF))==$_PMBP_GLOBAL_CONF) {
		echo GF_INVALID_EXT;
	} else {
		if (isset ($_GET['download'])) {
			header("Content-Type: application/octet-stream");
			header("Content-Disposition: attachment; filename=" . basename($_GET['view']));
			readfile($_GET['view']);
		} else {
			header('Content-Type: text/html; charset=utf-8');
			echo "<pre>";
			while ($line = PMBP_getln($_GET['view']))
				echo htmlspecialchars($line);
			PMBP_getln($_GET['view'], true);
			echo "</pre>";
		}
	}
} else {
	if (isset ($_GET['view'])) {
		echo $_GET['view'] . " " . F_MAIL_3 . "!";
	}
}
?>
