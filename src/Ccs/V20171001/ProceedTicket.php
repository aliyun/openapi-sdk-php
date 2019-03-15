<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * @method string getMemo()
 * @method $this withMemo($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getOperatorId()
 * @method $this withOperatorId($value)
 */
class ProceedTicket extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';
}
