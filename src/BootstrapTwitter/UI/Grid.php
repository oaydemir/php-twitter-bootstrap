<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

namespace BootstrapTwitter\UI;
use BootstrapTwitter\Html\Element\Collection;
/*
 * @package Grid
 * @subpackage Grid
 */
class Grid extends Collection
{
    public function addRow(\BootstrapTwitter\UI\Grid\Row $row)
    {
        $this->addElement($row);
        return $this;
    }
}
