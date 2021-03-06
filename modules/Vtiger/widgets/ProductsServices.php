<?php

/**
 * Vtiger ProductsServices widget class
 * @package YetiForce.Widget
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 */
class Vtiger_ProductsServices_Widget extends Vtiger_Basic_Widget
{

	public $allowedModules = ['Accounts'];

	public function getUrl()
	{
		return 'module=Products&view=Widget&fromModule=' . $this->Module . '&record=' . $this->Record . '&mode=showProductsServices&page=1&mod=Products&limit=' . $this->Data['limit'];
	}

	public function getWidget()
	{
		$this->Config['url'] = $this->getUrl();
		$this->Config['tpl'] = 'ProductsServicesBasic.tpl';
		return $this->Config;
	}

	public function getConfigTplName()
	{
		return 'ProductsServicesConfig';
	}
}
