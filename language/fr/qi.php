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
	'ABOUT_QUICKINSTALL'	=> 'À propos de QuickInstall',
	'ABOUT_SECTIONS'		=> 'À propos de…',
	'ADMIN_EMAIL'			=> 'Adresse e-mail de l’administrateur',
	'ADMIN_EMAIL_EXPLAIN'	=> 'Adresse e-mail de l’administrateur à utiliser sur vos forums.',
	'ADMIN_NAME'			=> 'Nom d’utilisateur de l’administrateur',
	'ADMIN_NAME_EXPLAIN'	=> 'Le nom d’utilisateur de l’administrateur à utiliser par défaut sur vos forums. Celui-ci peut être modifié lors de la création des forums.',
	'ADMIN_PASS'			=> 'Mot de passe de l’administrateur',
	'ADMIN_PASS_EXPLAIN'	=> 'Le mot de passe de l’administrateur à utiliser par défaut sur vos forums. Celui-ci peut être modifié lors de la création des forums.',
	'ADMIN_SETTINGS'		=> 'Paramètres d’administration',
	'ALT_ENV'				=> 'Autre environnement',
	'AUTOMOD'				=> 'AutoMOD',
	'AUTOMOD_EXPLAIN'		=> 'Règle par défaut l’installation d’AutoMOD sur « Oui ».',
	'AUTOMOD_INSTALL'		=> 'Installer AutoMOD',

	'BACK_TOP'				=> 'Retour en haut',
	'BOARD_CONFIG_OPTIONS'	=> 'Options de configuration du forum',
	'BOARD_CONFIG_SETTINGS'	=> 'Paramètres de configuration du forum',
	'BOARD_CONFIG_SETTINGS_EXPLAIN'	=> 'Les réglages effectués ici sont des paramètres généraux pour votre forum phpBB.',
	'BOARD_DBNAME'			=> 'Nom du répertoire et de la base de données du forum',
	'BOARD_DESC'			=> 'Description du forum',
	'BOARD_EMAIL'			=> 'Adresse e-mail du forum',
	'BOARD_EMAIL_EXPLAIN'	=> 'Adresse e-mail d’envoi lors de la création de forum.',
	'BOARD_NAME'			=> 'Nom du forum',
	'BOARDS'				=> 'Forums',
	'BOARDS_DIR'			=> 'Répertoire des forums',
	'BOARDS_DIR_EXPLAIN'	=> 'Le répertoire où seront créés vos forums. PHP nécessite des permissions en écriture sur ce répertoire.',
	'BOARDS_DIR_MISSING'	=> 'Le répertoire %s n’existe pas ou n’est pas autorisé en écriture.',
	'BOARDS_LIST'			=> 'Liste des forums',
	'BOARDS_URL'			=> 'Préfixe de l’URL des forums',
	'BOARDS_URL_EXPLAIN'	=> 'Préfixe de l’URL vers le répertoire des forums. Si vous spécifiez un répertoire absolu dans le paramètre « Répertoire des forums », vous devrez peut-être fournir ici un domaine et/ou le chemin qui mène vers le répertoire des forums. Si le répertoire des forums est un chemin relatif, vous pouvez simplement le copier ici.',

	'CACHE_DIR'						=> 'Répertoire du cache',
	'CACHE_DIR_EXPLAIN'				=> 'Le répertoire où QuickInstall stockera les fichiers. PHP nécessite des permissions en écriture sur ce répertoire.',
	'CACHE_DIR_MISSING'				=> 'Le répertoire %s n’existe pas ou n’est pas autorisé en écriture.',
	'CANNOT_DELETE_LAST_PROFILE'	=> 'Vous ne pouvez pas supprimer le seul profil que vous avez.',
	'CHANGELOG'						=> 'Modifications (en anglais)',
	'CHECK_ALL'						=> 'Tout sélectionner',
	'CHUNK_POST'					=> 'Blocs des messages',
	'CHUNK_POST_EXPLAIN'			=> 'Nombre de messages qui seront envoyés à la base de données dans chaque requête.',
	'CHUNK_SETTINGS'				=> 'Paramètres des blocs',
	'CHUNK_SETTINGS_EXPLAIN'		=> 'QuickInstall essaies de réduire le nombre de requêtes qu’il génère en créant des blocs de messages, sujets et utilisateurs. La taille d’un bloc influe sur le temps nécessaire pour peupler le forum. Il n’y a pas de paramètre type convenant à tout le monde. Si vous peuplez souvent vos forums avec QI, vous serez amené à tester différents paramètres. Des blocs trop larges consommeront plus de mémoire et des blocs trop petits solliciterons trop souvent la Base de données. Nous pensons que les paramètres définis par défaut sont un bon compromis.',
	'CHUNK_TOPIC'					=> 'Blocs de sujets',
	'CHUNK_TOPIC_EXPLAIN'			=> 'Nombre de sujets qui seront envoyés à la base de données dans chaque requête.',
	'CHUNK_USER'					=> 'Bloc d’utilisateurs',
	'CHUNK_USER_EXPLAIN'			=> 'Nombre d’utilisateurs qui sera envoyé à la base de données dans chaque requête.',
	'CONFIG_BUTTON'					=> 'Cliquez pour voir la configuration.',
	'CONFIG_CONVERTED'				=> 'Votre configuration a été mise à jour à partir de l’ancien style avec un fichier de configuration vers le nouveau style où vous pouvez enregistrer des profils. Il a été enregistré sous le nom « default ».<br />Vous pouvez maintenant enregistrer les paramètres pour les différents profils et les charger lorsque vous créez un forum.',
	'CONFIG_EMPTY'					=> 'Le tableau « config » est vide. Cela mériterait un rapport de bug.',
	'CONFIG_IS_DISPLAYED'			=> 'La configuration est affichée ci-dessous. Vous pouvez essayer de l’écrire manuellement dans le fichier « qi_config.php ».',
	'CONFIG_NOT_WRITABLE'			=> 'Le fichier « qi_config.cfg » n’est pas accessible en écriture.',
	'CONFIG_NOT_WRITTEN'			=> 'Le fichier « qi_config.cfg » ne peut pas être modifié.',
	'CONFIG_WARNING'				=> 'Cliquez sur ce bouton pour voir la configuration. <b>Attention :</b> Les mots de passe inscrits seront affichés.',
	'COOKIE_DOMAIN'					=> 'Domaine du cookie',
	'COOKIE_DOMAIN_EXPLAIN'			=> 'Cela correspond généralement à « localhost ».',
	'COOKIE_SECURE'					=> 'Cookie sécurisé',
	'COOKIE_SECURE_EXPLAIN'			=> 'Si votre serveur fonctionne par l’intermédiaire du protocole SSL, définissez cette option sur « Oui » sinon laissez la sur « Non ». Si vous activez cette option alors que votre site Internet n’est pas accessible par le protocole SSL, des erreurs se produiront lors des redirections.',
	'CREATE_ADMIN'					=> 'Créer un administrateur',
	'CREATE_ADMIN_EXPLAIN'			=> 'Mettre sur « Oui » si vous souhaitez créer un administrateur qui ne sera pas fondateur. Il portera le nom de « tester_1 ».',
	'CREATE_MOD'					=> 'Créer un modérateur',
	'CREATE_MOD_EXPLAIN'			=> 'Mettre sur « Oui » si vous souhaitez un modérateur global. Ce sera « tester_1 » ou « tester_2 » si un administrateur a été créé par l’option ci-dessus.',

	'DB_EXISTS'						=> 'La base de données « %s » existe déjà.',
	'DB_PREFIX'						=> 'Préfixe de la base de données',
	'DB_PREFIX_EXPLAIN'				=> 'Ceci est ajouté devant tous les noms de base de données afin d’éviter d’écraser les bases de données non utilisées par QuickInstall.',
	'DB_SETTINGS'					=> 'Paramètres de base de données',
	'DBHOST'						=> 'Serveur de la base de données',
	'DBHOST_EXPLAIN'				=> 'Généralement « localhost ».<br />Si vous utilisez SQLite, indiquez le chemin absolu vers un répertoire où votre serveur web a les permissions en écriture.',
	'DBMS'							=> 'SGBD',
	'DBMS_EXPLAIN'					=> 'Votre système de base de données. Si vous n’êtes pas certain de ce que vous devez mettre, réglez-le sur MySQL.',
	'DBPASSWD'						=> 'Mot de passe de la base de données',
	'DBPASSWD_EXPLAIN'				=> 'Le mot de passe de l’utilisateur de la base de données.',
	'DBPORT'						=> 'Port de la base de données',
	'DBPORT_EXPLAIN'				=> 'Peut être généralement laissé vide.',
	'DBUSER'						=> 'Utilisateur de la base de données',
	'DBUSER_EXPLAIN'				=> 'L’utilisateur de votre base de données. Cela doit être un utilisateur habilité à créer de nouvelles bases de données.',
	'DEFAULT_ENV'					=> 'Environnement par défaut (dernier phpBB)',
	'DEFAULT_LANG'					=> 'Langue par défaut',
	'DEFAULT_LANG_EXPLAIN'			=> 'Cette langue sera utilisée sur les forums créés.',
	'DELETE'						=> 'Supprimer',
	'DELETE_FILES_IF_EXIST'			=> 'Supprimer les fichiers s’ils existent',
	'DELETE_FILES_IF_EXIST_EXPLAIN'	=> 'Activer par défaut « Supprimer les fichiers s’ils existent » lors de la création des forums.',
	'DELETE_PROFILE'				=> 'Supprimer un profil',
	'DELETE_PROFILE_EXPLAIN'		=> 'Supprime le profil sélectionné.<br /><strong>Attention : Aucune annulation possible.</strong>',
	'DELETE_SELECTED'				=> 'Supprimer la sélection',
	'DIR_EXISTS'					=> 'Le répertoire « <strong>%s</strong> » existe déjà.',
	'DIR_URL_SETTINGS'				=> 'Paramètres des répertoires et URL',
	'DOCS_LONG'						=> 'Documentation',
	'DROP_DB_IF_EXISTS'				=> 'Supprimer la base de données si elle existe',
	'DROP_DB_IF_EXISTS_EXPLAIN'		=> 'Activer par défaut « Supprimer la base de données si elle existe » lors de la création des forums.',

	'EMAIL_DOMAIN'			=> 'Domaine de l’adresse e-mail',
	'EMAIL_DOMAIN_EXPLAIN'	=> 'Domaine de l’adresse e-mail à utiliser pour les testeurs.<br />Les adresses e-mail seront sous la forme : tester_x@&lt;domain.com&gt;.',
	'EMAIL_ENABLE'			=> 'Activer les e-mails',
	'EMAIL_ENABLE_EXPLAIN'	=> 'Activer l’envoi et la réception d’e-mails sur le forum. S’il s’agit d’un test en local, il n’est pas nécessaire de les activer, à moins que vous ne souhaitiez tester les e-mails.',
	'EMAIL_SETTINGS'		=> 'Paramètres e-mail',
	'ERRORS'				=> 'Des erreurs sont présentes',
	'ERROR_DEL_BOARDS'		=> 'Les forums suivants ne peuvent pas être supprimés',
	'ERROR_DEL_FILES'		=> 'Les fichiers suivants ne peuvent pas être supprimés',

	'FUNCTIONS_MODS_MISSING'	=> '« includes/automod/functions_mods.php » non trouvé.',
	'FORGOT_THIS'				=> 'VOUS AVEZ OUBLIÉ CECI !', // Should be upper case.

	'GENERAL_ERROR'				=> 'Erreur générale',
	'GO'						=> 'Aller',
	'GO_QI_MAIN'				=> '%sAller à la page principale%s',
	'GO_QI_SETTINGS'			=> '%sAller à la page de configuration%s',
	'GRANT_PERMISSIONS'			=> 'Accorder des autorisations supplémentaires',
	'GRANT_PERMISSIONS_EXPLAIN'	=> '(par exemple 0060 pour le groupe en lecture/écriture)',

	'IF_EMPTY_EXPLAIN'			=> 'Si elle est vide, la configuration par défaut sera utilisée.',
	'IF_LEAVE_EMPTY'			=> 'Si vous laissez le champ vide, vous devrez le renseigner lors de la création d’un forum.',
	'IN_SETTINGS'				=> 'Gérer vos profils de QuickInstall.',
	'INSTALL_STYLES'			=> 'Installer les styles',
	'INSTALL_STYLES_EXPLAIN'	=> 'Si défini sur « Oui » les styles présents dans « [source]/styles » seront installés sauf si le style parent n’est pas disponible.',
	'INSTALL_QI'				=> 'Installer QuickInstall',
	'IS_NOT_VALID'				=> 'N’est pas correct.',

	'LICENSE'					=> 'Licence ?',
	'LICENSE_EXPLAIN'			=> 'Ce script est publié sous la <a href="license.txt">licence publique générale GNU version 2</a>. C’est principalement dû au fait qu’il utilise une grande partie du code de phpBB, qui est également sous cette licence, obligeant que toute modification effectuée hérite également de la même licence. Mais aussi parce qu’il s’agit d’une superbe licence qui fait qu’un logiciel libre soit et continue de rester libre :).',
	'LOG_INSTALL_INSTALLED_QI'	=> '<strong>Installé par QuickInstall %s</strong>',

	'MAKE_WRITABLE'					=> 'Rendre les fichiers accessibles en écriture',
	'MAKE_WRITABLE_EXPLAIN'			=> 'Rendre les fichiers, « config.php » et les répertoires accessibles en écriture par défaut.',
	'MAKE_WRITABLE_BOARD'			=> 'Rendre les fichiers accessibles en écriture',
	'MAKE_WRITABLE_BOARD_EXPLAIN'	=> '(équivaut à accorder la permission « 0666 »)',
	'MANAGE_BOARDS'					=> 'Gérer les forums',
	'MAX'							=> 'Max.',
	'MIGHT_TAKE_LONG'				=> '<strong>Informations : </strong>La création du forum peut prendre un certain temps, souvent une minute voire plus. Faites donc attention à <strong>ne pas</strong> envoyer le formulaire deux fois !',
	'MIN'							=> 'Min.',
	'MINOR_MISHAP'			=> 'Erreur',
	'MISC_SETTINGS'			=> 'Paramètres divers',

	'NEED_CONVERT'			=> 'Votre fichier de configuration doit être converti au nouveau format de gestion de profils. Assurez-vous que le dossier « settings » est présent et qu’il est accessible en écriture par PHP. Puis cliquez sur « Envoyer ».',
	'NEED_EMAIL_DOMAIN'		=> 'Un domaine de l’adresse e-mail est nécessaire pour créer des utilisateurs de test',
	'NEED_WRITABLE'			=> 'QuickInstall nécessite que les répertoires « cache » et « boards » soient accessibles en écriture de manière permanente.<br />le fichier « qi_config.php » a également besoin d’être accessible en écriture afin de sauvegarder la configuration de QuickInstall.',
	'NO'					=> 'Non',
	'NO_ALT_ENV'			=> 'Aucun environnement alternatif n’a été trouvé.',
	'NO_ALT_ENV_FOUND'		=> 'L’environnement alternatif « <strong>%s</strong> » que vous avez spécifié n’existe pas.', // %s is the missing environment name
	'NO_AUTOMOD'			=> '<strong>AutoMOD est introuvable dans le répertoire « sources ».</strong><br />Vous devez télécharger AutoMOD, copier tout le contenu du répertoire « root » dans le répertoire « sources/automod ». Si vous utilisez AutoMOD 1.0.0 c’est le contenu du répertoire « upload ».',
	'NO_AUTOMOD_TITLE'		=> 'AutoMOD n’a pas été détecté',
	'NO_BOARDS'				=> 'Vous n’avez aucun forum.',
	'NO_DB'					=> 'Aucune base de données n’a été sélectionnée.',
	'NO_IMPACT_WIN'			=> 'Ce paramètre n’a aucun impact sur les systèmes Windows antérieurs à Windows 7.',
	'NO_MODULE'				=> 'Le module <strong>%s</strong> ne peut pas être chargé.',
	'NO_PASSWORD'			=> 'Aucun mot de passe',
	'NO_PROFILES'			=> 'Aucun profil.',
	'NO_DBPASSWD_ERR'		=> 'Vous avez enregistré un mot de passe de la base de données et n’avez sélectionné aucun mot de passe. Vous ne pouvez pas <strong>avoir</strong> et <strong>ne pas avoir</strong> de mot de passe.',
	'NUM_CATS'				=> 'Nombre de catégories',
	'NUM_CATS_EXPLAIN'		=> 'Nombre de catégories à créer.',
	'NUM_FORUMS'			=> 'Nombre de forums',
	'NUM_FORUMS_EXPLAIN'	=> 'Nombre de forums à créer. Ils seront répartis équitablement en fonction des catégories créées.',
	'NUM_NEW_GROUP'			=> 'Nombre de nouveaux utilisateurs',
	'NUM_NEW_GROUP_EXPLAIN'	=> 'Nombre d’utilisateurs à placer dans le groupe « Nouveaux utilisateurs enregistrés ».<br />Si ce nombre est plus important que le nombre d’utilisateurs au total, tous les nouveaux utilisateurs seront placés dans le groupe « Nouveaux utilisateurs enregistrés ».',
	'NUM_REPLIES'			=> 'Nombre de réponses',
	'NUM_REPLIES_EXPLAIN'	=> 'Nombre de réponses. Chaque sujet recevra un nombre aléatoire de réponses en fonction des valeurs maximales et minimales que vous avez saisies.',
	'NUM_TOPICS'			=> 'Nombre de sujets',
	'NUM_TOPICS_EXPLAIN'	=> 'Nombre de sujets à créer dans chaque forum. Chaque forum contiendra un nombre aléatoire de sujets en fonction des valeurs maximales et minimales que vous avez saisies.',
	'NUM_USERS'				=> 'Nombre d’utilisateurs',
	'NUM_USERS_EXPLAIN'		=> 'Nombre d’utilisateurs à inscrire sur votre nouveau forum.<br />Noms d’utilisateurs : <strong>Tester_x</strong> (x correspondant à un nombre)<br />Mots de passe : <strong>123456</strong>',

	'OFF'					=> 'Non',
	'ON'					=> 'Oui',
	'ONLY_30'				=> 'Disponible uniquement pour phpBB 3.0.x',
	'ONLY_31'				=> 'Disponible uniquement pour phpBB 3.1.x',
	'ONLY_32'				=> 'Disponible uniquement pour phpBB 3.2.x',
	'ONLY_LOCAL'			=> '<strong>Bienvenue sur QuickInstall (QI)</strong>, un outil permettant d’installer rapidement un forum phpBB de test.<br /><br />Certains paramètres par défaut ont été chargés ci-dessous. Les seules informations à renseigner sont « Utilisateur de la base de données » et « Mot de passe de la base de données » si vous voulez qu’elles soient stockées par QuickInstall. Mais il serait bien de vérifier également les autres paramètres.<br />Assurez-vous que les répertoires « boards » , « cache » et « settings » existent et sont accessibles en écriture par PHP.<br /><br />Une fois que vous avez vérifié les paramètres et les répertoires requis, il suffit de cliquer sur le bouton « Envoyer » et ce profil sera sauvegardé sous le nom « default ».<br />Si vous souhaitez définir un autre nom, vous pouvez en renseigner un dans le champ « Enregistrer en tant que nouveau profil ».<div class="errorbox"><strong>Attention</strong> : QuickInstall  est uniquement destiné à être utilisé localement et ne doit pas être utilisé sur un serveur web accessible via Internet (serveur web public). <strong>Si vous décidez de l’utiliser sur un serveur web public, c’est à vos risques et périls.</strong> Aucun support ne vous sera fourni si vous utilisez QuickInstall sur un serveur web public.</div>',
	'ONLY_SUBSILVER'		=> 'subsilver2 seulement',
	'OPTIONS'				=> 'Options',
	'OTHER_CONFIG'			=> 'Autres paramètres de configuration du forum',
	'OTHER_CONFIG_EXPLAIN'	=> 'Ceux-ci seront mis à jour dans la table « config » ou ajoutés à la table « config » s’ils n’existent pas encore. Donc, assurez-vous de les orthographier correctement. Ils peuvent également être modifiés lors de la création du forum.<br />Mettre un paramètre de configuration par ligne et un point-virgule « ; » comme séparateur de liste : « config-name; config-setting; dynamic ».<br />Si le paramètre n’est pas dynamique alors « dynamic » n’est pas nécessaire. Les lignes commençant par un <strong>#</strong> sont considérées comme des commentaires et ne sont pas ajoutées à la base de données.<br />Exemple :<br />load_tplcompile;1;1<br />session_length;999999<br /># ceci est un commentaire',

	'PHPINFO'				=> 'Informations PHP',
	'PHPINFO_EXPLAIN'		=> '<strong>Informations PHP</strong><br /><br />Cette page affiche des informations sur la version de PHP installée sur ce serveur. Elle comprend des détails sur les modules chargés, les variables disponibles et les paramètres par défaut. Ces informations peuvent être utiles pour diagnostiquer les problèmes. Soyez conscient que certains hébergeurs limitent les informations affichées ici pour des raisons de sécurité. Nous vous conseillons de ne pas communiquer tous les détails de cette page, sauf lorsque cela est demandé par les membres des équipes officielles des forums de support.',
	'PLAIN_TEXT'			=> '<strong>Information</strong> : QuickInstall stocke les mots de passe et noms d’utilisateurs en texte clair.',
	'POPULATE'				=> 'Remplir le forum',
	'POPULATE_EXPLAIN'		=> 'Permet de créer automatiquement des utilisateurs, des catégories, des forums, des sujets et des messages selon les paramètres spécifiés ci-dessous. Plus ces valeurs sont élevées, plus le temps de création du forum sera important.<br />Tous ces paramètres peuvent être modifiés lorsque vous créez un forum.',
	'POPULATE_MAIN_EXPLAIN'	=> 'Noms d’utilisateurs : Tester_x<br />Mots de passe : 123456',
	'POPULATE_OPTIONS'		=> 'Options de remplissage',
	'POPULATE_SETTINGS'		=> 'Paramètres de remplissage',
	'PROFILES'				=> 'Profils',

	'QI_ABOUT'				=> 'À propos de QuickInstall',
	'QI_LANG'				=> 'Langue de QuickInstall',
	'QI_LANG_EXPLAIN'		=> 'Liste des langues disponibles pour QuickInstall. La langue sera visible dès que le pack de langue sera installé dans le répertoire « language/ ».',
	'QI_LANG_SETTINGS'		=> 'Paramètres de langue',
	'QI_MANAGE'				=> 'Gérer les forums',
	'QI_MANAGE_ABOUT'		=> 'Depuis cette page, vous pouvez installer un nouveau forum ou supprimer ceux qui ne servent plus.<br /><br />« Nom du répertoire et de la base de données du forum » est le seul champ que vous devez obligatoirement renseigner, les autres utiliseront les valeurs du profil sélectionné.<br /><br />Cliquez sur « Paramètres divers », « Options de remplissage » ou « Options de configuration du forum » pour accéder à plus de paramètres. Veuillez noter que les changements de paramètres effectués ici ne sont pas sauvegardés.',
	'QI_MANAGE_PROFILE'		=> 'Gérer les profils',
	'QI_TZ'					=> 'Fuseau horaire',
	'QI_TZ_EXPLAIN'			=> 'Ce fuseau horaire sera défini par défaut pour les forums créés.<br />Pour les forums 3.0 ce paramètre sera automatiquement converti en valeur numérique et DST (heure d’été).',
	'QUICKINSTALL'			=> 'QuickInstall',

	'REDIRECT'				=> 'Rediriger',
	'REDIRECT_EXPLAIN'		=> 'Active par défaut une redirection vers les nouveaux forums.',
	'REDIRECT_BOARD'		=> 'Rediriger vers le nouveau forum',
	'REQUIRED'				=> 'est obligatoire',
	'RESET'					=> 'Réinitialiser',
	'RETURN_MANAGE'			=> 'Revenez à l’onglet de Management',

	'SAVE_PROFILE'				=> 'Enregistrer en tant que nouveau profil',
	'SAVE_PROFILE_EXPLAIN'		=> 'Écrivez le nom d’un nouveau profil pour ces paramètres. Les caractères autorisés sont A-Z, a-z, 0-9, "-" (signe moins), "_" (souligné) et "." (point)<br /><strong>Information : Si un profil avec ce nom existe déjà, il sera écrasé.</strong>',
	'SAVE_RESTORE'				=> 'Sauvegarder/Restaurer',
	'SELECT_PROFILE'			=> 'Sélectionner un profil',
	'SET_DEFAULT_STYLE'			=> 'Définir le style par défaut',
	'SET_DEFAULT_STYLE_EXPLAIN'	=> 'Saisir le nom du style que vous voulez définir comme style par défaut. Le nom du style sera recherché dans le fichier « styles/[nom_du_style]/style.cfg ». Prosilver sera défini par défaut si vous ne renseignez aucun nom de style ou que le style ne peut pas être installé.',
	'SETTINGS_FAILURE'			=> 'Des erreurs sont survenues, consultez la fenêtre ci-dessous.',
	'SETTINGS_NOT_WRITABLE'		=> 'Le répertoire des paramètres n’existe pas, n’est pas un répertoire ou n’est pas accessible en écriture.',
	'SETTINGS_SECTIONS'			=> 'Paramètres…',
	'SETTINGS_SUCCESS'			=> 'Vos paramètres ont été sauvegardés avec succès.',
	'SERVER_COOKIE_SETTINGS'	=> 'Paramètres de serveur et cookie',
	'SERVER_NAME'				=> 'Nom du serveur',
	'SERVER_NAME_EXPLAIN'		=> 'Cela devrait généralement être « localhost » car QuickInstall n’est pas destiné pour les serveurs publics.',
	'SERVER_PORT'				=> 'Port du serveur',
	'SERVER_PORT_EXPLAIN'		=> 'Généralement 80.',
	'SHOW_CONFIRM'				=> 'Confirmer la suppression',
	'SHOW_CONFIRM_EXPLAIN'		=> 'Voir la demande de confirmation lors de la suppression des forums et des profils.',
	'SITE_DESC'					=> 'Description du site',
	'SITE_DESC_EXPLAIN'			=> 'La description par défaut de vos forums. Celle-ci peut être modifiée lors de la création des forums.',
	'SITE_NAME'					=> 'Nom du site',
	'SITE_NAME_EXPLAIN'			=> 'Le nom du site par défaut de vos forums. Celui-ci peut être modifié lors de la création des forums.',
	'SMTP_AUTH'					=> 'Méthode d’authentification pour SMTP',
	'SMTP_AUTH_EXPLAIN'			=> 'Ne doit être utilisé que si un nom d’utilisateur et un mot de passe ont été renseignés.',
	'SMTP_DELIVERY'				=> 'Utiliser le serveur SMTP pour l’envoi d’e-mails',
	'SMTP_DELIVERY_EXPLAIN'		=> 'Sélectionnez « Oui » si vous souhaitez ou devez envoyer un e-mail par l’intermédiaire d’un serveur nommé au lieu de la fonction locale d’e-mails.',
	'SMTP_HOST'					=> 'Adresse du serveur SMTP',
	'SMTP_HOST_EXPLAIN'			=> 'L’adresse du serveur SMTP que vous souhaitez utiliser.',
	'SMTP_PASS'					=> 'Mot de passe SMTP',
	'SMTP_PASS_EXPLAIN'			=> 'Ne saisissez un mot de passe que si votre serveur SMTP le demande.',
	'SMTP_PORT'					=> 'Port du serveur SMTP',
	'SMTP_PORT_EXPLAIN'			=> 'Ne modifiez cela que si votre serveur SMTP utilise un port différent et que vous le connaissez.',
	'SMTP_USER'					=> 'Nom d’utilisateur SMTP',
	'SMTP_USER_EXPLAIN'			=> 'Ne saisissez un nom d’utilisateur que si votre serveur SMTP le demande.',
	'SQLITE_PATH_MISSING'		=> 'Le chemin de la base de données du serveur entré est absent ou n’est pas accessible en écriture.',
	'STAR_MANDATORY'			=> '* = obligatoire',
	'SUBMIT'					=> 'Envoyer',
	'SUCCESS'					=> 'Succès',
	'SURE_DELETE_PROFILE'		=> 'Êtes-vous sûr de vouloir supprimer ce profil ? Cela ne peut pas être annulé.',
	'SURE_DELETE_BOARDS'		=> 'Êtes-vous sûr de vouloir supprimer ce(s) forum(s) ? Cela ne peut pas être annulé.',

	'TABLE_PREFIX'			=> 'Préfixe de table',
	'TABLE_PREFIX_EXPLAIN'	=> 'Le préfixe de table qui sera utilisé pour vos forums. Vous pouvez le modifier dans les options avancées lorsque vous créez de nouveaux forums.',
	'TEST_CAT_NAME'			=> 'Catégorie de test %d',
	'TEST_FORUM_NAME'		=> 'Forum de test %d',
	'TEST_POST_START'		=> 'Message de test %d', // Ce sera sur la première ligne de chaque post, puis rempli avec lorem ipsum.
	'TEST_TOPIC_TITLE'		=> 'Sujet de test %d',
	'THESE_CAN_CHANGE'		=> 'Ces paramètres peuvent être modifiés lors de la création d’un forum.',
	'THIS_CAN_CHANGE'		=> 'Ceci peut être changé lors de la création d’un forum.',
	'TIME_SETTINGS'			=> 'Paramètres de temps',

	'UNCHECK_ALL'			=> 'Tout déselectionner',

	'YES'					=> 'Oui',

	'WHAT'					=> 'Qu’est-ce ?',
	'WHAT_EXPLAIN'			=> 'QuickInstall est un script permettant d’installer rapidement phpBB. C’est assez évident… ;-)',
	'WHO_ELSE'				=> 'Qui d’autre ?',
	'WHO_ELSE_EXPLAIN'		=> '<ul><li>' . implode('</li><li>', array(
		'Les crédits reviennent à l’équipe de phpBB, plus particulièrement à l’équipe de développement qui a réussi à créer ce logiciel d’excellente qualité.',
		'Merci à l’équipe des MODs de phpBB.com (plus spécialement à Josh, également connu sous le nom de « A_Jelly_Doughnut ») pour AutoMOD, qui est intégré à cette archive.',
		'Merci à Mike TUMS pour le superbe logo !',
		'Merci aux bêta testeurs !',
		'Merci à la communauté de phpBB, dont phpBB.com, startrekguide.com et phpBBModders.net !',
	)) . '</li></ul>',
	'WHO_WHEN'				=> 'Qui ? Quand ?',
	'WHO_WHEN_EXPLAIN'		=> 'QuickInstall a été créé à l’origine par Igor Wiedler, également connu sous le nom de « igorw », durant l’été 2007. Il a été en partie réécrit par lui-même en mars 2008.<br />Depuis mars 2010, ce projet est maintenu par Jari Kanerva, également connu sous le nom de « Tumba25 ».',
	'WHY'					=> 'Pourquoi ?',
	'WHY_EXPLAIN'			=> 'Tout comme avec phpBB2, si vous faites beaucoup de modding (installation de modifications), vous ne pouvez pas installer tous les MODs dans une seule installation de phpBB. Il est donc préférable de faire des installations séparées. Maintenant, le problème est qu’il est pénible de copier les fichiers et de passer par le processus d’installation à chaque fois. Pour accélérer ce processus, QuickInstall est né.',

	// Config updated strings.
	'UPDATED_EXPLAIN'	=> 'Votre profil a été mis à jour vers la version %s de QuickInstall. Ci-dessous vous trouverez la liste des modifications. Ces nouveaux paramètres ont été définis avec leur valeur par défaut, également indiquées ci-dessous.<br />Si vous souhaitez modifier ces nouveaux paramètres, accédez à la page de configuration en cliquant sur les liens présents en haut et bas de page. Si vous avez plus d’un profil, cliquez sur le bouton ci-dessous pour mettre à jour tous vos profils.', // %s will be replaced with QI version.
	'PROFILE_UPDATED'	=> 'Profil « %s » mis à jour', // %s will be replaced by a profile name.
	'PROFILES_UPDATED'	=> 'Les profils suivants ont été mis à jour',
	'UPDATE_PROFILES'	=> 'Mettre à jour les profils',

	'DST_REMOVED'		=> 'Le paramètre d’heure d’été (qi_dst) a été supprimé.',
	'TIMEZONE_UPDATED'	=> 'Le paramètre de fuseau horaire (qi_tz) a été mis à jour en remplaçant la valeur numérique par une valeur texte. La valeur « UTC » a été définie comme valeur par défaut.',

));
