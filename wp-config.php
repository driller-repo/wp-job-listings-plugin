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
define('DB_NAME', 'sandbox');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'CGf{IwI<-fTYP _)C%C8rd2Ez!%+Kqhfav?^Q?(r}d.Kqb_:0p9*$l`_7J/*bG{T');
define('SECURE_AUTH_KEY',  'oU;t8DvV[`%uHpFwqFZ</ZnpP3wh5sm 6|>71viO?;P6.G_ug^$`0W!gzH(r1olo');
define('LOGGED_IN_KEY',    '6Ioe|u7+q|D)c:%dgDPf7^$M)Z% ^WsBM|Fk:7oY,0O!{IAA;zK}ugcXIA+w9lq.');
define('NONCE_KEY',        'ANv#Sqm_gy/p3QSK:GV@TGHk(IkEW6>L9o>q![ lJPiJe}l7Q&<}vGr[[:A,d`12');
define('AUTH_SALT',        ':7xLtnL{mk(fTw?@j[L+BEK#0$v5{A1^6aY}EI:ZCC;cvWF fuW<nUU4m98TS~!y');
define('SECURE_AUTH_SALT', '%2%Bs1fi1 ZOcHZm.kW:.#, G4FZ%},%ZSElh>35$Vv;](4|M[5=oo8cIUc=7j`Z');
define('LOGGED_IN_SALT',   'GXh/>>(Wgi|,9DHwNE{:!xt?qM@pKdj@4lp~j99^ZTxPwBUYW;b8 sw-<M%MBi|X');
define('NONCE_SALT',       'u][Z6)z/xPBY<B6.(b7CYq{f&zHbT00QsT.*l?WLKZ%~hqNV{;~K~D+zLgnQ3?j#');

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
