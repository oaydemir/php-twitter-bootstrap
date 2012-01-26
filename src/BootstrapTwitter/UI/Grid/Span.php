<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

namespace BootstrapTwitter\UI\Grid;
use \BootstrapTwitter\Html\Element;
/**
 * @package BootstrapTwitter
 * @subpackage BootstrapTwitter_UI
 */
class Span extends Element
{
    public function __construct($config=array())
    {
        $this->_setName('div');

        if (isset($config['size'])) {
            $this->setSize($config['size']);
        }

        if (isset($config['offset'])) {
            $this->setOffset($config['offset']);
        }
    }

    public function setSize($span)
    {
        if ($span === '1/3') {
            $span = '-one-thirds';
        } elseif ($span === '2/3') {
            $span = '-two-thirds';
        } else {
            $span = (int)$span;
        }

        $this->addClasses('span' . $span);
        return $this;
    }

    public function setOffset($offset)
    {
        if ($offset === '1/3') {
            $offset = '-one-thirds';
        } elseif ($offset === '2/3') {
            $offset = '-two-thirds';
        } else {
            $offset = (int)$offset;
        }

        $this->addClasses('offset' . $offset);
        return $this;
    }
}
