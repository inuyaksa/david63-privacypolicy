<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
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

// DEVELOPERS PLEASE NOTE
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
	'ACCEPT' 				=> 'Confermo e accetto',

  'COOKIE_ACCEPT_TEXT'	=> 'Il forum utilizza cookie per forniti una navigazione più semplice e completa. Per proseguire nel forum è necessario che tu accetti la cookie policy.<br/>Trovi i dettagli cliccando su "Tutela Privacy" che trovi nella pagina principale o sul link che trovi in fondo alla pagina.<br/>',
  'COOKIE_ACCEPT'			=> '[ ACCETTO ]',
	'COOKIE_ACCESS'			=> 'Accesso Cookie',

	'COOKIE_BLOCK'			=> 'Non puoi accedere ai link fino a quando non avrai accettato la Cookie Policy.',

	'COOKIE_POLICY'			=> 'Cookie Policy',
	'COOKIE_PRIV_POLICY'	=> 'Tutela Privacy',

	'COOKIE_REQUIRE_ACCESS'	=> '<h3>Accettazione Policy Obbligatoria</h3>
	<p>E\' necessario accettare la Cookie Policy per %1$s prima di effettuare la registrazione al forum oppure, se sei già registrato, prima di poter effettuare il login.</p>',

	'DECLINE' 				=> 'Non accetto la policy',

	'HR_BBCODE_HELPLINE' 	=> 'Inserisci una linea orizzontale',

	'POLICY_ACCEPT' 		=> 'Accetta la privacy policy',
));
