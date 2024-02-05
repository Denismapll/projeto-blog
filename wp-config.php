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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'blog' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:3325' );

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
define( 'AUTH_KEY',         '}0}?&%UvQ0wGTAP_;#-J.qu?69qKC.e_Y8i;7DgdY%3xjoX9@mbw0s^/[I:=g;fw' );
define( 'SECURE_AUTH_KEY',  ')l9DI)pY/6=t?H|~.=*Fn&s7dCJ796kgKi_b[bI|{~?#b@P7 46OPL:e&>)/v&$0' );
define( 'LOGGED_IN_KEY',    '7E3uwa jV>z(hd^NdA2wV-QD#,vO{An!bU;PwF@|@9M8 XX$~= VKmUw/A4#XHy-' );
define( 'NONCE_KEY',        '/SIsi%W2}.)p!*tt!KA~bL>(Z).I7C>k>aZO( iFWx.d(B9NPRG] 9+l>B/j+?5/' );
define( 'AUTH_SALT',        '3X7g{;t9J<I.8D1ncy<]AbYHrkAHZgLVbC,l2t<aiG@L51bauf2XU!tK(xAcYXG,' );
define( 'SECURE_AUTH_SALT', 'MG=HrU%jtB!C5Q3DR;AR87sEWM|Fgq/fc/<8B4R:]:HqER57bqQ4v:9SQPsZq@^&' );
define( 'LOGGED_IN_SALT',   ':[ovjX;`)<4=jjg`zV>tD-52Esz~?TEnV@CJt50yo2AULpv0l?0Bx-Y4ihGZDyZ?' );
define( 'NONCE_SALT',       ']$DBKnNUsv=sL-(y^SvP:Bg%czxb`puq5L/]T4_=~*UX=XK0zyir;M~9F^0u665h' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
