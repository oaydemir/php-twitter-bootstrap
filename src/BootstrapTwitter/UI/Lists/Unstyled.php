<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

namespace BootstrapTwitter\UI\Lists;
/**
 * @package BootstrapTwitter
 * @subpackage BootstrapTwitter_UI
 */
class Unstyled extends Unordered
{
    public function __construct()
    {
        parent::__construct();
        $this->addPrefix('<ul class="unstyled">');
    }
}
