<?php
class documentlockerAdminView extends documentlocker
{
	function init()
	{
		$this->setTemplatePath($this->module_path.'tpl');
		$this->setTemplateFile(strtolower(str_replace('dispDocumentlockerAdmin', '', $this->act)));
	}

	function dispDocumentlockerAdminConfig()
	{
		$oDocumentlockerModel = getModel('documentlocker');
		$module_config = $oDocumentlockerModel->getConfig();
		Context::set('config', $module_config);
	}

	function dispDocumentlockerAdminTabEx()
	{
		//tab
	}
}
