<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\acp;

class acp_privacylist_info
{
	function module()
	{
		return array(
			'filename'	=> '\david63\privacypolicy\acp\acp_privacylist_module',
			'title'		=> 'PRIVACY_POLICY',
			'modes'		=> array(
				'main'	=> array('title' => 'PRIVACY_LIST', 'auth' => 'ext_david63/privacypolicy && acl_a_user', 'cat' => array('PRIVACY_LIST')),
			),
		);
	}
}
