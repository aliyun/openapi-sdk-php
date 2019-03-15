<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * @method string getMountTargetDomain()
 * @method $this withMountTargetDomain($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyMountTarget extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';
}
