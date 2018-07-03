<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'firstgit');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', 'pippo1234');

/** Hostname MySQL  */
define('DB_HOST', 'localhost:8889');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N+z .7p>T`JAJ;0omz9#MTW4KAH(__n(K&p.jG;TMC[D6]Y0 kl$2BpV/-.^k,JO');
define('SECURE_AUTH_KEY',  'B?Hq`>mij)wI;_KTbob&0&ht>!H<Wp_vyh9Y^<-@QTrhjw^dusuh?>,eKil2M_v`');
define('LOGGED_IN_KEY',    'J=ysY>O)_vgyD<Z]HWi(,&!)pv)&*3@p!J}.cCW3)CDN.xky0DW,Zw?gW1QGO57)');
define('NONCE_KEY',        'M)BvSeQ^$BB|ziELu^7P`#3M^ifq>A4 !@Jzbso,ZbS$M*h>UAr0==+TLKqNS3tr');
define('AUTH_SALT',        '))r[z[sn! X&!p<~U:^#5)h/XXep45_I*gc^)uxTr:C{HD0X/<o<a%-2:F2_2-Q+');
define('SECURE_AUTH_SALT', '~c@[kPl6%QVg1s L#Bj$P.+7O(%?{4RxB460!=DI!XeZ?@+k)uuBz4kM2s,X=cf.');
define('LOGGED_IN_SALT',   'I-r^3Ejcs;Q~k+n=O.OFt94c7-T,ZIa{2Atp)HhaG(Ou>^z7Rez[8]wiD:#6PtKc');
define('NONCE_SALT',       '*933iIgkqz` |LWwjmxr>hjQp97W>H=])RN.=Q0M6RE$xyK,|YOa7VKI>-w]Vt3o');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');