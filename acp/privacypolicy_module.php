<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\acp;

class privacypolicy_module
{
	function main($id, $mode)
	{
		global $phpbb_container;

		$this->tpl_name		= 'privacypolicy_manage';
		$this->page_title	= $phpbb_container->get('language')->lang('PRIVACY_POLICY');

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('david63.privacypolicy.admin.controller');

		$admin_controller->display_options();
	}
}
