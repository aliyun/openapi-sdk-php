<?php

namespace AlibabaCloud\PTS\V20181111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetReport getReport(array $options = [])
 */
class PTSApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
