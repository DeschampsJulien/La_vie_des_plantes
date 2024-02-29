<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'laviedesplantes' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':w)PtOf)*:1R(chMz1G`2uaIH0$U#c<}bHCQpDP/7ITFl7.Z|YJSjB&9h[dxpLKt' );
define( 'SECURE_AUTH_KEY',  '%[vY T=i8MDHTOmea7XQtS[}C$k< ?E<{x~MSh76!5r7&o.T8XzcYp<Fw>;gCzN{' );
define( 'LOGGED_IN_KEY',    'Ga;d?Ob}wc)F.Ci|F#PQh1pCK/FHA^YrP#@j?H`KEwj$z=Ce;1#,FtWHOT#qjkJa' );
define( 'NONCE_KEY',        'cCBE27WlHB.6]S<zI^T>Evq+eKju~0(#Zq!Mi|!1ulqsqTD+2_0D*%3&.wo8xc*`' );
define( 'AUTH_SALT',        '2wr!}ASof$$qA6A!Qhc!(|@tnHXa!!%[Gd JQ_hD1_YAUrKI%iw5m CQ9?H6uzt&' );
define( 'SECURE_AUTH_SALT', 'q(R%Ilp-E.CIFQ->M91!lk}:([O- C604<3+Zkrj~PEA[0$,S$wG1ic~$)bkv8.7' );
define( 'LOGGED_IN_SALT',   'fVKl]d,E&1y(O2(cQ,g$CN{>d&*O#m|WQ|3 &cs]h(L<5R!Kyn2lzi{&YS>qf?:A' );
define( 'NONCE_SALT',       '~JKsO7GQ$}ca<<CLc4l!B|:!Pc0Id*bN*YU}e@ A$k&IWSH*V2bXTK6M,/#cShS)' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'mp_laviedes';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
