<?php
/**
 * @author Andriy Nasinnyk <andriy.nas@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GPL
 */

namespace BootstrapTwitter\Html;
/*
 * @package BootstrapTwitter
 * @subpackage BootstrapTwitter_Html
 */
abstract class Element
{
    /** @var string */
    protected $_output = '';

    /** @var array */
    protected $_classes = array();

    /** @var array */
    protected $_data = array();

    /** @var array */
    protected $_attributes = array();

    /**
     * @var string
     */
    protected $_name = 'root';

    /**
     * @var string
     */
    protected $_innerHtml = '';

    /**
     * @abstract
     * @param $config array
     */
    abstract function __construct($config);

    /**
     * @return string
     */
    protected function _render()
    {
        $name = $this->_getName();
        $classes = trim($this->_getClassesAsString());
        $classes = empty($classes) ? '' : 'class="' . $classes . '"';
        $attributes = $this->_getAttributesAsString();
        $innerHtml = $this->_getInnerHtml();

        if (empty($innerHtml)) {
            $this->_output = "<$name $classes $attributes/>" . PHP_EOL;
        } else {
            $this->_output = "<$name $classes $attributes>$innerHtml</$name>" . PHP_EOL;
        }
        return $this->_output;
    }

    protected function _setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    public function setInnerHtml($html)
    {
        $this->_innerHtml = $html;
        return $this;
    }

    public function addInnerHtml($html)
    {
        $this->_innerHtml .= $html;
        return $this;
    }

    /**
     * @param $data array
     * @param $key string
     * @param string $default
     * @return mixed
     */
    protected function _getDataElement($data, $key, $default='')
    {
        $result = $default;
        if (!empty($data[$key])) {
            $result = $data[$key];
        }
        return $result;
    }

    protected function _getClassesAsString()
    {
        return implode(' ', $this->_classes);
    }

    protected function _getName()
    {
        return $this->_name;
    }

    protected function _getInnerHtml()
    {
        return $this->_innerHtml;
    }

    public function addClasses($classes)
    {
        if (is_array($classes)) {
            $this->_classes = array_merge($this->_classes, $classes);
        } elseif (is_scalar($classes)) {
            $this->_classes[] = $classes;
        } else {
            throw new \BootstrapTwitter\Exception\Html('Attribute must have type string or array');
        }

        return $this;
    }

    public function __toString()
    {
        return $this->_render();
    }

    public function __call($name, $arguments)
    {
        if (preg_match('/^set(.*)$/', $name, $data) && count($arguments)==1) {
            return $this->setAttribute(strtolower($data[1]), $arguments[0]);
        }
        return null;
    }

    public function setAttribute($name, $value)
    {
        $this->_attributes[$name] = $value;
        return $this;
    }

    public function addAttributes($attributes)
    {
        if (is_array($attributes)) {
            $this->_attributes = array_merge($this->_attributes, $attributes);
        } else {
            throw new \BootstrapTwitter\Exception\Html('Attribute must have type array');
        }
        return $this;
    }

    public function _getAttributesAsString()
    {
        $result = '';
        foreach($this->_attributes as $attributeName => $attributeValue) {
            $result .= $attributeName . '="' . $attributeValue . '" ';
        }
        return $result;
    }
}
