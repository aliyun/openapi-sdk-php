<?php

namespace AlibabaCloud\ARMS4FINANCE;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the ARMS4FINANCE based on the method name as the Api name.
 *
 * @package   AlibabaCloud\ARMS4FINANCE
 *
 * @method V20171130\ARMSQueryDataSet aRMSQueryDataSet(array $options = [])
 * @method V20171130\WhereInDimQuery whereInDimQuery(array $options = [])
 */
class ARMS4FINANCEV20171130ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\ARMS4FINANCE\\V20171130';
}
