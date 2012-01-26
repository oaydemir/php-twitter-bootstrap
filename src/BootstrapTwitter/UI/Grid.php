<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

namespace BootstrapTwitter\UI;
use BootstrapTwitter\Html\Element\Collection;
use BootstrapTwitter\UI\Grid\Row;
/**
 * @package BootstrapTwitter
 * @subpackage BootstrapTwitter_UI
 */
class Grid extends Collection
{
    public function addRow(Row $row)
    {
        $this->addElement($row);
        return $this;
    }
}
