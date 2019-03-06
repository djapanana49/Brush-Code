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
define( 'DB_NAME', 'brush_and_code' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '.B[(T$Ke)T@_-06!;ykM T xAx7=?d(Y&|r274`FXF:./n/W9!2e5Uu =/Ez07cb' );
define( 'SECURE_AUTH_KEY',  'U[unHD3~0Ji5!u:kR`pCC{?RMT4M2WB7UUR%yB&MH{FAwWifnLrhnR!qjCNGX$:[' );
define( 'LOGGED_IN_KEY',    ' :kI%t%kAHu(TnXc}:*M;0=EUG.T8g7DYAbOnR;ZY`2{3=-Miia+QQuE2(Y.b/V*' );
define( 'NONCE_KEY',        'o8lovIB?ZywFA(z4]L`^5N@SjMe{AsiBl)v4cj#St.uU&~bAt#&Yd2T8]^U=D(j0' );
define( 'AUTH_SALT',        '{UrFhhCVI!1;cRJ:aD|P ;|$t%CpyAm&#12pYIizK <hqLN?YF,~8=7 i<!P8M)5' );
define( 'SECURE_AUTH_SALT', 'y]J3m,-EAXvNreZjB{@0>e#-fJCWdH+=iPw>j/?+ n386;: T[g-%,eMIDIK|h<S' );
define( 'LOGGED_IN_SALT',   'bU<iwC}RoQjyk=I~p$sgA~nKZ2Megb/hi2kxL<{6/fi$4shPSr6OU/: ?w.eT%tX' );
define( 'NONCE_SALT',       'crN9],+sIl% $}V~G5GY2Zk=CFK{0KTI_k$5!]gmn2n%LZ.>+JB!`Xh:tSGj*MX/' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');