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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'toys_toys' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'toy_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123456toy' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HVibjLs$PAaJD-W8gCK~<ohXQbW};DuX?Ob9q@93mRHHZ(P{dOE`@T(wD([*A_X$' );
define( 'SECURE_AUTH_KEY',  'jR8yM >~uz6zIK0A@B$$>9!qMTX*zaUB2cK4<TyKz0SLhhg kNfU=;0e`tBi5P@_' );
define( 'LOGGED_IN_KEY',    'FJXJO`FpcWHW pe$</ |&EVJr*2!H}[0ESc2MP1Fkjeh::Eg~vb2{SsdhzmL0@:q' );
define( 'NONCE_KEY',        '+%3vf5;fg]HVQV+`LC8lL^ByRo3AJ=7)17rfU~8T;x}Jll!6^wwZ[s#` ;r-~ji{' );
define( 'AUTH_SALT',        ':g>.~BWPY3|} !uYL3fdZb|% @I5, dz;4J).Sqa @<=8v;C?p3:j.Nv4gIJ%9eA' );
define( 'SECURE_AUTH_SALT', 'l677>I5yw[L~HN==e/b`<Q3SA.9h=l8xLS]zfg@KCLV]&-%]3a7Q[`mEr(zMF&zI' );
define( 'LOGGED_IN_SALT',   'L{JTwm|QQSNWHhAv&ap]Hcz>sZ|pH:|V`,CZbA[X;c~m:o#(?cfU!!Dv9}aJ5Xwp' );
define( 'NONCE_SALT',       '{)ST>#D|TQ$V@%|}dzq$ZQIm-2+tT)nCQO40Xggqrvt%?t.~}#.!+4]e8N=hqc!K' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
