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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'frontity' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'frontity' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'frontity' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '`qp*`*Cf|pIN9VAK9Q_{%~).pw!eN<XTx,,aa+ceLsk{!oZeHqL&9bp!7CX*3Y]:' );
define( 'SECURE_AUTH_KEY',  'n&(pUu0%/V,$1fwt8`%2Tf0 ?(s!0cHg6$,O]LEd(B!C%MJ>p%miEpNtd*g.}syq' );
define( 'LOGGED_IN_KEY',    '=M#n^SI1n7d93?Wx>{%9)yHBZ;Q4 smwK@<V?>nb?XaJL1m]Omy%#0|%20cJucnk' );
define( 'NONCE_KEY',        '3IaC])~)k+/-IJJ3~ LF{7$G[NzjgSD7kjg5@jYJbt:lP<R-bB|otolb^4-Zf6)<' );
define( 'AUTH_SALT',        'heSBfJo;5cn]:YLdws7qPcs;Ii/}d&XCd =,KA*}lSXxH<=X+mNhKXwQL@h$!_U,' );
define( 'SECURE_AUTH_SALT', '%?1K7Q)OKVUCfPN5JiZ^8>|guye*S@@c7dy_Szo-K!rK,oJTU[LMb5T%s9l(%FU5' );
define( 'LOGGED_IN_SALT',   '/L&w>m:d_q7B4D$xCQkfy%P/1qY2ioOYb5M$$LH{`AEr|a*#-yoNhIoGXT>qHO15' );
define( 'NONCE_SALT',       'z~!!c58$P@$&DKvw+JX(nI:33tBA/U:z:cUJsMj]^ K>WO#WLt0sBxFb+%T3A/~{' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
