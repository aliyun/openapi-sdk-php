<?php

namespace AlibabaCloud;

/**
 * Trait CallTrait
 *
 * @package AlibabaCloud
 */
trait CallTrait
{
    /**
     * Magic method for set or get request parameters.
     *
     * @param string $name
     * @param mixed  $arguments
     *
     * @return $this
     */
    public function __call($name, $arguments)
    {
        if (\strpos($name, 'get') === 0) {
            $parameterName = $this->propertyNameByMethodName($name);

            return $this->__get($parameterName);
        }

        if (\strpos($name, 'with') === 0) {
            $parameterName = $this->propertyNameByMethodName($name, 4);

            $value                                        = $arguments[0];
            $this->data[$parameterName]                   = $value;
            $this->getParameterPosition()[$parameterName] = $value;

            return $this;
        }

        if (\strpos($name, 'set') === 0) {
            $parameterName = $this->propertyNameByMethodName($name);
            $withMethod    = "with$parameterName";

            return $this->$withMethod($arguments[0]);
        }

        throw new \RuntimeException('Call to undefined method ' . __CLASS__ . '::' . $name . '()');
    }
}
