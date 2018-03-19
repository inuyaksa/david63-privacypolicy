<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\acp;

class acp_privacydata_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container;

		$this->tpl_name		= 'privacypolicy_data';
		$this->page_title	= $phpbb_container->get('language')->lang('PRIVACY_POLICY');

		// Get an instance of the data controller
		$data_controller = $phpbb_container->get('david63.privacypolicy.acp.data.controller');


		// Make the $u_action url available in the data controller
		$data_controller->set_page_url($this->u_action);

		$data_controller->display_options();
	}
}
