<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

namespace BootstrapTwitter\UI;
use BootstrapTwitter\Html\Element;
/**
 * @package BootstrapTwitter
 * @subpackage BootstrapTwitter_UI
 * @method Button setValue() setValue(\string $value)
 * @method Button setType() setType(\string $type)
 */
class Button extends Element
{
    public function __construct($config=array())
    {
        $this->_setName('input');
        $type = empty($config['type']) ? 'button' : $config['type'];
        $this->setType($type);
        $value = empty($config['type']) ? 'Button' : $config['value'];
        $this->setValue($value);
    }

    public function getPrimary()
    {
        $this->addClasses('primary');
        return $this;
    }
}

