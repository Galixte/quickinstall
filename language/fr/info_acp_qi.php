<?php
/**
*
* info_acp_qi [French]
*
* @package quickinstall
* @copyright (c) 2008 phpBB Limited
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* @translator phpBB-fr.com <http://www.phpbb-fr.com>
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

$lang = array_merge($lang, array(
	'LOG_INSTALL_INSTALLED_QI'	=> '<strong>Forum installé par QuickInstall version %s</strong>',
));
