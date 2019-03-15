<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getProcessId()
 * @method $this withProcessId($value)
 * @method string getFreq()
 * @method $this withFreq($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RunCloudMetricProfiling extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}
