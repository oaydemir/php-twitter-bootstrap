<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

namespace BootstrapTwitter\UI;
use BootstrapTwitter\Html\Element;
/*
 * @package BootstrapTwitter
 * @subpackage BootstrapTwitter_UI
 */
class Custom extends Element
{
    public function __construct($config=array())
    {
        if (!empty($config['name'])) {
            $this->setName($config['name']);
        }
    }

    public function setName($name)
    {
        $this->_setName($name);
        return $this;
    }
}
