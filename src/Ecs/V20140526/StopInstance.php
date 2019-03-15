<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getConfirmStop()
 * @method $this withConfirmStop($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getStoppedMode()
 * @method $this withStoppedMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHibernate()
 * @method $this withHibernate($value)
 * @method string getForceStop()
 * @method $this withForceStop($value)
 */
class StopInstance extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
