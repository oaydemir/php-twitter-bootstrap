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
class Ordered extends ListAbstract
{
    public function __construct()
    {
        $this->addPrefix('<ol>');
        $this->addSuffix('</ol>');
    }

    protected function _itemDecorator($item, $head)
    {
        $itemElement = new Custom(array('name'=>'li'));
        return $itemElement->setInnerHtml($item);
    }
}
