<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * Contributor(s): YetiForce.com
 * ********************************************************************************** */

$startTime = microtime(true);

define('REQUEST_MODE', 'WebUI');
define('PUBLIC_DIRECTORY', '/');
define('ROOT_DIRECTORY', __DIR__ !== DIRECTORY_SEPARATOR ? str_replace('public' . DIRECTORY_SEPARATOR, '', __DIR__ . DIRECTORY_SEPARATOR) : '..' . DIRECTORY_SEPARATOR);

require ROOT_DIRECTORY . 'include/RequirementsValidation.php';
require ROOT_DIRECTORY . 'include/main/WebUI.php';

$webUI = new Vtiger_WebUI();
$webUI->process(\App\Request::init());

