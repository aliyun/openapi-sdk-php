<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetInspectResult extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';
}
