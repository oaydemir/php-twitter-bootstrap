<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

/**
 * @package BootstrapTwitter
 * @subpackage BootstrapTwitter
 */
namespace BootstrapTwitter;
class Autoloader
{
    public function __construct(){}

    public static function autoload($file)
    {
        $file = str_replace('\\', '/', $file);
        $filePath = __DIR__ . '/../' . $file . '.php';

        require_once $filePath;
    }

}
\spl_autoload_register('BootstrapTwitter\Autoloader::autoload');
