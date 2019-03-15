<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Rpc;

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateDrdsAccount extends Rpc
{
    public $product = 'Drds';

    public $version = '2017-10-16';

    public $method = 'POST';
}
