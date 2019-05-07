<?php

namespace AlibabaCloud\PTS\V20181111;

use AlibabaCloud\ApiResolverTrait;

/**
 * @method GetReport getReport(array $options = [])
 */
class PTSApiResolver
{
    use ApiResolverTrait;
}

class Rpc extends \AlibabaCloud\Rpc
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
class GetReport extends Rpc
{
}
