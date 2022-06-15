<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/data/web/vhosts/www.distant-shores.com/htdocs/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'distantshores');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!2uAe7RvTR-^ kqbQYaGMxZ^Mu}zQL(GW47jZM &Lel,|fBb./F,T07W=]$LKXL~');
define('SECURE_AUTH_KEY',  'o8um}E.w>G43o]WaL`OUM4=xd!JXIZ|<=Nqt}y cIuljQ%V0n=GLKh[iRXKIBNd8');
define('LOGGED_IN_KEY',    'fE)=pD>Fzt+Ni+^ uz@VYScCUq.?1G@5KIK}|^ ?bXK>lrYN0C,p?qO&-Uq$[GB!');
define('NONCE_KEY',        '_$:K3BJ{*g$-=$ZdMJ9Q*[XHviz)Cyhd8|XW>#GlaN#,ssW{b{^M={H~^&rlDD&z');
define('AUTH_SALT',        '>KF|w#Ek#/B[r1hRSF]%![%MI2:YTai,1&#A3: jZsXZ-XVKVTzFEd_6,3(J:8|:');
define('SECURE_AUTH_SALT', ':r1!Crav_Izj4ZNE)0z8iRQ81X~iNg)vNEzx!K}VBFTbN48YnPI?OCa&l1WJLj//');
define('LOGGED_IN_SALT',   'JHIG)3S;eN1_M: e[`+~OR-L|5I=f%*tsO08bYK&r-OBd|udfa;AL*n6A8o}i`W{');
define('NONCE_SALT',       ';|Kr W1(y+T>-$:.e,fk?yK,>(g[0|jLv>.@tid8FW,0s7>!VOL$Au+Q|DcXCU!@');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'yucqn_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');//Disable File Edits
define('DISALLOW_FILE_EDIT', true);