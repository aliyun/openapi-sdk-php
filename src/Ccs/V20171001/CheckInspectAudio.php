<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceValue()
 * @method $this withResourceValue($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class CheckInspectAudio extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';
}
