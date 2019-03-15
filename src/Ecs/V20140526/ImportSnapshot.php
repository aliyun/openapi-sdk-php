<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ImportSnapshot extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
