<?php

namespace AlibabaCloud\TeslaStream\V20180115;

use AlibabaCloud\Rpc;

class V20180115Rpc extends Rpc
{
    /** @var string */
    public $product = 'TeslaStream';

    /** @var string */
    public $version = '2018-01-15';
}

/**
 * @method string getJobName()
 * @method $this withJobName($value)
 */
class GetJobTopology extends V20180115Rpc
{
}

/**
 * @method string getPluginInfos()
 * @method $this withPluginInfos($value)
 */
class BatchGetPluginConfigInfo extends V20180115Rpc
{
}

/**
 * @method string getJobInfos()
 * @method $this withJobInfos($value)
 */
class BatchGetJobMetricInfo extends V20180115Rpc
{
}
