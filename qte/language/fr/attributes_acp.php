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
	'QTE_ADD' => 'Ajouter un nouvel attribut',
	'QTE_ADD_EXPLAIN' => 'Vous pouvez définir ici les champs du nouvel attribut.',
	'QTE_EDIT' => 'Modifier un attribut',
	'QTE_EDIT_EXPLAIN' => 'Vous pouvez modifier ici les champs de l’attribut sélectionné.',

	'QTE_FIELDS' => 'Champs de l’attribut',
	'QTE_TYPE' => 'Type d’attribut',
	'QTE_TYPE_TXT' => 'Texte',
	'QTE_TYPE_IMG' => 'Image',
	'QTE_NAME' => 'Intitulé de l’attribut',
	'QTE_NAME_EXPLAIN' => '- Utilisez la variable de langue si elle est définie dans le fichier de langue, ou saisissez directement le nom de l’attribut.<br />- Insérer <strong>%%mod%%</strong> affichera le nom de l’utilisateur ayant appliqué l’attribut.<br />- Insérer <strong>%%date%%</strong> affichera la date du jour où l’attribut a été appliqué.<br /><br />- Example : <strong>[Réglé par %%mod%%]</strong> affichera <strong>[Réglé par %s]</strong>',
	'QTE_DESC' => 'Description de l’attribut',
	'QTE_DESC_EXPLAIN' => 'Vous pouvez entrer un commentaire court, lequel sera utilisé pour différencier vos attributs si certains doivent avoir le même nom.',
	'QTE_IMG' => 'Image de l’attribut',
	'QTE_IMG_EXPLAIN' => 'Vous pouvez utilisez le nom de l’image s’il est défini dans le pack d’images, ou saisir le chemin relatif de l’image.',
	'QTE_DATE' => 'Format de date de l’attribut',
	'QTE_DATE_EXPLAIN' => 'La syntaxe utilisée est identique à la fonction PHP <a href="http://www.php.net/date">date()</a>.',
	'QTE_COLOUR' => 'Couleur de l’attribut',
	'QTE_COLOUR_EXPLAIN' => 'Saisissez directement une valeur.<br />Exemple : ff0000.',
	'QTE_USER_COLOUR' => 'Colorer le nom de l’utilisateur ayant appliqué l’attribut',
	'QTE_USER_COLOUR_EXPLAIN' => 'Si vous utilisez l’argument <strong>%mod%</strong> et que cette option est activée, la couleur du groupe de l’utilisateur sera appliquée.',
	'QTE_COPY_AUTHS'				=> 'Copier les permissions de',
	'QTE_COPY_AUTHS_EXPLAIN'		=> 'Si vous choisissez de copier les autorisations, l‘attribut aura les mêmes autorisations que celui que vous sélectionnez ici. Cela écrasera toutes les autorisations que vous avez précédemment définies pour cet attribut. Si l‘option <strong>Personnalisée</strong> est sélectionnée, les autorisations actuelles seront conservées.',
	'QTE_COPY_PERMISSIONS'			=> 'Copier les permissions d‘attributs de',
	'QTE_COPY_PERMISSIONS_EXPLAIN'	=> 'Une fois créé, le forum aura les mêmes autorisations d‘attributs que celui que vous avez sélectionné. Si aucun forum n‘est sélectionné, les attributs ne seront pas affichés tant que leurs permissions n‘auront pas été définies.',

	'QTE_AUTH_ADD'				=> 'Ajouter une permission',
	'QTE_AUTH_REMOVE'			=> 'Supprimer une permission',
	'QTE_AUTH_NO_PERMISSIONS'	=> 'Ne pas copier les permissions',

	'QTE_ATTRIBUTE'		=> 'Attribut',
	'QTE_ATTRIBUTES'	=> 'Attributs',
	'QTE_USAGE'			=> 'Usage',

	'QTE_CSS'	=> 'Probablement géré par CSS',
	'QTE_NONE'	=> 'N/A',

	'QTE_MUST_SELECT'			=> 'Vous devez sélectionner un attribut.',
	'QTE_NAME_ERROR'			=> 'Le champ du nom de l‘attribut ne peut pas être vide.',
	'QTE_COLOUR_ERROR'			=> 'Le champ de couleur de l‘attribut contient des caractères invalides.',
	'QTE_DATE_ARGUMENT_ERROR'	=> 'Vous avez défini un format de date sans définir l‘argument <strong>%date%</strong> à l‘intérieur de votre attribut.',
	'QTE_DATE_FORMAT_ERROR'		=> 'Vous avez défini l‘argument <strong>%date%</strong> dans votre attribut sans définir le format de date.',
	'QTE_USER_COLOUR_ERROR'		=> 'Vous avez activé l‘option de couleur du nom d‘utilisateur sans définir l‘argument <strong>%mod%</strong> dans votre attribut..',
	'QTE_FORUM_ERROR'			=> 'Vous ne pouvez pas spécifier une catégorie ou un lien de forum.',

	'QTE_ADDED'		=> 'Un nouvel attribut a été ajouté.',
	'QTE_UPDATED'	=> 'L‘attribut sélectionné a été mis à jour.',
	'QTE_REMOVED'	=> 'L‘attribut sélectionné a été supprimé.',

	// Forums
	'QTE_TOPICS_ATTR_SETTINGS'	=> 'Paramètres des attributs du sujet',

	'QTE_DEFAULT_ATTR'			=> 'Attribut par défaut du forum',
	'QTE_DEFAULT_ATTR_EXPLAIN'	=> 'L‘attribut sélectionné sera appliqué lors de la création d‘un nouveau sujet, quelles que soient les autorisations de l‘utilisateur.',
	'QTE_FORCE_USERS'			=> 'Forcer les utilisateurs à appliquer un attribut à leur sujet',
	'QTE_FORCE_USERS_EXPLAIN'	=> 'Si activé, les utilisateurs devront sélectionner un attribut pour leur sujet dans ce forum.',
]);
