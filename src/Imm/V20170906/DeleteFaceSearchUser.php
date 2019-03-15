<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DeleteFaceSearchUser extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
