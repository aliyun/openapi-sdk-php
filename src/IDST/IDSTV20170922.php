<?php

namespace AlibabaCloud\IDST;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the IDST based on the method name as the Api name.
 *
 * @package   AlibabaCloud\IDST
 *
 * @method static V20170922\RoaSearch roaSearch(array $options = [])
 */
class IDSTV20170922
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\IDST\\V20170922';
}
