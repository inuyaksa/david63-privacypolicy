<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* * @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

/// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_USER_UTILS'		=> 'User utilities',

	'COOKIE_POLICY'			=> 'Privacy & Cookie policy',
	'COOKIE_POLICY_LOG'		=> '<strong>Privacy policy settings updated</strong>',

	'LOG_CURL_ERROR'		=> '<strong>cURL is not available on this server</strong>',
	'LOG_IP_LOOKUP_ERROR'	=> '<strong>The IP lookup has failed</strong>',
	'LOG_QUOTA_EXCEEDED'	=> '<strong>The hourly lookup quota has been exceeded</strong>',
	'LOG_SERVER_ERROR'		=> '<strong>Could not determine IP address</strong>',

	'PRIVACY_DATA'			=> 'Privacy data',
	'PRIVACY_LIST'			=> 'Privacy list',
	'PRIVACY_POLICY'		=> 'Privacy policy',
	'PRIVACY_POLICY_MANAGE'	=> 'Privacy policy settings',
	'POLICY_RESET_LOG'		=> '<strong>Policy acceptance reset</strong>',
));
