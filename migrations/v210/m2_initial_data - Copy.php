<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\migrations\v210;

use \phpbb\db\migration\migration;

class m2_initial_data extends migration
{
	/**
	* Assign migration file dependencies for this migration
	*
	* @return array Array of migration files
	* @static
	* @access public
	*/
	static public function depends_on()
	{
		return array('\david63\privacypolicy\migrations\v210\m1_initial_schema');
	}

	/**
	* Add the initial data in the database
	*
	* @return array Array of table data
	* @access public
	*/
	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'insert_privacy_lang_data'))),
		);
	}

	/**
	* Custom function to install the initial privacy lang data to the privacy_lang table in the database
	*
	* @return null
	* @access public
	*/
	public function insert_privacy_lang_data()
	{
		// Define initial data
		$privacy_lang_data = array(
			array(
				'privacy_lang_name' 			=> 'privacy_policy',
				'privacy_lang_description'		=> 'Privacy policy',
				'privacy_lang_id' 				=> 'en',
				'privacy_lang_text' 			=> '<h3>General Data Protection Regulation - 2018 (GDPR)</h3>
	<br />
	<p>To comply with the GDPR you need to be made aware that your “%1$s” account will, at a bare minimum, contain a uniquely identifiable name (hereinafter “your user name”), a personal password used for logging into your account (hereinafter “your password”) and a personal, valid email address (hereinafter “your email”). Your information for your account at “%1$s” is protected by data-protection laws applicable in the country that hosts us. Any information beyond your user name, your password, and your email address required by “%1$s” during the registration process is either mandatory or optional, at the discretion of “%1$s”. In all cases, you have the option of what information in your account is publicly displayed. Furthermore, within your account, you have the option to opt-in or opt-out of automatically generated emails.
<br /><br />
Furthermore we will store all of the IP address that you use to post with. Depending on your preferences “%1$s” may send you emails to the email address that “%1$s” hol;ds in your account which will either be that you used when you registered or one that you have subsequently changed, but you are able to change these preferences from your User Control Panel (UCP) at any time should you wish to stop receiving them.<br /><br />The personal details that you gave us when you signed up, or added later, will be used solely for the purposes of “%1$s” board functionality. They will not be used for anything else and neither will they be passed on to any third party without your explicit consent. You can check, at any time, the personal details “%1$s” is holding about you from the Profile section of your UCP.
<br /><br />
The only other information about you is that which you decide to post in the fora, whereupon it is considered to be “publicly available” as it will have been indexed by search engines as well as on-line archive sites.',
				'privacy_lang_default'			=> 1,
				'privacy_text_bbcode_uid'		=> '',
				'privacy_text_bbcode_bitfield'	=> '',
				'privacy_text_bbcode_options'	=> 7,
			),

			array(
				'privacy_lang_name' 			=> 'privacy_policy_accept',
				'privacy_lang_description'		=> 'Privacy acceptance',
				'privacy_lang_id' 				=> 'en',
				'privacy_lang_text' 			=> '<br /><br />
By clicking on the “<strong>I accept this policy</strong>” button below your acceptance of these terms will be recorded. If you click on the “<strong>I do not accept this policy</strong>” button below then you will be logged out of this board.',
				'privacy_lang_default' 			=> 1,
				'privacy_text_bbcode_uid'		=> '',
				'privacy_text_bbcode_bitfield'	=> '',
				'privacy_text_bbcode_options'	=> 7,
			),

			array(
				'privacy_lang_name' 			=> 'terms_of_use_2',
				'privacy_lang_description'		=> 'Terms of use (2)',
				'privacy_lang_id' 				=> 'en',
				'privacy_lang_text' 			=> '<br /><br /><strong>GDPR</strong>
	<br />
	To comply with the EU GDPR (2018) you need to be made aware of the following.
	<br /><br />
	In addition to the above “%1$s” will also store all of the IP address that you use to post with. Depending on your preferences “%1$s” may send you emails to the email address that you used when you registered or you have subsequently changed but you are able to change these preferences from your User Control Panel (UCP) at any time should you wish to stop receiving them.
<br /><br />
The personal details that you gave us when you signed up will be used solely for the purposes of “%1$s” board functionality. They will not be used for anything else and neither will they be passed on to any third party without your explicit consent.
<br /><br />
The only other information about you is that which you decide to post in the fora, whereupon it is considered to be “publicly available” as it will have been indexed by search engines as well as on-line archive sites.
<br /><br />
By clicking on the “I agree to these terms” button below your acceptance of these terms will be recorded.',
				'privacy_lang_default' 			=> 1,
				'privacy_text_bbcode_uid'		=> '',
				'privacy_text_bbcode_bitfield'	=> '',
				'privacy_text_bbcode_options'	=> 7,
			),

			array(
				'privacy_lang_name' 			=> 'cookie_policy',
				'privacy_lang_description'		=> 'Cookie policy',
				'privacy_lang_id' 				=> 'en',
				'privacy_lang_text' 			=> '<h3>How do we use cookies on this board?</h3>
	<p>We use files known as cookies on %1$s to improve its performance and to enhance your user experience. By using %1$s you agree that we can place these types of files on your device.</p>
<h3>What are cookies?</h3><p>Cookies are small text files that a website may put on your computer, or mobile device, when you first visit that site or one of its pages.
<br /><br />
There are many functions that a cookie can serve. For example, a cookie will help the website, or another website, to recognise your device the next time you visit it. %1$s uses the term "cookies" in this policy to refer to all files that collect information in this way.
<br /><br />
Certain cookies contain personal information – for example, if you click on "remember me" when logging on, a cookie will store your username. Most cookies will not collect information that identifies you, but will instead collect more general information such as how users arrive at and use %1$s, or a user’s general location.</p>
<h3>What sort of cookies does %1$s use?</h3><p>Cookies can perform several different functions:</p>
<p><b>1. Necessary Cookies</b><br />Some cookies are essential for the operation of %1$s. These cookies enable services you have specifically asked for.</p>
<p><b>2. Performance Cookies
</b><br />
These cookies may collect anonymous information on the pages visited. For example, we might use performance cookies to keep track of which pages are most popular, which method of linking between pages is most effective and to determine why some pages are receiving error messages.</p>
<p><b>3. Functionality Cookies
</b><br />
These cookies remember choices you make to improve your experience.</p>
<p>%1$s may also allow third parties to serve cookies that fall into any of the categories above. For example, like many sites, we may use Google Analytics to help us monitor our website traffic.</p>
<h3>Can a board user block cookies?</h3>
<p>To find out how to manage which cookies you allow, see your browser’s help section or your mobile device manual - or you can visit one of the sites below, which have detailed information on how to manage, control or delete cookies.
<br /><br />
<a href="http://www.aboutcookies.org" style="text-decoration:none">www.aboutcookies.org</a>
<br />
<a href="http://www.allaboutcookies.org" style="text-decoration:none">www.allaboutcookies.org</a></p>
<p>Please remember that if you do choose to disable cookies, you may find that certain sections of %1$s do not work properly.</p>
<h3>Cookies on %1$s from social networking sites</h3>
<p>%1$s may have links to social networking websites (e.g. Facebook, Twitter or YouTube). These websites may also place cookies on your device and %1$s does not control how they use their cookies, therefore %1$s suggests you check their website(s) to see how they are using cookies.',
				'privacy_lang_default' 			=> 1,
				'privacy_text_bbcode_uid'		=> '',
				'privacy_text_bbcode_bitfield'	=> '',
				'privacy_text_bbcode_options'	=> 7,
			),
		);

		// Insert initial data
		$this->db->sql_multi_insert($this->table_prefix . 'privacy_lang', $privacy_lang_data);
	}
}
