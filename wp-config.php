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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5dhg3O-u%,aZFUwzqRWOV)+9_(KwD91~D?-R)I(ZzmhiTGk{~+4%Nh_/r&s(W+nz' );
define( 'SECURE_AUTH_KEY',  'I+i$mu.`R)`xO_BgjfOrv5!~n}~(Ik)9MP/5%7<CK=skr^.i~DgA.Da]juE{WIgQ' );
define( 'LOGGED_IN_KEY',    '>z8}0]8}XUPT<aZ_6Aa?Ma1vafiv.Ejc5Lv2 jBpO)i<Dy~ygPTRyGTr##WpyquZ' );
define( 'NONCE_KEY',        '%U.<lC>?2mpD,5?FMh|_wEoNxn>K2g_lq<G@[z4,;=S4$Cu|B^|ZCQ87M~y`(^wP' );
define( 'AUTH_SALT',        '1Nniu_aZ}aB(m)=~XFuM:I*u%?>}h1mqslwlFr+z aq51^n`Zk2rTnX}r}{{NK!1' );
define( 'SECURE_AUTH_SALT', ' ov)Vk|[/X>yc%UQ=k~,MYLRAUJ;91BRYK1rr,f)qKLQ`w,fXg4Lx+%}^-c1~|,6' );
define( 'LOGGED_IN_SALT',   'E,?>Xpe6qF|t!Hs?D$iOk,@%dL|7yUJ-%*_!4|bh8wf5(!=4KhmuiQ!2Y}n#3`,8' );
define( 'NONCE_SALT',       '`7q129M*W/I9PVj:twbbMAYxe<@IA7?mARr}Fs1-Tk=F0~5MTkB7OCNTmh8?DjSB' );

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
