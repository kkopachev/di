<?php

namespace Nekufa\Di;

/**
 * Class Configuration
 * @package Nekufa\Di
 */
class Configuration
{
    /**
     * @var array
     */
    protected $alias;

    /**
     * @var object
     */
    protected $data;

    /**
     * @param array $data
     */
    function __construct($data = array())
    {
        foreach($data as $k => $v) {
            if(is_string($v)) {
                $this->alias[$k] = $v;
            } else {
                $this->data[$k] = $v;
            }
        }
    }

    /**
     * @param string $class 
     * @param string $property
     * @param string $value
     */
    public function set($class, $property, $value)
    {
        if(!isset($this->data[$class])) {
            $this->data[$class] = array();
        }
        $this->data[$class][$property] = $value;
    }

    /**
     * @param string $class
     * @param string $property
     * @param mixed  $default
     * @return mixed
     */
    public function get($class, $property = null, $default = null) 
    {
        if(!$property) {
            return isset($this->data[$class]) ? $this->data[$class] : array();
        }
        return isset($this->data[$class][$property]) ? $this->data[$class][$property] : $default;
    }

    /**
     * @param array $data
     */
    public function merge($data)
    {
        foreach($data as $class => $config) {
            if(!isset($this->data[$class])) {
                $this->data[$class] = $config;
            } else {
                foreach($config as $k => $v) {
                    $this->data[$class][$k] = $v;
                }
            }
        }
    }

    /**
     * @param string $source
     */
    public function hasAlias($source)
    {
        return isset($this->alias[$source]);
    }

    /**
     * @param string $source
     * @param string $destination
     * @return Nekufa\Di\Configuration
     */
    public function setAlias($source, $destination)
    {
        if(isset($this->alias[$source])) {
            throw new Exception(sprintf("Alias %s is already registered", $source));
        }
        $this->alias[$source] = $destination;
        return $this;
    }

    /**
     * @param string $source
     * @return string
     */
    public function getAlias($source)
    {
        return $this->alias[$source];
    }

}