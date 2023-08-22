<?php
/**
 *
 * Quick Title Edition extension for the phpBB Forum Software package
 *
 * @copyright (c) 2023, Kailey Snay, https://www.snayhomelab.com/
 * @copyright (c) 2023, French translation by Fred Rimbert, https://forums.caforum.fr
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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

$lang = array_merge($lang, [
	'ACL_A_ATTR_MANAGE' 	=> 'Peut gérer les attributs de sujet.',

	'ACL_M_QTE_ATTR_EDIT'		=> 'Peut changer d’attributs.',
	'ACL_M_QTE_ATTR_DELETE'		=> 'Peut supprimer des attributs.',

	'ACL_CAT_QTE'			=> 'QTE',

	'QTE_CAN_USE_ATTR'	=> 'Peut utiliser l‘attribut %s',
]);
