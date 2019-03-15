<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDevice()
 * @method $this withDevice($value)
 * @method string getDeleteWithInstance()
 * @method $this withDeleteWithInstance($value)
 */
class AttachDisk extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
