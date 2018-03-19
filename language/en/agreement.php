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
	'TERMS_OF_USE_CONTENT_2' => '<br /><br /><strong>GDPR</strong><br />To comply with the EU GDPR (2018) you need to be made aware of the following.<br /><br />In addition to the above “%1$s” will also store all of the IP address that you use to post with. Depending on your preferences “%1$s” may send you emails to the email address that you used when you registered or you have subsequently changed but you are able to change these preferences from your User Control Panel (UCP) at any time should you wish to stop receiving them.<br /><br />The personal details that you gave us when you signed up will be used solely for the purposes of “%1$s” board functionality. They will not be used for anything else and neither will they be passed on to any third party without your explicit consent.<br /><br />The only other information about you is that which you decide to post in the fora, whereupon it is considered to be “publicly available” as it will have been indexed by search engines)as well as on-line archive sites.<br /><br />By clicking on the “I agree to these terms” button below your acceptance of these terms will be recorded.',
));
