<?php

namespace AlibabaCloud\PTS\V20181111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method GetReport getReport(array $options = [])
 */
class PTSApiResolver
{
    use ApiResolverTrait;
}

class V20181111Rpc extends Rpc
{
    /** @var string */
    public $product = 'PTS';

    /** @var string */
    public $version = '2018-11-11';
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 */
class GetReport extends V20181111Rpc
{
}
