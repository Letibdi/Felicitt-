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
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'oq=kgT3iq3ok-6}|<JPyU.<:^S2kB,!HYZT}-p9EbN2$O4rJ|<-x=l@V7UvFm&`X' );
define( 'SECURE_AUTH_KEY',  '^w_?t<]j:jFivT,~v(>-W)4ttATWd%+Ko$FvaH Lb.quw,Wh8*J1Vt`~J%MAd>lq' );
define( 'LOGGED_IN_KEY',    '=uVvHB(<C{b)D`;Mh[PR_* {;nCk>fn6kD&J[o;^P3MuBYV gc|rfdle4txL[GUs' );
define( 'NONCE_KEY',        'gMS|$rE-,}9i_X);OpX.yo$5@q$9i}MhAQjLBz!SPeZU=/tTbDm4m:{#qUO|bf~o' );
define( 'AUTH_SALT',        ' >=wuHAzs;77=g0>c^Lr$A1)i0vs?eM6zx<%8lbIPKs*IO1LKI^Y#mNl}w/H@/h,' );
define( 'SECURE_AUTH_SALT', ';v}dIr/f=0.%!G,dJaF:4oHe):2nT=*eb/%c&(T;~AVY7kC*~8I=.nKr+bB3~F@C' );
define( 'LOGGED_IN_SALT',   '%|}f^?S;Gh@bL57%k$1m%*; =7~=YTaWr9Ps.rs%~,060gJ=mCk%b:7 s!OD6Dt>' );
define( 'NONCE_SALT',       ':$<Tm%sBwn_BEU$afO2[:`md}=pQYS=%<_DqSo@x$x4p n6^+m)Gk(i,a]8sPIL`' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
