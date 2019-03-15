<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Rpc;

/**
 * @method string getNewPasswd()
 * @method $this withNewPasswd($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getOriginPassword()
 * @method $this withOriginPassword($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ModifyReadOnlyAccountPassword extends Rpc
{
    public $product = 'Drds';

    public $version = '2017-10-16';

    public $method = 'POST';
}
