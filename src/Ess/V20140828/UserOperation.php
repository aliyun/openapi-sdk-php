<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getUserAction()
 * @method $this withUserAction($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class UserOperation extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';
}
