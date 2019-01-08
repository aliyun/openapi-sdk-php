<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\Exception\ClientException;

/**
 * Trait VersionResolverTrait
 *
 * @package   AlibabaCloud
 */
trait VersionResolverTrait
{

    /**
     * @param      $version
     * @param      $arguments
     *
     * @return mixed
     * @throws ClientException
     */
    public function __call($version, $arguments)
    {
        $serviceName = $this->getServiceName(\get_class($this));

        $version = \ucfirst($version);

        $class = "AlibabaCloud\\{$serviceName}\\{$serviceName}{$version}ApiResolver";

        if (\class_exists($class)) {
            return new $class();
        }

        throw new ClientException(
            "$serviceName Versions contains no {$version}",
            \ALIBABA_CLOUD_VERSION_NOT_FOUND
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
        if (isset($array[2])) {
            return $array[2];
        }
        throw new ClientException(
            'Service name not found.',
            \ALIBABA_CLOUD_SERVICE_NOT_FOUND
        );
    }
}
