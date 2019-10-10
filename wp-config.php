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
define( 'AUTH_KEY',         'vj9(bqnVMp4%/}FYK8sJ+pnkLJDf<OR+&Q4a:3`nPDB(ku?Fz|9sWyP>0wk<j]tQ' );
define( 'SECURE_AUTH_KEY',  'YQGt8i#8/h0Tz,h6IX_H#g@5<<iS*DXLnDg:%UwBpj(y+!$K%$;Oig/g(?xRmYls' );
define( 'LOGGED_IN_KEY',    '0FVcJZs|(V_Ll9LRLyB6s1JK,zYz3B!#(5)9*]s%q{EZ$=71rY<dSa*zW QJ#@OU' );
define( 'NONCE_KEY',        'n~rA@gJzo(o0BcN{_cdqx.LI/OHWtP3Pw~z_{)JE/_?aJJ#T+w^3}5v3!4?-^G?1' );
define( 'AUTH_SALT',        'a_lrt4pv1LraC74NC(qlM9&:v2hu8bCFL `)B``5dS4E9khIns?2s?m~6.P4O)g8' );
define( 'SECURE_AUTH_SALT', 'MPDt39~Q>C%/:5,dx=]mGS_jc%p^/uKo`{NVgad}{A4ImpF!9yPFqattF?9Q*}fd' );
define( 'LOGGED_IN_SALT',   'k3BD`[#FgK-AOz/&qz6eHc+0m}i+k%rENYfCr(kE[?{W#o)N4)&ZQTV-|&*Vox+)' );
define( 'NONCE_SALT',       '{Yl:rqS(*ax4HJXPaBuK>WQ,=ZvC|tvLE01}zW6xUhX}(QYjLlb=vfpudbcDUn]:' );

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
