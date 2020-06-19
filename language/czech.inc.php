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
 Czech translate by OUBRECHT.com
*/

/*basic data*/
define('BD_LANG_SHORTCUT',"cz"); // used for the php function setlocale() (http://www.php.net/setlocale)
define('BD_DATE_FORMAT',"%x %X"); // used for the php function strftime() (http://www.php.net/strftime)

/*functions.inc.php*/
define('F_START',"start");
define('F_CONFIG',"nastavení");
define('F_IMPORT',"importovat");
define('F_BACKUP',"záloha");
define('F_SCHEDULE',"plánovaná záloha");
define('F_DB_INFO',"info o databázi");
define('F_SQL_QUERY',"sql dotazy");
define('F_HELP',"pomoc");
define('F_LOGOUT',"odhlásit se");
define('F_FOOTER',"Navštivte web projektu %sphpMyBackupPro%s pro novinky a aktualizace. Češtinu vytvořil <a target='_blank' href='https://oubrecht.com'>OUBRECHT.com</a>");
define('F_NOW_AVAILABLE',"A new version of phpMyBackupPro is now available on %s".PMBP_WEBSITE."%s");
define('F_SELECT_DB',"Vybrat databáze pro zálohu");
define('F_SELECT_ALL',"vybrat vše");
define('F_COMMENTS',"Komentáře");
define('F_EX_TABLES',"exportovat tabulky");
define('F_EX_DATA',"exportovat data");
define('F_EX_DROP',"přidat 'drop table'");
define('F_EX_COMP',"komprese");
define('F_EX_OFF',"žádná");
define('F_EX_GZIP',"gzip");
define('F_EX_ZIP',"zip");
define('F_DEL_FAILED',"Chyba při mazání záloh %s");
define('F_FTP_1',"Chyba FTP připojení k serveru");
define('F_FTP_2',"Failed to login with user");
define('F_FTP_3',"FTP upload failed");
define('F_FTP_4',"File succesfully uploaded as");
define('F_FTP_5',"FTP delete of file '%s' failed");
define('F_FTP_6',"File '%s' succesfully deleted on FTP server");
define('F_FTP_7',"File '%s' not available on FTP server");
define('F_MAIL_1',"One receivers email is wrong");
define('F_MAIL_2',"This mail was sent by phpMyBackupPro ".PMBP_VERSION." ".PMBP_WEBSITE." running on");
define('F_MAIL_3',"coudn't be read");
define('F_MAIL_4',"MySQL záloha z");
define('F_MAIL_5',"Mail coudn't be sent");
define('F_MAIL_6',"Files succesfully sent by email to");
define('F_YES',"ano");
define('F_NO',"ne");
define('F_DURATION',"Trvání");
define('F_SECONDS',"vteřin");
define('F_TIMEOUT',"Function timed out!<BR>The reason probably is a database which is to large.<BR>Enlarge the values of the PHP directives \"memory_limit\" and \"max_execution_time\" (see <a href=\"http://php.net/ini.list\" target=\"_blank\">PHP manual</a>).");

/*index.php*/
define('I_SQL_ERROR',"CHYBA: Prosím vložte správné údaje pro MySQL v 'nastavení'!");
define('I_NAME',"Toto je phpMyBackupPro");
define('I_WELCOME',"phpMyBackupPro je svobodný software licencovaný pod GNU GPL.<BR>
Pro nápovědu zkuste online pomoc nebo navštivte %s.<BR><BR>
Vyberte si v horním menu co chcete udělat dál!  Pokud je to vaše první použití phpMyBackupPro měli byste začít v 'nastavení'!
Práva adresáře 'export' a soubor 'global_conf.php' musí být nastaveny na 0777.<BR>");
define('I_CONF_ERROR',"Do souboru ".PMBP_GLOBAL_CONF." nelze zapisovat!");
define('I_DIR_ERROR',"Do umístění ".PMBP_EXPORT_DIR." nelze zapisovat!");
define('PMBP_I_INFO',"Systémové informace");
define('PMBP_I_SERVER',"Server");
define('PMBP_I_TIME',"Čas");
define('PMBP_I_PHP_VERS',"PHP verze");
define('PMBP_I_MEM_LIMIT',"PHP limit paměti");
define('PMBP_I_FTP',"Možnost FTP přenosu");
define('PMBP_I_MAIL',"Možnost e-mailů");
define('PMBP_I_GZIP',"Možnost gzip");
define('PMBP_I_SQL_SERVER',"MySQL server");
define('PMBP_I_SQL_CLIENT',"MySQL klient");
define('PMBP_I_NO_RES',"*Nelze načíst*");
define('PMBP_I_LAST_SCHEDULED',"Poslední plánovaná záloha");
define('PMBP_I_LAST_LOGIN',"Poslední přihlášení");
define('PMBP_I_LAST_LOGIN_ERROR',"Poslední špatné přihlášení");

/*config.php*/
define('C_SITENAME',"název stránek");
define('C_LANG',"jazyk");
define('C_SQL_HOST',"MySQL adresa");
define('C_SQL_USER',"MySQL jméno");
define('C_SQL_PASSWD',"MySQL heslo");
define('C_SQL_DB',"pouze tato databáze");
define('C_FTP_USE',"uložit zálohy na FTP?");
define('C_FTP_BACKUP',"použít záložní adresář?");
define('C_FTP_REC',"záložní adresáře rekurzivně?");
define('C_FTP_SERVER',"FTP server (adresa nebo IP)");
define('C_FTP_USER',"FTP jméno");
define('C_FTP_PASSWD',"FTP heslo");
define('C_FTP_PATH',"FTP cesta");
define('C_FTP_PASV',"použít pasivní ftp?");
define('C_FTP_PORT',"FTP port");
define('C_FTP_DEL',"smazat soubory na FTP serveru");
define('C_EMAIL_USE',"použít email?");
define('C_EMAIL',"emailová adresa");
define('C_STYLESHEET',"vzhled");
define('C_DATE',"formát data");
define('C_DEL_TIME',"odstranit místní zálohy po X dnech");
define('C_DEL_NUMBER',"uchovat max X souborů na databázi");
define('C_TIMELIMIT',"php časový limit");
define('C_IMPORT_ERROR',"Zobrazit chyby importu?");
define('C_NO_LOGIN',"Zakázat přihlašování?");
define('C_LOGIN',"HTTP ověřování?");
define('C_DIR_BACKUP',"Povolit složku záloh?");
define('C_DIR_REC',"zálohovací složka s podsložkami?");
define('C_CONFIRM',"potvrzovací režim");
define('C_CONFIRM_1',"prázdné, odstranit, importovat");
define('C_CONFIRM_2',"... vše");
define('C_CONFIRM_3',"... VŠE");
define('C_CONFIRM_4',"nic nepotvrzovat");

define('C_BASIC_VAL',"Jednoduché nastavení");
define('C_EXT_VAL',"Pokročilé nastavení");
define('PMBP_C_SYSTEM_VAL',"Systémové proměnné");
define('PMBP_C_SYS_WARNING',"Tyto systémové proměnné jsou spravovány phpMyBackupPro. Neupravovat, pokud nevíte co děláte!");
define('C_TITLE_SQL',"SQL data");
define('C_TITLE_FTP',"FTP nastavení");
define('C_TITLE_EMAIL',"Zálohování prostřednictvím e-mailu");
define('C_TITLE_STYLE',"Vzhled phpMyBackupPro");
define('C_TITLE_DELETE',"Automatické odstranění záložních souborů");
define('C_TITLE_CONFIG',"Další položky konfigurace");
define('C_WRONG_TYPE',"není správné!");
define('C_WRONG_SQL',"MySQL data nenjsou správná!");
define('C_WRONG_DB',"Název MySQL databáze není správný!");
define('C_WRONG_FTP',"FTP data nejsou správná!");
define('C_OPEN',"Nelze otevřít");
define('C_WRITE',"Nelze zapisovat do");
define('C_SAVED',"Data úspěšně uložena");
define('C_WRITEABLE',"není zapisovatelný");
define('C_SAVE',"Uložit nastavení");

/*import.php*/
define('IM_ERROR',"%d chyba(y). Můžete použít 'vyprázdnit databázi' aby jste se ujistili, že databáze neobsahuje žádná data.");
define('IM_SUCCESS',"Úspěšně importováno");
define('IM_TABLES',"tabulky a");
define('IM_ROWS',"řádky");

define('B_EMPTIED_ALL',"Všechny databáze byly úspěšně vyprázdněny");
define('B_EMPTIED',"Databáze byla úspěšně vyprázdněna");
define('B_DELETED',"Soubor byl úspěšně odstraněn");
define('B_DELETED_ALL',"Všechny soubory byly úspěšně odstraněny");
define('B_NO_FILES',"V současné době neexistují žádné záložní soubory");
define('B_DELETE_ALL_2',"vymazat všechny zálohy");
define('B_IMPORT_ALL',"importovat všechny zálohy");
define('B_EMPTY_ALL',"vaprázdnit všechny databáze");
define('B_EMPTY_DB',"vyprázdnit databázi");
define('B_DELETE_ALL',"vymazat všechny zálohy");
define('B_INFO',"info");
define('B_VIEW',"zobrazit");
define('B_DOWNLOAD',"stáhnout");
define('B_IMPORT',"importovat");
define('B_IMPORT_FRAG',"fragmentovat");
define('B_DELETE',"smazat");
define('B_CONF_EMPTY_DB',"Opravdu chcete vyprázdnit databázi?");
define('B_CONF_DEL_ALL',"Opravdu chcete odstranit všechny zálohy této databáze?");
define('B_CONF_IMP',"Opravdu chcete importovat tuto zálohu?");
define('B_CONF_DEL',"Opravdu chcete odstranit tuto zálohu?");
define('B_CONF_EMPT_ALL',"Opravdu chcete vyprázdnit všechny databáze?");
define('B_CONF_IMP_ALL',"Opravdu chcete importovat všechny poslední zálohy?");
define('B_CONF_DEL_ALL_2',"Opravdu chcete odstranit všechny zálohy?");
define('B_LAST_BACKUP',"Poslední záloha");
define('B_SIZE_SUM',"Celková velikost všech záloh");

/*backup.php*/
define('EX_SAVED',"Soubor byl úspěšně uložen jako");
define('EX_NO_DB',"Žádné vybrané databáze");
define('EX_EXPORT',"Zálohovat");
define('EX_NOT_SAVED',"Nelze uložit zálohu databáze %s do '%s'");
define('EX_DIRS',"Vyberte adresáře pro zálohování na FTP server");
define('EX_DIRS_MAN',"Enter more directory paths relative to the phpMyBackupPro directory.<BR>Separate with '|'");
define('EX_PACKED',"Zabalit vše v jednom ZIP souboru");
define('PMBP_EX_NO_AVAILABLE',"Databáze %s není dostupná");
define('PMBP_EXS_UPDATE_DIRS',"Aktualizovat seznam");
define('PMBP_EX_NO_ARGV',"Příklad použití:\n$ php backup.php db1,db2,db3\nPro více informací si přečtěte 'SHELL_MODE.txt'.");

/*scheduled.php*/
define('EXS_PERIOD',"Vybrat periodu záloh");
define('EXS_PATH',"Vyberte adresář, kam bude umístěn PHP soubor (pro CRONa");
define('EXS_BACK',"zpět");
define('PMBP_EXS_ALWAYS',"Při zavolání");
define('EXS_HOUR',"hodina");
define('EXS_HOURS',"hodiny");
define('EXS_DAY',"den");
define('EXS_DAYS',"dny");
define('EXS_WEEK',"týden");
define('EXS_WEEKS',"týdnů");
define('EXS_MONTH',"měsíc");
define('EXS_SHOW',"Zobrazit script");
define('PMBP_EXS_INCL',"Zahrnout tento skript v PHP souboru (%s) kterým chcete provést úlohu zálohování.");
define('PMBP_EXS_SAVE',"Neukládejte tento skript do nového souboru (přepište existující soubor)");

/*file_info.php*/
define('INF_INFO',"info");
define('INF_DATE',"Datum");
define('INF_DB',"Databáze");
define('INF_SIZE',"Velikost zálohy");
define('INF_COMP',"Komprese");
define('INF_DROP',"Obsahuje 'drop table'");
define('INF_TABLES',"Obsahuje tabulky");
define('INF_DATA',"Obsahujedata");
define('INF_COMMENT',"Komentáře");
define('INF_NO_FILE',"Nevybrán žádný soubor");

/*db_status.php*/
define('DB_NAME',"jméno databáze");
define('DB_NUM_TABLES',"počet tabulek");
define('DB_NUM_ROWS',"počet řádků");
define('DB_SIZE',"velikost");
define('DB_DIFF',"Sizes can differ from sizes of backup files!");
define('DB_NO_DB',"No databases available");
define('DB_TABLES',"Více info");
define('DB_TAB_TITLE',"tabulky databáze ");
define('DB_TAB_NAME',"jména tabulek");
define('DB_TAB_COLS',"počet sloupců");

/*sql_query.php*/
define('SQ_ERROR',"Došlo k chybám v řádku číslo");
define('SQ_SUCCESS',"Úspěšně provedeno");
define('SQ_RESULT',"Výsledek dotazu");
define('SQ_AFFECTED',"Počet ovlivněných řádků");
define('SQ_WARNING',"Upozornění: Tato stránka je postavena pouze na posílání jednoduchých sql dotazů. Pozor na to, že můžete poškodit vaše data!");
define('SQ_SELECT_DB',"Vybrat databázi");
define('SQ_INSERT',"SQL dotaz vložte sem");
define('SQ_FILE',"Nahrát soubor sql");
define('SQ_SEND',"Spustit");

/*login.php*/
define('LI_MSG',"Prosím přihlašte se (použijte vaše MySQL jméno a heslo)");
define('LI_USER',"jméno");
define('LI_PASSWD',"heslo");
define('LI_LOGIN',"Přihlásit");
define('LI_LOGED_OUT',"Odhlášen!");
define('LI_NOT_LOGED_OUT',"Nepřihlášen!<BR>Špatné jméno nebo heslo");

/*big_import.php*/
define('BI_IMPORTING_FILE',"Import souboru");
define('BI_INTO_DB',"Do databáze");
define('BI_SESSION_NO',"Číslo relace");
define('BI_STARTING_LINE',"Od řádku");
define('BI_STOPPING_LINE',"Do řádku");
define('BI_QUERY_NO',"Počet provedených dotazů");
define('BI_BYTE_NO',"Počet zpracovaných bajtů");
define('BI_DURATION',"Doba trvání posledního sezení");
define('BI_THIS_LAST',"Tato relace/celkem");
define('BI_END',"Konec souboru byl dosažen a vše se zdá být OK.");
define('BI_RESTART',"Restart importu souboru ");
define('BI_SCRIPT_RUNNING',"This script is still running!<BR>Please wait until the end of the file is reached");
define('BI_CONTINUE',"Pokračujte od řádku");
define('BI_ENABLE_JS',"Povolit JavaScript pro automatické pokračování");
define('BI_BROKEN_ZIP',"Zip soubor je nejspíš poškozen");
define('BI_WRONG_FILE',"Stopped at line %s.<BR>The current query includes more than %s dump lines. That happens if your backup file was created
by some tool which didn't place a semicolon followed by a linebreak at the end of each query, or if your backup file contains extended inserts.");

/*get_file.php*/
define("GF_INVALID_EXT","Jsou viditelné pouze soubory s jedním z následujících přípon: .php, .php3, .html, .htm, .sql, .sql.zip, .sql.gz");

?>
