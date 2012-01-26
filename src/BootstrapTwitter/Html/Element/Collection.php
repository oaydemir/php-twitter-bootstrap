<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

namespace BootstrapTwitter\Html\Element;
use BootstrapTwitter\Html\Element;
/**
 * @package BootstrapTwitter
 * @subpackage BootstrapTwitter_Html
 */
class Collection implements \Countable, \IteratorAggregate
{
    /** @var array */
    protected $_elements = array();

    /** @var string */
    protected $_output = '';

    /** @var string */
    protected $_prefix = '';

    /** @var string */
    protected $_suffix = '';

    /**
     * @return int
     */
    public function count()
    {
        return count($this->_elements);
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->_elements);
    }

    /**
     * @param \BootstrapTwitter\Html\Element $element
     * @return \BootstrapTwitter\Html\Element\Collection
     */
    public function addElement(Element $element)
    {
        $this->_elements[] = $element;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $this->_output = empty($this->_prefix) ? '' : $this->_prefix . PHP_EOL;
        foreach($this->_elements as $element) {
            $this->_output .= (string)$element;
        }
        $this->_output .= empty($this->_suffix) ? '' : $this->_suffix . PHP_EOL;
        return $this->_output;
    }

    /**
     * @param $prefix string
     * @return \BootstrapTwitter\Html\Element\Collection
     */
    public function addPrefix($prefix)
    {
        $this->_prefix = $prefix;
        return $this;
    }

    /**
     * @param $suffix string
     * @return \BootstrapTwitter\Html\Element\Collection
     */
    public function addSuffix($suffix)
    {
        $this->_suffix = $suffix;
        return $this;
    }
}
