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
define('DB_NAME', 'maissindicos_db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '8k:{4@HN:tCNel8bfWXtWrL1$jzJr90/1*C7 =V7f0CgL{yL$6}JFIo,)0|FW=d7');
define('SECURE_AUTH_KEY',  '=g:qhik&_k#B_JpL1j~pUE@V!~3kRgwRH%hL:YKD$Uj4o@Pe/`n>FR<sOP$yt%dQ');
define('LOGGED_IN_KEY',    ';&Ang!4?zn^r)1) dnv !Q+&/A$Ze,~aVCppp)&b3Ct]aOs1D:bn#MLOWg])N:l_');
define('NONCE_KEY',        '<:#+$SGUm*pn&VP)t>,KcK_~Lj;BN&!$mpf:nF zC;</Z]7^JaX&#NoEZ7W:>@+T');
define('AUTH_SALT',        'Y.wG:|?<HCcLeXyL@Z62C]#g]ueQrx7ks!sdp,h$Hcxvc3H,x8(U/$*K;[kFmc6G');
define('SECURE_AUTH_SALT', 'o(n{`ut cv-NypqEX0z{qQI[j@i47s[d)6y)gI@m_jD/o>C9C4I1H6Axw$F~LvAD');
define('LOGGED_IN_SALT',   '#%n-$E mLL)-cti ^%Iz]$v[x[U[ DJ}SqtQ1^d{w.B&:d?jia7G%-r7@yH[|C c');
define('NONCE_SALT',       '#cnVlVO])vm iSufpNp&kj%3N}U</hJ0[ELLXD8P8jI~0Y6,n7^`qWtWlK./EY_S');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
