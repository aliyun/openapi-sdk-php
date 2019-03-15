<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * @method string getVisitorIp()
 * @method $this withVisitorIp($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getRobotId()
 * @method $this withRobotId($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getVisitorId()
 * @method $this withVisitorId($value)
 */
class CreateRobotSession extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';
}
