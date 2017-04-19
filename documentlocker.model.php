<?php
class documentlockerModel extends documentlocker
{
	function init()
	{
	}

	/**
	 * @return Object config object
	 * @notice this function saves config object to private value $config.
	 */
	function getConfig()
	{
		$oModuleModel = getModel('module');
		$config = $oModuleModel->getModuleConfig('documentlocker');

		return $config;
	}
}
