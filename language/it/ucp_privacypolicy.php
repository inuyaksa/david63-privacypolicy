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
	'CSV_DOWNLOAD'					=> 'Scarica i dati in formato CSV',

  'REMOVE_ACCOUNT'				=> 'Clicca qui per inviare all\'amministratore una mail di richiesta di cancellazione del forum',
	'REMOVE_MY_ACCOUNT'				=> 'Richiedo di rimuovere la mia registrazione',
  'REMOVE_MY_ACCOUNT_BODY'		=> 'Non voglio più essere un utente di questo forum e richiedo che tutti i miei dati vengano cancellati in conformità al GDPR (2018).%1$sIl mio Username è %2$s%1$s%1$sRichiedo la cancellazione per questo motivo [per cortesia inserisci una motivazione, in caso contrario i tuoi dati non saranno cancellati.]',

  'UCP_PRIVACY_POLICY_EXPLAIN'	=> 'Questo è il dettaglio dei tuoi dati memorizzati sul sito.',
	'UCP_PRIVACY_TITLE'				=> 'Riepilogo informazioni in conformità della Privacy Policy',
));
