<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'bolu_db' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', 'oldugukadar' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5 `DPs2DV4ZzwE6^_q;pPB@r&<_%xyp`9sgq0*RtW<(>0XIlwYbb`kKmIyHR5BG>' );
define( 'SECURE_AUTH_KEY',  '_HT/us&m{N^X4l2h^!Gh7)eB3u(f!hB]W%Y)g%a$*2-~XEdnL@Mt7cbyN;jXYz{X' );
define( 'LOGGED_IN_KEY',    '0o1(RFyN;g$m6~:JYyz[7&)_h3[9*.!]PpxM>GvHvl@%r_4l=pQO$a)`2R|L2Y~e' );
define( 'NONCE_KEY',        'wL(t*h}w].Oiq`x?EaWD(YGClr.;3qC(<+GwxB4/6~yx*PN!uUeNW!hF(qse Ec4' );
define( 'AUTH_SALT',        'IC_]^ W z:n=XjqhMF*15v=>4HuLekda)Btg4(|gjlS@65ObHx*;V&SZxnbvvH|)' );
define( 'SECURE_AUTH_SALT', 'WeR]PK )~rg{NBV^hh7ftNgSi [TGlz2=nD@!W8:)mp)T8}uih#4<mGAK@%aW%3Z' );
define( 'LOGGED_IN_SALT',   '%X<z#ZCXw!p WOWWDc;96Qxm)s9X9Rn_/U%58&)aoncue0,h/.vIw>0wU7`Q)^1h' );
define( 'NONCE_SALT',       'p=+5].:Y9eXOU{G.FX-_dn=R<ins;CPd):j`DkS|M|q5#U+@bkDM4!f6;#Buj4/P' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
