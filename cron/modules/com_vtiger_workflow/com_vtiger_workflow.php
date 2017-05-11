<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

require_once ROOT_DIRECTORY . 'include/Webservices/Utils.php';
require_once ROOT_DIRECTORY . 'include/Webservices/State.php';
require_once ROOT_DIRECTORY . 'include/Webservices/OperationManager.php';
require_once ROOT_DIRECTORY . 'include/Webservices/SessionManager.php';
require_once ROOT_DIRECTORY . 'include/Webservices/WebserviceField.php';
require_once ROOT_DIRECTORY . 'include/Webservices/EntityMeta.php';
require_once ROOT_DIRECTORY . 'include/Webservices/VtigerWebserviceObject.php';
require_once ROOT_DIRECTORY . 'include/Webservices/VtigerCRMObject.php';
require_once ROOT_DIRECTORY . 'include/Webservices/VtigerCRMObjectMeta.php';
require_once ROOT_DIRECTORY . 'include/Webservices/DataTransform.php';
require_once ROOT_DIRECTORY . 'include/Webservices/WebServiceError.php';
require_once ROOT_DIRECTORY . 'include/Webservices/ModuleTypes.php';
require_once ROOT_DIRECTORY . 'include/utils/VtlibUtils.php';
require_once ROOT_DIRECTORY . 'include/Webservices/WebserviceEntityOperation.php';
require_once ROOT_DIRECTORY . 'include/Webservices/Retrieve.php';
require_once ROOT_DIRECTORY . 'modules/com_vtiger_workflow/VTEntityCache.php';
require_once ROOT_DIRECTORY . 'modules/com_vtiger_workflow/VTWorkflowUtils.php';
require_once ROOT_DIRECTORY . 'modules/com_vtiger_workflow/include.php';
require_once ROOT_DIRECTORY . 'modules/com_vtiger_workflow/WorkFlowScheduler.php';

$adb = PearDatabase::getInstance();
$workflowScheduler = new WorkFlowScheduler($adb);
$workflowScheduler->queueScheduledWorkflowTasks();
$readyTasks = (new VTTaskQueue($adb))->getReadyTasks();
$tm = new VTTaskManager($adb);
foreach ($readyTasks as $taskDetails) {
	list($taskId, $entityId, $taskContents) = $taskDetails;
	$task = $tm->retrieveTask($taskId);
	//If task is not there then continue
	if (empty($task)) {
		continue;
	}
	$task->setContents($taskContents);
	$task->doTask(Vtiger_Record_Model::getInstanceById($entityId));
}
