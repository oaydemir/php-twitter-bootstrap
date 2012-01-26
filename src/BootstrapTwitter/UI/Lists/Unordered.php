<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

namespace BootstrapTwitter\UI\Lists;
use BootstrapTwitter\UI\Custom;
/**
 * @package BootstrapTwitter
 * @subpackage BootstrapTwitter_UI
 */
class Unordered extends ListAbstract
{
    public function __construct()
    {
        $this->addPrefix('<ul>');
        $this->addSuffix('</ul>');
    }

    protected function _itemDecorator($item, $head)
    {
        $itemElement = new Custom(array('li'));
        return $itemElement->setInnerHtml($item);
    }
}
