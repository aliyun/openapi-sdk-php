<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getCU()
 * @method $this withCU($value)
 * @method string getServiceRole()
 * @method $this withServiceRole($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getBillingType()
 * @method $this withBillingType($value)
 * @method string getType()
 * @method $this withType($value)
 */
class PutProject extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
