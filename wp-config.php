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
define('DB_NAME', 'dogsavanna');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'r|^F6UNL/A?deMCL<s{>tLs<=?o[&^2AJnvrt~[G;Bv1ZV^IZ~[Wj[)7Y-V^z2/s');
define('SECURE_AUTH_KEY',  '|YQ{YXi8x_0T8yn<jvKeMx!/q.I`^1GrDR{dI8hC~  NjK-vl?t7Z}esF#&^x9Y>');
define('LOGGED_IN_KEY',    'izEJ`QAly]?w[GdI^oUS&|g/Y`Y4VgyA~8$bMO N?BoFgam$0PNm$fRVJ(+0qJgX');
define('NONCE_KEY',        '.^9<>?0](9<90Mu@vp~d@{7YQrlAl?:LwucUV4)oFWO83tY-U@Wwq@Gm=vbb><@6');
define('AUTH_SALT',        'bFY`bnbN86AfE5 GF@6?yx`A]{Rf3%/DZQ. U!o$v3:pabL}s;0[azVkP`MYbP[3');
define('SECURE_AUTH_SALT', 'u/N~8ZrxrN<!nlVT~9rI~9ja^~h%L1x+oW;ki+Xi&8Zy1CUGKuG_o+CEF7[yvu}C');
define('LOGGED_IN_SALT',   'w*|8$PGrnh1KUt.,@0X&D8ya=uDDN3Zx;Z5dx{l>tdjm=u$p1|g^)y+,PTQt`Oc1');
define('NONCE_SALT',       'Zi,O!/;fAl@bq*q*8,3N?c&Vl;X_%Chbs_atCO`oR*7tdn15Qw1] vMC:{:S>p)`');

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
