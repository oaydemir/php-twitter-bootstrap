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
class Button extends Element
{
    public function __construct()
    {
        $this->_setName('input')
            ->setAttribute('type', 'button')
            ->setAttribute('value', 'Button');
    }

    public function getPrimary()
    {
        $this->addClasses('primary');
        return $this;
    }
}

