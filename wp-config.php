<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'landing_pageDB');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(13#uKdSQ/g403s6;|c?/;fA{oVgd&BK=`@Fk ,FvL;>C3`mMG%aZU++m-|B+A~/');
define('SECURE_AUTH_KEY',  '!uW-+*Anv)=G_|~xkGHXA]$L@}G4Qkh_{hQ+wY4JsPo/r*,<d#)WwTR4JA#ph[`V');
define('LOGGED_IN_KEY',    'DdNYg~8W<dpjLxo|Z 2[;nM-%B2xRah?`2xvR.I(veTS-r&*|]|8$t3;YA0|@_jZ');
define('NONCE_KEY',        'F[gyGeI=KF<S^ej^1wHjD3AVLlPt{j^`U(=@YPayT/EvM{ALUP%G1&3vVY:+8q#W');
define('AUTH_SALT',        'j1W>+^TJ`wKqFhQ-P{RkQ+rIWd63i!EmUFC+xKpIiP?<^;^iy4Pls?WdAP6R*hEX');
define('SECURE_AUTH_SALT', 'weZg$ gDH^?H+X*#oiM{mhgR}Y{{@sLuFy>}BE.rdR]Jac-S<g+sd{c/8H6&&$%Q');
define('LOGGED_IN_SALT',   '!D}y3aHI)L9w4I&UUCFlIrO^`R#%o+r $=_:$8sI>cdwb p!vCgVa=0y/ SHa=fw');
define('NONCE_SALT',       'A]C`aob#1MAbNCTq@Yw@Hy@%l80jY,orw8>%*Fg8/Yq)lx68v/DHE|/e{u66|v^1');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
