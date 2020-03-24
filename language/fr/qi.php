<?php
/**
*
* qi [French]
*
* @package quickinstall
* @copyright (c) 2007 phpBB Limited
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* @translator phpBB-fr.com <http://www.phpbb-fr.com>
*
*/

/**
* @ignore
*/
if (!defined('IN_QUICKINSTALL'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ABOUT_QUICKINSTALL'	=> 'À propos de phpBB<small><sup><i class="glyphicon glyphicon-registration-mark" aria-hidden="true"></i></sup></small> QuickInstall',
	'ADMIN_EMAIL'			=> 'Adresse courriel de l’administrateur',
	'ADMIN_EMAIL_EXPLAIN'	=> 'L’adresse courriel à assigner au compte administrateur créé sur vos forums.',
	'ADMIN_NAME'			=> 'Nom d’utilisateur de l’administrateur',
	'ADMIN_NAME_EXPLAIN'	=> 'Le nom d’utilisateur à assigner au compte administrateur créé sur vos forums.',
	'ADMIN_PASS'			=> 'Mot de passe de l’administrateur',
	'ADMIN_PASS_EXPLAIN'	=> 'Le mot de passe à assigner au compte administrateur créé sur vos forums.',
	'ADMIN_SETTINGS'		=> 'Paramètres d’administration',
	'ALT_ENV'				=> 'Autre environnement',
	'ALT_ENV_EXPLAIN'		=> 'Les autres environnements phpBB sont disponibles si vous ajoutez d’autres sources de phpBB 3.x dans le répertoire <code>sources/phpBB3_alt/</code>.',
	'AUTOMOD'				=> 'AutoMOD',
	'AUTOMOD_INSTALL'		=> 'Installer AutoMOD',

	'BACK_TOP'				=> 'Retour en haut',
	'BOARD_CONFIG_OPTIONS'	=> 'Options de configuration du forum',
	'BOARD_CONFIG_SETTINGS'	=> 'Paramètres de configuration du forum',
	'BOARD_CONFIG_SETTINGS_EXPLAIN'	=> 'Il s’agit des paramètres généraux pour vos forums phpBB.',
	'BOARD_DBNAME'			=> 'Nom du répertoire et de la base de données du forum',
	'BOARD_DESC'			=> 'Description du forum',
	'BOARD_EMAIL'			=> 'Adresse courriel du forum',
	'BOARD_EMAIL_EXPLAIN'	=> 'L’adresse courriel de contact utilisée par vos forums.',
	'BOARD_NAME'			=> 'Nom du forum',
	'BOARDS'				=> 'Forums',
	'BOARDS_DIR'			=> 'Répertoire des forums',
	'BOARDS_DIR_EXPLAIN'	=> 'Le répertoire où seront créés vos forums. PHP nécessite des permissions en écriture sur ce répertoire.',
	'BOARDS_DIR_MISSING'	=> 'Le répertoire %s n’existe pas ou n’est pas autorisé en écriture.',
	'BOARDS_LIST'			=> 'Forums installés',
	'BOARDS_URL'			=> 'Préfixe de l’URL des forums',
	'BOARDS_URL_EXPLAIN'	=> 'Préfixe de l’URL vers le répertoire des forums. Si vous spécifiez un répertoire absolu dans le paramètre « Répertoire des forums », vous devrez peut-être fournir ici un domaine et/ou le chemin qui mène vers le répertoire des forums. Si le répertoire des forums est un chemin relatif, vous pouvez simplement le copier ici.',

	'CACHE_DIR'						=> 'Répertoire du cache',
	'CACHE_DIR_EXPLAIN'				=> 'Le répertoire où QuickInstall stocke les fichiers temporaires. PHP nécessite des permissions en écriture sur ce répertoire.',
	'CACHE_DIR_MISSING'				=> 'Le répertoire %s n’existe pas ou n’est pas autorisé en écriture.',
	'CANNOT_DELETE_LAST_PROFILE'	=> 'Vous ne pouvez pas supprimer le seul profil que vous avez.',
	'CHANGELOG'						=> 'Modifications (en anglais)',
	'CHECK_ALL'						=> 'Tout sélectionner',
	'CHUNK_POST'					=> 'Blocs des messages',
	'CHUNK_POST_EXPLAIN'			=> 'Nombre de messages qui seront envoyés à la base de données dans chaque requête. Par défaut : 1000.',
	'CHUNK_SETTINGS'				=> 'Paramètres des blocs',
	'CHUNK_SETTINGS_EXPLAIN'		=> 'QuickInstall essaie de réduire le nombre de requêtes générées en créant des blocs de messages, sujets et membres. La taille d’un bloc influe sur le temps nécessaire pour peupler le forum. Il n’y a pas de paramètre type convenant à tout le monde. Si vous peuplez souvent vos forums avec QI, vous serez amené à tester différents paramètres. Des blocs trop grands peuvent consommer plus de mémoire et des blocs trop petits solliciterons plus souvent la base de données. Nous pensons que les paramètres définis par défaut sont un bon compromis.',
	'CHUNK_TOPIC'					=> 'Blocs de sujets',
	'CHUNK_TOPIC_EXPLAIN'			=> 'Nombre de sujets qui seront envoyés à la base de données dans chaque requête. Par défaut : 2000.',
	'CHUNK_USER'					=> 'Bloc d’utilisateurs',
	'CHUNK_USER_EXPLAIN'			=> 'Nombre d’utilisateurs qui sera envoyé à la base de données dans chaque requête. Par défaut : 5000.',
	'CONFIG_BUTTON'					=> 'Cliquez pour voir la configuration.',
	'CONFIG_CONVERTED'				=> 'Votre configuration a été mise à jour à partir de l’ancien style avec un fichier de configuration vers le nouveau style où vous pouvez enregistrer des profils. Il a été enregistré sous le nom « default ».<br />Vous pouvez maintenant enregistrer les paramètres pour les différents profils et les charger lorsque vous créez un forum.',
	'CONFIG_EMPTY'					=> 'Le tableau « config » est vide. Cela mériterait un rapport de bug.',
	'CONFIG_IS_DISPLAYED'			=> 'La configuration est affichée ci-dessous. Vous pouvez essayer de l’écrire manuellement dans un fichier dans le répertoire « settings ».<br />Assurez-vous que le nom du fichier se termine avec l’extension « .cfg ». Par exemple « settings/main.cfg ».',
	'CONFIG_NOT_WRITABLE'			=> 'Le répertoire « settings » n’est pas accessible en écriture.',
	'CONFIG_NOT_WRITTEN'			=> 'Le répertoire « settings » ne peut pas être modifié.',
	'CONFIG_WARNING'				=> 'Cliquez sur ce bouton pour voir la configuration. <b>Attention :</b> Les mots de passe inscrits seront affichés.',
	'COOKIE_DOMAIN'					=> 'Domaine du cookie',
	'COOKIE_DOMAIN_EXPLAIN'			=> 'Généralement <code>localhost</code>.',
	'COOKIE_SECURE'					=> 'Cookie sécurisé',
	'COOKIE_SECURE_EXPLAIN'			=> 'Si votre serveur est configuré pour utiliser le protocole SSL, définissez ce paramètre sur « Oui ». Sinon laissez-le sur « Non » pour éviter d’avoir des erreurs serveur lors des redirections.',
	'CREATE_ADMIN'					=> 'Créer un administrateur',
	'CREATE_ADMIN_EXPLAIN'			=> 'Crée un compte administrateur. Il ne sera pas fondateur. Il sera nommé <code>tester_1</code>.',
	'CREATE_BOARD'					=> 'Créer un forum',
	'CREATE_MOD'					=> 'Créer un modérateur',
	'CREATE_MOD_EXPLAIN'			=> 'Crée un compte modérateur global. Il sera nommé <code>tester_1</code> (ou <code>tester_2</code> si « Créer un administrateur » est activé).',
	'CURRENT_PROFILE'				=> 'Profil actif',

	'DB_EXISTS'						=> 'La base de données « %s » existe déjà.',
	'DB_PREFIX'						=> 'Préfixe de la base de données',
	'DB_PREFIX_EXPLAIN'				=> 'Ce préfixe est ajouté aux noms des bases de données afin d’éviter d’écraser celles non utilisées par QuickInstall.',
	'DB_SETTINGS'					=> 'Paramètres de base de données',
	'DBHOST'						=> 'Nom d’hôte du serveur de la base de données',
	'DBHOST_EXPLAIN'				=> 'Généralement <code>localhost</code>.<br />Pour SQLite, indiquez le chemin complet vers un répertoire où votre serveur web a les permissions en écriture.',
	'DBMS'							=> 'Type de base de données',
	'DBMS_EXPLAIN'					=> 'Votre système de base de données. En cas de doute, testez avec MySQLi.',
	'DBPASSWD'						=> 'Mot de passe de la base de données',
	'DBPASSWD_EXPLAIN'				=> 'Le mot de passe de l’utilisateur de la base de données.',
	'DBPORT'						=> 'Port de la base de données',
	'DBPORT_EXPLAIN'				=> 'Laissez ce paramètre vide sauf si vous savez que votre serveur de base de données fonctionne sur un port non standard.',
	'DBUSER'						=> 'Nom d’utilisateur de la base de données',
	'DBUSER_EXPLAIN'				=> 'Le nom d’utilisateur de votre base de données. Cela doit être un compte habilité à créer de nouvelles bases de données.',
	'DEFAULT_ENV'					=> 'Environnement par défaut (dernier phpBB)',
	'DEFAULT_LANG'					=> 'Langue par défaut',
	'DEFAULT_LANG_EXPLAIN'			=> 'Sélectionnez la langue qui sera utilisée par défaut sur les forums créés. Les packs de langue doivent être déposés dans le répertoire <code>sources/phpBB3/language/</code> afin d’être disponibles dans cette liste.',
	'DELETE'						=> 'Supprimer',
	'DELETE_FILES_IF_EXIST'			=> 'Supprimer les fichiers s’ils existent',
	'DELETE_FILES_IF_EXIST_EXPLAIN'	=> 'Activer par défaut « Supprimer les fichiers s’ils existent » lors de la création des forums.',
	'DELETE_PROFILE'				=> 'Supprimer un profil',
	'DELETE_SELECTED'				=> 'Supprimer la sélection',
	'DIR_EXISTS'					=> 'Le répertoire « <strong>%s</strong> » existe déjà.',
	'DIR_URL_SETTINGS'				=> 'Paramètres des répertoires et URL',
	'DOCS_LONG'						=> 'Documentation',
	'DROP_DB_IF_EXISTS'				=> 'Supprimer la base de données si elle existe',
	'DROP_DB_IF_EXISTS_EXPLAIN'		=> 'Activer par défaut « Supprimer la base de données si elle existe » lors de la création des forums.',

	'EMAIL_DOMAIN'			=> 'Domaine de l’adresse courriel',
	'EMAIL_DOMAIN_EXPLAIN'	=> 'Domaine de l’adresse courriel à utiliser pour les comptes de membres créés lors de la création du forum.<br />Les adresses courriels seront sous la forme : <code>tester_x@&lt;domain.tld&gt;</code>.',
	'EMAIL_ENABLE'			=> 'Activer les courriels',
	'EMAIL_ENABLE_EXPLAIN'	=> 'Activer l’envoi et la réception de courriels sur le forum. S’il s’agit d’un test en local, il n’est pas nécessaire de les activer, à moins que vous ne souhaitiez tester les courriels.',
	'EMAIL_SETTINGS'		=> 'Paramètres de courriel',
	'ENABLE_DEBUG'			=> 'Activer le débugueur',
	'ENABLE_DEBUG_EXPLAIN'	=> 'Affiche le temps de chargement, l’utilisation de la mémoire, les statistiques des requêtes et un rapport d’erreurs amélioré.',
	'ERRORS'				=> 'Des erreurs sont présentes',
	'ERROR_DEL_BOARDS'		=> 'Les forums suivants ne peuvent pas être supprimés',
	'ERROR_DEL_FILES'		=> 'Les fichiers suivants ne peuvent pas être supprimés',

	'FUNCTIONS_MODS_MISSING'	=> '« includes/automod/functions_mods.php » non trouvé.',
	'FORGOT_THIS'				=> 'VOUS AVEZ OUBLIÉ CECI !', // Should be upper case.
	'FOR_PHPBB_VERSIONS'		=> 'pour phpBB 3.0 - 4.0',

	'GENERAL_ERROR'				=> 'Erreur générale',
	'GO'						=> 'Aller',
	'GO_QI_MAIN'				=> '%sAller à la page principale%s',
	'GO_QI_SETTINGS'			=> '%sAller à la page de configuration%s',
	'GRANT_PERMISSIONS'			=> 'Accorder des autorisations supplémentaires',
	'GRANT_PERMISSIONS_EXPLAIN'	=> 'par exemple « 0060 » pour définir un accès groupe en lecture/écriture.',

	'IF_EMPTY_EXPLAIN'			=> 'Si elle est vide, la configuration par défaut sera utilisée.',
	'IF_LEAVE_EMPTY'			=> 'Si vous laissez le champ vide, vous devrez le renseigner lors de la création d’un forum.',
	'INSTALL_STYLES'			=> 'Installer des styles additionnels',
	'INSTALL_STYLES_EXPLAIN'	=> 'Installe tous les styles présents dans <code>[source]/styles</code>. L’installation d’un style sera ignorée si son style parent est manquant.',
	'INSTALL_QI'				=> 'Installer QuickInstall',
	'INSTALL_WELCOME'			=> 'Bienvenue sur QuickInstall, un outil permettant d’installer rapidement un forum phpBB pour les tests et le développement.<br /><br />Certains paramètres par défaut ont été chargés ci-dessous. Les seuls champs que vous devriez renseigner sont <code>Nom d’utilisateur de la base de données</code> et <code>Mot de passe de la base de données</code> si vous voulez qu’elles soient stockées par QuickInstall. Mais il serait bien de vérifier également les autres paramètres.<br /><br />Assurez-vous que les répertoires <code>boards</code> , <code>cache</code> et <code>settings</code> existent dans le répertoire racine de QuickInstall et qu’ils sont accessibles en écriture par PHP.<br /><br />Une fois que vous sauvegarderez ces paramètres, ils seront stockés dans le profil nommé « default ». Optionnellement vous pouvez saisir votre propre nom de profil dans le champ <code>Enregistrer en tant que nouveau profil</code>.',
	'IS_NOT_VALID'				=> 'N’est pas correct.',
	'IS_REQUIRED'				=> 'est requis',

	'LOG_INSTALL_INSTALLED_QI'	=> '<strong>Installé par QuickInstall %s</strong>',

	'MAKE_WRITABLE'					=> 'Rendre les fichiers accessibles en écriture',
	'MAKE_WRITABLE_EXPLAIN'			=> 'Rendre les fichiers, « config.php » et les répertoires accessibles en écriture par défaut.',
	'MAKE_WRITABLE_BOARD'			=> 'Rendre les fichiers accessibles en écriture',
	'MAKE_WRITABLE_BOARD_EXPLAIN'	=> 'Définit les permissions de fichiers à « 0666 ».',
	'MANAGE_BOARDS'					=> 'Gérer les forums',
	'MAX'							=> 'Max.',
	'MIGHT_TAKE_LONG'				=> 'La création du forum peut prendre plusieurs secondes voire minutes. N’envoyez pas le formulaire deux fois.',
	'MIN'							=> 'Min.',
	'MINOR_MISHAP'			=> 'Erreur',
	'MISC_OPTIONS'			=> 'Options diverses',
	'MISC_SETTINGS'			=> 'Paramètres divers',

	'NEED_CONVERT'			=> 'Votre fichier de configuration doit être converti au nouveau format de gestion de profils. Assurez-vous que le dossier « settings » est présent et qu’il est accessible en écriture par PHP. Puis cliquez sur « Envoyer ».',
	'NEED_EMAIL_DOMAIN'		=> 'Un domaine de l’adresse courriel est nécessaire pour créer des utilisateurs de test',
	'NEED_WRITABLE'			=> 'QuickInstall nécessite que les répertoires « cache » et « boards » soient accessibles en écriture de manière permanente.<br />le répertoire « settings » doit se trouver à la racine de QuickInstall et doit également être accessible en écriture.',
	'NO'					=> 'Non',
	'NO_ALT_ENV'			=> 'Aucun environnement alternatif n’a été trouvé.',
	'NO_ALT_ENV_FOUND'		=> 'L’environnement alternatif « <strong>%s</strong> » que vous avez spécifié n’existe pas.', // %s is the missing environment name
	'NO_AUTOMOD'			=> '<strong>AutoMOD est introuvable dans le répertoire « sources ».</strong><br />Vous devez télécharger AutoMOD, copier tout le contenu du répertoire <code>root</code> dans le répertoire <code>sources/automod</code>. Si vous utilisez AutoMOD 1.0.0 c’est le contenu du répertoire « upload ».',
	'NO_AUTOMOD_TITLE'		=> 'AutoMOD n’a pas été détecté',
	'NO_BOARDS'				=> 'Vous n’avez aucun forum.',
	'NO_DB'					=> 'Aucune base de données n’a été sélectionnée.',
	'NO_IMPACT_WIN'			=> 'Ce paramètre n’a aucun impact sur les systèmes Windows antérieurs à Windows 7.',
	'NO_MODULE'				=> 'Le module <strong>%s</strong> ne peut pas être chargé.',
	'NO_PASSWORD'			=> 'Aucun mot de passe',
	'NO_PHPINFO_AVAILABLE'	=> 'Les informations PHP n’ont pas pu être récupérées.',
	'NO_PROFILES'			=> 'Aucun profil.',
	'NO_DBPASSWD_ERR'		=> 'Vous avez enregistré un mot de passe de la base de données et n’avez sélectionné aucun mot de passe. Vous ne pouvez pas <strong>avoir</strong> et <strong>ne pas avoir</strong> de mot de passe.',
	'NUM_CATS'				=> 'Nombre de catégories',
	'NUM_CATS_EXPLAIN'		=> 'Nombre de catégories à créer.',
	'NUM_FORUMS'			=> 'Nombre de forums',
	'NUM_FORUMS_EXPLAIN'	=> 'Nombre de forums à créer. Ils seront répartis équitablement en fonction des catégories créées.',
	'NUM_NEW_GROUP'			=> 'Nombre de nouveaux membres',
	'NUM_NEW_GROUP_EXPLAIN'	=> 'Nombre de membres à placer dans le groupe « Nouveaux utilisateurs enregistrés ». Si ce nombre est plus important que le nombre de membres au total, tous les nouveaux membres seront placés dans le groupe « Nouveaux utilisateurs enregistrés ».',
	'NUM_REPLIES'			=> 'Nombre de réponses',
	'NUM_REPLIES_EXPLAIN'	=> 'Nombre de réponses. Chaque sujet recevra un nombre aléatoire de réponses en fonction des valeurs minimales et maximales que vous avez saisies.',
	'NUM_TOPICS'			=> 'Nombre de sujets',
	'NUM_TOPICS_EXPLAIN'	=> 'Nombre de sujets à créer dans chaque forum. Chaque forum contiendra un nombre aléatoire de sujets en fonction des valeurs minimales et maximales que vous avez saisies.',
	'NUM_USERS'				=> 'Nombre de membres',
	'NUM_USERS_EXPLAIN'		=> 'Nombre de membres à créer sur votre nouveau forum. Ils seront nommés <kbd>Tester_x</kbd> (x va de 1 juqu’au nombre de membres défini) et auront comme mot de passe <kbd>123456</kbd>.',

	'OFF'					=> 'Non',
	'ON'					=> 'Oui',
	'ONLY_30'				=> 'Disponible uniquement pour phpBB 3.0.x.',
	'ONLY_31'				=> 'Disponible uniquement pour phpBB 3.1.x.',
	'ONLY_32'				=> 'Disponible uniquement pour phpBB 3.2.x.',
	'ONLY_LOCAL'			=> 'QuickInstall est uniquement destiné à être utilisé localement et ne doit pas être utilisé sur un serveur web accessible via Internet (serveur web public). <strong>Si vous décidez de l’utiliser sur un serveur web public, c’est à vos risques et périls.</strong> Aucun support ne vous sera fourni si vous utilisez QuickInstall sur un serveur web public.',
	'ONLY_SUBSILVER'		=> 'subsilver2 seulement',
	'OPTIONS'				=> 'Options',
	'OTHER_CONFIG'			=> 'Paramètres additionnels de configuration du forum',
	'OTHER_CONFIG_EXPLAIN'	=> 'Ceux-ci seront mis à jour dans la table « config » ou ajoutés à la table « config » s’ils n’existent pas encore. <u>Assurez-vous de les orthographier correctement.</u> Ils peuvent également être modifiés lors de la création du forum.<br />Saisissez un paramètre de configuration par ligne et utilisez un point-virgule <kbd>;</kbd> comme séparateur de liste : <kbd>config-name;config-setting;dynamic</kbd>.<br />Si le paramètre n’est pas dynamique alors « dynamic » n’est pas nécessaire. Les lignes commençant par <kbd>#</kbd> sont considérées comme des commentaires et ne sont pas ajoutées à la base de données.<br /><br />Exemple :<br /><kbd>session_length;999999</kbd><br /><kbd>load_tplcompile;1;1</kbd><br /><kbd># ceci est un commentaire</kbd>',

	'PHPBB_QI_TEXT'		=> 'phpBB<small><sup><i class="glyphicon glyphicon-registration-mark" aria-hidden="true"></i></sup></small> QuickInstall',
	'PHPBB_QI_TITLE'	=> 'phpBB&reg; QuickInstall',

	'PHP7_INCOMPATIBLE'	=> 'Le forum que vous essayez d’installer n’est pas compatible avec PHP 7. Vous utilisez PHP %s.',
	'PHPINFO'			=> 'Informations PHP',
	'PHPINFO_TITLE'		=> 'Informations PHP',
	'PHPINFO_EXPLAIN'	=> 'Cette page affiche des informations sur la version de PHP installée sur ce serveur. Elle comprend des détails sur les modules chargés, les variables disponibles et les paramètres par défaut. Ces informations peuvent être utiles pour diagnostiquer les problèmes. Soyez conscient que certains hébergeurs limitent les informations affichées ici pour des raisons de sécurité. Nous vous conseillons de ne pas communiquer tous les détails de cette page, sauf lorsque cela est demandé par les membres des équipes officielles des forums de support.',
	'PLAIN_TEXT'		=> 'Note : QuickInstall stocke les mots de passe et noms d’utilisateurs en texte clair.',
	'POPULATE'			=> 'Remplir le forum',
	'POPULATE_EXPLAIN'	=> 'Permet de créer automatiquement des membres, des catégories, des forums, des sujets et des messages selon les paramètres spécifiés ci-dessous. Plus ces valeurs sont élevées, plus le temps de création du forum sera important.',
	'POPULATE_OPTIONS'	=> 'Options de remplissage',
	'POPULATE_SETTINGS'	=> 'Paramètres de remplissage',
	'POWERED_BY_PHPBB'	=> 'Propulsé par phpBB<sup>&reg;</sup> Forum Software &copy; <a href="https://www.phpbb.com/">phpBB Limited</a>',
	'PROFILES'			=> 'Profils',

	'QI_LANG'			=> 'Langue de QuickInstall',
	'QI_LANG_EXPLAIN'	=> 'Sélectionnez la langue à utiliser pour QuickInstall. Les langues disponibles sont stockées dans le répertoire <code>language/</code>.',
	'QI_MANAGE'			=> 'Gérer les forums',
	'QI_MANAGE_ABOUT'	=> '« Nom du répertoire et de la base de données du forum » est le seul champ que vous devez obligatoirement renseigner, les autres utiliseront les valeurs du profil sélectionné.',
	'QI_MANAGE_HEADINGS'=> 'Cliquez sur les titres ci-dessous pour accéder à plus d’options. Les modifications définies ici ne sont pas sauvegardées dans le profil actuellement utilisé.',
	'QI_MANAGE_PROFILE'	=> 'Gérer les profils',
	'QI_SETTINGS'		=> 'Paramètres de QuickInstall',
	'QI_TZ'				=> 'Fuseau horaire',
	'QI_TZ_EXPLAIN'		=> 'Définit le fuseau horaire par défaut pour les forums créés.<br />Pour la branche 3.0.x ce paramètre sera automatiquement converti en valeur numérique et DST (heure d’été).',
	'QUICKINSTALL'		=> 'QuickInstall',

	'REDIRECT'			=> 'Rediriger',
	'REDIRECT_EXPLAIN'	=> 'Redirige vers le nouveau forum après sa création.',
	'REDIRECT_BOARD'	=> 'Rediriger vers le nouveau forum',
	'RESET'				=> 'Réinitialiser',

	'SAVE'						=> 'Sauvegarder',
	'SAVE_PROFILE'				=> 'Enregistrer en tant que nouveau profil',
	'SAVE_PROFILE_EXPLAIN'		=> 'Saisissez un nom pour créer un nouveau profil avec ces paramètres, ou laissez ce champ vide pour mettre à jour le profil actif.<br /><br />Les caractères autorisés sont : <kbd>A-Z a-z 0-9 - _ .</kbd><br /><br />Note : Si un profil porte déjà ce nom, il sera écrasé.',
	'SAVE_SETTINGS'				=> 'Sauvegarder les paramètres',
	'SEARCH_HERE'				=> 'Rechercher ici…',
	'SET_DEFAULT_STYLE'			=> 'Définir le style par défaut',
	'SET_DEFAULT_STYLE_EXPLAIN'	=> 'Saisissez le nom du style que vous voulez définir comme style par défaut. Le nom du style peut être trouvé dans le fichier <code>styles/[nom_du_style]/style.cfg</code>. Prosilver sera défini par défaut si vous ne renseignez aucun nom de style ou que le style ne peut pas être installé.',
	'SETTINGS_FAILURE'			=> 'Les erreurs suivantes ont été detectées',
	'SETTINGS_NOT_WRITABLE'		=> 'Le répertoire des paramètres n’existe pas, n’est pas un répertoire ou n’est pas accessible en écriture.',
	'SETTINGS_SECTIONS'			=> 'Paramètres…',
	'SETTINGS_SUCCESS'			=> 'Vos paramètres ont été sauvegardés avec succès.',
	'SERVER_COOKIE_SETTINGS'	=> 'Paramètres de serveur et cookie',
	'SERVER_NAME'				=> 'Nom du serveur',
	'SERVER_NAME_EXPLAIN'		=> 'Généralement <code>localhost</code> car QuickInstall <strong>n’est pas</strong> destiné à être utilisé sur des serveurs publics.',
	'SERVER_PORT'				=> 'Port du serveur',
	'SERVER_PORT_EXPLAIN'		=> 'Généralement <code>80</code>.',
	'SHOW_CONFIRM'				=> 'Confirmer la suppression',
	'SHOW_CONFIRM_EXPLAIN'		=> 'Afficher une demande de confirmation avant de procéder à la suppression de forums ou de profils.',
	'SITE_DESC'					=> 'Description du site',
	'SITE_DESC_EXPLAIN'			=> 'La description par défaut de vos forums.',
	'SITE_NAME'					=> 'Nom du site',
	'SITE_NAME_EXPLAIN'			=> 'Le nom du site par défaut qui sera utilisé pour vos forums.',
	'SMTP_AUTH'					=> 'Méthode d’authentification pour SMTP',
	'SMTP_AUTH_EXPLAIN'			=> 'Cette option n’est utilisée que si un nom d’utilisateur SMTP et un mot de passe SMTP ont été renseignés.',
	'SMTP_DELIVERY'				=> 'Utiliser le serveur SMTP pour l’envoi de courriels',
	'SMTP_DELIVERY_EXPLAIN'		=> 'Activez cette option si vous souhaitez ou devez envoyer un courriel par l’intermédiaire d’un serveur nommé au lieu de la fonction de messagerie interne.',
	'SMTP_HOST'					=> 'Adresse du serveur SMTP',
	'SMTP_HOST_EXPLAIN'			=> 'L’adresse du serveur SMTP que vous souhaitez utiliser.',
	'SMTP_PASS'					=> 'Mot de passe SMTP',
	'SMTP_PASS_EXPLAIN'			=> 'Ne saisissez un mot de passe que si votre serveur SMTP le demande.',
	'SMTP_PORT'					=> 'Port du serveur SMTP',
	'SMTP_PORT_EXPLAIN'			=> 'Ne modifiez cela que si votre serveur SMTP utilise un port différent et que vous le connaissez.',
	'SMTP_USER'					=> 'Nom d’utilisateur SMTP',
	'SMTP_USER_EXPLAIN'			=> 'Ne saisissez un nom d’utilisateur que si votre serveur SMTP le demande.',
	'SQLITE_PATH_MISSING'		=> 'Le chemin de la base de données du serveur entré est absent ou n’est pas accessible en écriture.',
	'SUBMIT'					=> 'Envoyer',
	'SUCCESS'					=> 'Succès',
	'SURE_DELETE_PROFILE'		=> 'Êtes-vous sûr de vouloir supprimer le profil sélectionné ? Cette action ne peut pas être annulée.',
	'SURE_DELETE_BOARDS'		=> 'Êtes-vous sûr de vouloir supprimer le(s) forum(s) sélectionné(s) ? Cette action ne peut pas être annulée.',

	'TABLE_PREFIX'			=> 'Préfixe de table',
	'TABLE_PREFIX_EXPLAIN'	=> 'Ce préfixe sera ajouté aux noms des tables de la base de données de votre forum.',
	'TEST_CAT_NAME'			=> 'Catégorie de test %d',
	'TEST_FORUM_NAME'		=> 'Forum de test %d',
	'TEST_POST_START'		=> 'Message de test %d', // Ce sera sur la première ligne de chaque post, puis rempli avec lorem ipsum.
	'TEST_TOPIC_TITLE'		=> 'Sujet de test %d',
	'THESE_CAN_CHANGE'		=> 'Ces paramètres peuvent être modifiés lors de la création d’un forum.',
	'THIS_CAN_CHANGE'		=> 'Ceci peut être changé lors de la création d’un forum.',
	'TIME_SETTINGS'			=> 'Paramètres de temps',

	'UNCHECK_ALL'		=> 'Tout désélectionner',
	'UPDATE'			=> 'Mise à jour disponible',

	'VERSION_CHECK_TITLE'	=> 'La version %2$s de QuickInstall a été détectée. Cliquez ici pour télécharger la version %1$s.',

	'WORKING_ON_IT'			=> 'En cours de traitement…',

	'YES'					=> 'Oui',

	// Config updated strings.
	'UPDATED_EXPLAIN'	=> 'Votre profil a été mis à jour vers la version %s de QuickInstall. Ci-dessous vous trouverez la liste des modifications. Ces nouveaux paramètres ont été définis avec leur valeur par défaut, également indiquées ci-dessous.<br />Si vous souhaitez modifier ces nouveaux paramètres, accédez à la page de configuration en cliquant sur les liens présents en haut et bas de page. Si vous avez plus d’un profil, cliquez sur le bouton ci-dessous pour mettre à jour tous vos profils.', // %s will be replaced with QI version.
	'PROFILE_UPDATED'	=> 'Profil « %s » mis à jour', // %s will be replaced by a profile name.
	'PROFILES_UPDATED'	=> 'Les profils suivants ont été mis à jour',
	'UPDATE_PROFILES'	=> 'Mettre à jour les profils',

	'DST_REMOVED'		=> 'Le paramètre d’heure d’été (qi_dst) a été supprimé.',
	'TIMEZONE_UPDATED'	=> 'Le paramètre de fuseau horaire (qi_tz) a été mis à jour en remplaçant la valeur numérique par une valeur texte. La valeur « UTC » a été définie comme valeur par défaut.',

	'COLON'				=> ' :',
));
