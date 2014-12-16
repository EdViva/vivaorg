<?php

/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.5                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2014                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 * Base class for exceptions generated by CiviCRM.
 * This Exception returns more information than the default one. We are using it from the
 * form layer to allow redirects to occur without having redirects in the BAO
 * @param string $message the human friendly error message
 * @param string $error_code a computer friendly error code. By convention, no space (but underscore allowed)
 *  ex: mandatory_missing, duplicate, invalid_format
 * @param array $data extra params to return. eg an extra array of ids. It is not mandatory, but can help the computer using the api. Keep in mind the api consumer isn't to be trusted. eg. the database password is NOT a good extra data
 */

class CRM_Core_Exception extends PEAR_Exception {
  private $errorData = array();

  /**
   * @param $message
   * @param int $error_code
   * @param array $errorData
   * @param null $previous
   */
  public function __construct($message, $error_code = 0, $errorData = array(), $previous = null) {
    parent::__construct(ts($message));
    $this->errorData = $errorData + array('error_code' => $error_code);
  }

  // custom string representation of object
  /**
   * @return string
   */
  public function __toString() {
    return __CLASS__ . ": [{$this->errorData['error_code']}: {$this->message}\n";
  }

  public function getErrorCode() {
    return $this->errorData['error_code'];
  }

  /**
   * Return specific error information that can be used for more detailed
   * error messages or translation.
   *
   * This method may be overridden in child exception classes in order
   * to add functionality not present in PEAR_Exception and is a placeholder
   * to define API
   *
   * The returned array must be an associative array of parameter => value like so:
   * <pre>
   * array('name' => $name, 'context' => array(...))
   * </pre>
   * @return array
   */
  public function getErrorData() {
    return $this->errorData;
  }
}

