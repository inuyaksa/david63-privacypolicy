<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\migrations;

use \phpbb\db\migration\migration;

class version_2_1_0 extends migration
{
	public function update_data()
	{
		$update_data = array();

		$update_data[] = array('config.add', array('cookie_block_links', 0));
		$update_data[] = array('config.add', array('cookie_box_bdr_colour', '#FFFF8A'));
		$update_data[] = array('config.add', array('cookie_box_bdr_width', 1));
		$update_data[] = array('config.add', array('cookie_box_bg_colour', '#00608F'));
		$update_data[] = array('config.add', array('cookie_box_href_colour', '#FFFFFF'));
		$update_data[] = array('config.add', array('cookie_box_position', 0));
		$update_data[] = array('config.add', array('cookie_box_txt_colour', '#DBDB00'));
		$update_data[] = array('config.add', array('cookie_custom_page', 0));
		$update_data[] = array('config.add', array('cookie_custom_page_corners', 1));
		$update_data[] = array('config.add', array('cookie_custom_page_radius', 7));
		$update_data[] = array('config.add', array('cookie_expire', 0));
		$update_data[] = array('config.add', array('cookie_last_ip', ''));
		$update_data[] = array('config.add', array('cookie_on_index', 1));
		$update_data[] = array('config.add', array('cookie_page_bg_colour', '#FFFFFF'));
		$update_data[] = array('config.add', array('cookie_page_txt_colour', '#000000'));
		$update_data[] = array('config.add', array('cookie_policy_enable', 0));
		$update_data[] = array('config.add', array('cookie_require_access', 0));
		$update_data[] = array('config.add', array('cookie_quota_exceeded', 0));
		$update_data[] = array('config.add', array('cookie_show_policy', 0));
		$update_data[] = array('config.add', array('privacy_policy_enable', 0));
		$update_data[] = array('config.add', array('privacy_policy_force', 0));
		$update_data[] = array('config.add', array('privacy_policy_reset', 0));

		// Add the ACP modules
		$update_data[] = array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'PRIVACY_POLICY'));

		$update_data[] = array('module.add', array(
			'acp', 'PRIVACY_POLICY', array(
				'module_basename'	=> '\david63\privacypolicy\acp\privacypolicy_module',
				'modes'				=> array('main'),
			),
		));

		if ($this->module_check())
		{
			$update_data[] = array('module.add', array('acp', 'ACP_CAT_USERGROUP', 'ACP_USER_UTILS'));
		}

		// Add the ACP User modules
		$update_data[] = array('module.add', array(
			'acp', 'ACP_USER_UTILS', array(
				'module_basename'	=> '\david63\privacypolicy\acp\acp_privacydata_module',
				'modes'				=> array('main'),
			),
		));

		$update_data[] = array('module.add', array(
			'acp', 'ACP_USER_UTILS', array(
				'module_basename'	=> '\david63\privacypolicy\acp\acp_privacylist_module',
				'modes'				=> array('main'),
			),
		));

		// Add the UCP module
		$update_data[] = array('module.add', array(
			'ucp', 'UCP_PROFILE', array(
				'module_basename'   => '\david63\privacypolicy\ucp\privacydata_module',
				'modes'             => array('main'),
			),
		));

		return $update_data;
	}

	public function update_schema()
	{
		return array(
			'add_columns' => array(
				$this->table_prefix . 'users' => array(
					'user_accept_date' => array('UINT:11', 0),
				),
			),
		);
	}

	/**
	* Drop the columns schema from the tables
	*
	* @return array Array of table schema
	* @access public
	*/
	public function revert_schema()
	{
		return array(
			'drop_columns' => array(
				$this->table_prefix . 'users' => array(
					'user_accept_date',
				),
			),
		);
	}

	protected function module_check()
	{
		$sql = 'SELECT module_id
				FROM ' . $this->table_prefix . "modules
    			WHERE module_class = 'acp'
        			AND module_langname = 'ACP_USER_UTILS'
        			AND right_id - left_id > 1";

		$result		= $this->db->sql_query($sql);
		$module_id	= (int) $this->db->sql_fetchfield('module_id');
		$this->db->sql_freeresult($result);

		// return true if module is empty, false if has children
		return (bool) !$module_id;
	}
}
