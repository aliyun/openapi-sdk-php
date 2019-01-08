<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\Exception\ClientException;
use Stringy\Stringy;

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
        $class = $this->namespace . '\\' . \ucfirst($api);

        if (\class_exists($class)) {
            if (isset($arguments[0])) {
                return new $class($arguments[0]);
            }
            return new $class();
        }

        throw new ClientException(
            $this->getServiceName() . " contains no $api",
            \ALIBABA_CLOUD_API_NOT_FOUND
        );
    }

    /**
     * @return string
     */
    private function getServiceName()
    {
        return (string)Stringy::create($this->namespace)->between('AlibabaCloud\\', '\\V');
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
}
