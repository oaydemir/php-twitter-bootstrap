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
 */
class Pre extends Element
{
    public function __construct($innerHtml='')
    {
        $this->_setName('pre')
            ->setInnerHtml($innerHtml);
    }

    public function getPrettyprint()
    {
        $this->addClasses('prettyprint');
        return $this;
    }
}

