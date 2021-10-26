<?php

namespace AlibabaCloud\QuickbiPublic\V20200730;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method QueryDataService queryDataService(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2020-07-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'quickbi';
}

/**
 * @method string getReturnFields()
 * @method $this withReturnFields($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getConditions()
 * @method $this withConditions($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class QueryDataService extends Rpc
{
}
