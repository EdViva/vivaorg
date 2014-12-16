<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.5                                                |
 +--------------------------------------------------------------------+
 | Copyright Tech To The People http:tttp.eu (c) 2011                 |
 +--------------------------------------------------------------------+
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007.                                       |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License along with this program; if not, contact CiviCRM LLC       |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 * Delete records passed in via a csv file. You must have the record
 * id defined in the csv file.
 *
 * Usage:
 * php bin/csv/delete.php -e <entity> --file /path/to/csv/file [ -s site.org ]
 * e.g.: php bin/csv/delete.php -e Contact --file /tmp/delete.csv
 *
 **/

require_once (dirname(__DIR__) . '/cli.class.php');

$entityImporter = new civicrm_cli_csv_deleter();
$entityImporter->run();

