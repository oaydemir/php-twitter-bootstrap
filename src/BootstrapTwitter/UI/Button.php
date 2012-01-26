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
 * @method Button setColorType() setColorType(\string $class)
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
        $class = empty($config['color_type']) ? 'Button' : $config['color_type'];
        $this->setColorType($class);
    }

    public function setColorType($class)
    {
        $this->addClasses($class);
        return $this;
    }
}

