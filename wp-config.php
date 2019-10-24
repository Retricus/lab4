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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '8.i.upUOx^e/<hXT%k3@yB<22cG,]xF1URzhrqiL(K:,=W?D>ybgLNO>~2V)Y,s,' );
define( 'SECURE_AUTH_KEY',  'H%zC1[shAtXXX0C-0wuM{O azz/{RTmfo/gFi4AS{?X7xB lra_Ths{hoNxDeD{R' );
define( 'LOGGED_IN_KEY',    'y1NbhY@WjWYh%7b8HEOHV}+PY^0z0A.,mSrkq.N$4DILLZf?s JUo0`rx?I5}*fM' );
define( 'NONCE_KEY',        'OnQ>/T7KT?92u1ag7!Pdo<f%3:cylAp5:I~Qa7q_tl,*<%=0lH%I!KL>@29iMmaS' );
define( 'AUTH_SALT',        'r/>[i{3X{X/tO.u)c #}T,DdPApv@K-vZGwQ%xgFTglVBSeiX$1-sS(J203g<H)y' );
define( 'SECURE_AUTH_SALT', '`i zK#O&^J?c) JM&:~J:3{p@^bifW>}$Tz$VF-8a@s|)45H+]*dWId&!cDikcuj' );
define( 'LOGGED_IN_SALT',   'QmCa:t,k#lBK+P@m]qqIi~[7/YQ1Eh=$,mrYJe)Kt}v6%)o>Ndwm3l/>6ho=5rEH' );
define( 'NONCE_SALT',       'W{4U?w,+P0%#aKdWk3Y;Cck5kh,!Lwsj^9.Dw,44ODtu aI&8%U--QfL9Z=O_$M+' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
