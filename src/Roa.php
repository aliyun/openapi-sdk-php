<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Class Roa
 *
 * @package AlibabaCloud
 */
class Roa extends RoaRequest
{
    use ActionResolverTrait;
    use CallTrait;

    /**
     * @return mixed
     */
    private function &getParameterPosition()
    {
        return $this->pathParameters;
    }
}
