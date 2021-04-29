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
define( 'DB_NAME', 'mysite' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ';y%%~se8ipXE@@nn7y_ i[Mr&?*+>$uTGiR=@W/yEudoX2.|jpCz%Aa/g0]1TJVO' );
define( 'SECURE_AUTH_KEY',  '^rPabu.I>E$)~lnwd-T(1p@X$pHV8BPcV2KsnX7L6b)9xc>GNh~cn9bY^H4.u{I;' );
define( 'LOGGED_IN_KEY',    '*U[Tj[I]Dv}F4T@S e_zK6&9TSaWak>LN]@3etwH2n+(w6Wl;VPPk$7S`L_:*tv_' );
define( 'NONCE_KEY',        '$vHA&i j*uy#qX@#L.-KwYN@9G^9k$he*e6Ii)pE}n#9iPatx6V#W-,3zA35(yUn' );
define( 'AUTH_SALT',        '~(%*-9Ml?2N{acaa3Q}Z-IOu0km,>m|loJ(FU.Yw3GhK5@S};8A2T*o#J`MQA&[I' );
define( 'SECURE_AUTH_SALT', '$`i4-o?n*-^r0l(hZplv=>xN(=S2VQ51fZ~$Scu[p~$9+Tz?EX[)Xp .Yq<RD=Vr' );
define( 'LOGGED_IN_SALT',   'tyH<3&iSg>^yhbo.:wT)}^FkPd?j&i]C*#<uq#G70knZW[|vh$LmnWz[pu4p/dHd' );
define( 'NONCE_SALT',       '*/h^py1HN&@P)dT@{@ ;Y^z4DCvIRU{)VZ&vTg9h3!07Kln]_Ls%J*hnw6,)Zc#V' );

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
