<?php

namespace AlibabaCloud\PTS\V20181111;

use AlibabaCloud\Rpc;

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
