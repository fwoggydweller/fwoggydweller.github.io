<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Parámetros de configuración utilizados para generar las URLs y las rutas a ficheros en la aplicación
 */
define('RAIZ_APP', __DIR__);
define('RUTA_APP', '/Curriculum/');
define('RUTA_IMG_PUB', RUTA_APP.'/img/public/');
define('RUTA_IMG_PRV', RUTA_APP.'/img/private/');
define('RUTA_CSS', RUTA_APP.'css/');
define('RUTA_JS', RUTA_APP.'js/');
define('RUTA_HELPERS', RUTA_APP.'includes/clases/');

/**
 * Configuración del soporte de UTF-8, localización (idioma y país) y zona horaria
 */
ini_set('default_charset', 'UTF-8');
setLocale(LC_ALL, 'es_ES.UTF.8');
date_default_timezone_set('Europe/Madrid');
