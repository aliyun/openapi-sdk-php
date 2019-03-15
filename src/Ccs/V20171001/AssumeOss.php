<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 */
class AssumeOss extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';
}
