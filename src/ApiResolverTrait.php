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
            \ALI_API_NOT_FOUND
        );
    }

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
     * @param string $class
     *
     * @return mixed
     * @throws ClientException
     */
    protected function getServiceName($class)
    {
        $array = \explode('\\', $class);
        if (isset($array[3])) {
            return $array[3];
        }
        throw new ClientException(
            'Service name not found.',
            \ALI_SERVICE_NOT_FOUND
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
                \ALI_PARSE_ERROR
            );
        }

        unset($array[3]);
        return \implode('\\', $array);
    }
}
