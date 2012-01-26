<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

namespace BootstrapTwitter\UI\Grid;
use BootstrapTwitter\Html\Element;
/*
 * @package BootstrapTwitter
 * @subpackage BootstrapTwitter_UI
 */
class Row extends Element
{
    public function __construct($config=array())
    {
        $this->_setName('div')->addClasses(
            array('row', 'show-grid')
        );
    }

    public function addSpan(\BootstrapTwitter\UI\Grid\Span $span)
    {
        $this->addInnerHtml($span);
        return $this;
    }
}
