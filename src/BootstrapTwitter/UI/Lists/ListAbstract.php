<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

namespace BootstrapTwitter\UI\Lists;
use BootstrapTwitter\Html\Element\Collection;
use BootstrapTwitter\Html\Element;
/**
 * @package BootstrapTwitter
 * @subpackage BootstrapTwitter_UI
 */
abstract class ListAbstract extends Collection
{
    public function addItem($item, $head=false)
    {
        $this->_elements[] = Element::TAB . $this->_itemDecorator($item, $head);
        return $this;
    }

    abstract protected function _itemDecorator($item, $head);
}
