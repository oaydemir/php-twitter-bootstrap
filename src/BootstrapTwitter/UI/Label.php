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
class Label extends Element
{
    public function __construct($config=null)
    {
        $this->_setName('span')
            ->addClasses('label');
        if (!empty($config['type'])) {
            $this->setType($config['type']);
        }
        if (!empty($config['text'])) {
            $this->setText($config['text']);
        }
    }

    public function setType($type)
    {
        $this->addClasses($type);
        return $this;
    }

    public function setText($message)
    {
        $this->addInnerHtml($message);
        return $this;
    }
}
