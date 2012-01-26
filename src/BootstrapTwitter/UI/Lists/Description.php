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
class Description extends ListAbstract
{
    public function __construct()
    {
        $this->addPrefix('<dl>');
        $this->addSuffix('</dl>');
    }

    protected function _itemDecorator($item, $head)
    {
        $element = 'dd';
        if ($head) {
            $element = 'dt';
        }
        $itemElement = new Custom(array('name'=>$element));
        return $itemElement->setInnerHtml($item);
    }
}
