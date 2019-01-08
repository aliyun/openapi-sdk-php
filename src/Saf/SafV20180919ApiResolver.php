<?php

namespace AlibabaCloud\Saf;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Saf based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Saf
 *
 * @method V20180919\ExecuteRequest executeRequest(array $options = [])
 */
class SafV20180919ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Saf\\V20180919';
}
