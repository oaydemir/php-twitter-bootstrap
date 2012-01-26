<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

namespace BootstrapTwitter\UI\Lists;
use BootstrapTwitter\Html\Element\Collection;
/*
 * @package BootstrapTwitter
 * @subpackage BootstrapTwitter_UI
 */
abstract class ListAbstract extends Collection
{
    protected $_item = array();

    public function addItem($item, $head=false)
    {
        $this->_item[] = $this->_itemDecorator($item, $head);
    }

    abstract protected function _itemDecorator($item, $head);
}
