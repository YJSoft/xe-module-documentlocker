<?php
class documentlockerAdminController extends documentlocker
{
	function init()
	{
	}

	function procDocumentlockerAdminInsertConfig()
	{
		$vars = Context::getRequestVars();

		$oModuleController = getController('module');
		$oModuleController->updateModuleConfig('documentlocker', $vars);
		if(!in_array(Context::getRequestMethod(),array('XMLRPC','JSON')))
		{
			$returnUrl = Context::get('success_return_url') ? Context::get('success_return_url') : getNotEncodedUrl('', 'module', 'admin', 'act', 'dispDocumentlockerAdminConfig');
			header('location: ' . $returnUrl);
			return;
		}
	}
}
