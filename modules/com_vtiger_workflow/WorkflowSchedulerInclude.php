<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

require_once ROOT_DIRECTORY . 'include/events/VTEntityData.php';
require_once ROOT_DIRECTORY . 'include/utils/utils.php';
require_once ROOT_DIRECTORY . 'modules/com_vtiger_workflow/VTWorkflowUtils.php';
require_once ROOT_DIRECTORY . 'modules/com_vtiger_workflow/VTWorkflowManager.php';
require_once ROOT_DIRECTORY . 'modules/com_vtiger_workflow/VTTaskManager.php';
require_once ROOT_DIRECTORY . 'modules/com_vtiger_workflow/VTTaskQueue.php';
require_once ROOT_DIRECTORY . 'modules/com_vtiger_workflow/VTEntityCache.php';
require_once ROOT_DIRECTORY . 'include/Webservices/WebserviceField.php';
require_once ROOT_DIRECTORY . 'include/Webservices/EntityMeta.php';
require_once ROOT_DIRECTORY . 'include/Webservices/VtigerWebserviceObject.php';
require_once ROOT_DIRECTORY . 'include/Webservices/VtigerCRMObject.php';
require_once ROOT_DIRECTORY . 'include/Webservices/VtigerCRMObjectMeta.php';
require_once ROOT_DIRECTORY . 'include/Webservices/DataTransform.php';
require_once ROOT_DIRECTORY . 'include/Webservices/Retrieve.php';
