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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'hondix' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'viktor' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '#@Vhrd150254' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'Xj{=AWI?tk;$)S3LKEj>&%q,;)GnCfyKNv#4b?70%{U4G8Tm2+/G#=?6+2b6Fp9G' );
define( 'SECURE_AUTH_KEY',  'g<9aD`$M I}9@/rq,q3Og&67@XuSp<NV&qDKy9fE5=h1e?7RBHNZ3LIAa2xTLmcz' );
define( 'LOGGED_IN_KEY',    'ImHTzeyw6*b?V:?(W_B}nl[Ed]0*u}ASr`}<:@^cnxle+ineId3 Xt}l/%>Y!Ma<' );
define( 'NONCE_KEY',        'k^|*zCS6fT^i?$qq<T|U7hX&)cUfe];I`-3-=*FHN8_`P68~b79f3st|TQ|)2[O ' );
define( 'AUTH_SALT',        '0QV$^.47VYB>/RBA]}^D}Xk|QXKo4OId,FKnq`9FVo{<tRGH&{UvSF0~{e[CDqbz' );
define( 'SECURE_AUTH_SALT', 'Np3I.:XxnAT,KKw#is]v{r*:A@`&4IGdQ 6+a8DG:b_yRiv(c]dV{#eK$/t*WlV8' );
define( 'LOGGED_IN_SALT',   'X-%o|t(ytQgZ^R,wdWrf/vc7.L^@ILdqcR&{y5TQ?]Ta+:Ut{]xPxU3l,4h4VBY%' );
define( 'NONCE_SALT',       'fhcj$z^S@>#!r00wv;MOmTV(98l/x.>o-62[fX7Jbkf<&<f]1pBPCz.#?eU9>O,q' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'hd_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
