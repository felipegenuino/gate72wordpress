<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'gate72');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B#S}q$-WF5eawo+V7Sz);na>6=+1TAPK1|.D/|[,n|c2#5)sW-.SJr}1Ku*5dmCo');
define('SECURE_AUTH_KEY',  'A$F3cStEB31s1I%pUmH6I5~8CVlT~V}I3pU*Q*x5`XSFULTFDon|fG#p./K?V5D.');
define('LOGGED_IN_KEY',    '5m&j:++zV5Cjxwr4!-Mmro!l xf6nd.y-JU<GvZR^/WxlyzoWUw,{+@#-0 2CE!J');
define('NONCE_KEY',        '3k8g?Vl[+wM$>k)7ayg6-gu|Epwlu&b-]c(FT1R>fsEMJv|]hsprvVJg_4Ib:3>n');
define('AUTH_SALT',        '[^.eSYcEPRXlv>RVMr%v;`cXQ0hdz 7n-0<[=fSFnT#9-lw0So$t+88+1<CiSHor');
define('SECURE_AUTH_SALT', '4C?dT!/W( V(-f-7q*`-ZD$)RuXqlejZim-V8~vZH4?+8$Om/+=B[1cp[6mQiC>6');
define('LOGGED_IN_SALT',   'DY-~1lf|6+7q)#pbJnIqec*/}C|/1-&Y/Ci6gM4mI@O|X<;8X|(o2P{v{n+-W1}8');
define('NONCE_SALT',       '{vg+Ou*E88{-5s=S6387Ji@Sw+|U,+5rnJ;pP]rq+Og{!D_fT?-T>d`LQ2K!=LEc');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
