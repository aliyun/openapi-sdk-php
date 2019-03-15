<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getNewServiceRole()
 * @method $this withNewServiceRole($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNewCU()
 * @method $this withNewCU($value)
 */
class UpdateProject extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
