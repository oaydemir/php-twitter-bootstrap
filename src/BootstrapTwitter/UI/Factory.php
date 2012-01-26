<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

namespace BootstrapTwitter\UI;
/*
 * @package BootstrapTwitter
 * @subpackage BootstrapTwitter_UI
 */
class Factory
{
    /**
     * @static
     * @param $type string
     * @return \BootstrapTwitter\UI\Lists\ListAbstract
     */
    static public function getList($type)
    {
        $list = "\\BootstrapTwitter\\UI\\Lists\\" . ucfirst($type);
        return new $list();
    }
}
