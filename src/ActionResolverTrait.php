<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Request\Request;
use ReflectionClass;
use ReflectionException;

/**
 * Trait ActionResolverTrait
 *
 * @package AlibabaCloud
 * @mixin Rpc
 * @mixin Roa
 * @mixin Request
 */
trait ActionResolverTrait
{
    /**
     * ActionResolverTrait constructor.
     *
     * @param array $options
     *
     * @throws Client\Exception\ClientException
     * @throws ReflectionException
     */
    public function __construct(array $options = [])
    {
        parent::__construct($options);

        if ((new ReflectionClass(AlibabaCloud::class))->hasMethod('appendUserAgent')) {
            AlibabaCloud::appendUserAgent('SDK', Release::VERSION);
        }

        if (!$this->action) {
            $this->action = $this->getActionFromClassName();
        }
    }

    /**
     * @return mixed
     */
    private function getActionFromClassName()
    {
        $array = explode('\\', get_class($this));

        return array_pop($array);
    }
}
