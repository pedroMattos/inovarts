<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'inovarts_bd' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qW+<km59dezk~B L2r(0!;lZrZH5^kz22jdjM),Np8Qbf--fQeD/an@g@Prdu-:0' );
define( 'SECURE_AUTH_KEY',  '-)Eu+z6Ndm4SA;ZkSrmr@*PzJNAyFo,5#Q7F$kp7/Y8!5Hqh5S=02uoD%DS=*ZA7' );
define( 'LOGGED_IN_KEY',    '4,|T}unxZNsXSMs<7RwEB^8yKGR?rn`B^&;A`UuRQ7u35^(`iOC~{M_aS5GafIAt' );
define( 'NONCE_KEY',        'D^UCLWlnv%!~[I;d+.GmO$UsBCi-`@z}4fQFZ{]I]gMI~{wh$P9?@DY|:(JVPiUr' );
define( 'AUTH_SALT',        '6S)(sf*yG)] Y,1p]#K|23?_ukI1.O>`)lj@-jS>YPXOG_VCgOb3;Un~aA>ZpFz%' );
define( 'SECURE_AUTH_SALT', 'pG$d&^!=5CvAmWQX}d{V[y{}79dEg{|^Fu[R7|?)]CQ6n4c8U;hqU)?HgU5fH[LD' );
define( 'LOGGED_IN_SALT',   ')FD[<8 EBi@E3SO4oVLXtLzNzX~^k&qv<XNevmD5<wXe./~(pT?fkETv WPN>5yq' );
define( 'NONCE_SALT',       '>L1@Nfuw&xE&|~pnF_%[hn>%uvu5%!3c<W(iimk1^j+%Z}( nn]IkVV5PF~(/:eh' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
