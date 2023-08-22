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
	// Select
	'QTE_ATTRIBUTES' => 'Attributs de sujet',
	'QTE_ATTRIBUTE' => 'Attribut de sujet',

	'QTE_ATTRIBUTE_ADD' => 'Ajouter un attribut à ce sujet',
	'QTE_ATTRIBUTE_REMOVE' => 'Supprimer l’attribut de ce sujet',
	'QTE_ATTRIBUTE_DESIRED' => 'Sélectionner l’attribut désiré',
	'QTE_ATTRIBUTE_KEEP' => 'Conserver l’attribut actuel',

	// Notifications
	'QTE_ATTRIBUTE_ADDED' => 'Un attribut a été appliqué au titre du sujet',
	'QTE_ATTRIBUTE_UPDATED' => 'L’attribut de ce sujet a été mis à jour',
	'QTE_ATTRIBUTE_REMOVED' => 'L’attribut du sujet a été supprimé',

	'QTE_TOPIC_ATTRIBUTE_ADDED' => 'Un attribut a été appliqué au sujet sélectionné',
	'QTE_TOPICS_ATTRIBUTE_ADDED' => 'Un attribut a été appliqué aux sujets sélectionnés',
	'QTE_TOPIC_ATTRIBUTE_UPDATED' => 'L’attribut du sujet sélectionné a été mis à jour',
	'QTE_TOPICS_ATTRIBUTE_UPDATED' => 'L’attribut des sujets sélectionnés a été mis à jour',
	'QTE_TOPIC_ATTRIBUTE_DELETED' => 'L’attribut du sujet sélectionné a été supprimé',
	'QTE_TOPICS_ATTRIBUTE_DELETED' => 'L’attribut des sujets sélectionnés a été supprimé',

	// Search
	'QTE_ATTRIBUTE_SELECT' => 'Sélectionner un attribut',

	'QTE_ATTRIBUTE_SEARCH' => 'Recherche par attribut',
	'QTE_ATTRIBUTE_SEARCH_EXPLAIN' => 'Sélectionnez l’attribut que vous souhaitez rechercher',

	// Sort
	'QTE_SORT' => 'Selon l’attribut',
	'QTE_ALL' => 'Tous',

	// ERRORS
	'QTE_ATTRIBUTE_UNSELECTED' => 'Vous devez sélectionner un attribut !',

	// Placeholders
	'QTE_KEY_USERNAME' => '¦utilisateur¦',
	'QTE_KEY_DATE' => '¦date¦',

// Topic attributes as keys
	'QTE_SOLVED' => '[Réglé par %mod% :: %date%]',
	'QTE_CANCELLED' => 'Annulé',
]);
