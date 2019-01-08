<?php

namespace AlibabaCloud\ARMS4FINANCE;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the ARMS4FINANCE based on the method name as the Api name.
 *
 * @package   AlibabaCloud\ARMS4FINANCE
 *
 * @method static V20171130\ARMSQueryDataSet aRMSQueryDataSet(array $options = [])
 * @method static V20171130\WhereInDimQuery whereInDimQuery(array $options = [])
 */
class ARMS4FINANCEV20171130
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\ARMS4FINANCE\\V20171130';
}
