<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 */
class CloseRobotSession extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';
}
