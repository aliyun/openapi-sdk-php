<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\Exception\ClientException;

/**
 * Trait ApiResolverTrait
 *
 * @package   AlibabaCloud
 */
trait ApiResolverTrait
{

    /**
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return (new static())->__call($name, $arguments);
    }

    /**
     * @param $api
     * @param $arguments
     *
     * @return mixed
     * @throws ClientException
     */
    public function __call($api, $arguments)
    {
        $serviceName = $this->getServiceName(\get_class($this));
        $class       = $this->getNamespace(\get_class($this)) . '\\' . \ucfirst($api);

        if (\class_exists($class)) {
            if (isset($arguments[0])) {
                return new $class($arguments[0]);
            }

            return new $class();
        }

        throw new ClientException(
            "{$serviceName} contains no $api",
            'SDK.ApiNotFound'
        );
    }

    /**
     * @param string $class
     *
     * @return mixed
     * @throws ClientException
     */
    protected function getServiceName($class)
    {
        $array = \explode('\\', $class);
        if (isset($array[3])) {
            return str_replace('ApiResolver', '', $array[3]);
        }
        throw new ClientException(
            'Service name not found.',
            'SDK.ServiceNotFound'
        );
    }

    /**
     * @param string $class
     *
     * @return string
     * @throws ClientException
     */
    protected function getNamespace($class)
    {
        $array = \explode('\\', $class);

        if (!isset($array[3])) {
            throw new ClientException(
                'Get namespace error.',
                'SDK.ParseError'
            );
        }

        unset($array[3]);

        return \implode('\\', $array);
    }
}
