<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\Request\Request;

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
     */
    public function __construct(array $options = [])
    {
        parent::__construct($options);
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
